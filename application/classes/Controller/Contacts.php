<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Contacts extends Controller_Template
{
    public $template = "basic/1column";

    public function action_index()
    {
        $data['title'] = "Контакты";
        $data_content = array();

        try {
            $pages = new Model_Pages();
            $page = $pages->where('id', '=', '1')->find();
            $data_content['text'] = $page->contacts;
        } catch (Exception $e) {

        }

        $this->template->head = View::factory('elements/head', $data);
        $this->template->header = View::factory('elements/header');
        $this->template->left = View::factory('elements/left');
        //$this->template->right = View::factory('elements/right');
        $this->template->content = View::factory('pages/contacts', $data_content);
        $this->template->footer = View::factory('elements/footer');
    }

} // End Welcome
