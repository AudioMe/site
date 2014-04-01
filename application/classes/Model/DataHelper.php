<?php defined('SYSPATH') or die('No direct script access.');

class Model_DataHelper {
    static public function num2AlphaSuffix($number) {
        $titles = array('день', 'дня', 'дней');
        $cases = array (2, 0, 1, 1, 1, 2);
        return $titles[ ($number%100>4 && $number%100<20)? 2 : $cases[min($number%10, 5)] ];
    }
}

