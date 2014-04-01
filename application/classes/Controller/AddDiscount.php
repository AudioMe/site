<?php defined('SYSPATH') or die('No direct script access.');

class Controller_AddDiscount extends AdminPagesPremiumAdvanced
{
    public $template = "basic/2columns";

    public function action_index()
    {
        $data['title'] = "Добавить скидки";
        $auth = Auth::instance();
        $user_temp = $auth->get_user();
        $user_id = $user_temp->id;
        $data_content = array();

        try {
            $discount = new Model_Discounts();
            $discount_temp = $discount->where('user_id', '=', $user_id)->find_all();
            $data_content['discounts'] = $discount_temp;
        } catch (Exception $e) {

        }

        $data_right['selectStudio'] = true;
        $data_right['latestnews'] = true;
        $this->template->head = View::factory('elements/head', $data);
        $this->template->header = View::factory('elements/header');
        $this->template->left = View::factory('elements/left');
        $this->template->right = View::factory('elements/right', $data_right);
        $this->template->content = View::factory('pages/addDiscount', $data_content);
        $this->template->footer = View::factory('elements/footer');
    }

} // End Welcome
