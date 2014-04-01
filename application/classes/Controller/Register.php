<?php defined('SYSPATH') or die('No direct script access.');
require_once(Kohana::find_file('vendor', 'securimage/securimage'));

class Controller_Register extends Controller_Template {
    public $template = "basic/2columns";
	public function action_index()
	{
        $metro = new Model_Metro();
        $region = new Model_Region();
        $data['title'] = "Регистрация";
        $data['metro'] = $metro->find_all();
        $data['region'] = $region->find_all();
        

        $this->template->head = View::factory('elements/head', $data);
        $this->template->header = View::factory('elements/header');
        $this->template->left = View::factory('elements/left');
        $this->template->right = View::factory('elements/right_add');
        $this->template->content = View::factory('pages/register', $data);
        $this->template->footer = View::factory('elements/footer');
	}

    public function action_getCaptcha() {
        $session = Session::instance();
        $securimage = new Securimage();
        $securimage->case_sensitive = false;
	$securimage->code_length = 4;
        $securimage->show();
        exit;
    }


} // End Welcome
