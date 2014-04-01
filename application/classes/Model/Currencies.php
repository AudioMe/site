<?php defined('SYSPATH') or die('No direct script access.');

class Model_Currencies extends ORM {
    protected $_table_name = 'currencies';
    static public function getCurrencies() {
        $res = DB::select()->from(array('currencies', 'c'))            
            ->limit(50)->execute()->as_array();
        return $res;
    }

    static public function getCurrency($id) {
        $id = (int) $id;
        $res = DB::select()->from(array('currencies', 'c'))            
            ->where('currency_id', '=', $id)
            ->limit(1)->execute()->current();
        return $res;
    }
    static public function getFormatedPrice($currency_id, $price) {
        $currency = Model_Currencies::getCurrency($currency_id);
        return $currency['symbol_left'] . '&nbsp;' . (float)$price . '&nbsp;' . $currency['symbol_right'];
    }
        
}
