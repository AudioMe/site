<?php defined('SYSPATH') or die('No direct script access.');

class Controller_News extends Controller_Template
{
    public $template = "basic/2columns";

    public function action_index()
    {
        $data['title'] = "Новости";
        $data_content = array();


        try {
            $news = new Model_News();
            $news_temp = $news->find_all();


            $count_news = count($news_temp);

            $page = Arr::get($_GET, 'page', 1);


            $new_array = array();
            //Количество страниц на странице
            $count_page = 10;
            if ($count_page * ($page - 1) < $count_news) {
                $i = ($page - 1) * $count_page;
                for ($j = $i; $j < $i + 10; $j++) {
                    if ($j < $count_news) {
                        array_push($new_array, $news_temp[$j]);
                    } else {
                        break;
                    }
                }
                $data_content['news'] = $new_array;
                //Если не была задана страница
            } else {
                for ($j = 0; $j < 10; $j++) {
                    if ($j < $count_news) {
                        array_push($new_array, $news_temp[$j]);
                    } else {
                        break;
                    }
                }
                $data_content['news'] = $new_array;
            }

            //ОБщее количество элементов в черном списке для пагинации
            $total_items = $count_news;
            $data_content['pagination'] = Pagination::factory(array('total_items' => $total_items));


        } catch (Exception $e) {

        }
        $data_right['selectStudio'] = true;
        $data_right['latestarticles'] = true;

        $this->template->head = View::factory('elements/head', $data);
        $this->template->header = View::factory('elements/header');
        $this->template->left = View::factory('elements/left');
        $this->template->right = View::factory('elements/right', $data_right);
        $this->template->content = View::factory('pages/news', $data_content);
        $this->template->footer = View::factory('elements/footer');
    }

    public function action_view()
    {
        $data['title'] = "Новости";
        $id = $this->request->param('id', -1);
        $news = new Model_News();
        $data_content[] = array();
        if ($id != -1) {
            //  try {
            $news_temp = $news->where('id', '=', $id)->find();
            $data_content['news'] = $news_temp;
            $data['title'] = $news_temp->title;

            $comments = new Model_NewsComments();


            $newsImages = new Model_NewsPhotos();
            $images = $newsImages->where('news_id', '=', $id)->find_all();

            $data_content['images'] = $images;

            $comments_temp = $comments->where('news_id', '=', $id)->find_all();
            $data_content['comments'] = $comments_temp;
            $data_content['news_id'] = $id;

            $articles_comp = array();

            $temp = new Model_News();
            $all_Articles = $temp->find_all();
            array_push($articles_comp, $all_Articles[rand(0, count($all_Articles) - 1)]);
            array_push($articles_comp, $all_Articles[rand(0, count($all_Articles) - 1)]);

            $data_content['art_compare'] = $articles_comp;
//            } catch (Exception $e) {
//
//            }
        }
        $data_right['selectStudio'] = true;
        $data_right['latestarticles'] = true;

        $this->template->head = View::factory('elements/head', $data);
        $this->template->header = View::factory('elements/header');
        $this->template->left = View::factory('elements/left');
        $this->template->right = View::factory('elements/right', $data_right);
        $this->template->content = View::factory('pages/view_news', $data_content);
        $this->template->footer = View::factory('elements/footer');
    }


} // End News
