<?php defined('SYSPATH') or die('No direct script access.');

class Model_Premium extends ORM {
    protected $_table_name = 'premium';
    static public function getUserPackage($uid, $key = false) {
        $uid = intval($uid);
        $details = false;
        $res = DB::select()->from(array('premium', 'p'))
            ->join(array('premium_types','pt'))
            ->on('p.premium_type_id', '=', 'pt.premium_type_id')
            ->where('p.user_id', '=', $uid)
            ->limit(1)->execute()->current();

        if (!$res) {
            return false;
        }
        if (!$res['premium_type_id']) {
            return false;
        }        
        $res['features'] = Model_PremiumTypes::parseFeatures($res['features']);

        if ($key) {
            $details = isset($res[$key]) ? $res[$key] : null;
        }
        else {
            $details = $res;
        }
        return $details;
    }
    static public function updatePackage($uid, $pid) {
        $uid = (int) $uid;
        $pid = (int) $pid;
        $details = Model_PremiumTypes::getDetailsById($pid);
        $db = self::factory('Premium');     
        
        if ($details) {
            if ($db->where('user_id', '=', $uid)->find()->id)
            {
                $date_cur = date_create(date("Y-m-d"));
                // какието смайлики :P
                $add_interval = 'P' . $details['days'] . 'D';
                $date_next = date_add($date_cur, new DateInterval($add_interval));
                $xx = $db->values(array(
                    'user_id' => $uid,
                    'date_end' => $date_next->format('Y-m-d'),
                    'premium_type_id' => $pid
                ))
                ->save();       
                return true;
            }
        }
        return false;
    }
}

