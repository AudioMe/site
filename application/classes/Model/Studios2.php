<?php defined('SYSPATH') or die('No direct script access.');

class Model_Studios2 extends ORM {
    protected $_table_name = 'studios';
    public function __construct($id = NULL) {
        $this->_sorting = array('id' => 'ASC',);
        $this->_sorting = array('premium' => 'DESC',);
        parent::__construct($id);
    }
}

