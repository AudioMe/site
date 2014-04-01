<?php defined('SYSPATH') or die('No direct script access.');

class Model_Blacklist extends ORM {
    protected $_table_name = 'blacklist';
    public function __construct($id = NULL) {
        $this->_sorting = array('id' => 'DESC',);
        parent::__construct($id);
    }
}

