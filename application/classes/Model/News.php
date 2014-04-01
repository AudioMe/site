<?php defined('SYSPATH') or die('No direct script access.');

class Model_News extends ORM {
    protected $_table_name = 'news';
    public function __construct($id = NULL) {
        $this->_sorting = array('id' => 'DESC',);
        parent::__construct($id);
    }
}

