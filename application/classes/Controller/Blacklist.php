<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Blacklist extends AdminPages 
{
    public $template = "basic/2columns";

    public function action_index()
    {
        $data['title'] = "Чёрный список";
        $blacklists = new Model_Blacklist();
        $all_blacklists = array();
        $data_content['temp'] = "";
        try{
        if (isset($_POST['blsearch']) && strlen($_POST['blsearch']) >= 3) {
            $strsearch = $_POST['blsearch'];
            //$all_blacklists = $blacklists->where('public', '=', '1')->and_where('name', 'LIKE', "%" . $strsearch . "%")->or_where('contacts', 'LIKE', "%" . $strsearch . "%")->or_where('text', 'LIKE', "%" . $strsearch . "%")->find_all();
            $all_blacklists = $blacklists->and_where('name', 'LIKE', "%" . $strsearch . "%")->or_where('contacts', 'LIKE', "%" . $strsearch . "%")->or_where('text', 'LIKE', "%" . $strsearch . "%")->find_all();
            $data_content['search'] = $strsearch;
        } else {
            //$all_blacklists = $blacklists->where('public', '=', '1')->find_all();
            $all_blacklists = $blacklists->find_all();
        }

        $count_blacklist = count($all_blacklists);

        $page = Arr::get($_GET, 'page', 1);

        $new_array = array();
        //Количество страниц на странице
        $count_page = 10;
        if ($count_page * ($page - 1) < $count_blacklist) {
            $i = ($page - 1) * $count_page;
            for ($j = $i; $j < $i + 10; $j++) {
                if ($j < $count_blacklist) {
                    array_push($new_array, $all_blacklists[$j]);
                } else {
                    break;
                }
            }
            $data_content['blacklists'] = $new_array;
            //Если не была задана страница
        } else {
            for ($j = 0; $j < 10; $j++) {
                if ($j < $count_blacklist) {
                    array_push($new_array, $all_blacklists[$j]);
                } else {
                    break;
                }
            }
            $data_content['blacklists'] = $new_array;
        }


        //ОБщее количество элементов в черном списке для пагинации
        $total_items = $count_blacklist;
        $data_content['pagination'] = Pagination::factory(array('total_items' => $total_items));
        }catch (Exception $e){

        }

        $data_right['selectStudio'] = true;
        $data_right['latestnews'] = true;
        $this->template->head = View::factory('elements/head', $data);
        $this->template->header = View::factory('elements/header');
        $this->template->left = View::factory('elements/left');
        $this->template->right = View::factory('elements/right', $data_right);
        $this->template->content = View::factory('pages/blacklist', $data_content);
        $this->template->footer = View::factory('elements/footer');
    }

    public function action_add()
    {
        $data['title'] = "Добавить в черный список";

        $data_right['selectStudio'] = true;
        $data_right['latestnews'] = true;

        $this->template->head = View::factory('elements/head', $data);
        $this->template->header = View::factory('elements/header');
        $this->template->left = View::factory('elements/left');
        $this->template->right = View::factory('elements/right', $data_right);
        $this->template->content = View::factory('pages/addBlacklist');
        $this->template->footer = View::factory('elements/footer');
    }

} // End Blacklist
