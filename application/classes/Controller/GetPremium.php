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
                // пока в юзера запланировано обновление пакета, он не может купить\продлить
                if (Model_PremiumQueue::getUserQueue($user_id)) {
                    $this->redirect('/updateTask');
                }
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
        $data_content['packages'] = Model_PremiumTypes::getPackages();
        $this->template->head = View::factory('elements/head', $data);
        $this->template->header = View::factory('elements/header');
        $this->template->left = View::factory('elements/left');
        $this->template->right = View::factory('elements/right');
        $this->template->content = View::factory('pages/getPremium', $data_content);
        $this->template->footer = View::factory('elements/footer');
    }

    public function action_pay () {
        $auth = Auth::instance();
        $user_temp = $auth->get_user();
        if (!$auth->logged_in()) {
            $this->redirect('/register');
        }
        $uid = Auth::instance()->get_user()->id;
        $name = $this->request->param('name', FALSE);
        if (!$name) {
            $this->redirect('/register');
        }
        $package = Model_PremiumTypes::getDetailsByName($name);
        require_once Kohana::find_file('vendor', 'robokassa/robokassa');
        $config = new Model_Configuration();            
        $orders = new Model_Orders();            

        $order_data = array(
            'user_id' => $uid,
            'premium_type_id' => $package['premium_type_id'],
            'status' => 'pending',
            'date_added' => date('Y-m-d H:i:s'),
            'sum' => $package['price']
        );
        $order = $orders->values($order_data)->save();
        $kassa = new Robokassa($config->rkassa_login, $config->rkassa_pass1, $config->rkassa_pass2, $config->rkassa_test);
        $kassa->OutSum = $package['price'];
        $kassa->InvId = $order->pk();
        $redirectUrl = $kassa->getRedirectURL();
        header('Location: ' . $redirectUrl);
        //echo '<a href=' . $redirectUrl . '>go</a>';
        exit;
    }

    public function action_result () {
        try {
            require_once Kohana::find_file('vendor', 'robokassa/robokassa');
            $config = new Model_Configuration();            
            $orders = new Model_Orders();            
            $kassa = new Robokassa($config->rkassa_login, $config->rkassa_pass1, $config->rkassa_pass2, $config->rkassa_test);
            $kassa->OutSum = $_POST['OutSum'];
            $kassa->InvId = $_POST['InvId'];
            //file_put_contents('test.out', __LINE__ . "\n", FILE_APPEND);
            if(!empty($_POST['SignatureValue']) && $kassa->checkHash($_POST['SignatureValue'])) {
                //file_put_contents('test.out', __LINE__ . "\n", FILE_APPEND);
                //file_put_contents('test.out', __LINE__ . "\n", FILE_APPEND);
                $order = $orders
                    ->where('id', '=', $kassa->InvId)
                    ->where('status', '=', 'pending')
                    ->find();
                if (!$order->loaded()) {
                    $this->_fail();
                }
                $current_package = Model_Premium::getUserPackage($orders->user_id);
                ////file_put_contents('test.out', var_export($current_package, true) . "\n", FILE_APPEND);
                $package = Model_PremiumTypes::getDetailsById($order->premium_type_id);
                $cur_package_id = filter_var($current_package['premium_type_id'], FILTER_VALIDATE_INT);
                $new_package_id = filter_var($package['premium_type_id'], FILTER_VALIDATE_INT);
                //file_put_contents('test.out', __LINE__ . "\n", FILE_APPEND);
                $data = array(
                    'status' => 'paid'
                );
                $order->values($data)->save();
                //file_put_contents('test.out', __LINE__ . "\n", FILE_APPEND);

                $is_premium = false;
                //file_put_contents('test.out', __LINE__ . "\n", FILE_APPEND);
                if (!empty($order->user_id)) {
                    //file_put_contents('test.out', __LINE__ . "\n", FILE_APPEND);
                    $user_id = $order->user_id; 
                    $studios = new Model_Studios();
                    $studio_temp = $studios->where('user_id', '=', $user_id)->find();
                    if (isset($studio_temp->id)) {
                        $is_premium = $studio_temp->premium;
                        //file_put_contents('test.out', __LINE__ . "\n", FILE_APPEND);
                    }
                    //file_put_contents('test.out', __LINE__ . "\n", FILE_APPEND);
                    $studio_temp->values(array("premium" => 1))->save();
                }

                $date_end = null;
                $date_cur = date_create(date("Y-m-d"));

                $difDate = null;
                $user_premium = false;
                if (isset($is_premium) && $is_premium) {
                    //file_put_contents('test.out', __LINE__ . "\n", FILE_APPEND);
                    $premiums = new Model_Premium();

                    $prem = $premiums->where('user_id', '=', $user_id)->find();
                    //file_put_contents('test.out', __LINE__ . "\n", FILE_APPEND);
                    if (isset($prem->id)) {
                        //file_put_contents('test.out', __LINE__ . "\n", FILE_APPEND);
                        $date_end = date_create($prem->date_end);
                        $difDate = date_diff($date_cur, $date_end);

                        if ($date_cur < $date_end) {
                            $user_premium = true;
                        }
                    }
                }
                //file_put_contents('test.out', __LINE__ . "\n", FILE_APPEND);
                $interval = 'P' . $package['days'] . 'D';
                $date_next = $date_cur;
                if ($user_premium) {
                    $date_next = date_add($date_end, new DateInterval($interval));
                } else {
                    $date_next = date_add($date_cur, new DateInterval($interval));
                }
                //file_put_contents('test.out', __LINE__ . "\n", FILE_APPEND);
                //file_put_contents('test.out', var_export($user_premium, true) . "\n", FILE_APPEND);
                //file_put_contents('test.out', var_export($current_package['premium_type_id'], true) . "\n", FILE_APPEND);
                //file_put_contents('test.out', var_export($package['premium_type_id'], true) . "\n", FILE_APPEND);
                // в пользователя уже установлен пакет c другим id
                if ((true === $user_premium) && $cur_package_id
                    && $new_package_id && $cur_package_id != $new_package_id) {
                        //file_put_contents('test.out', __LINE__ . "\n", FILE_APPEND);
                        Model_PremiumQueue::addToQueue(
                            $user_id,
                            $cur_package_id,
                            $new_package_id,
                            $date_end->format("Y-m-d"),
                            $date_cur->format("Y-m-d")
                        );
                    }
                // продливаем текущий пакет, или устанавливаем новый
                else {
                    //file_put_contents('test.out', __LINE__ . "\n", FILE_APPEND);
                    $premiums = new Model_Premium();
                    $prem = $premiums->where('user_id', '=', $user_id)->find();
                    if (isset($prem->id)) {
                        $dp = array(
                            "date_end" => $date_next->format("Y-m-d H:i:s"),
                            'premium_type_id' => $new_package_id
                        );
                        $prem->values($dp)->save();
                    } else {
                        $dp = array(
                            'user_id' => $user_id,
                            'date_end' => $date_next->format("Y-m-d H:i:s"),
                            'premium_type_id' => $new_package_id
                        );
                        $premiums->values($dp)->save();
                        $studios = new Model_Studios();
                        $studio = $studios->where('user_id', '=', $user_id)->find();
                        if (isset($studio->id)) {
                            $studio->values(array("premium" => 1))->save();
                        }
                    }
                }

                echo 1;exit;
            }
            else {
                $this->_fail();
            }
        }
        catch (Exception $e) {
            $this->_fail();
        }
    }

    private function _fail ($id) {
        $this->redirect('/getPremium/error');
        exit;
    }

    public function action_error(){
        $data['title'] = "Не удалось осуществить оплату!";
        $data_content = array();
        $this->template->head = View::factory('elements/head', $data);
        $this->template->header = View::factory('elements/header');
        $this->template->left = View::factory('elements/left');
        $this->template->right = View::factory('elements/right');
        $this->template->content = View::factory('pages/premiumError', $data_content);
        $this->template->footer = View::factory('elements/footer');
    }

    public function action_ok(){
        try {
            $auth = Auth::instance();
            $is_premium = false;
            $user_id = -1;
            if ($auth->logged_in()) {
            echo 123;
                $user_temp = $auth->get_user();
                $user_id = $user_temp->id;
                // пока в юзера запланировано обновление пакета, он не может купить\продлить
                if (Model_PremiumQueue::getUserQueue($user_id)) {
                    header('Location: http://audiome.ru/updateTask');
                    exit();
                }
            }
        }
        catch (Exception $e) {
            echo $e->getMessage();
        }
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
