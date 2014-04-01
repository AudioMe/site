<?php defined('SYSPATH') or die('No direct script access.');

class Model_Discounts extends ORM {
    protected $_table_name = 'discounts';
    public function __construct($id = NULL) {
        $this->_sorting = array('date_end' => 'ASC',);
        parent::__construct($id);
    }
}

