<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Admin extends SuperAdmin
{
    public $template = "basic/admin";
//Главная страница администратора
    public function action_index()
    {
        $auth = Auth::instance();

        $data_content = array();
        $data_header = array();
        $data_head['title'] = "Администрирование";

        if ($auth->logged_in('admin')) {
            $u = $auth->get_user();
            $data_header['username'] = $u->username;
        }

        try {
            $studios = new Model_Studios();
            $studio_all = $studios->where('public', '=', '1')->find_all()->count();
            $studio_all_no_public = $studios->where('public', '=', '0')->find_all()->count();
            $data_content['studios_all'] = $studio_all;
            $data_content['studios_all_no_public'] = $studio_all_no_public;


            $comments = new Model_Comments();
            $comments_all = $comments->find_all()->count();
            $data_content['comments_all'] = $comments_all;

            $comments_news = new Model_NewsComments();
            $comments_news_count = $comments_news->find_all()->count();
            $data_content['comments_news'] = $comments_news_count;

            $comments_articles = new Model_ArticlesComments();
            $comments_articles_count = $comments_articles->find_all()->count();
            $data_content['comments_articles'] = $comments_articles_count;

            $comments_conference = new Model_ConferenceComments();
            $comments_conference_count = $comments_conference->find_all()->count();
            $data_content['comments_conference'] = $comments_conference_count;

            $comments_buy = new Model_BuyComments();
            $comments_buy_count = $comments_buy->find_all()->count();
            $data_content['comments_buy'] = $comments_buy_count;


            $news = new Model_News();
            $news_all = $news->find_all()->count();
            $data_content['news_all'] = $news_all;


            $discounts = new Model_Discounts();
            $discounts_all = $discounts->find_all()->count();
            $data_content['discounts_all'] = $discounts_all;

            $articles = new Model_Articles();
            $articles_all = $articles->find_all()->count();
            $data_content['articles_all'] = $articles_all;

            $articles_all_no_public = $articles->where('public','=',0)->find_all()->count();
            $data_content['articles_all_no_public'] = $articles_all_no_public;

            $conferences = new Model_Conference();
            $conferences_all = $conferences->find_all()->count();
            $data_content['conferences_all'] = $conferences_all;

            $buys = new Model_Buy();
            $buys_all = $buys->find_all()->count();
            $data_content['buys_all'] = $buys_all;

            $blacklists = new Model_Blacklist();
            $blacklists_all = $blacklists->find_all()->count();
            $data_content['blacklists_all'] = $blacklists_all;
        } catch (Exception $e) {

        }
        $this->template->head = View::factory('admin/head', $data_head);
        $this->template->left = View::factory('admin/left');
        $this->template->header = View::factory('admin/header', $data_header);
        $this->template->content = View::factory('admin/admin', $data_content);
    }

//Не опубликованные студии
    public function action_noPublicStudios()
    {
        $auth = Auth::instance();

        $data_content = array();
        $data_header = array();
        $data_head['title'] = "Неопубликованные студии";

        if ($auth->logged_in('admin')) {
            $u = $auth->get_user();
            $data_header['username'] = $u->username;
        }

        try {
            $studios = new Model_Studios();
            $studios_all_no_public = $studios->where('public', '=', '0')->find_all();
            $data_content['studios'] = $studios_all_no_public;
        } catch (Exception $e) {
            $data_content['studios'] = array();
        }

        $this->template->head = View::factory('admin/head', $data_head);
        $this->template->left = View::factory('admin/left');
        $this->template->header = View::factory('admin/header', $data_header);
        $this->template->content = View::factory('admin/noPublicStudios', $data_content);
    }


    public function action_noPublicArticles()
    {
        $auth = Auth::instance();

        $data_content = array();
        $data_header = array();
        $data_head['title'] = "Неопубликованные статьи";

        if ($auth->logged_in('admin')) {
            $u = $auth->get_user();
            $data_header['username'] = $u->username;
        }

        try {
            $studios = new Model_Articles();
            $studios_all_no_public = $studios->where('public', '=', '0')->find_all();
            $data_content['articles'] = $studios_all_no_public;
        } catch (Exception $e) {
            $data_content['articles'] = array();
        }

        $this->template->head = View::factory('admin/head', $data_head);
        $this->template->left = View::factory('admin/left');
        $this->template->header = View::factory('admin/header', $data_header);
        $this->template->content = View::factory('admin/noPublicArticles', $data_content);
    }
//Опубликованные студии
    public function action_Studios()
    {
        $auth = Auth::instance();

        $data_content = array();
        $data_header = array();
        $data_head['title'] = "Опубликованные студии";

        if ($auth->logged_in('admin')) {
            $u = $auth->get_user();
            $data_header['username'] = $u->username;
        }

        try {
            $studios = new Model_Studios();
            $studios_all_no_public = $studios->where('public', '=', '1')->find_all();
            $data_content['studios'] = $studios_all_no_public;
        } catch (Exception $e) {
            $data_content['studios'] = array();
        }

        $this->template->head = View::factory('admin/head', $data_head);
        $this->template->left = View::factory('admin/left');
        $this->template->header = View::factory('admin/header', $data_header);
        $this->template->content = View::factory('admin/studios', $data_content);
    }

//Комментарии для студий
    public function action_Comments()
    {
        $auth = Auth::instance();

        $data_content = array();
        $data_header = array();
        $data_head['title'] = "Комментарии";

        if ($auth->logged_in('admin')) {
            $u = $auth->get_user();
            $data_header['username'] = $u->username;
        }

        try {
            $comments = new Model_Comments();
            $comments_all = $comments->find_all();
            $data_content['comments'] = $comments_all;
        } catch (Exception $e) {
            $data_content['comments'] = array();
        }

        $this->template->head = View::factory('admin/head', $data_head);
        $this->template->left = View::factory('admin/left');
        $this->template->header = View::factory('admin/header', $data_header);
        $this->template->content = View::factory('admin/comments', $data_content);
    }

//Комментарии для новостей
    public function action_CommentsNews()
    {
        $auth = Auth::instance();

        $data_content = array();
        $data_header = array();
        $data_head['title'] = "Комментарии новостей";

        if ($auth->logged_in('admin')) {
            $u = $auth->get_user();
            $data_header['username'] = $u->username;
        }

        try {
            $comments = new Model_NewsComments();
            $comments_all = $comments->find_all();
            $data_content['comments'] = $comments_all;
        } catch (Exception $e) {
            $data_content['comments'] = array();
        }

        $this->template->head = View::factory('admin/head', $data_head);
        $this->template->left = View::factory('admin/left');
        $this->template->header = View::factory('admin/header', $data_header);
        $this->template->content = View::factory('admin/comments_news', $data_content);
    }

//Редактирование комментария новости
    public function action_CommentNews()
    {
        $auth = Auth::instance();

        $data_content = array();
        $data_header = array();
        $data_head['title'] = "Комментарий";

        if ($auth->logged_in('admin')) {
            $u = $auth->get_user();
            $data_header['username'] = $u->username;
        }
        try {
            $id = $this->request->param('id', -1);
            if ($id != -1) {

                $comments = new Model_NewsComments();
                $comment = $comments->where('id', '=', $id)->find();
                if (isset($comment->id)) {
                    $data_content['comment'] = $comment;
                }
            }
        } catch (Exception $e) {

        }

        $this->template->head = View::factory('admin/head', $data_head);
        $this->template->left = View::factory('admin/left');
        $this->template->header = View::factory('admin/header', $data_header);
        $this->template->content = View::factory('admin/comment_new', $data_content);
    }

//Комментарии для статей
    public function action_CommentsArticles()
    {
        $auth = Auth::instance();

        $data_content = array();
        $data_header = array();
        $data_head['title'] = "Комментарии новостей";

        if ($auth->logged_in('admin')) {
            $u = $auth->get_user();
            $data_header['username'] = $u->username;
        }

        try {
            $comments = new Model_ArticlesComments();
            $comments_all = $comments->find_all();
            $data_content['comments'] = $comments_all;
        } catch (Exception $e) {
            $data_content['comments'] = array();
        }

        $this->template->head = View::factory('admin/head', $data_head);
        $this->template->left = View::factory('admin/left');
        $this->template->header = View::factory('admin/header', $data_header);
        $this->template->content = View::factory('admin/comments_articles', $data_content);
    }

//Редактирование комментария для статей
    public function action_CommentArticles()
    {
        $auth = Auth::instance();

        $data_content = array();
        $data_header = array();
        $data_head['title'] = "Комментарий";

        if ($auth->logged_in('admin')) {
            $u = $auth->get_user();
            $data_header['username'] = $u->username;
        }

        try {
            $id = $this->request->param('id', -1);
            if ($id != -1) {

                $comments = new Model_ArticlesComments();
                $comment = $comments->where('id', '=', $id)->find();
                if (isset($comment->id)) {
                    $data_content['comment'] = $comment;
                }
            }
        } catch (Exception $e) {

        }

        $this->template->head = View::factory('admin/head', $data_head);
        $this->template->left = View::factory('admin/left');
        $this->template->header = View::factory('admin/header', $data_header);
        $this->template->content = View::factory('admin/comment_articles', $data_content);
    }

//Комментарии для статей
    public function action_CommentsConference()
    {
        $auth = Auth::instance();

        $data_content = array();
        $data_header = array();
        $data_head['title'] = "Комментарии конференции";

        if ($auth->logged_in('admin')) {
            $u = $auth->get_user();
            $data_header['username'] = $u->username;
        }

        try {
            $comments = new Model_ConferenceComments();
            $comments_all = $comments->find_all();
            $data_content['comments'] = $comments_all;

        } catch (Exception $e) {
            $data_content['comments'] = array();
        }

        $this->template->head = View::factory('admin/head', $data_head);
        $this->template->left = View::factory('admin/left');
        $this->template->header = View::factory('admin/header', $data_header);
        $this->template->content = View::factory('admin/comments_conference', $data_content);
    }

//Редактирование комментария для Купи/Продай
    public function action_CommentBuy()
    {
        $auth = Auth::instance();

        $data_content = array();
        $data_header = array();
        $data_head['title'] = "Комментарий";

        if ($auth->logged_in('admin')) {
            $u = $auth->get_user();
            $data_header['username'] = $u->username;
        }
        try {
            $id = $this->request->param('id', -1);
            if ($id != -1) {

                $comments = new Model_BuyComments();
                $comment = $comments->where('id', '=', $id)->find();
                if (isset($comment->id)) {
                    $data_content['comment'] = $comment;
                }
            }
        } catch (Exception $e) {

        }

        $this->template->head = View::factory('admin/head', $data_head);
        $this->template->left = View::factory('admin/left');
        $this->template->header = View::factory('admin/header', $data_header);
        $this->template->content = View::factory('admin/comment_buy', $data_content);
    }

//Комментарии для Купи/Продай
    public function action_CommentsBuy()
    {
        $auth = Auth::instance();

        $data_content = array();
        $data_header = array();
        $data_head['title'] = "Комментарии конференции";

        if ($auth->logged_in('admin')) {
            $u = $auth->get_user();
            $data_header['username'] = $u->username;
        }

        try {
            $comments = new Model_BuyComments();
            $comments_all = $comments->find_all();
            $data_content['comments'] = $comments_all;
        } catch (Exception $e) {
            $data_content['comments'] = array();
        }

        $this->template->head = View::factory('admin/head', $data_head);
        $this->template->left = View::factory('admin/left');
        $this->template->header = View::factory('admin/header', $data_header);
        $this->template->content = View::factory('admin/comments_buy', $data_content);
    }

//Редактирование комментария для конференции
    public function action_CommentConference()
    {
        $auth = Auth::instance();

        $data_content = array();
        $data_header = array();
        $data_head['title'] = "Комментарий конференции";


        if ($auth->logged_in('admin')) {
            $u = $auth->get_user();
            $data_header['username'] = $u->username;
        }
        try {
            $id = $this->request->param('id', -1);
            if ($id != -1) {
                $comments = new Model_ConferenceComments();
                $comment = $comments->where('id', '=', $id)->find();
                if (isset($comment->id)) {
                    $data_content['comment'] = $comment;
                    $studios = new Model_Studios();
                    $studio_temp = $studios->where('user_id', '=', $comment->user_id)->find();
                    if (isset($studio_temp->id)) {
                        $data_content['name'] = $studio_temp->phone;
                    }
                }
            }
        } catch (Exception $e) {

        }

        $this->template->head = View::factory('admin/head', $data_head);
        $this->template->left = View::factory('admin/left');
        $this->template->header = View::factory('admin/header', $data_header);
        $this->template->content = View::factory('admin/comment_conference', $data_content);
    }

//Редактирование комментария для студии
    public function action_Comment()
    {
        $auth = Auth::instance();
        $data_content = array();
        $data_header = array();
        $data_head['title'] = "Комментарий";

        if ($auth->logged_in('admin')) {
            $u = $auth->get_user();
            $data_header['username'] = $u->username;
        }
        try {
            $id = $this->request->param('id', -1);
            if ($id != -1) {

                $comments = new Model_Comments();
                $comment = $comments->where('id', '=', $id)->find();
                if (isset($comment->id)) {
                    $data_content['comment'] = $comment;
                }
            }
        } catch (Exception $e) {

        }

        $this->template->head = View::factory('admin/head', $data_head);
        $this->template->left = View::factory('admin/left');
        $this->template->header = View::factory('admin/header', $data_header);
        $this->template->content = View::factory('admin/comment', $data_content);
    }

//Редактирование студии
    public function action_studio()
    {
        $auth = Auth::instance();
        $data_content = array();
        $data_header = array();
        $data_right = array();
        $data_head['title'] = "Студия";
        try {
            $id = $this->request->param('id', -1);
            if ($id != -1) {

                $premium = array('date_end' => "");

                $prem = new Model_Premium();
                $m_region = new Model_Region();
                $prem = $prem->where('user_id','=',$id)->find();
                if (isset($prem->date_end)){
                    $premium = $prem;
                }

                $data_content['premium'] = $premium;
                $data_content['region'] = $m_region->find_all();
                $premTypes = new Model_PremiumTypes();
                $data_content['premium_types'] = DB::query(Database::SELECT, 
                    'SELECT `premium_type_id`, `name`, `description`' .' FROM `premium_types`')->execute()->as_array();
                $photo = new Model_StudioPhotos();
                $music = new Model_StudioMusics();

                $data_content['photos'] = $photo->where('user_id', '=', $id)->find_all();

                $data_content['musics'] = $music->where('user_id', '=', $id)->find_all();


                if ($auth->logged_in('admin')) {
                    $u = $auth->get_user();
                    $data_header['username'] = $u->username;

                }

                $users = new Model_Users();
                $u = $users->where('id', '=', $id)->find();
                if (isset($u->id)) {
                    $data_content['email'] = $u->email;
                }

                $metro = new Model_Metro();

                $data_content['metro'] = $metro->find_all();

                $studios = new Model_Studios();
                $studio = $studios->where('user_id', '=', $id)->find();
                if (isset($studio->id)) {
                    $data_content['studio'] = $studio;
                    $data_right['s_class'] = $studio->class;
                    $data_head['title'] = $studio->name;
                }

            }

        } catch (Exception $e) {

        }

        try {
            $works = new Model_StudioWorks();
            $studio_works = $works->where('user_id', '=', $id)->find_all();
            $new_array = array();
            foreach ($studio_works as $sw) {
                array_push($new_array, $sw->work);
            }

            $data_right['sworks'] = $new_array;
        } catch (Exception $e) {

        }

        $this->template->head = View::factory('admin/head', $data_head);
        $this->template->left = View::factory('admin/left');
        $this->template->right = View::factory('admin/right_edit', $data_right);
        $this->template->header = View::factory('admin/header', $data_header);
        $this->template->content = View::factory('admin/studio', $data_content);
    }

//Список новостей
    public function action_news()
    {
        $data['title'] = "Новости";

        $auth = Auth::instance();
        if ($auth->logged_in('admin')) {
            $u = $auth->get_user();
            $data_header['username'] = $u->username;
        }

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

        $this->template->head = View::factory('admin/head', $data);
        $this->template->left = View::factory('admin/left');
        $this->template->header = View::factory('admin/header', $data_header);
        $this->template->content = View::factory('admin/news', $data_content);
    }

//Редактирование новости
    public function action_new()
    {
        $auth = Auth::instance();
        $data_content = array();
        $data_header = array();
        $data_right = array();
        $data_head['title'] = "Новость";
        if ($auth->logged_in('admin')) {
            $u = $auth->get_user();
            $data_header['username'] = $u->username;
        }
        try {
            $id = $this->request->param('id', -1);
            if ($id != -1) {
                $news = new Model_News();
                $new_temp = $news->where('id', '=', $id)->find();
                if (isset($new_temp->id)) {
                    $data_content['new'] = $new_temp;
                    $data_head['title'] = $new_temp->title;
                }
                $newsImages = new Model_NewsPhotos();
                $images = $newsImages->where('news_id','=', $id)->find_all();

                $data_content['images'] = $images;

            }
        } catch (Exception $e) {

        }

        $this->template->head = View::factory('admin/head', $data_head);
        $this->template->left = View::factory('admin/left');
        $this->template->header = View::factory('admin/header', $data_header);
        $this->template->content = View::factory('admin/new', $data_content);
    }

//Список скидок
    public function action_discounts()
    {
        $auth = Auth::instance();
        $data_content = array();
        $data_header = array();
        $data_right = array();

        if ($auth->logged_in('admin')) {
            $u = $auth->get_user();
            $data_header['username'] = $u->username;
        }

        try {
            $data_head['title'] = "Скидочные купоны";
            $discount = new Model_Discounts();
            $discount_temp = $discount->find_all();

            $data_content['discounts'] = $discount_temp;
        } catch (Exception $e) {
            $data_content['discounts'] = array();
        }

        $this->template->head = View::factory('admin/head', $data_head);
        $this->template->left = View::factory('admin/left');
        $this->template->header = View::factory('admin/header', $data_header);
        $this->template->content = View::factory('admin/discounts', $data_content);
    }

//Список статей
    public function action_articles()
    {
        $data['title'] = "Статьи";
        $auth = Auth::instance();
        if ($auth->logged_in('admin')) {
            $u = $auth->get_user();
            $data_header['username'] = $u->username;
        }

        try {
            $articles = new Model_Articles();
            $articles_temp = $articles->find_all();


            $count_articles = count($articles_temp);

            $page = Arr::get($_GET, 'page', 1);

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

        $this->template->head = View::factory('admin/head', $data);
        $this->template->left = View::factory('admin/left');
        $this->template->header = View::factory('admin/header', $data_header);
        $this->template->content = View::factory('admin/articles', $data_content);
    }

//Редактирование статьи
    public function action_article()
    {
        $auth = Auth::instance();
        $data_content = array();
        $data_header = array();
        $data_right = array();
        $data_head['title'] = "Статья";
        try {
            $id = $this->request->param('id', -1);
            if ($id != -1) {

                if ($auth->logged_in('admin')) {
                    $u = $auth->get_user();
                    $data_header['username'] = $u->username;
                }

                $articles = new Model_Articles();
                $article_temp = $articles->where('id', '=', $id)->find();
                if (isset($article_temp->id)) {
                    $data_content['article'] = $article_temp;
                    $data_head['title'] = $article_temp->title;
                }

                $images = new Model_ArticlesPhotos();
                $img = $images->where('articles_id','=', $id)->find_all();
                $data_content['images'] = $img;

                $files = new Model_ArticlesFiles();
                $file = $files->where('articles_id','=', $id)->find_all();
                $data_content['files'] = $file;

            }
        } catch (Exception $e) {

        }

        $this->template->head = View::factory('admin/head', $data_head);
        $this->template->left = View::factory('admin/left');
        $this->template->header = View::factory('admin/header', $data_header);
        $this->template->content = View::factory('admin/article', $data_content);
    }

//Список конференций
    public function action_conferences()
    {
        $data['title'] = "Конференции";
        $auth = Auth::instance();
        if ($auth->logged_in('admin')) {
            $u = $auth->get_user();
            $data_header['username'] = $u->username;
        }
        $data_content = array();

        try {
            $conference = new Model_Conference();
            $conference_temp = $conference->find_all();
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

        $this->template->head = View::factory('admin/head', $data);
        $this->template->left = View::factory('admin/left');
        $this->template->header = View::factory('admin/header', $data_header);
        $this->template->content = View::factory('admin/conferences', $data_content);
    }

//Редактирование конференции
    public function action_conference()
    {
        $auth = Auth::instance();
        $data_content = array();
        $data_header = array();
        $data_right = array();
        $data_head['title'] = "Конференция";
        if ($auth->logged_in('admin')) {
            $u = $auth->get_user();
            $data_header['username'] = $u->username;
        }

        try {
            $id = $this->request->param('id', -1);
            if ($id != -1) {


                $conferences = new Model_Conference();
                $conference_temp = $conferences->where('id', '=', $id)->find();
                if (isset($conference_temp->id)) {
                    $data_content['conference'] = $conference_temp;
                    $data_head['title'] = $conference_temp->title;
                }

                $images = new Model_ConferencePhotos();
                $img = $images->where('conference_id','=', $id)->find_all();
                $data_content['images'] = $img;

                $files = new Model_ConferenceFiles();
                $file = $files->where('conference_id','=', $id)->find_all();
                $data_content['files'] = $file;

            }
        } catch (Exception $e) {

        }

        $this->template->head = View::factory('admin/head', $data_head);
        $this->template->left = View::factory('admin/left');
        $this->template->header = View::factory('admin/header', $data_header);
        $this->template->content = View::factory('admin/conference', $data_content);
    }

//Список Куплю/Продам
    public function action_buys()
    {
        $data['title'] = "Куплю/Продам";
        $data_content = array();
        $data_header = array();
        $auth = Auth::instance();
        if ($auth->logged_in('admin')) {
            $u = $auth->get_user();
            $data_header['username'] = $u->username;
        }

        try {

            $buy = new Model_Buy();
            $buy_temp = $buy->find_all();


            $count_buy = count($buy_temp);

            $page = Arr::get($_GET, 'page', 1);

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
                $data_content['buy'] = $new_array;
            }

            //ОБщее количество элементов в черном списке для пагинации
            $total_items = $count_buy;
            $data_content['pagination'] = Pagination::factory(array('total_items' => $total_items));
        } catch (Exception $e) {

        }

        $this->template->head = View::factory('admin/head', $data);
        $this->template->left = View::factory('admin/left');
        $this->template->header = View::factory('admin/header', $data_header);
        $this->template->content = View::factory('admin/buys', $data_content);
    }

//Редактирование Куплю/Продам
    public function action_buy()
    {
        $auth = Auth::instance();
        $data_content = array();
        $data_header = array();
        $data_right = array();
        $data_head['title'] = "Куплю/Продам";
        if ($auth->logged_in('admin')) {
            $u = $auth->get_user();
            $data_header['username'] = $u->username;
        }
        try {
            $id = $this->request->param('id', -1);
            if ($id != -1) {
                $buy = new Model_Buy();
                $buy_temp = $buy->where('id', '=', $id)->find();
                if (isset($buy_temp->id)) {
                    $data_content['buy'] = $buy_temp;
                    $data_head['title'] = $buy_temp->title;
                }

                $images = new Model_BuyPhotos();
                $imgs = $images->where('buy_id','=', $id)->find_all();

                $data_content['images'] = $imgs;
            }


        } catch (Exception $e) {

        }

        $this->template->head = View::factory('admin/head', $data_head);
        $this->template->left = View::factory('admin/left');
        $this->template->header = View::factory('admin/header', $data_header);
        $this->template->content = View::factory('admin/buy', $data_content);
    }

//Черный список
    public function action_blacklists()
    {
        $auth = Auth::instance();
        $data_header = array();
        $data = array();
        $data_content = array();
        if ($auth->logged_in('admin')) {
            $u = $auth->get_user();
            $data_header['username'] = $u->username;
        }
        try {
            $blacklists = new Model_Blacklist();
            $all_blacklists = array();
            $data_content['temp'] = "";
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

            $data['title'] = "Чёрный список";
        } catch (Exception $e) {

        }

        $this->template->head = View::factory('admin/head', $data);
        $this->template->left = View::factory('admin/left');
        $this->template->header = View::factory('admin/header', $data_header);
        $this->template->content = View::factory('admin/blacklists', $data_content);
    }

//Редактирование записи черного списка
    public function action_blacklist()
    {
        $auth = Auth::instance();
        $data_content = array();
        $data_header = array();
        $data_right = array();
        $data_head['title'] = "Черный список";
        if ($auth->logged_in('admin')) {
            $u = $auth->get_user();
            $data_header['username'] = $u->username;
        }
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

        $this->template->head = View::factory('admin/head', $data_head);
        $this->template->left = View::factory('admin/left');
        $this->template->header = View::factory('admin/header', $data_header);
        $this->template->content = View::factory('admin/blacklist', $data_content);
    }

//Редактирование скидочного купона
    public function action_coupon()
    {
        $auth = Auth::instance();
        $data_content = array();
        $data_header = array();
        $data_right = array();
        $data_head['title'] = "Скидки";
        if ($auth->logged_in('admin')) {
            $u = $auth->get_user();
            $data_header['username'] = $u->username;
        }
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

        $this->template->head = View::factory('admin/head', $data_head);
        $this->template->left = View::factory('admin/left');
        $this->template->header = View::factory('admin/header', $data_header);
        $this->template->content = View::factory('admin/coupon', $data_content);
    }

//Страница редактирования партнёров
    public function action_partners()
    {
        $auth = Auth::instance();
        $data_content = array();
        $data_header = array();
        $data_right = array();
        $data_head['title'] = "Партнёры";

        if ($auth->logged_in('admin')) {
            $u = $auth->get_user();
            $data_header['username'] = $u->username;
        }

        try {
            $pages = new Model_Pages();
            $page_temp = $pages->where('id', '=', 1)->find();
            if (isset($page_temp->id)) {
                $data_content['partners'] = $page_temp->partner;
            }
        } catch (Exception $e) {
            $data_content = array();
        }

        $this->template->head = View::factory('admin/head', $data_head);
        $this->template->left = View::factory('admin/left');
        $this->template->header = View::factory('admin/header', $data_header);
        $this->template->content = View::factory('admin/partners', $data_content);
    }

//Редактирование реаламы
    public function action_adverts()
    {
        $auth = Auth::instance();
        $data_content = array();
        $data_header = array();
        $data_right = array();
        $data_head['title'] = "Реклама";

        if ($auth->logged_in('admin')) {
            $u = $auth->get_user();
            $data_header['username'] = $u->username;
        }

        try {
            $pages = new Model_Pages();
            $page_temp = $pages->where('id', '=', 1)->find();
            if (isset($page_temp->id)) {
                $data_content['advert'] = $page_temp->advert;
            }

        } catch (Exception $e) {
            $data_content = array();
        }

        $this->template->head = View::factory('admin/head', $data_head);
        $this->template->left = View::factory('admin/left');
        $this->template->header = View::factory('admin/header', $data_header);
        $this->template->content = View::factory('admin/advert', $data_content);
    }


    //Редактирование контактов
    public function action_contacts()
    {
        $auth = Auth::instance();
        $data_content = array();
        $data_header = array();
        $data_right = array();
        $data_head['title'] = "Контакты";

        if ($auth->logged_in('admin')) {
            $u = $auth->get_user();
            $data_header['username'] = $u->username;
        }

        try {
            $pages = new Model_Pages();
            $page_temp = $pages->where('id', '=', 1)->find();
            if (isset($page_temp->id)) {
                $data_content['contacts'] = $page_temp->contacts;
            }

        } catch (Exception $e) {
            $data_content = array();
        }

        $this->template->head = View::factory('admin/head', $data_head);
        $this->template->left = View::factory('admin/left');
        $this->template->header = View::factory('admin/header', $data_header);
        $this->template->content = View::factory('admin/contacts', $data_content);
    }

    //Редактирование о сайте
    public function action_about()
    {
        $auth = Auth::instance();
        $data_content = array();
        $data_header = array();
        $data_right = array();
        $data_head['title'] = "О сайте";

        if ($auth->logged_in('admin')) {
            $u = $auth->get_user();
            $data_header['username'] = $u->username;
        }

        try {
            $pages = new Model_Pages();
            $page_temp = $pages->where('id', '=', 1)->find();
            if (isset($page_temp->id)) {
                $data_content['about'] = $page_temp->about;
            }

        } catch (Exception $e) {
            $data_content = array();
        }

        $this->template->head = View::factory('admin/head', $data_head);
        $this->template->left = View::factory('admin/left');
        $this->template->header = View::factory('admin/header', $data_header);
        $this->template->content = View::factory('admin/about', $data_content);
    }

    //Редактирование о сайте
    public function action_toc()
    {
        $auth = Auth::instance();
        $data_content = array();
        $data_header = array();
        $data_right = array();
        $data_head['title'] = "Условия использования";

        if ($auth->logged_in('admin')) {
            $u = $auth->get_user();
            $data_header['username'] = $u->username;
        }

        try {
            $pages = new Model_Pages();
            $page_temp = $pages->where('id', '=', 1)->find();
            if (isset($page_temp->id)) {
                $data_content['toc'] = $page_temp->toc;
            }

        } catch (Exception $e) {
            $data_content = array();
        }

        $this->template->head = View::factory('admin/head', $data_head);
        $this->template->left = View::factory('admin/left');
        $this->template->header = View::factory('admin/header', $data_header);
        $this->template->content = View::factory('admin/toc', $data_content);
    }
    //Редактирование о сайте
    public function action_newsletter()
    {
        $auth = Auth::instance();
        $data_content = array();
        $data_header = array();
        $data_right = array();
        $data_head['title'] = "Рассылка новостей";

        if ($auth->logged_in('admin')) {
            $u = $auth->get_user();
            $data_header['username'] = $u->username;
        }
        $error = $message = null;
        $users = new Model_Users(); 
        if (isset($_POST['subject'])) {
            $config = new Model_Configuration();
            $users = new Model_Users(); 
            if (!strlen($_POST['subject'])) {
                $error = 'Введите тему сообщения';
            }
            else if (!strlen($_POST['body'])) {
                $error = 'Введите сообщение';
            }
            else if ($config->newsletter_pwd != $_POST['password']) {
                $error = 'Не правильный пароль';
            }
            else {
                if (!$error) {
                    $sql = 'select u.email'
                        .' from users u'
                        .' JOIN roles_users ru on u.id = ru.user_id'
                        .' JOIN roles r on r.id = ru.role_id'
                        .' JOIN studios s on u.id = s.user_id'
                        .' where r.id = 1';
                    $emails = DB::query(Database::SELECT, $sql)
                        ->execute()->as_array();
                    $useful = new Model_Useful();
                    foreach($emails as $email) {
                        $from = 'irobot@audiome.ru';
                        $subject = $_POST['subject'];
                        $message = $_POST['body'];
                        $useful->native_mail($email, $from, $subject, $message);
                    }
                    $data_content['message'] = 'Сообщение отправлено';
                }

            }
            $data_content['error'] = $error;
        }

        $this->template->head = View::factory('admin/head', $data_head);
        $this->template->left = View::factory('admin/left');
        $this->template->header = View::factory('admin/header', $data_header);
        $this->template->content = View::factory('admin/newsletter', $data_content);
    }

//Редактирование данных пользователя
    public function action_user()
    {
        $auth = Auth::instance();
        $data_content = array();
        $data_header = array();
        $data_right = array();
        $data_head['title'] = "Пользователь";

        try {
            if ($auth->logged_in('admin')) {
                $u = $auth->get_user();
                $data_header['username'] = $u->username;

                $id = $this->request->param('id', -1);
                if ($id != -1) {
                    $users = new Model_Users();
                    $data_content['user'] = $users->where('id', '=', $id)->find();
                } else {
                    $data_content['user'] = $u;
                }

            }
        } catch (Exception $e) {

        }

        $this->template->head = View::factory('admin/head', $data_head);
        $this->template->left = View::factory('admin/left');
        $this->template->header = View::factory('admin/header', $data_header);
        $this->template->content = View::factory('admin/user', $data_content);
    }
//Список администраторов
    public function action_users()
    {
        $auth = Auth::instance();
        $data_content = array();
        $data_header = array();
        $data_right = array();
        $data_head['title'] = "Администраторы";

        try {
            if ($auth->logged_in('admin')) {
                $u = $auth->get_user();
                $data_header['username'] = $u->username;
                $users = new Model_Users();
                $data_content['users'] = $users->find_all();
                $data_head['title'] = $u->username;
            }
        } catch (Exception $e) {

        }

        $this->template->head = View::factory('admin/head', $data_head);
        $this->template->left = View::factory('admin/left');
        $this->template->header = View::factory('admin/header', $data_header);
        $this->template->content = View::factory('admin/users', $data_content);
    }

//Страница добавления новых администраторов
    public function action_addUser()
    {
        $auth = Auth::instance();
        $data_content = array();
        $data_header = array();
        $data_right = array();
        $data_head['title'] = "Добавить админитсратора";

        try {
            if ($auth->logged_in('admin')) {
                $u = $auth->get_user();
                $data_header['username'] = $u->username;
            }
        } catch (Exception $e) {

        }

        $this->template->head = View::factory('admin/head', $data_head);
        $this->template->left = View::factory('admin/left');
        $this->template->header = View::factory('admin/header', $data_header);
        $this->template->content = View::factory('admin/addUser', $data_content);
    }
//Страница работ
    public function action_works()
    {
        $auth = Auth::instance();
        $data_content = array();
        $data_header = array();
        $data_right = array();
        $data_head['title'] = "Список работ";
        if ($auth->logged_in('admin')) {
            $u = $auth->get_user();
            $data_header['username'] = $u->username;
        }
        try {
            $works = new Model_Work();
            $data_content['works'] = $works->find_all();
        } catch (Exception $e) {

        }

        $this->template->head = View::factory('admin/head', $data_head);
        $this->template->left = View::factory('admin/left');
        $this->template->header = View::factory('admin/header', $data_header);
        $this->template->content = View::factory('admin/works', $data_content);
    }
//Редактирование работы
    public function action_work()
    {
        $auth = Auth::instance();
        $data_content = array();
        $data_header = array();
        $data_right = array();
        $data_head['title'] = "Изменение работы";
        if ($auth->logged_in('admin')) {
            $u = $auth->get_user();
            $data_header['username'] = $u->username;
        }
        try {
            $id = $this->request->param('id', -1);
            if ($id != -1) {
                $work = new Model_Work();
                $work_temp = $work->where('id', '=', $id)->find();
                if (isset($work_temp->id)) {
                    $data_content['work'] = $work_temp;
                    $data_head['title'] = $work_temp->name;
                }

            }
        } catch (Exception $e) {

        }

        $this->template->head = View::factory('admin/head', $data_head);
        $this->template->left = View::factory('admin/left');
        $this->template->header = View::factory('admin/header', $data_header);
        $this->template->content = View::factory('admin/work', $data_content);
    }

    //Добавление работы
    public function action_addWork()
    {
        $auth = Auth::instance();
        $data_content = array();
        $data_header = array();
        $data_right = array();
        $data_head['title'] = "Добавление работы";
        if ($auth->logged_in('admin')) {
            $u = $auth->get_user();
            $data_header['username'] = $u->username;
        }


        $this->template->head = View::factory('admin/head', $data_head);
        $this->template->left = View::factory('admin/left');
        $this->template->header = View::factory('admin/header', $data_header);
        $this->template->content = View::factory('admin/addWork', $data_content);
    }

//Страница входа для администратора
    public function action_login()
    {
        $data_content = array();
        $data_head['title'] = "Администрирование";
        $this->template->head = View::factory('admin/head', $data_head);
        $this->template->clear = array();
        $this->template->message = View::factory('admin/login', $data_content);
    }

} // End Admin
