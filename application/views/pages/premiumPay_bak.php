<div class="big_text">
    <center> Оплата через Яндекс Деньги</center>
    <br>
</div><br>

<?php
define ('CLIENT_ID', '0CAA2E4795CDD62EDB7AAA6A0D121B6EA73C2BD251E21A5BB82150D62BF6C553');
define ('REDIRECT_URI', 'http://audiome.ax.lt/getPremium/pay');
define ('CLIENT_SECRET', 'E409DC7AFA0622CA5F9CFB43F4E59CA84C5437D6B8FC5106A462199379072D1004DA0F127BE178630A3D28BF1587AB0B99B4FCF70B0E29C0E6A353AB9DA02293');
define ('YM_ACCOUNT' ,'4100322263191');
$error = "<h2 class=\"hFinde\">Произошла ошибка при оплате через Яндекс Деньги, попробуйте повторить позже.</h2>";
$ok = "<h2 class=\"hFinde\">Оплата завершена успешно.</h2>";
$is_ok = true;

$auth = Auth::instance();
$user_temp = $auth->get_user();
if (!$auth->logged_in()) {
    echo $error;
    $is_ok = false;
}
if ($is_ok) {
    try {


        require_once Kohana::find_file('libYM', 'YandexMoney');
        $code = empty($_GET['code']) ? false : $_GET['code'];
        if (!($code)) { // If we are just begginig OAuth
            $scope = "account-info " .
                "operation-history " .
                "operation-details " .
                "payment.to-account(\"" . YM_ACCOUNT . "\",\"account\").limit(30,10) " .
                "money-source(\"wallet\",\"card\") ";
            $authUri = YandexMoney::authorizeUri(CLIENT_ID, REDIRECT_URI, $scope);
            header('Location: ' . $authUri);

        } else { // when we recieved a temporary code on redirect
            ?>

            <?php


            $ym = new YandexMoney(CLIENT_ID, './ym.log');
            $receiveTokenResp = $ym->receiveOAuthToken($code, REDIRECT_URI, CLIENT_SECRET);
            if ($receiveTokenResp->isSuccess()) {
                $token = $receiveTokenResp->getAccessToken();

            } else {
                echo $error;
                $is_ok = false;
            }

            if ($is_ok) {
                $resp = $ym->requestPaymentP2P($token, YM_ACCOUNT, "0.05");
                if ($resp->isSuccess()) {

                } else {
                    echo $error;
                    $is_ok = false;
                }
            }


            if ($is_ok) {
                $requestId = $resp->getRequestId();
                $resp = $ym->processPaymentByWallet($token, $requestId);

                if ($resp->isSuccess()) {
                    try {
                        $auth = Auth::instance();
                        $is_premium = false;
                        $user_id = -1;
                        if ($auth->logged_in()) {
                            $user_temp = $auth->get_user();
                            $user_id = $user_temp->id;
                            $studios = new Model_Studios();
                            $studio_temp = $studios->where('user_id', '=', $user_id)->find();
                            if (isset($studio_temp->id)) {
                                $is_premium = $studio_temp->premium;
                            }
                             $studio_temp->values(array("premium" => 1))->save();
                        }

                        $date_end = null;
                        $date_cur = date_create(date("Y-m-d"));

                        $difDate = null;
                        $user_premium = false;
                        if (isset($is_premium) && $is_premium) {
                            $premiums = new Model_Premium();

                            $prem = $premiums->where('user_id', '=', $user_id)->find();
                            if (isset($prem->id)) {
                                $date_end = date_create($prem->date_end);
                                $difDate = date_diff($date_cur, $date_end);

                                if ($date_cur < $date_end) {
                                    $user_premium = true;
                                }
                            }
                        }
                        $date_next = $date_cur;
                        if ($user_premium) {
                            $date_next = date_add($date_end, new DateInterval("P30D"));
                        } else {
                            $date_next = date_add($date_cur, new DateInterval("P30D"));
                        }
                        $premiums = new Model_Premium();

                        $prem = $premiums->where('user_id', '=', $user_id)->find();

                        if (isset($prem->id)) {
                            $prem->values(array("date_end" => $date_next->format("Y-m-d")))->save();
                        } else {
                            $premiums->values(array("user_id" => $user_id, "date_end" => $date_next->format("Y-m-d")))->save();
                            $studios = new Model_Studios();
                            $studio = $studios->where('user_id', '=', $user_id)->find();
                            if (isset($studio->id)) {
                                $studio->values(array("premium" => 1))->save();
                            }
                        }
                    } catch (Exception $e) {
                        echo $error;
                        $is_ok = false;
                    }
                    echo $ok;

                }
            } else {
                if ($is_ok)
                    echo $error;
                $is_ok = false;
            }


        }

    } catch (Exception $e) {
        if ($is_ok)
            echo $error;
    }
}

?>
