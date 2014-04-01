<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Ajax extends Controller
{
    public function action_getCityesByRegion() {
        $region_id = Arr::get($_GET, 'region_id', false);
        $data = $res = array();
        $region = new Model_City();
        $data = $region->where('region_id', '=', $region_id)->find_all();
        if ($data) {
            foreach($data as $row) {
                $res[] = $row->as_array();
            }
        }
        print json_encode($res);
    }

    public function action_metroAutoComplete() {
        $region_id = Arr::get($_GET, 'region_id', false);
        $city_id = Arr::get($_GET, 'city_id', false);
        $name = Arr::get($_GET, 'name', false);
        $metro = new Model_Metro();
        $res = array();
        $data = $metro
            ->where('region_id', '=', $region_id)
            ->where('city_id', '=', $city_id)
            ->where('name','like',"$name%")
            ->find_all();
        foreach($data as $row) {
            $res[] = $row->name;
        }
        print json_encode($res);
    }
}
