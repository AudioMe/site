<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Buy extends Controller_Template
{
    protected $user_id = false;
    protected $package = false;
            function before() {
        parent::before();
        $auth = Auth::instance();
        if ($u = $auth->get_user()) {
            $this->user_id = $u->id;
            $this->package = Model_Premium::getUserPackage($this->user_id);
        }
    }
    public $template = "basic/2columns";

    public function action_index()
    {

        $data['title'] = "Куплю/Продам";
        $buy = new Model_Buy();
        $buy_temp = $buy->find_all();
        $data_content = array();
        $count_buy = count($buy_temp);
        $page = Arr::get($_GET, 'page', 1);        
        $data_content['package'] = $this->package;

        try {
            $new_array = array();
            //Количество страниц на странице
            $count_page = 10;
            if ($count_page * ($page - 1) < $count_buy) {
                $i = ($page - 1) * $count_page;
                for ($j = $i; $j < $i + 10; $j++) {
                    if ($j < $count_buy) {
                        array_push($new_array, $buy_temp[$j]);
                    } else {
                        break;
                    }
                }
                $data_content['buy'] = $new_array;
                //Если не была задана страница
            } else {
                for ($j = 0; $j < 10; $j++) {
                    if ($j < $count_buy) {
                        array_push($new_array, $buy_temp[$j]);
                    } else {
                        break;
                    }
                }
                foreach ($new_array as &$item) {
                    $item->formated_price = '10rub';
                }
                $data_content['buy'] = $new_array;
            }


            //ОБщее количество элементов в черном списке для пагинации
            $total_items = $count_buy;
            $data_content['pagination'] = Pagination::factory(array('total_items' => $total_items));

        } catch (Exception $e) {

        }
        $data_right['selectStudio'] = true;
        $data_right['latestnews'] = true;

        $this->template->head = View::factory('elements/head', $data);
        $this->template->header = View::factory('elements/header');
        $this->template->left = View::factory('elements/left');
        $this->template->right = View::factory('elements/right', $data_right);
        $this->template->content = View::factory('pages/buy', $data_content);
        $this->template->footer = View::factory('elements/footer');
    }

    public function action_view()
    {
        $data['title'] = "Куплю/продам";
        $id = $this->request->param('id', -1);
        $buy = new Model_Buy();
        $data_content[] = array();
        if ($id != -1) {
            try {
                $buy_temp = $buy->where('id', '=', $id)->find();
                $data_content['buy'] = $buy_temp;
                if (isset($buy_temp->title)) {
                    $data['title'] = $buy_temp->title;
                }

                $comments = new Model_BuyComments();

                $images = new Model_BuyPhotos();
                $imgs = $images->where('buy_id', '=', $id)->find_all();

                $data_content['images'] = $imgs;

                $articles_comp = array();
                $temp = new Model_Buy();
                $all_Articles = $temp->find_all();
                array_push($articles_comp, $all_Articles[rand(0, count($all_Articles) - 1)]);
                array_push($articles_comp, $all_Articles[rand(0, count($all_Articles) - 1)]);
                $data_content['art_compare'] = $articles_comp;


                $comments_temp = $comments->where('buy_id', '=', $id)->find_all();
                $data_content['comments'] = $comments_temp;
                $data_content['buy_id'] = $id;
            } catch (Exception $e) {

            }
        }

        $data_right['selectStudio'] = true;
        $data_right['latestnews'] = true;
        $this->template->head = View::factory('elements/head', $data);
        $this->template->header = View::factory('elements/header');
        $this->template->left = View::factory('elements/left');
        $this->template->right = View::factory('elements/right', $data_right);
        $this->template->content = View::factory('pages/view_buy', $data_content);
        $this->template->footer = View::factory('elements/footer');
    }
} // End Buy
