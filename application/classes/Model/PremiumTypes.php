<?php defined('SYSPATH') or die('No direct script access.');

class Model_PremiumTypes extends ORM {
    protected $_table_name = 'premium_types';
    static protected $default_features = array('photo_count' => 0, 'work_count' => 0);

    static public function getDetailsByName($name) {
        $name = (string) $name;
        $res = DB::select()->from(array('premium_types', 'p'))            
            ->where('p.name', '=', $name)
            ->limit(1)->execute()->current();
        return $res;
    }
    static public function getDetailsById($pid) {
        $pid = (int) $pid;
        $res = DB::select()->from(array('premium_types', 'p'))            
            ->where('p.premium_type_id', '=', $pid)
            ->limit(1)->execute()->current();
        return $res;
    }
    static public function parseFeatures($json) {
        $extended = self::$default_features;
        $features = json_decode($json, true);        
         if (is_array($features)) {            
            $extended = array_merge($extended, $features);
        }
        return $extended;
    }
    
    static public function getPackages() {        
        $res = DB::select()->from(array('premium_types', 'p'))            
            ->limit(50)->execute()->as_array();
        return $res;
    }
}

