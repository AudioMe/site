<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Coupon extends Controller_Template
{
    public $template = "basic/coupon";

    public function action_index()
    {
        $this->redirect('/');
    }

    public function action_get()
    {
        $id = $this->request->param('id', -1);
        $data_content = array();
        if ($id != -1) {
            try {
                $coupons = new Model_Discounts();
                $coupon_temp = $coupons->where('id', '=', $id)->find();
                if (isset($coupon_temp->id)) {
                    $studios = new Model_Studios();
                    $studio = $studios->where('user_id', '=', $coupon_temp->user_id)->find();
                }
            } catch (Exception $e) {

            }
        }
        $data_content['coupon'] = $coupon_temp;
        $data_content['studio'] = $studio;
        $this->template->content = View::factory('pages/coupon', $data_content);
    }

} // End Coupon
