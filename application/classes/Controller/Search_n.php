<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Search extends Controller_Template
{
    public $template = "basic/2columns";

    public function action_index()
    {
        $data['title'] = "Поиск";

        $studios = new Model_Studios();
        $studios_temp = $studios->where('public', '=', '1')->find_all();
        $data_right = array();
        $data_content = array();
        $data_content['not_found'] = false;

        try {
            if (isset($_POST['hiddensearch'])) {
                //Если был передан запрос
                $region_id = (int) $_REQUEST['region_id'];
                $metro = empty($_REQUEST['metro']) ? false : (string) $_REQUEST['metro'];
                $city_id = empty($_REQUEST['city_id']) ? false : (int) $_REQUEST['city_id'];
                $works = new Model_Work();
                $w_all = $works->find_all();
                $w_count = $w_all->count();
                $temp_array = array();
                $s_works = new Model_StudioWorks();
                //Новый массив со студиями
                $new_array = array();



                //Если в поиске ТОП-студия
                if (isset($_REQUEST['studio_top'])) {
                    $class = $_REQUEST['studio_top'];
                    $temp = $studios_temp = $studios->where('class', '=', $class)->where('public', '=', 1)->find_all();
                    foreach ($temp as $t) {
                        array_push($new_array, $t);
                    }
                }
                //Если эконом студия
                if (isset($_REQUEST['studio_price'])) {
                    $class = $_REQUEST['studio_price'];
                    $temp = $studios_temp = $studios->where('class', '=', $class)->where('public', '=', 1)->find_all();
                    foreach ($temp as $t) {
                        array_push($new_array, $t);
                    }
                }
                //Если фрилансер
                if (isset($_REQUEST['studio_freel'])) {
                    $class = $_REQUEST['studio_freel'];
                    $temp = $studios_temp = $studios->where('class', '=', $class)->where('public', '=', 1)->find_all();
                    echo 2;die;
                    foreach ($temp as $t) {
                        array_push($new_array, $t);
                    }
                }
                //Если нашлись студии совпадающие с классами
                if (count($new_array) > 0) {
                    //Новый массив
                    $studios_temp = $new_array;
                }
                //Были ли найдены студии по типам работ
                $search_z = false;
                //Проход по студиям найденным на этапе отсева по классу
                $str_temp = "";
                $str = "";
                $array_search = array();
                if(isset($_REQUEST['find_check']) && is_array($_REQUEST['find_check'])) {
                    foreach($_REQUEST['find_check'] as $i) {
                        //for ($i = 1; $i <= $w_count; $i++) {
                        //Если был передан тип работ
                        //echo $w->id . '*';
                        //Были найдены студии с типами работ
                        $search_z = true;
                        //echo __LINE__;exit;
                        array_push($array_search, $i);
                    }
                }
                //Если были переданы параметры по работам
                if ($search_z) {
                    foreach ($studios_temp as $st) {
                        //Количество работ в студии
                        $in_count = 0;
                        foreach ($array_search as $ars) {
                            $count = $s_works->where('user_id', '=', $st->user_id)->where('work', '=', $ars)->find_all()->count();
                            if ($count > 0) {
                                $in_count++;
                            }
                        }
                        //Если количество работ совпадает с количеством переданных работ
                        if ($in_count == count($array_search)) {
                            array_push($temp_array, $st);
                        }
                    }
                }
                //Если количество студий в новом массиве >0 или же были переданы поисковые работы...
                if (count($temp_array) > 0 || $search_z) {
                    $studios_temp = $temp_array;
                }

                if (0 < $region_id) {
                    $newValues = array();
                    foreach ($studios_temp as $st) {
                        if ($st->region_id == $region_id) {
                            array_push($newValues, $st);
                        }
                    }
                    $studios_temp = $newValues;
                    if (0 < $city_id) {
                        $newValues = array();
                        foreach ($studios_temp as $st) {
                            if ($st->city_id == $city_id) {
                                array_push($newValues, $st);
                            }
                        }
                        if (strlen($metro)) {
                            $newValues = array();
                            foreach ($studios_temp as $st) {
                                if (false !== stripos($st->metro, $metro)) {
                                    array_push($newValues, $st);
                                }
                            }
                            $studios_temp = $newValues;
                        }
                    }
                }

                if (0 < $region_id) {
                    $newValues = array();
                    foreach ($studios_temp as $st) {
                        if ($st->region_id == $region_id) {
                            array_push($newValues, $st);
                        }
                    }
                    $studios_temp = $newValues;
                    if (0 < $city_id) {
                        $newValues = array();
                        foreach ($studios_temp as $st) {
                            if ($st->city_id == $city_id) {
                                array_push($newValues, $st);
                            }
                        }
                        $studios_temp = $newValues;
                        if (strlen($metro)) {
                            $newValues = array();
                            foreach ($studios_temp as $st) {
                                if (false !== stripos($st->metro, $metro)) {
                                    array_push($newValues, $st);
                                }
                            }
                            $studios_temp = $newValues;
                        }
                    }
                }

            }

            $studios_premium = array();
            $studios_no_premium = array();
            foreach ($studios_temp as $st) {
                if ($st->premium == 1) {
                    array_push($studios_premium, $st);
                } else {
                    array_push($studios_no_premium, $st);
                }
            }
            $data_content['studios_premium'] = $studios_premium;
            $data_content['studios_no_premium'] = $studios_no_premium;
            if(!count($studios_no_premium) && !count($studios_premium)) {
                $data_content['not_found'] = true;
            }
        } catch (Exception $e) {

        }

        $this->template->head = View::factory('elements/head', $data);
        $this->template->header = View::factory('elements/header');
        $this->template->left = View::factory('elements/left');
        $this->template->right = View::factory('elements/right', $data_right);
        $this->template->content = View::factory('pages/search', $data_content);
        $this->template->footer = View::factory('elements/footer');
    }

} // End Search
