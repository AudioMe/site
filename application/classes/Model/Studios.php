<?php defined('SYSPATH') or die('No direct script access.');

class Model_Studios extends ORM {
    protected $_table_name = 'studios';
    public function __construct($id = NULL) {
        $this->_sorting = array('id' => 'ASC',);
        parent::__construct($id);
    }
    static function getStudiosFromLvl($lvl = 1, $limit = 1) {
        $lvl = (int) $lvl;
        $limit = (int) $limit;
        $res = DB::query(Database::SELECT,
            'SELECT s.* FROM `studios` AS `s`'
            .' JOIN `premium` AS `p` ON (`s`.`user_id` = `p`.`user_id`)'
            .' JOIN `premium_types` AS `pt` ON (`p`.`premium_type_id` = `pt`.`premium_type_id`)'
            .' WHERE `s`.`public` = \'1\' AND `pt`.`level` >= ' . $lvl
            .' ORDER BY RAND() LIMIT ' . $limit)
             ->execute()->as_array();
        return $res;
    }
    
    static function getStudiosByLvl($lvl = 1, $limit = 1) {
        $lvl = (int) $lvl;
        $limit = (int) $limit;
        $res = DB::query(Database::SELECT,
            'SELECT s.* FROM `studios` AS `s`'
            .' JOIN `premium` AS `p` ON (`s`.`user_id` = `p`.`user_id`)'
            .' JOIN `premium_types` AS `pt` ON (`p`.`premium_type_id` = `pt`.`premium_type_id`)'
            .' WHERE `s`.`public` = \'1\' AND `pt`.`level` = ' . $lvl
            .' ORDER BY RAND() LIMIT ' . $limit)
             ->execute()->as_array();
        return $res;
    }
    
    static function getNext($user_id, $key = false, $circle = false) {
		$user_id = (int) $user_id;
        $id = self::__getPrevNext($user_id, 'next', $key);
        if (!$id && $circle) {
            $id = self::__getPrevNext(0, 'next', $key);
        }
        return $id;
	}
	
	static function getPrev($user_id, $key = false) {
		$user_id = (int) $user_id;
		return self::__getPrevNext($user_id, 'prev', $key);
	}
	// $navigate prev|next
	static protected function __getPrevNext($user_id, $navigate = 'next', $key = false) {
		$user_id = (int) $user_id;
		$cond = $navigate == 'next' ? '>' : '<';
		if ('next' == $navigate) {
			$cond = '>';
			$sort = 'ASC';
		}
		else {
			$cond = '<';
			$sort = 'DESC';
		}
		$limit = 1;		
        $res = DB::query(Database::SELECT,
            $q = 'SELECT s.* FROM `studios` AS `s`'
            .' JOIN `premium` AS `p` ON (`s`.`user_id` = `p`.`user_id`)'
            .' WHERE `s`.`public` = \'1\' AND `s`.`user_id` ' . $cond . ' ' . $user_id
            .' ORDER BY `s`.`user_id` ' . $sort . ' LIMIT ' . $limit)
             ->execute()->current();
        if ($key) {
			return (isset($res[$key])) ? $res[$key] : false;
		}
        return $res;
	}
	
}

