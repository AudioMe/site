<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Conference extends Controller_Template
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
        $data['title'] = "Обсуждения";
        $conference = new Model_Conference();
        $conference_temp = $conference->find_all();
        $data_content = array();
        $data_content['package'] = $this->package;

        try {
            $count_conference = count($conference_temp);

            $page = Arr::get($_GET, 'page', 1);

            $new_array = array();
            //Количество страниц на странице
            $count_page = 10;
            if ($count_page * ($page - 1) < $count_conference) {
                $i = ($page - 1) * $count_page;
                for ($j = $i; $j < $i + 10; $j++) {
                    if ($j < $count_conference) {
                        array_push($new_array, $conference_temp[$j]);
                    } else {
                        break;
                    }
                }
                $data_content['conference'] = $new_array;
                //Если не была задана страница
            } else {
                for ($j = 0; $j < 10; $j++) {
                    if ($j < $count_conference) {
                        array_push($new_array, $conference_temp[$j]);
                    } else {
                        break;
                    }
                }
                $data_content['conference'] = $new_array;
            }


            //ОБщее количество элементов в черном списке для пагинации
            $total_items = $count_conference;
            $data_content['pagination'] = Pagination::factory(array('total_items' => $total_items));
        } catch (Exception $e) {

        }

        $data_right['selectStudio'] = true;
        $data_right['latestnews'] = true;
        $this->template->head = View::factory('elements/head', $data);
        $this->template->header = View::factory('elements/header');
        $this->template->left = View::factory('elements/left');
        $this->template->right = View::factory('elements/right', $data_right);
        $this->template->content = View::factory('pages/conference', $data_content);
        $this->template->footer = View::factory('elements/footer');
    }

    public function action_view()
    {
        $data['title'] = "Обсуждения";
        $id = $this->request->param('id', -1);
        $conference = new Model_Conference();
        $data_content[] = array();
        if ($id != -1) {
            try {
                $conference_temp = $conference->where('id', '=', $id)->find();
                $data_content['conference'] = $conference_temp;
                $data['title'] = $conference_temp->title;

                $comments = new Model_ConferenceComments();


                $comments_temp = $comments->where('conference_id', '=', $id)->find_all();
                $data_content['comments'] = $comments_temp;
                $data_content['conference_id'] = $id;

                $images = new Model_ConferencePhotos();
                $img = $images->where('conference_id','=', $id)->find_all();
                $data_content['images'] = $img;

                $articles_comp = array();

                $temp = new Model_Conference();
                $all_Articles = $temp->find_all();
                array_push($articles_comp, $all_Articles[rand(0, count($all_Articles) - 1)]);
                array_push($articles_comp, $all_Articles[rand(0, count($all_Articles) - 1)]);
                $data_content['art_compare'] = $articles_comp;

                $files = new Model_ConferenceFiles();
                $file = $files->where('conference_id','=', $id)->find_all();
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
        $this->template->content = View::factory('pages/view_conference', $data_content);
        $this->template->footer = View::factory('elements/footer');
    }

} // End Conference
