<?php defined('SYSPATH') or die('No direct script access.');

class AdminPages extends Controller_Template {

    //Запрет входа на страницы администратора неавторизованным пользователям
    public function before(){
        $auth = Auth::instance();
        if (!$auth->logged_in() || $auth->logged_in('admin') ){
            $this->redirect("register");
        }
        return parent::before();
    }

} // End Welcome
