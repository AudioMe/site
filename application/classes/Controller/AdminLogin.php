<?php defined('SYSPATH') or die('No direct script access.');

class Controller_AdminLogin extends Controller_Template
{
    public $template = "basic/adminLogin";

    public function action_index()
    {
        $data_content = array();
        $data_head['title'] = "Администрирование";

            if (isset($_POST['adminLogin'])) {
                $auth = Auth::instance();
                $auth->logout();
                $login = Arr::get($_POST, 'username', '');
                $password = Arr::get($_POST, 'password', '');
                
                if ($auth->login($login, $password)) {
                    if ($auth->logged_in('admin')) {
                        $this->redirect('/admin');
                        $data_content['error'] = true;
                    }
                } else {
                    $data_content['error'] = true;
                }
            }


        $this->template->head = View::factory('admin/head', $data_head);
        $this->template->clear = array();
        $this->template->message = View::factory('admin/login', $data_content);
    }

    public function action_out()
    {
        $auth = Auth::instance();
        $auth->logout();
        $this->redirect('/admin');
    }

} // End Welcome
