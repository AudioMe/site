<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Premium extends AdminPages
{
    public $template = "basic/1column";

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
                }
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
                        $data_content['pack_details'] = Model_Premium::getUserPackage($user_id);

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

} // End GetPremium
