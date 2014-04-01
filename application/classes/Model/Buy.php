<?php defined('SYSPATH') or die('No direct script access.');

class Model_Buy extends ORM {
    protected $_table_name = 'buy';
    public function __construct($id = NULL) {
        $this->_sorting = array('id' => 'DESC',);
        parent::__construct($id);
    }
}

