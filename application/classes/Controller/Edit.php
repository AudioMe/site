<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Edit extends AdminPages
{
    public $template = "basic/2columns";

    public function action_index()
    {        
        $data['title'] = "Редактировать";
        $data = array();
        $data_content = array();
        $data_left = array();
        $data_right = array();
        try {

            $auth = Auth::instance();
            if ($auth->logged_in() && !$auth->logged_in("admin")) {
                $user_temp = $auth->get_user();
                $user_id = $user_temp->id;
                $package = Model_Premium::getUserPackage($user_id);
                $data_content['package'] = $package;
                                
                $photo = new Model_StudioPhotos();
                $music = new Model_StudioMusics();

                $studios = new Model_Studios();
                $region = new Model_Region();
                $studio = $studios->where('user_id', '=', $user_id)->find();
                $data_right['s_class'] = $studio->class;

                $data_content['photos'] = $photo->where('user_id', '=', $user_id)->find_all();
                $data_content['musics'] = $music->where('user_id', '=', $user_id)->find_all();                              

                $data_content['region'] = $region->find_all();
                
                $data_content['studio'] = $studio;
                $data_content['email'] = $user_temp->email;
                $data_left['other_menu'] = "";

                $works = new Model_StudioWorks();
                $studio_works = $works->where('user_id', '=', $user_id)->find_all();
                $new_array = array();
                foreach ($studio_works as $sw) {
                    array_push($new_array, $sw->work);
                }

                $data_right['sworks'] = $new_array;
            }

        } catch (Exception $e) {

        }

        $this->template->head = View::factory('elements/head', $data);
        $this->template->header = View::factory('elements/header');
        $this->template->left = View::factory('elements/left', $data_left);
        $this->template->right = View::factory('elements/right_add', $data_right);
        $this->template->content = View::factory('pages/edit', $data_content);
        $this->template->footer = View::factory('elements/footer');
    }

    public function action_news()
    {
        $data['title'] = "Новости";
        $id = $this->request->param('id', -1);
        $news = new Model_News();
        $data_content[] = array();
        if ($id != -1) {
            try {
                $news_temp = $news->where('id', '=', $id)->find();
                $data_content['news'] = $news_temp;
                $data['title'] = $news_temp->title;

                $comments = new Model_NewsComments();

                $newsImages = new Model_NewsPhotos();
                $images = $newsImages->where('news_id','=', $id)->find_all();

                $data_content['images'] = $images;

                $comments_temp = $comments->where('news_id', '=', $id)->find_all();
                $data_content['comments'] = $comments_temp;
                $data_content['news_id'] = $id;
            } catch (Exception $e) {

            }
        }

        $this->template->head = View::factory('elements/head', $data);
        $this->template->header = View::factory('elements/header');
        $this->template->left = View::factory('elements/left');
        $this->template->right = View::factory('elements/right');
        $this->template->content = View::factory('pages/edit_news', $data_content);
        $this->template->footer = View::factory('elements/footer');
    }


    public function action_articles()
    {
        $data['title'] = "Статьи";
        $id = $this->request->param('id', -1);
        $articles = new Model_Articles();
        $data_content[] = array();
        if ($id != -1) {
            try {
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

        $this->template->head = View::factory('elements/head', $data);
        $this->template->header = View::factory('elements/header');
        $this->template->left = View::factory('elements/left');
        $this->template->right = View::factory('elements/right');
        $this->template->content = View::factory('pages/edit_articles', $data_content);
        $this->template->footer = View::factory('elements/footer');
    }

    public function action_conference()
    {
        $data['title'] = "Конференция";
        $id = $this->request->param('id', -1);
        $conference = new Model_Conference();
        $data_content[] = array();
        if ($id != -1) {
            try {
                $conference_temp = $conference->where('id', '=', $id)->find();
                $data_content['news'] = $conference_temp;
                $data['title'] = $conference_temp->title;

                $comments = new Model_ConferenceComments();


                $comments_temp = $comments->where('conference_id', '=', $id)->find_all();
                $data_content['comments'] = $comments_temp;
                $data_content['news_id'] = $id;

                $images = new Model_ConferencePhotos();
                $img = $images->where('conference_id','=', $id)->find_all();
                $data_content['images'] = $img;

                $files = new Model_ConferenceFiles();
                $file = $files->where('conference_id','=', $id)->find_all();
                $data_content['files'] = $file;

            } catch (Exception $e) {

            }
        }

        $this->template->head = View::factory('elements/head', $data);
        $this->template->header = View::factory('elements/header');
        $this->template->left = View::factory('elements/left');
        $this->template->right = View::factory('elements/right');
        $this->template->content = View::factory('pages/edit_conference', $data_content);
        $this->template->footer = View::factory('elements/footer');
    }



    public function action_buy()
    {
        $data['title'] = "Куплю/продам";
        $id = $this->request->param('id', -1);
        $buy = new Model_Buy();
        $data_content[] = array();
        if ($id != -1) {
            try{
                $buy_temp = $buy->where('id','=',$id)->find();
                $data_content['news'] = $buy_temp;

                $comments = new Model_BuyComments();

                $images = new Model_BuyPhotos();
                $imgs = $images->where('buy_id','=', $id)->find_all();

                $data_content['images'] = $imgs;
                $data_content['currencies'] = Model_Currencies::getCurrencies(); 


                $comments_temp = $comments->where('buy_id','=',$id)->find_all();
                $data_content['comments'] = $comments_temp;
                $data_content['buy_id'] = $id;
            }catch (Exception $e){

            }
        }

        $this->template->head = View::factory('elements/head', $data);
        $this->template->header = View::factory('elements/header');
        $this->template->left = View::factory('elements/left');
        $this->template->right = View::factory('elements/right');
        $this->template->content = View::factory('pages/edit_buy', $data_content);
        $this->template->footer = View::factory('elements/footer');
    }


    public function action_coupon()
    {
        $auth = Auth::instance();
        $data_content = array();
        $data_header = array();
        $data_right = array();
        $data_head['title'] = "Скидки";

        try {
            $id = $this->request->param('id', -1);
            if ($id != -1) {

                $discount = new Model_Discounts();
                $discount_temp = $discount->where('id', '=', $id)->find();
                if (isset($discount_temp->id)) {
                    $data_content['discount'] = $discount_temp;
                    $data_head['title'] = $discount_temp->stipulation;
                }

            }
        } catch (Exception $e) {

        }

        $this->template->head = View::factory('elements/head', $data_head);
        $this->template->header = View::factory('elements/header');
        $this->template->left = View::factory('elements/left');
        $this->template->right = View::factory('elements/right');
        $this->template->content = View::factory('pages/edit_discount', $data_content);
        $this->template->footer = View::factory('elements/footer');
    }

    public function action_blacklist()
    {

        $data_content = array();
        $data_head['title'] = "Черный список";

        try {
            $id = $this->request->param('id', -1);
            if ($id != -1) {
                $blacklist = new Model_Blacklist();
                $blacklist_temp = $blacklist->where('id', '=', $id)->find();
                if (isset($blacklist_temp->id)) {
                    $data_content['blacklist'] = $blacklist_temp;
                    $data_head['title'] = $blacklist_temp->name;
                }

            }
        } catch (Exception $e) {

        }

        $this->template->head = View::factory('elements/head', $data_head);
        $this->template->header = View::factory('elements/header');
        $this->template->left = View::factory('elements/left');
        $this->template->right = View::factory('elements/right');
        $this->template->content = View::factory('pages/edit_blacklist', $data_content);
        $this->template->footer = View::factory('elements/footer');
    }

} // End Edit
