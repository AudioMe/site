<?php defined('SYSPATH') or die('No direct script access.');

class Controller_About extends Controller_Template
{
    public $template = "basic/1column";

    public function action_index()
    {
        $data['title'] = "Про Audiome";


        try {
            $pages = new Model_Pages();
            $page = $pages->where('id', '=', '1')->find();
            $data_content['text'] = $page->about;
        } catch (Exception $e) {
            $data_content = array();
        }

        $this->template->head = View::factory('elements/head', $data);
        $this->template->header = View::factory('elements/header');
        $this->template->left = View::factory('elements/left');
        //$this->template->right = View::factory('elements/right');
        $this->template->content = View::factory('pages/about', $data_content);
        $this->template->footer = View::factory('elements/footer');
    }

} // End Welcome
