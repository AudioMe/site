<?php defined('SYSPATH') or die('No direct script access.');

class Controller_AdminDelete extends SuperAdminNoTemplate
{
    public $template = "basic/2columns";

    public function action_index()
    {
        $this->redirect("/admin");
    }

    public function action_comment()
    {
        try{
        $id = $this->request->param('id', -1);
        if ($id != -1) {

            $comments = new Model_Comments();
            $comment_temp = $comments->where('id','=',$id)->find();
            if (isset($comment_temp->id)){
                $comment_temp->delete();
            }
        }
        }catch (Exception $e){

        }
        $this->redirect("/admin/comments");

    }

    public function action_commentNews()
    {
        try{
        $id = $this->request->param('id', -1);
        if ($id != -1) {

            $comments = new Model_NewsComments();
            $comment_temp = $comments->where('id','=',$id)->find();
            if (isset($comment_temp->id)){
                $comment_temp->delete();
            }
        }
        }catch (Exception $e){

        }
        $this->redirect("/admin/commentsNews");

    }
    public function action_commentArticles()
    {
        try{
        $id = $this->request->param('id', -1);
        if ($id != -1) {

            $comments = new Model_ArticlesComments();
            $comment_temp = $comments->where('id','=',$id)->find();
            if (isset($comment_temp->id)){
                $comment_temp->delete();
            }
        }
        }catch (Exception $e){

        }
        $this->redirect("/admin/commentsArticles");

    }

    public function action_articles()
    {
        try{
            $id = $this->request->param('id', -1);
            if ($id != -1) {

                $articles = new Model_Articles();
                $articles_temp = $articles->where('id','=',$id)->find();
                if (isset($articles_temp->id)){
                    $articles_temp->delete();
                }
            }
        }catch (Exception $e){

        }
        $this->redirect("/admin/articles");

    }

    public function action_commentConference()
    {
        try{
        $id = $this->request->param('id', -1);
        if ($id != -1) {

            $comments = new Model_ConferenceComments();
            $comment_temp = $comments->where('id','=',$id)->find();
            if (isset($comment_temp->id)){
                $comment_temp->delete();
            }
        }
        }catch (Exception $e){

        }
        $this->redirect("/admin/commentsConference");

    }

    public function action_commentBuy()
    {
        try{
        $id = $this->request->param('id', -1);
        if ($id != -1) {

            $comments = new Model_BuyComments();
            $comment_temp = $comments->where('id','=',$id)->find();
            if (isset($comment_temp->id)){
                $comment_temp->delete();
            }
        }
        }catch (Exception $e){

        }
        $this->redirect("/admin/commentsBuy");

    }

    public function action_news()
    {
        try{
        $id = $this->request->param('id', -1);
        if ($id != -1) {

            $news = new Model_News();
            $news_temp = $news->where('id','=',$id)->find();
            if (isset($news_temp->id)){
                $news_temp->delete();
            }
        }
        }catch (Exception $e){

        }
        $this->redirect("/admin/news");

    }

    public function action_discount()
    {
        $id = $this->request->param('id', -1);
        if ($id != -1) {
            try {
                $auth = Auth::instance();
                $user_temp = $auth->get_user();
                $user_id = $user_temp->id;
                $discounts = new Model_Discounts();

                $discount_temp =  $discounts->where('id', '=', $id)->find();
                if (isset($discount_temp->id)){
                    $discount_temp->delete();
                }

            } catch (Exception $e) {
                $this->response->body("error");
            }
        }
        $this->response->body("ok");
        $this->redirect("/admin/discounts");
    }

    public function action_conference()
    {
        $id = $this->request->param('id', -1);

        if ($id != -1) {
            try {
                $auth = Auth::instance();
                $user_temp = $auth->get_user();

                $conference = new Model_Conference();

                $conference_temp =  $conference->where('id', '=', $id)->find();
                if (isset($conference_temp->id)){
                    $conference_temp->delete();
                }

            } catch (Exception $e) {
                $this->response->body("error");
            }
        }
        $this->response->body("ok");
        $this->redirect("/admin/conferences");
    }

    public function action_buy()
    {
        $id = $this->request->param('id', -1);

        if ($id != -1) {
            try {
                $auth = Auth::instance();
                $user_temp = $auth->get_user();

                $buys = new Model_Buy();

                $buy_temp =  $buys->where('id', '=', $id)->find();
                if (isset($buy_temp->id)){
                    $buy_temp->delete();
                }

            } catch (Exception $e) {
                $this->response->body("error");
            }
        }
        $this->response->body("ok");
        $this->redirect("/admin/buys");
    }


    public function action_blacklist()
    {
        $id = $this->request->param('id', -1);

        if ($id != -1) {
            try {
                $auth = Auth::instance();
                $user_temp = $auth->get_user();

                $blacklist = new Model_Blacklist();

                $blacklist_temp =  $blacklist->where('id', '=', $id)->find();
                if (isset($blacklist_temp->id)){
                    $blacklist_temp->delete();
                }

            } catch (Exception $e) {
                $this->response->body("error");
            }
        }
        $this->response->body("ok");
        $this->redirect("/admin/blacklists");
    }


    public function action_user()
    {
        $id = $this->request->param('id', -1);

        if ($id != -1) {
            try {
                $auth = Auth::instance();


                $users = new Model_Users();

                $user_temp =  $users->where('id', '=', $id)->find();
                if (isset($user_temp->id) && $user_temp->username != "root"){
                    $user_temp->delete();
                }

            } catch (Exception $e) {
                $this->response->body("error");
            }
        }
        $this->response->body("ok");
        $this->redirect("/admin/users");
    }

