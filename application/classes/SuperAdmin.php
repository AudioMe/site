<?php defined('SYSPATH') or die('No direct script access.');

class SuperAdmin extends Controller_Template {

    //Запрет входа на страницы администратора неавторизованным пользователям
    public function before(){
        $auth = Auth::instance();
        if (!$auth->logged_in('admin') ){
            $this->redirect("/");
        }
        return parent::before();
    }

} // End Welcome
