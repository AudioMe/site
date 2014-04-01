<?php defined('SYSPATH') or die('No direct script access.');

class AdminPagesPremium extends Controller_Template {
    protected $user_id = false;
    //Запрет входа на страницы администратора неавторизованным пользователям
    public function before(){
        $auth = Auth::instance();
        if (!$auth->logged_in() || $auth->logged_in('admin') ){
            $this->redirect("register");
        }else{
            $user_temp = $auth->get_user();
            $user_id = $user_temp->id;
            $this->user_id = $user_id;
            $is_premium = false;
            $studios = new Model_Studios();
            $studio_temp = $studios->where('user_id', '=', $user_id)->find();
            if (isset($studio_temp->id)) {
                $is_premium = $studio_temp->premium;
            }
            $date_end = $date_cur = null;

            $difDate =  null;
            $user_premium = false;
            if (isset($is_premium) && $is_premium) {
                $premiums = new Model_Premium();

                $prem = $premiums->where('user_id', '=', $user_id)->find();
                if (isset($prem->id) && !empty($prem->premium_type_id)) {
                    $date_end =  date_create($prem->date_end);
                    $date_cur =  date_create(date("Y-m-d"));
                    $difDate = date_diff($date_cur, $date_end);

                    if ($date_cur < $date_end) {
                        $user_premium = true;
                    }
                }
            }
            if (!$user_premium){
                $this->redirect("getPremium");
            }
        }

        return parent::before();
    }

} // End Welcome
