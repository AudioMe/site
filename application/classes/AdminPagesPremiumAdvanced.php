<?php defined('SYSPATH') or die('No direct script access.');

class AdminPagesPremiumAdvanced extends AdminPagesPremium{
    protected $user_id = false;
    public function before(){
        parent::before();
        // студия состоит в ассоциации + установлен пакет выше basic
        $this->user_id = Auth::instance()->get_user()->id;
        if (1 >= Model_Premium::getUserPackage($this->user_id, 'level'))
            $this->redirect('getPremium');
    }

} // End Welcome
