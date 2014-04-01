<?php defined('SYSPATH') or die('No direct script access.');

class Controller_GetPremium extends Controller_Template
{
    public $template = "basic/2columns";

    public function action_index()
    {
        
        $data['title'] = "Купить/продлить членство";
        $data_content = array();

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
                    $data_content['pack_details'] = Model_Premium::getUserPackage($user_id);
                }
            }else{
                $this->redirect("/premium");
            }

            $date_end = $date_cur = null;

            $difDate = null;
            $user_premium = false;
            if (isset($is_premium) && $is_premium) {
                $premiums = new Model_Premium();

                $prem = $premiums->where('user_id', '=', $user_id)->find();
                if (isset($prem->id)) {
                    $date_end = date_create($prem->date_end);
                    $date_cur = date_create(date("Y-m-d"));
                    $difDate = date_diff($date_cur, $date_end);

                    if ($date_cur < $date_end) {
                        $user_premium = true;
                    }
                }
            }

            $data_content['user_id'] = $user_id;
            if ($user_premium) {
                $data_content['premium'] = true;
                $data_content['date_end'] = $date_end;
                $data_content['date_cur'] = $date_cur;
                $data_content['date_dif'] = $difDate->days;

            } else {
                $data_content['premium'] = false;
            }

        } catch (Exception $e) {

        }
        $this->template->head = View::factory('elements/head', $data);
        $this->template->header = View::factory('elements/header');
        $this->template->left = View::factory('elements/left');
        $this->template->right = View::factory('elements/right');
        $this->template->content = View::factory('pages/getPremium', $data_content);
        $this->template->footer = View::factory('elements/footer');
    }

    public function action_pay(){
        $name = $this->request->query('package');
        $name = 'basic';
        $code = $this->request->query('code');
        echo __LINE__ . "<br/>";
        $session = Session::instance();
        // если 1 запуск
        if (!$code) {
            echo __LINE__ . "<br/>";
            if (!$name) {
                $this->redirect('/premium');
            }            
            $session->set('package_name', $name);
        }
        else {
            echo __LINE__ . "<br/>";
            $name = $session->get('package_name');
        }
        
        $is_ok = true;
        $auth = Auth::instance();
        $user_temp = $auth->get_user();
        if (!$auth->logged_in()) {
            $is_ok = false;        
            echo __LINE__ . "<br/>";
        }
        $uid = Auth::instance()->get_user()->id;
        echo __LINE__ . "<br/>";
        
        $data_content = array();
        $data['title'] = "Оплатить через Яндекс деньги";
        $data_content['error'] = "<h2 class=\"hFinde\">Произошла ошибка при оплате через Яндекс Деньги, попробуйте повторить позже.</h2>";
        $data_content['package_error'] = '<h2 class=\"hFinde\">Ошибка загрузки пакета. Пожалуйста повторите позже</h2>';
        $data_content['ok'] = "<h2 class=\"hFinde\">Оплата завершена успешно.</h2>";
   
        if ($is_ok) {
            echo __LINE__ . "<br/>";
            $config = new Model_Configuration();            
            $current_package = Model_Premium::getUserPackage($uid);
            $package = Model_PremiumTypes::getDetailsByName($name);
            $data_content['current_package'] = $current_package;
            $data_content['package'] = $package;

            try {
                echo __LINE__ . "<br/>";
                require_once Kohana::find_file('libYM', 'YandexMoney');
                if (!$code) { // If we are just begginig OAuth
                    echo __LINE__ . "<br/>";
                    $scope = "account-info " .
                            "operation-history " .
                            "operation-details " .
                            "payment.to-account(\"" . $config->ym_ACCOUNT_ID . "\",\"account\").limit(30,10) " .
                            "money-source(\"wallet\",\"card\") ";
                    $authUri = YandexMoney::authorizeUri($config->ym_CLIENT_ID, $config->ym_REDIRECT_URI, $scope);
                    header('Location: ' . $authUri);
                    die;
                } else { // when we recieved a temporary code on redirect
                    echo __LINE__ . "<br/>";
                    $ym = new YandexMoney($config->ym_CLIENT_ID, $config->ym_LOG_PATH);
                    echo __LINE__ . "<br/>";
                    
                    $receiveTokenResp = $ym->receiveOAuthToken($code, $config->ym_REDIRECT_URI, $config->ym_CLIENT_SECRET);
                    var_dump($receiveTokenResp);
                    echo __LINE__ . "<br/>";
                    
                    if ($receiveTokenResp->isSuccess()) {
                        echo __LINE__ . "<br/>";
                        $token = $receiveTokenResp->getAccessToken();
                    } else {                    
                        echo __LINE__ . "<br/>";
                        $is_ok = false;
                    }

                    if ($is_ok) {
                        echo __LINE__ . "<br/>";
                        $resp = $ym->requestPaymentP2P($token, $config->ym_ACCOUNT_ID, $package['price']);
                        if ($resp->isSuccess()) {
                            echo __LINE__ . "<br/>";
                        } else {
                            echo __LINE__ . "<br/>";
                            $is_ok = false;
                        }
                    }


                    if ($is_ok) {
                        echo __LINE__ . "<br/>";
                        $requestId = $resp->getRequestId();
                        $resp = $ym->processPaymentByWallet($token, $requestId);
                        echo __LINE__ . "<br/>";

                        if ($resp->isSuccess()) {
                            try {
                                echo __LINE__ . "<br/>";
                                $auth = Auth::instance();
                                $is_premium = false;
                                $user_id = -1;
                                echo __LINE__ . "<br/>";
                                if ($auth->logged_in()) {
                                    echo __LINE__ . "<br/>";
                                    $user_temp = $auth->get_user();
                                    $user_id = $user_temp->id;
                                    $studios = new Model_Studios();
                                    $studio_temp = $studios->where('user_id', '=', $user_id)->find();
                                    echo __LINE__ . "<br/>";
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
                                $interval = 'P' . $package['days'] . 'D';
                                $date_next = $date_cur;
                                if ($user_premium) {
                                    $date_next = date_add($date_end, new DateInterval($interval));
                                } else {
                                    $date_next = date_add($date_cur, new DateInterval($interval));
                                }
                                // в пользователя уже установлен пакет c другим id
                                if ($user_premium && isset($curent_package['premium_type_id']) && $package['premium_type_id'] != $curent_package['premium_type_id']) {
                                    Model_PremiumQueue::add($user_id, $curent_package['premium_type_id'], $package['premium_type_id'], $difDate->format("Y-m-d")
                                    );
                                    Request::initial()->redirect('test');
                                }
                                // продливаем текущий пакет, или устанавливаем новый
                                else {
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
                                }
                            } catch (Exception $e) {
                                $is_ok = false;
                            }
                        }
                    }
                }
            } catch (Exception $e) {
                var_dump($e->getMessage());
                die;
                $is_ok = false;
            }
        }











        $data_content['is_ok'] = $is_ok;
        $this->template->head = View::factory('elements/head', $data);
        $this->template->header = View::factory('elements/header');
        $this->template->left = View::factory('elements/left');
        $this->template->right = View::factory('elements/right');
        $this->template->content = View::factory('pages/premiumPay', $data_content);
        $this->template->footer = View::factory('elements/footer');
    }

    public function action_error(){
        $data['title'] = "Не удалось осуществить оплату через ЯД";
        $data_content = array();


        $this->template->head = View::factory('elements/head', $data);
        $this->template->header = View::factory('elements/header');
        $this->template->left = View::factory('elements/left');
        $this->template->right = View::factory('elements/right');
        $this->template->content = View::factory('pages/premiumError', $data_content);
        $this->template->footer = View::factory('elements/footer');
    }

    public function action_ok(){
        $data['title'] = "Оплата прошла успешно";
        $data_content = array();


        $this->template->head = View::factory('elements/head', $data);
        $this->template->header = View::factory('elements/header');
        $this->template->left = View::factory('elements/left');
        $this->template->right = View::factory('elements/right');
        $this->template->content = View::factory('pages/premiumOk', $data_content);
        $this->template->footer = View::factory('elements/footer');
    }

} // End GetPremium
