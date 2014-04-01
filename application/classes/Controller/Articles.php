<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Articles extends Controller_Template
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
        $data['title'] = "Статьи";
        $articles = new Model_Articles();
        $articles_temp = $articles->where('public','=',1)->find_all();
        $count_articles = count($articles_temp);

        $page = Arr::get($_GET, 'page', 1);
        $data_content['package'] = $this->package;
        try {
            $new_array = array();
            //Количество страниц на странице
            $count_page = 10;
            if ($count_page * ($page - 1) < $count_articles) {
                $i = ($page - 1) * $count_page;
                for ($j = $i; $j < $i + 10; $j++) {
                    if ($j < $count_articles) {
                        array_push($new_array, $articles_temp[$j]);
                    } else {
                        break;
                    }
                }
                $data_content['articles'] = $new_array;
                //Если не была задана страница
            } else {
                for ($j = 0; $j < 10; $j++) {
                    if ($j < $count_articles) {
                        array_push($new_array, $articles_temp[$j]);
                    } else {
                        break;
                    }
                }
                $data_content['articles'] = $new_array;
            }


            //ОБщее количество элементов в черном списке для пагинации
            $total_items = $count_articles;
            $data_content['pagination'] = Pagination::factory(array('total_items' => $total_items));
        } catch (Exception $e) {

        }
        $data_right['selectStudio'] = true;
        $data_right['latestnews'] = true;
        $this->template->head = View::factory('elements/head', $data);
        $this->template->header = View::factory('elements/header');
        $this->template->left = View::factory('elements/left');
        $this->template->right = View::factory('elements/right', $data_right);
        $this->template->content = View::factory('pages/articles', $data_content);
        $this->template->footer = View::factory('elements/footer');
    }

    public function action_view()
    {
        $data['title'] = "Статьи";
        $id = $this->request->param('id', -1);
        $articles = new Model_Articles();
        $data_content[] = array();
        if ($id != -1) {
            try {


                $articles_comp = array();

                $all_Articles = $articles->where('public','=',1)->find_all();



                array_push($articles_comp, $all_Articles[rand(0, count($all_Articles) - 1)]);
                array_push($articles_comp, $all_Articles[rand(0, count($all_Articles) - 1)]);
                $data_content['art_compare'] = $articles_comp;

            $articles_temp = $articles->where('id', '=', $id)->find();
                $data_content['news'] = $articles_temp;

                $comments = new Model_ArticlesComments();


                $comments_temp = $comments->where('articles_id', '=', $id)->find_all();
                $data['title'] = $articles_temp->title;
                $data_content['comments'] = $comments_temp;
                $data_content['articles_id'] = $id;

                $images = new Model_ArticlesPhotos();
                $img = $images->where('articles_id','=', $id)->find_all();
                $data_content['images'] = $img;

                $files = new Model_ArticlesFiles();
                $file = $files->where('articles_id','=', $id)->find_all();
                $data_content['files'] = $file;

            } catch (Exception $e) {

            }
        }
        $data_right['selectStudio'] = true;
        $data_right['latestnews'] = true;

        $this->template->head = View::factory('elements/head', $data);
        $this->template->header = View::factory('elements/header');
        $this->template->left = View::factory('elements/left');
        $this->template->right = View::factory('elements/right', $data_right);
        $this->template->content = View::factory('pages/view_articles', $data_content);
        $this->template->footer = View::factory('elements/footer');
    }


} // End Articles
