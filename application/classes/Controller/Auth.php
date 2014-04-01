<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Auth extends Controller {

    //public $template = "elements/footer";
	public function action_index()
	{
        if (isset($_POST['btnlogin'])){
            $auth = Auth::instance();
            $login = Arr::get($_POST, 'username');
            $password = Arr::get($_POST, 'password');
            if (!$auth->login($login, $password)){
                //Если данные не правильные
                $this->response->body('error');
            }else{
                //Если произошла авторизация
                $this->response->body('ok');
            }
        }else{
            $this->redirect($_SERVER['HTTP_REFERER']);
        }
	}

    public function action_logout()
    {
        $auth = Auth::instance();
        $auth->logout();
        $this->redirect('/');
    }

} // End Auth
