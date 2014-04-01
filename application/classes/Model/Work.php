<?php defined('SYSPATH') or die('No direct script access.');

class Model_Work extends ORM {
    protected $_table_name = 'work';
    public function __construct($id = NULL) {
        $this->_sorting = array('sort' => 'ASC',);
        parent::__construct($id);
    }
}

