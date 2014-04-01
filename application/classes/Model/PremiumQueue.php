<?php defined('SYSPATH') or die('No direct script access.');

class Model_PremiumQueue extends ORM {
    protected $_table_name = 'premium_queue';
    static public function getUserQueue($uid, $status = 'pending') {
        
        if (is_string($status)) {
            $statuses = array($status);
        }
        else {
            $statuses = $status;
        }        
        if(!is_array($statuses)) {
            return false;
        }

        $sub_inquery = sprintf(' AND `status` IN (%s)', implode(',', array_map(array(Database::instance(), 'quote'), $statuses)));

        $uid = intval($uid);
        $res = DB::query(Database::SELECT,
                $qq = 'SELECT pq.id, pq.user_id, pq.status,'
                .' pt1.description AS `desc_from`,'
                .' pt1.name AS `name_from`, pt1.premium_type_id AS `id_from`,'
                .' pt2.description AS `desc_to`,'
                .' pt2.name AS `name_to`, pt2.premium_type_id AS `id_to`'
                .' FROM premium_queue pq'
                .' JOIN premium_types pt1 on pq.from_premium_type_id = pt1.premium_type_id'
                .' JOIN premium_types pt2 on pq.to_premium_type_id = pt2.premium_type_id'
                . ' WHERE user_id = ' . $uid . $sub_inquery .' ORDER BY pq.id DESC LIMIT 1')
                ->execute()->current();
        return $res;
    }
    static function setStatus($id, $status) {
        $values = array('status' => $status);
        $model = self::factory('PremiumQueue');
        $res = $model->where('id', '=', $id)->find()->values($values)->save();
        return $res;
    }
    static function addToQueue($uid, $from_id, $to_id, $date_started, $date_added) {
         $model = self::factory('PremiumQueue');
         $values = array('user_id' => $uid,
             'from_premium_type_id' => $from_id,
             'to_premium_type_id' => $to_id,
             'date_added' => $date_added,
             'date_started' => $date_started
          );         
         return $model->values($values)->save();
    }
}
