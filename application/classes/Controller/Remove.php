<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Remove extends AdminPagesNoTemplate
{

    public function action_index()
    {
        $this->response->body('audiome.ru');
        $this->redirect("/");
    }

    public function action_photo()
    {
        $id = $this->request->param('id', -1);

        if ($id != -1) {
            try {
                $auth = Auth::instance();
                $user_temp = $auth->get_user();
                $user_id = $user_temp->id;
                $photos = new Model_StudioPhotos();
                $photos->where('id', '=', $id)->find()->delete();
                unlink("./files/" . $user_id . "/images/prev_" . $id . ".png");
                unlink("./files/" . $user_id . "/images/" . $id . ".png");
            } catch (Exception $e) {
                $this->response->body("error");
            }
        }
        $this->response->body("ok");
        $this->redirect($_SERVER['HTTP_REFERER']);
    }

    public function action_newsPhoto()
    {
        $id = $this->request->param('id', -1);
        $news_id = -1;
        if ($id != -1) {
            try {
                $auth = Auth::instance();
                $user_temp = $auth->get_user();
                $user_id = $user_temp->id;
                $photos = new Model_NewsPhotos();
                $p = $photos->where('id', '=', $id)->find();
                $news_id = $p->news_id;
                $p->delete();
                unlink("./files/" . $user_id . "/news/prev_" . $id . ".png");
                unlink("./files/" . $user_id . "/news/" . $id . ".png");
            } catch (Exception $e) {
                $this->response->body("error");
            }
        }
        $this->response->body("ok");
        if ($news_id != -1){

            $this->redirect($_SERVER['HTTP_REFERER']);
        }else{
            $this->redirect($_SERVER['HTTP_REFERER']);
        }
    }


    public function action_articlesPhoto()
    {
        $id = $this->request->param('id', -1);
        $news_id = -1;
        if ($id != -1) {
            try {
                $auth = Auth::instance();
                $user_temp = $auth->get_user();
                $user_id = $user_temp->id;
                $photos = new Model_ArticlesPhotos();
                $p = $photos->where('id', '=', $id)->find();
                $news_id = $p->articles_id;
                $p->delete();
                unlink("./files/" . $user_id . "/articles/prev_" . $id . ".png");
                unlink("./files/" . $user_id . "/articles/" . $id . ".png");
            } catch (Exception $e) {
                $this->response->body("error");
            }
        }
        $this->response->body("ok");
        if ($news_id != -1){

            $this->redirect("/edit/articles/".$news_id);
        }else{
            $this->redirect("/addArticles");
        }
    }

    public function action_articlesMusic()
    {
        $id = $this->request->param('id', -1);

        $news_id = -1;
        if ($id != -1) {

            try {
                $auth = Auth::instance();
                $user_temp = $auth->get_user();
                $user_id = $user_temp->id;
                $music = new Model_ArticlesFiles();

                $p = $music->where('id', '=', $id)->find();
                $news_id = $p->articles_id;
                $p->delete();
                unlink("./files/" . $user_id . "/articles/" . $id . ".mp3");
            } catch (Exception $e) {
                $this->response->body("error");
            }
            if ($news_id != -1){

                $this->redirect("/edit/articles/".$news_id);
            }else{
                $this->redirect("/addArticles");
            }
        }
        $this->redirect("/addArticles");
    }


    public function action_buyPhoto()
    {
        $id = $this->request->param('id', -1);
        $news_id = -1;
        if ($id != -1) {
            try {
                $auth = Auth::instance();
                $user_temp = $auth->get_user();
                $user_id = $user_temp->id;
                $photos = new Model_BuyPhotos();
                $p = $photos->where('id', '=', $id)->find();
                $news_id = $p->buy_id;
                $p->delete();
                unlink("./files/" . $user_id . "/buy/prev_" . $id . ".png");
                unlink("./files/" . $user_id . "/buy/" . $id . ".png");
            } catch (Exception $e) {
                $this->response->body("error");
            }
        }
        $this->response->body("ok");
        if ($news_id != -1){

            $this->redirect("/edit/buy/".$news_id);
        }else{
            $this->redirect("/buy");
        }
    }

    public function action_conferencePhoto()
    {
        $id = $this->request->param('id', -1);
        $news_id = -1;
        if ($id != -1) {
            try {
                $auth = Auth::instance();
                $user_temp = $auth->get_user();
                $user_id = $user_temp->id;
                $photos = new Model_ConferencePhotos();
                $p = $photos->where('id', '=', $id)->find();
                $news_id = $p->conference_id;
                $p->delete();
                unlink("./files/" . $user_id . "/conference/prev_" . $id . ".png");
                unlink("./files/" . $user_id . "/conference/" . $id . ".png");
            } catch (Exception $e) {
                $this->response->body("error");
            }
        }
        $this->response->body("ok");
        if ($news_id != -1){

            $this->redirect("/edit/conference/".$news_id);
        }else{
            $this->redirect("/addConference");
        }
    }

    public function action_conferenceMusic()
    {
        $id = $this->request->param('id', -1);

        $news_id = -1;
        if ($id != -1) {

            try {
                $auth = Auth::instance();
                $user_temp = $auth->get_user();
                $user_id = $user_temp->id;
                $music = new Model_ConferenceFiles();

                $p = $music->where('id', '=', $id)->find();
                $news_id = $p->conference_id;
                $p->delete();
                unlink("./files/" . $user_id . "/conference/" . $id . ".mp3");
            } catch (Exception $e) {
                $this->response->body("error");
            }
            if ($news_id != -1){

                $this->redirect("/edit/conference/".$news_id);
            }else{
                $this->redirect("/addConference");
            }
        }
        $this->redirect("/addArticles");
    }

    public function action_music()
    {
        $id = $this->request->param('id', -1);

        if ($id != -1) {
            try {
                $auth = Auth::instance();
                $user_temp = $auth->get_user();
                $user_id = $user_temp->id;
                $music = new Model_StudioMusics();

                $music_temp = $music->where('user_id', '=', $user_id)->where('id', '=', $id)->find_all();
                if (isset($music_temp[0]->url)) {
                    $this->response->body("." . $music_temp[0]->url);
                    $music->where('user_id', '=', $user_id)->where('id', '=', $id)->find()->delete();
                    unlink("." . $music_temp[0]->url);
                }
            } catch (Exception $e) {
                $this->response->body("error");
            }
        }
        $this->response->body("ok");
        $this->redirect($_SERVER['HTTP_REFERER']);
    }


    public function action_blacklist()
    {
        $id = $this->request->param('id', -1);

        if ($id != -1) {
            try {
                $auth = Auth::instance();
                $user_temp = $auth->get_user();
                $user_id = $user_temp->id;
                $blacklists = new Model_Blacklist();

                $bl =  $blacklists->where('id', '=', $id)->find();
            if ($bl->user_id = $user_id){
                $bl->delete();
            }

            } catch (Exception $e) {
                $this->response->body("error");
            }
        }
        $this->response->body("ok");
        $this->redirect("/addBlacklist");
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
                if ($discount_temp->user_id = $user_id){
                    $discount_temp->delete();
                }

            } catch (Exception $e) {
                $this->response->body("error");
            }
        }
        $this->response->body("ok");
        $this->redirect("/AddDiscount");
    }

    public function action_news()
    {
        $id = $this->request->param('id', -1);

        if ($id != -1) {
            try {
                $auth = Auth::instance();
                $user_temp = $auth->get_user();
                $user_id = $user_temp->id;
                $news = new Model_News();

                $news_temp =  $news->where('id', '=', $id)->find();
                if ($news->user_id = $user_id){
                    $news_temp->delete();
                }

            } catch (Exception $e) {
                $this->response->body("error");
            }
        }
        $this->response->body("ok");
        $this->redirect("/AddNews");
    }

    public function action_buy()
    {
        $id = $this->request->param('id', -1);

        if ($id != -1) {
            try {
                $auth = Auth::instance();
                $user_temp = $auth->get_user();
                $user_id = $user_temp->id;
                $buy = new Model_Buy();

                $buy_temp =  $buy->where('id', '=', $id)->find();
                if ($buy->user_id = $user_id){
                    $buy_temp->delete();
                }

            } catch (Exception $e) {
                $this->response->body("error");
            }
        }
        $this->response->body("ok");
        $this->redirect("/AddBuy");
    }

    public function action_conference()
    {
        $id = $this->request->param('id', -1);

        if ($id != -1) {
            try {
                $auth = Auth::instance();
                $user_temp = $auth->get_user();
                $user_id = $user_temp->id;
                $conference = new Model_Conference();

                $conference_temp =  $conference->where('id', '=', $id)->find();
                if ($conference->user_id = $user_id){
                    $conference_temp->delete();
                }

            } catch (Exception $e) {
                $this->response->body("error");
            }
        }
        $this->response->body("ok");
        $this->redirect("/AddConference");
    }

    public function action_articles()
    {
        $id = $this->request->param('id', -1);

        if ($id != -1) {
            try {
                $auth = Auth::instance();
                $user_temp = $auth->get_user();
                $user_id = $user_temp->id;
                $articles = new Model_Articles();

                $articles_temp =  $articles->where('id', '=', $id)->find();
                if ($articles->user_id = $user_id){
                    $articles_temp->delete();
                }

            } catch (Exception $e) {
                $this->response->body("error");
            }
        }
        $this->response->body("ok");
        $this->redirect("/AddArticles");
    }
} // End Remove
