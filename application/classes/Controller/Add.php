<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Add extends AdminPagesNoTemplate
{

    public function action_index()
    {
        $this->response->body('audiome.ru');
        $this->redirect("/");
    }

    public function action_photo()
    {
        try {
            $next_operation = false;
            if (isset($_FILES['photo']) && $_FILES['photo']['size'] > 100) {
                $next_operation = true;
                try {
                    $auth = Auth::instance();
                    $user_temp = $auth->get_user();
                    $user_id = $user_temp->id;
                    $photos = new Model_StudioPhotos();

                    $photos->values(array('user_id' => $user_id, 'url' => " "))->save();
                    $url = "/files/" . $user_id . "/images/" . $photos->pk() . ".png";
                    $url_prev = "/files/" . $user_id . "/images/prev_" . $photos->pk() . ".png";
                    $img_key = $photos->pk() . ".png";
                    $photos->values(array('url' => $img_key))->save();

                    $this->response->body($url_prev);

                    $filename = Upload::save($_FILES['photo'], $photos->pk() . ".png", "./tmp", 0777);


                    Image::factory($filename)
                        ->resize(160, 100, Image::NONE)
                        ->save("." . $url_prev);

                    Image::factory($filename)
                        ->resize(604)
                        ->save("." . $url);


//                    Image::factory($filename)
//                        ->save("." . $url);

                    unlink($filename);

                } catch (Exception $e) {
                    $next_operation = false;
                    $this->response->body('error');
                }


            }

            if ($next_operation) {
                $this->response->body('ok');
            } else {
                $this->response->body('error');
            }

        } catch (Exception $e) {

        }
        $this->redirect("/addPhoto");
    }

    public function action_music()
    {
        try {
            $next_operation = false;
            if (isset($_FILES['music']) && $_FILES['music']['size'] > 100) {
                if ($_FILES['music']['error'] == 1) {
                    $this->response->body('error_size');
                    $next_operation = false;
                } else {
                    $next_operation = true;
                }

                if ($next_operation) {

                    try {
                        $auth = Auth::instance();
                        $user_temp = $auth->get_user();
                        $user_id = $user_temp->id;
                        $music = new Model_StudioMusics();

                        $music = new Model_StudioMusics();


                        $file_name = $_FILES['music']['name'];

                        $file_sub = substr(strrchr($file_name, '.'), 1);
                        $music->values(array('user_id' => $user_id, 'url' => " "))->save();
                        $url = "/files/" . $user_id . "/musics";
                        $mus_key = $music->pk() . "." . $file_sub;
                        $desc = pathinfo($file_name, PATHINFO_FILENAME);

                        $music->values(array('url' => $url . "/" . $mus_key, 'description' => $desc))->save();

                        $filename = Upload::save($_FILES['music'], $mus_key, "." . $url, 0777);


                    } catch (Exception $e) {
                        $next_operation = false;
                        $this->response->body('error');
                    }


                    if ($next_operation) {
                        $this->response->body('ok');
                    } else {
                        $this->response->body('error');
                    }
                }
            }
        } catch (Exception $e) {

        }

        $this->redirect("/addMusic");
    }

    public function action_blacklist()
    {
        try {
            $next_operation = false;
            if (isset($_POST['btnsubmblacklist'])) {
                $auth = Auth::instance();
                $user_temp = $auth->get_user();
                $user_id = $user_temp->id;
                try {

                    if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['comment'])) {
                        $next_operation = true;
                        $name = strip_tags($_POST['name']);
                        $phone = strip_tags($_POST['phone']);
                        $comment = strip_tags($_POST['comment']);
                        $sDate = date("Y-m-d G:i:s");
                        if ($name != "" && $phone != "" && $comment != "") {
                            $blacklists = new Model_Blacklist();
                            $blacklists->values(array('user_id' => $user_id, 'date' => $sDate, 'name' => $name, 'contacts' => $phone, 'text' => $comment))->save();
                        }
                    } else {
                        $next_operation = false;
                    }
                } catch (Exception $e) {
                    $next_operation = false;
                }
            }
        } catch (Exception $e) {

        }
        $this->redirect($_SERVER['HTTP_REFERER']);
    }

    public function action_discount()
    {
        try {
            $next_operation = false;
            if (isset($_POST['btnsubmdiscount'])) {
                $auth = Auth::instance();
                $user_temp = $auth->get_user();
                $user_id = $user_temp->id;
                try {

                    if (isset($_POST['size']) && isset($_POST['date_start']) && isset($_POST['date_end']) && isset($_POST['comment'])) {
                        $next_operation = true;
                        $size = strip_tags($_POST['size']);
                        $date_start = strip_tags($_POST['date_start']);
                        $date_end = strip_tags($_POST['date_end']);
                        $comment = strip_tags($_POST['comment']);
                        if ($size != "" && $date_start != "" && $date_end != "" && $comment != "") {
                            $discounts = new Model_Discounts();
                            $discounts->values(array('user_id' => $user_id, 'size' => $size, 'date_start' => $date_start, 'date_end' => $date_end, 'stipulation' => $comment))->save();
                        }
                    } else {
                        $next_operation = false;
                    }
                } catch (Exception $e) {
                    $next_operation = false;
                }
            }
        } catch (Exception $e) {

        }
        $this->redirect($_SERVER['HTTP_REFERER']);
    }


    public function action_news()
    {
          try {
        $next_operation = false;
        if (isset($_POST['btnsubmnews'])) {
            $auth = Auth::instance();
            $user_temp = $auth->get_user();
            $user_id = $user_temp->id;
               try {

            if (isset($_POST['ntitle']) && isset($_POST['npreview']) && isset($_POST['ntext'])) {
                $next_operation = true;
                $title = strip_tags($_POST['ntitle']);
                $preview = Security::xss_clean($_POST['npreview']);
                $text = Security::xss_clean($_POST['ntext']);
                $sDate = date("Y-m-d G:i:s");
                if ($title != "" && $preview != "") {
                    $news = new Model_News();
                    $news->values(array('user_id' => $user_id, 'date' => $sDate, 'title' => $title, 'preview' => $preview, 'text' => $text))->save();
                    if (isset($_FILES['images']) && $_FILES['images']['size'][0]>0)
                    for ($i = 0; $i < count($_FILES['images']['name']); $i++) {

                        $image = array('name' => $_FILES['images']['name'][$i], 'tmp_name' => $_FILES['images']['tmp_name'][$i], 'size' => $_FILES['images']['size'][$i], 'error' => $_FILES['images']['error'][$i]);
                        $newsImage = new Model_NewsPhotos();
                        $newsImage->values(array('news_id' => $news->pk(), 'url' => "1"))->save();

                        $url = "/files/" . $user_id . "/news/" . $newsImage->pk() . ".png";
                        $url_prev = "/files/" . $user_id . "/news/prev_" . $newsImage->pk() . ".png";

                        $filename = Upload::save($image, $newsImage->pk() . ".png", "./tmp", 0777);

                        Image::factory($filename)
                            ->resize(280, 160, Image::NONE)
                            ->save("." . $url_prev);

                        Image::factory($filename)
                            ->save("." . $url);

                        unlink($filename);
                    }
                }
            } else {
                $next_operation = false;
            }
                } catch (Exception $e) {
                    $next_operation = false;
                }
        }
          } catch (Exception $e) {

          }
        $this->redirect($_SERVER['HTTP_REFERER']);
    }


    public function action_commentsConference()
    {

        $next_operation = false;
        $id = $this->request->param('id', -1);
        if ($id != -1) {
            if (isset($_POST['btnsubmincomments'])) {
                try {

                    if (isset($_POST['comment'])) {
                        $next_operation = true;

                        $auth = Auth::instance();
                        $is_premium = false;
                        if ($auth->logged_in()) {
                            $user_temp = $auth->get_user();
                            $user_id = $user_temp->id;

                            $comment = strip_tags($_POST['comment']);
                            if (strlen($comment) > 3) {
                                $sDate = date("Y-m-d G:i:s");
                                $comments = new Model_ConferenceComments();


                                $comments->values(array('conference_id' => $id,'add_user_id'=>$user_id, 'date' => $sDate, 'user_id' => $user_id, 'text' => $comment))->save();
                            }
                        }
                    } else {
                        $next_operation = false;
                    }
                } catch (Exception $e) {
                    $next_operation = false;
                }
            }
            $this->redirect($_SERVER['HTTP_REFERER']);
        }

        $this->redirect($_SERVER['HTTP_REFERER']);
    }

    public function action_premium()
    {
        $next_operation = false;
        $id = $this->request->param('id', -1);
        if ($id != -1) {

            try {
                $auth = Auth::instance();
                $is_premium = false;
                $user_id = -1;
                if ($auth->logged_in()) {
                    $user_temp = $auth->get_user();
                    $user_id = $user_temp->id;
                    $studios = new Model_Studios();
                    $studio_temp = $studios->where('user_id', '=', $user_id)->find();
                    if (isset($studio_temp->id)) {
                        $is_premium = $studio_temp->premium;
                    }
                }

                $date_end = null;
                $date_cur = date_create(date("Y-m-d"));

                $difDate = null;
                $user_premium = false;
                if (isset($is_premium) && $is_premium) {
                    $premiums = new Model_Premium();

                    $prem = $premiums->where('user_id', '=', $user_id)->find();
                    if (isset($prem->id) && !empty($prem->premium_type_id)) {
                        $date_end = date_create($prem->date_end);
                        $difDate = date_diff($date_cur, $date_end);

                        if ($date_cur < $date_end) {
                            $user_premium = true;
                        }
                    }
                }
                $date_next = $date_cur;
                if ($user_premium) {
                    $date_next = date_add($date_end, new DateInterval("P30D"));
                } else {
                    $date_next = date_add($date_cur, new DateInterval("P30D"));
                }
                $premiums = new Model_Premium();

                $prem = $premiums->where('user_id', '=', $user_id)->find();

                if (isset($prem->id)) {
                    $prem->values(array("date_end" => $date_next->format("Y-m-d")))->save();
                } else {
                    $premiums->values(array("user_id" => $user_id, "date_end" => $date_next->format("Y-m-d")))->save();
                    $studios = new Model_Studios();
                    $studio = $studios->where('user_id', '=', $user_id)->find();
                    if (isset($studio->id)) {
                        $studio->values(array("premium" => true))->save();
                    }
                }


                $this->response->body($date_next->format("Y-m-d"));
            } catch (Exception $e) {
                $next_operation = false;
            }
            $this->redirect($_SERVER['HTTP_REFERER']);
        }

        $this->redirect($_SERVER['HTTP_REFERER']);
    }

    public function action_buy()
    {
        try {
            $next_operation = false;
            if (isset($_POST['btnsubmbuy'])) {
                $auth = Auth::instance();
                $user_temp = $auth->get_user();
                $user_id = $user_temp->id;
                try {

                    if (isset($_POST['ntitle']) && isset($_POST['npreview']) && isset($_POST['ntext']) && isset($_POST['nprice'])) {
                        $next_operation = true;
                        $title = strip_tags($_POST['ntitle']);
                        $preview = Security::xss_clean($_POST['npreview']);
                        $price = Security::xss_clean($_POST['nprice']);
                        $currency = Security::xss_clean($_POST['currency']);
                        $text = Security::xss_clean($_POST['ntext']);
                        $sDate = date("Y-m-d G:i:s");
                        if ($title != "" && $preview != "") {
                            $buy = new Model_Buy();
                            $buy->values(array('user_id' => $user_id, 'date' => $sDate, 'title' => $title, 'price' => $price, 'currency_id' => $currency, 'preview' => $preview, 'text' => $text))->save();

                            if (isset($_FILES['images']) && $_FILES['images']['size'][0]>0)
                                for ($i = 0; $i < count($_FILES['images']['name']); $i++) {

                                    $image = array('name' => $_FILES['images']['name'][$i], 'tmp_name' => $_FILES['images']['tmp_name'][$i], 'size' => $_FILES['images']['size'][$i], 'error' => $_FILES['images']['error'][$i]);
                                    $articlesImage = new Model_BuyPhotos();
                                    $articlesImage->values(array('buy_id' => $buy->pk(), 'url' => "1"))->save();

                                    $url = "/files/" . $user_id . "/buy/" . $articlesImage->pk() . ".png";
                                    $url_prev = "/files/" . $user_id . "/buy/prev_" . $articlesImage->pk() . ".png";

                                    $filename = Upload::save($image, $articlesImage->pk() . ".png", "./tmp", 0777);

                                    Image::factory($filename)
                                        ->resize(160, 100, Image::NONE)
                                        ->save("." . $url_prev);

                                    Image::factory($filename)
                                        ->save("." . $url);

                                    unlink($filename);
                                }
                        }
                    } else {
                        $next_operation = false;
                    }
                } catch (Exception $e) {
                    $next_operation = false;
                }
            }
        } catch (Exception $e) {

        }
        $this->redirect($_SERVER['HTTP_REFERER']);
    }


    public function action_conference()
    {
//        try {
            $next_operation = false;
            if (isset($_POST['btnsubmconference'])) {
                $auth = Auth::instance();
                $user_temp = $auth->get_user();
                $user_id = $user_temp->id;
//                try {

                    if (isset($_POST['ntitle']) && isset($_POST['npreview']) && isset($_POST['ntext'])) {
                        $next_operation = true;
                        $title = strip_tags($_POST['ntitle']);
                        $preview = Security::xss_clean($_POST['npreview']);
                        $text = Security::xss_clean($_POST['ntext']);
                        $sDate = date("Y-m-d G:i:s");
                        if ($title != "" && $preview != "") {
                            $conference = new Model_Conference();
                            $conference->values(array('user_id' => $user_id, 'date' => $sDate, 'title' => $title, 'preview' => $preview, 'text' => $text))->save();


                            if (isset($_FILES['images']) && $_FILES['images']['size'][0]>0)
                                for ($i = 0; $i < count($_FILES['images']['name']); $i++) {

                                    $image = array('name' => $_FILES['images']['name'][$i], 'tmp_name' => $_FILES['images']['tmp_name'][$i], 'size' => $_FILES['images']['size'][$i], 'error' => $_FILES['images']['error'][$i]);
                                    $articlesImage = new Model_ConferencePhotos();
                                    $articlesImage->values(array('conference_id' => $conference->pk(), 'url' => "1"))->save();

                                    $url = "/files/" . $user_id . "/conference/" . $articlesImage->pk() . ".png";
                                    $url_prev = "/files/" . $user_id . "/conference/prev_" . $articlesImage->pk() . ".png";

                                    $filename = Upload::save($image, $articlesImage->pk() . ".png", "./tmp", 0777);

                                    Image::factory($filename)
                                        ->resize(160, 100, Image::NONE)
                                        ->save("." . $url_prev);

                                    Image::factory($filename)
                                        ->save("." . $url);

                                    unlink($filename);
                                }

                            if (isset($_FILES['musics']['size']) && $_FILES['musics']['size'][0]>0)
                                for ($i = 0; $i < count($_FILES['musics']['name']); $i++) {

                                    $file = array('name' => $_FILES['musics']['name'][$i], 'tmp_name' => $_FILES['musics']['tmp_name'][$i], 'size' => $_FILES['musics']['size'][$i], 'error' => $_FILES['musics']['error'][$i]);
                                    $articlesMusic = new Model_ConferenceFiles();
                                    $articlesMusic->values(array('conference_id' => $conference->pk(), 'url' => "1"))->save();

                                    $articlesMusic->values(array('url' => "1", 'articles_id' => $conference->pk()))->save();
                                    $url = "/files/" . $user_id . "/conference";
                                    $mus_key = $articlesMusic->pk() . ".mp3";
                                    $filename = Upload::save($file, $mus_key, "." . $url, 0777);

                                }

                        }
                    } else {
                        $next_operation = false;
                    }
//                } catch (Exception $e) {
//                    $next_operation = false;
//                }
            }
//        } catch (Exception $e) {
//
//        }
        $this->redirect($_SERVER['HTTP_REFERER']);
    }

    public function action_articles()
    {
        try {
            $next_operation = false;
            if (isset($_POST['btnsubmarticles']) ) {
                $auth = Auth::instance();
                $user_temp = $auth->get_user();
                $user_id = $user_temp->id;
                try {

                    if (isset($_POST['ntitle']) && isset($_POST['npreview']) && isset($_POST['ntext'])) {
                        $next_operation = true;
                        $title = strip_tags($_POST['ntitle']);
                        $preview = Security::xss_clean($_POST['npreview']);
                        $text = Security::xss_clean($_POST['ntext']);
                        $sDate = date("Y-m-d G:i:s");
                        if ($title != "" && $preview != "") {
                            $articles = new Model_Articles();
                            $articles->values(array('user_id' => $user_id, 'date' => $sDate, 'title' => $title, 'preview' => $preview, 'text' => $text))->save();
                            if (isset($_FILES['images']) && $_FILES['images']['size'][0]>0)
                                for ($i = 0; $i < count($_FILES['images']['name']); $i++) {

                                    $image = array('name' => $_FILES['images']['name'][$i], 'tmp_name' => $_FILES['images']['tmp_name'][$i], 'size' => $_FILES['images']['size'][$i], 'error' => $_FILES['images']['error'][$i]);
                                    $articlesImage = new Model_ArticlesPhotos();
                                    $articlesImage->values(array('articles_id' => $articles->pk(), 'url' => "1"))->save();

                                    $url = "/files/" . $user_id . "/articles/" . $articlesImage->pk() . ".png";
                                    $url_prev = "/files/" . $user_id . "/articles/prev_" . $articlesImage->pk() . ".png";

                                    $filename = Upload::save($image, $articlesImage->pk() . ".png", "./tmp", 0777);

                                    Image::factory($filename)
                                        ->resize(280, 160, Image::NONE)
                                        ->save("." . $url_prev);

//                                    Image::factory($filename)
//                                        ->save("." . $url);

                                    unlink($filename);
                                }

                            if (isset($_FILES['musics']['size']) && $_FILES['musics']['size'][0]>0)
                                for ($i = 0; $i < count($_FILES['musics']['name']); $i++) {

                                    $file = array('name' => $_FILES['musics']['name'][$i], 'tmp_name' => $_FILES['musics']['tmp_name'][$i], 'size' => $_FILES['musics']['size'][$i], 'error' => $_FILES['musics']['error'][$i]);
                                    $articlesMusic = new Model_ArticlesFiles();
                                    $articlesMusic->values(array('articles_id' => $articles->pk(), 'url' => "1"))->save();

                                    $articlesMusic->values(array('url' => "1", 'articles_id' => $articles->pk()))->save();
                                    $url = "/files/" . $user_id . "/articles";
                                    $mus_key = $articlesMusic->pk() . ".mp3";
                                    $filename = Upload::save($file, $mus_key, "." . $url, 0777);

                                }
                        }
                    } else {
                        $next_operation = false;
                    }
                } catch (Exception $e) {
                    $next_operation = false;
                }
            }
        } catch (Exception $e) {
//
        }
        $this->redirect($_SERVER['HTTP_REFERER']);
    }

} // End Add
