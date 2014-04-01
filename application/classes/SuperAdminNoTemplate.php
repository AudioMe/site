<?php defined('SYSPATH') or die('No direct script access.');

class SuperAdminNoTemplate extends Controller {

    //Запрет входа на страницы администратора неавторизованным пользователям
    public function before(){
        $auth = Auth::instance();
        if (!$auth->logged_in('admin') ){
            $this->redirect("/adminLogin");
        }
        return parent::before();
    }

} // End Welcome
