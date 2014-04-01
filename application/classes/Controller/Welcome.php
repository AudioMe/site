<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller_Template
{
    public $template = "basic/index";

    public function action_index()
    {
        $data['title'] = "Главная страница";
        $data_content = array();
        $data_contentTop = array();
        $data_content['not_found'] = false;

        try {
            $studios = new Model_Studios();
            $studios2 = new Model_Studios2();
            $studios_temp = $studios->where('public', '=', '1')->find_all();
            $stud_highest = Model_Studios::getStudiosByLvl(3, 4);
            $stud_medium = Model_Studios::getStudiosByLvl(2, 4);            
            $random_studios = array_merge($stud_highest, $stud_medium);
            $data_content['studios'] = $random_studios;            
            $data_contentTop['studios'] = $studios_temp;
        } catch (Exception $e) {
            echo $e->getMessage();
        }


        try{
        if (isset($_POST['btnsearch'])) {

            $works = new Model_Work();
            $w_all = $works->find_all();
            $w_count = $w_all->count();
            $temp_array = array();
            $s_works = new Model_StudioWorks();
            //Новый массив со студиями
            $new_array = array();

            //Если в поиске ТОП-студия
            if (isset($_POST['studio_top'])) {
                $class = $_POST['studio_top'];
                $data_contentTop['class1'] = 1;
                $temp = $studios_temp = $studios->where('class', '=', $class)->where('public', '=', 1)->find_all();
                foreach ($temp as $t) {
                    array_push($new_array, $t);
                }
            }
            //Если эконом студия
            if (isset($_POST['studio_price'])) {
                $data_contentTop['class2'] = 1;
                $class = $_POST['studio_price'];
                $temp = $studios_temp = $studios->where('class', '=', $class)->where('public', '=', 1)->find_all();
                foreach ($temp as $t) {
                    array_push($new_array, $t);
                }
            }
            //Если фрилансер
            if (isset($_POST['studio_freel'])) {
                $data_contentTop['class3'] = 1;
                $class = $_POST['studio_freel'];
                $temp = $studios_temp = $studios->where('class', '=', $class)->where('public', '=', 1)->find_all();
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
            foreach ($w_all as $w) {
                //Если был передан тип работ
                if (isset($_POST['find_check' . $w->id])) {
                    //Были найдены студии с типами работ
                    $search_z = true;
                    array_push($array_search, $w->id);
                }
            }
            //Если были переданы параметры по работам
            if ($search_z) {
                $data_contentTop['sworks'] = $array_search;
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
        }


        $data_contentTop['studios'] = $studios_temp;
        $data_content['not_found'] = count($studios_temp) ? false : true;;
    } catch (Exception $e) {

        }


        $data_right['selectStudio'] = false;
        $data_right['indexPage'] = true;
        $data_right['reclam_class'] = 'reclam_index';
        $data_right['hide_prem_mnu'] = true;

        $this->template->head = View::factory('elements/head', $data);
        $this->template->header = View::factory('elements/header');
        $this->template->left = View::factory('elements/left');
        $this->template->right = View::factory('elements/right', $data_right);
        $this->template->topContent = View::factory('pages/indexTop',  $data_contentTop);
        $this->template->content = View::factory('pages/index',$data_content);
        $this->template->footer = View::factory('elements/footer');
    }

} // End Welcome