    public function action_studio()
    {
        $id = $this->request->param('id', -1);

        if ($id != -1) {
            try {
                $studio = new Model_Studios();

                $studio_temp =  $studio->where('id', '=', $id)->find();
                if (isset($studio_temp->id)){
                    $studio_temp->delete();
                }

            } catch (Exception $e) {
                $this->response->body("error");
            }
        }
        $this->response->body("ok");
        $this->redirect("/admin/studios");
    }


    public function action_work()
    {
        $id = $this->request->param('id', -1);

        if ($id != -1) {
            try {
                $work = new Model_Work();

                $work_temp =  $work->where('id', '=', $id)->find();
                if (isset($work_temp->id)){
                    $work_temp->delete();
                }

            } catch (Exception $e) {
                $this->response->body("error");
            }
        }
        $this->response->body("ok");
        $this->redirect("/admin/works");
    }

    public function action_photo()
    {
        $id = $this->request->param('id', -1);

        if ($id != -1) {
            try {

                $photos = new Model_StudioPhotos();
                $photos->where('id', '=', $id)->find()->delete();
            } catch (Exception $e) {
                $this->response->body("error");
            }
        }
        $this->response->body("ok");
        $this->redirect($_SERVER['HTTP_REFERER']);
    }


    public function action_conferencePhoto()
    {
        $id = $this->request->param('id', -1);
        $news_id = -1;
        if ($id != -1) {
            try {
                $photos = new Model_ConferencePhotos();
                $p = $photos->where('id', '=', $id)->find();
                $news_id = $p->conference_id;
                $p->delete();

            } catch (Exception $e) {
                $this->response->body("error");
            }
        }
        $this->response->body("ok");
        if ($news_id != -1){

            $this->redirect("/admin/conference/".$news_id);
        }else{
            $this->redirect("/admin/conferences");
        }
    }

    public function action_conferenceMusic()
    {
        $id = $this->request->param('id', -1);

        $news_id = -1;
        if ($id != -1) {

            try {

                $music = new Model_ConferenceFiles();

                $p = $music->where('id', '=', $id)->find();
                $news_id = $p->conference_id;
                $p->delete();

            } catch (Exception $e) {
                $this->response->body("error");
            }
            if ($news_id != -1){

                $this->redirect("/admin/conference/".$news_id);
            }else{
                $this->redirect("/admin/conferences");
            }
        }
        $this->redirect("/admin/addConference");
    }


    public function action_newsPhoto()
    {
        $id = $this->request->param('id', -1);
        $news_id = -1;
        if ($id != -1) {
            try {

                $photos = new Model_NewsPhotos();
                $p = $photos->where('id', '=', $id)->find();
                $news_id = $p->news_id;
                $p->delete();

            } catch (Exception $e) {
                $this->response->body("error");
            }
        }
        $this->response->body("ok");
        if ($news_id != -1){

            $this->redirect("/admin/new/".$news_id);
        }else{
            $this->redirect("/admin/news");
        }
    }


    public function action_articlesPhoto()
    {
        $id = $this->request->param('id', -1);
        $news_id = -1;
        if ($id != -1) {
            try {

                $photos = new Model_ArticlesPhotos();
                $p = $photos->where('id', '=', $id)->find();
                $news_id = $p->articles_id;
                $p->delete();
            } catch (Exception $e) {
                $this->response->body("error");
            }
        }
        $this->response->body("ok");
        if ($news_id != -1){

            $this->redirect("/admin/article/".$news_id);
        }else{
            $this->redirect("/admin/articles");
        }
    }
    public function action_music()
    {
        $id = $this->request->param('id', -1);

        if ($id != -1) {
            try {

                $music = new Model_StudioMusics();

                $music_temp = $music->where('id', '=', $id)->find_all();
                if (isset($music_temp[0]->url)) {
                    $music->where('id', '=', $id)->find()->delete();
                }
            } catch (Exception $e) {
                $this->response->body("error");
            }
        }
        $this->response->body("ok");
        $this->redirect($_SERVER['HTTP_REFERER']);
    }

    public function action_articlesMusic()
    {
        $id = $this->request->param('id', -1);

        $news_id = -1;
        if ($id != -1) {

            try {
                $music = new Model_ArticlesFiles();

                $p = $music->where('id', '=', $id)->find();
                $news_id = $p->articles_id;
                $p->delete();
            } catch (Exception $e) {
                $this->response->body("error");
            }
            if ($news_id != -1){

                $this->redirect("/admin/article/".$news_id);
            }else{
                $this->redirect("/admin/articles");
            }
        }
        $this->redirect("/admin/articles");
    }

    public function action_buyPhoto()
    {
        $id = $this->request->param('id', -1);
        $news_id = -1;
        if ($id != -1) {
            try {
                $photos = new Model_BuyPhotos();
                $p = $photos->where('id', '=', $id)->find();
                $news_id = $p->buy_id;
                $p->delete();
            } catch (Exception $e) {
                $this->response->body("error");
            }
        }
        $this->response->body("ok");
        if ($news_id != -1){

            $this->redirect("/admin/buy/".$news_id);
        }else{
            $this->redirect("/buys");
        }
    }


} // End AdminDelete
