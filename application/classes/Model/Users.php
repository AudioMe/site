<?php defined('SYSPATH') or die('No direct script access.');

class Model_Users extends ORM {
    protected $_table_name = 'users';
    protected $_has_many = array('ulogins' => array());
}

