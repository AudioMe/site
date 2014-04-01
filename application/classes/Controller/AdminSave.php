<?php defined('SYSPATH') or die('No direct script access.');

class Controller_AdminSave extends SuperAdminNoTemplate
{

    public function action_index()
    {
        $this->response->body('audiome.ru');
        $this->redirect("/admin");
    }

    public function action_musicDescription()
    {
        $id = Arr::get($_POST,'id',-1);
        $desc = Arr::get($_POST,'desc',"");
        if ($id != -1){

            $musics = new Model_StudioMusics();
            $mus = $musics->where('id','=', $id)->find();
            if (isset($mus->id)){
                $mus->set('description', $desc)->save();
            }
        }
    }
    public function action_delavatar() {
    $result = 'ERROR';
    $user_id = Arr::get($_GET, 'user_id', false);  
    if ($user_id) {
        try {
            $studio = new Model_Studios();
            $st = $studio->where('user_id', '=', $user_id)->find();
            if (isset($st->id)) {                    
                $array_edit = array('photo' => '');
                $st->values($array_edit)->save();
                @unlink("./files/" . $user_id . "/" . $user_id . ".png");
                $result = 'OK';
            }
        }
        catch (Exception $ex) {
            $result = $ex->getMessage();
        }
    }
    echo $result;
    }
    public function action_putavatar() {
        $user_id = Arr::get($_GET, 'user_id', false);   
        $result = 'ERROR';
        if ($user_id && isset($_FILES['photo'])) {
            try {
                $filename = Upload::save($_FILES['photo'], 'temp.png', './tmp', 0777);

                try {
                    unlink("./files/" . $user_id . "/" . $user_id . ".png");
                } catch (Exception $e) {

                }

                Image::factory($filename)
                        ->resize(120, 120, Image::NONE)
                        ->save("./files/" . $user_id . "/" . $user_id . ".png", 0777);
                $array_edit = array();
                $array_edit['photo'] = "/files/" . $user_id . "/" . $user_id . ".png";
                $studio = new Model_Studios();
                $st = $studio->where('user_id', '=', $user_id)->find();
                if (isset($st->id)) {                    
                    $st->values($array_edit)->save();
                    $result = "/files/" . $user_id . "/" . $user_id . ".png";
                }                
            } catch (Exception $e) {

            }
        }
        echo $result;   
    }
    public function action_studio()
    {
        $next_operation = true;
        if (isset($_POST['sbmbuttonedit'])) {
            $array_edit = array();
            if (isset($_POST['adres'])) {
                if (isset($_POST['user_id'])) $user_id = $_POST['user_id'];

                if ($user_id != -1) {
                    //Проверка трубуемых полей
                    if (isset($_POST['adres'])) $array_edit['address'] = $_POST['adres'];
                    if (isset($_POST['phone'])) $array_edit['phone'] = $_POST['phone'];
                    if (isset($_POST['longitude'])) $array_edit['longitude'] = $_POST['longitude'];
                    if (isset($_POST['latitude'])) $array_edit['latitude'] = $_POST['latitude'];
                    if (isset($_POST['region_id'])) $array_edit['region_id'] = $_POST['region_id'];
                    if (isset($_POST['city_id'])) $array_edit['city_id'] = $_POST['city_id'];
                    if (isset($_POST['metro'])) $array_edit['metro'] = $_POST['metro'];
                    if (isset($_POST['name'])) $array_edit['name'] = $_POST['name'];
                    if (isset($_POST['url'])) $array_edit['url'] = $_POST['url'];
                    if (isset($_POST['area'])) $array_edit['area'] = $_POST['area'];
                    if (isset($_POST['recorder'])) $array_edit['recorder'] = $_POST['recorder'];
                    if (isset($_POST['price'])) $array_edit['price'] = $_POST['price'];
                    if (isset($_POST['count_record'])) $array_edit['count_channel'] = $_POST['count_record'];
                    if (isset($_POST['in_park'])) $array_edit['microphones'] = $_POST['in_park'];
                    if (isset($_POST['in_musics'])) $array_edit['music_tools'] = $_POST['in_musics'];
                    if (isset($_POST['interer'])) $array_edit['interior'] = $_POST['interer'];
                    if (isset($_POST['fio'])) $array_edit['fio'] = $_POST['fio'];
                    if (isset($_POST['in_about'])) $array_edit['more'] = $_POST['in_about'];
                    if (isset($_POST['in_monitor'])) $array_edit['monitor'] = $_POST['in_monitor'];


                    if (isset($_POST['public']) && $_POST['public'] == "1") {
                        $array_edit['public'] = 1;
                    } else {
                        $array_edit['public'] = 0;
                    }
                                        
                    $premium_type_id = (int) Arr::get($_POST,'premium_type',0);   
                    $premium_temp = new Model_Premium();
                    $premium = $premium_temp->where('user_id','=',$user_id)->find();                    
                    if ($premium_temp->premium_type_id !== $premium_type_id) {
                        $array_edit['premium'] = $premium_type_id ? 1 : 0;
                        $premium_date = Arr::get($_POST,'premium_date',"");
                        if (isset($premium->id)){
                            $premium->set("date_end", $premium_date)->set("premium_type_id", $premium_type_id)->save();
                        }else{
                            $premium_temp->values(array('user_id' => $user_id, 'date_end' => $premium_date))->save();
                        }
                    }
                    

                    if (isset($_POST['email'])) {
                        try {
                            $user = new Model_Users();
                            $auth = Auth::instance();
                            $email = $_POST['email'];
                            $new_val = array();
                            $new_val['email'] = $email;
                            $new_val['username'] = $email;

                            $u = $user->where('id', '=', $user_id)->find();
                            $password = Arr::get($_POST, 'edit_password', '');
                            $password2 = Arr::get($_POST, 'edit_password2', '');
                            if ($password != "" && strlen($password) > 1 && $password == $password2) {
                                $new_val['password'] =  $auth->hash_password($password);
                            }

                            if (isset($u->id)) {
                                $u->values($new_val)->save();
                            }
                        } catch (Exception $e) {

                        }
                    }

                    if (isset($_POST['formreg2'])) {
                        $formreg2 = $_POST['formreg2'];
                        $formreg2 = str_replace('studio_type=', '', $formreg2);
                        $formreg2 = str_replace('find_check', '', $formreg2);
                        $formreg2 = str_replace('=on', '', $formreg2);
                        $formreg2_array = explode('&', $formreg2);
                        $array_edit['class'] = $formreg2_array[0];
                        $studio_work = new Model_StudioWorks();
                        $sws = $studio_work->where('user_id', '=', $user_id)->find_all();
                        foreach ($sws as $sw) {
                            $sw->delete();
                        }

                        for ($i = 1; $i < count($formreg2_array); $i++) {
                            $studio_work = new Model_StudioWorks();
                            $studio_work->values(array('user_id' => $user_id, 'work' => $formreg2_array[$i]))->save();
                        }

                    }

                    if (isset($_FILES['images']) && $_FILES['images']['size'][0]>0)
                        for ($i = 0; $i < count($_FILES['images']['name']); $i++) {

                            $image = array('name' => $_FILES['images']['name'][$i], 'tmp_name' => $_FILES['images']['tmp_name'][$i], 'size' => $_FILES['images']['size'][$i], 'error' => $_FILES['images']['error'][$i]);
                            $articlesImage = new Model_StudioPhotos();
                            $ni = rand(1, 5000);
                            $articlesImage->values(array('user_id' => $user_id, 'url' => $i.$ni))->save();

                            $url = "/files/" . $user_id . "/images/" . $i.$ni . ".png";
                            $url_prev = "/files/" . $user_id . "/images/prev_" . $i.$ni . ".png";

                            $filename = Upload::save($image, $i.$ni . ".png", "./tmp", 0777);

                            Image::factory($filename)
                                ->resize(160, 100, Image::NONE)
                                ->save("." . $url_prev);




                            Image::factory($filename)
                                ->save("." . $url);

//                            if ($i==(count($_FILES['images']['name'])-1)){
//                                Image::factory($filename)
//                                    ->resize(120, 120, Image::NONE)
//                                    ->save("./files/" . $user_id . "/" . $user_id . ".png");
//                                $value_array['photo'] = "/files/" . $user_id . "/" . $user_id . ".png";
//                            }
                            unlink($filename);
                        }


                    if (isset($_FILES['musics']['size']) && $_FILES['musics']['size'][0]>0)
                        for ($i = 0; $i < count($_FILES['musics']['name']); $i++) {

                            $file = array('name' => $_FILES['musics']['name'][$i], 'tmp_name' => $_FILES['musics']['tmp_name'][$i], 'size' => $_FILES['musics']['size'][$i], 'error' => $_FILES['musics']['error'][$i]);
                            $articlesMusic = new Model_StudioMusics();
                            $ni = rand(1, 5000);
                            $desc = pathinfo($_FILES['musics']['name'][$i], PATHINFO_FILENAME);
                            $articlesMusic->values(array('user_id' => $user_id, 'url' => $i.$ni, 'description' => $desc))->save();

                            $url = "/files/" . $user_id . "/musics";
                            $mus_key = $i.$ni.".mp3";
                            $filename = Upload::save($file, $mus_key, "." . $url, 0777);

                        }
                    $studio = new Model_Studios();
                    $st = $studio->where('user_id', '=', $user_id)->find();
                    if (isset($st->id)) {
                        $pub = $st->public;
                        $st->values($array_edit)->save();
                        if ($array_edit['public'] == 1 && $pub != 1) {
                        $user = new Model_Users();
                        $u = $user->where('id', '=', $user_id)->find();
                        if (isset($u->id)) {
                            $useful = new Model_Useful();
                            $message = 'Здравствуйте, это сообщение отправлено автоматически.' . "\n"
                               .'Ваша студия  ' . $st->name . ' прошла модерацию и успешно опубликована';
                            $to = $u->email;
                            $from = 'irobot@audiome.ru';
                            $subject = 'Публикация на сайта audiome.ru';
                            $useful->native_mail($email, $from, $subject, $message);

                        }
}
                    }
                }
                $this->redirect("/admin/studio/" . $user_id);
            }
        }

        $this->redirect("/admin");
    }

    public function action_comment()
    {

        if (isset($_POST['comment_id'])) {
            try {
                $id = $_POST['comment_id'];
                $text = Arr::get($_POST, 'text', '');
                $comments = new Model_Comments();
                $comment_temp = $comments->where('id', '=', $id)->find();
                if (isset($comment_temp->id)) {
                    $comment_temp->set('text', $text)->save();
                }
            } catch (Exception $e) {
                $this->redirect("/admin/comments");
            }
            $this->redirect("/admin/comment/" . $id);
        }


        $this->redirect("/admin/comments");
    }

    public function action_commentNews()
    {

        if (isset($_POST['comment_id'])) {
            try {
                $id = $_POST['comment_id'];
                $text = Arr::get($_POST, 'text', '');
                $comments = new Model_NewsComments();
                $comment_temp = $comments->where('id', '=', $id)->find();
                if (isset($comment_temp->id)) {
                    $comment_temp->set('text', $text)->save();
                }
            } catch (Exception $e) {
                $this->redirect("/admin/commentsNews");
            }
            $this->redirect("/admin/commentNews/" . $id);
        }

        $this->redirect("/admin/commentsNews");
    }

    public function action_news()
    {

        if (isset($_POST['news_id'])) {
            $id = $_POST['news_id'];
            if (isset($_POST['ntitle']) && isset($_POST['npreview']) && isset($_POST['ntext'])) {
                try {
                    $title = strip_tags($_POST['ntitle']);
                    $preview = Security::xss_clean($_POST['npreview']);
                    $text = Security::xss_clean($_POST['ntext']);

                    $news_temp = new Model_News();
                    $news = $news_temp->where('id', '=', $id)->find();
                    if (isset($news_temp->id)) {
                        $news_temp->values(array('title' => $title, 'preview' => $preview, 'text' => $text))->save();
                    }
                    if (isset($_FILES['images']) && $_FILES['images']['size'][0]>0){
                        $oImages = new Model_NewsPhotos();
                        $old_images = $oImages->where('news_id','=',$id)->find_all();
                        foreach($old_images as $old){
                            $old->delete();
                        }
                        for ($i = 0; $i < count($_FILES['images']['name']); $i++) {

                            $image = array('name' => $_FILES['images']['name'][$i], 'tmp_name' => $_FILES['images']['tmp_name'][$i], 'size' => $_FILES['images']['size'][$i], 'error' => $_FILES['images']['error'][$i]);
                            $newsImage = new Model_NewsPhotos();
                            $newsImage->values(array('news_id' => $news->pk(), 'url' => "1"))->save();

                            $url = "/files/" . $news->user_id . "/news/" . $newsImage->pk() . ".png";
                            $url_prev = "/files/" . $news->user_id . "/news/prev_" . $newsImage->pk() . ".png";

                            $filename = Upload::save($image, $newsImage->pk() . ".png", "./tmp", 0777);

                            Image::factory($filename)
                                ->resize(160, 100, Image::NONE)
                                ->save("." . $url_prev);

                            Image::factory($filename)
                                ->save("." . $url);

                            unlink($filename);
                        }
                    }
                } catch (Exception $e) {
                    $this->redirect("/admin/news");
                }
                $this->redirect("/admin/new/" . $id);
            }
        }

        $this->redirect("/admin/news");
    }

    public function action_articles()
    {

        if (isset($_POST['article_id'])) {
            $id = $_POST['article_id'];
            if (isset($_POST['ntitle']) && isset($_POST['npreview']) && isset($_POST['ntext'])) {
                try {
                    $title = strip_tags($_POST['ntitle']);
                    $preview = Security::xss_clean($_POST['npreview']);
                    $text = Security::xss_clean($_POST['ntext']);

                    $articles_temp = new Model_Articles();
                    $articles = $articles_temp->where('id', '=', $id)->find();
                    $array_edit = array('title' => $title, 'preview' => $preview, 'text' => $text);
                    if (isset($_POST['public']) && $_POST['public'] == "1") {
                        $array_edit['public'] = 1;
                    } else {
                        $array_edit['public'] = 0;
                    }

                    if (isset($_FILES['images']) && $_FILES['images']['size'][0]>0){
                        $oImages = new Model_ArticlesPhotos();
                        $old_images = $oImages->where('articles_id','=',$id)->find_all();
                        foreach($old_images as $old){
                            $old->delete();
                        }
                        for ($i = 0; $i < count($_FILES['images']['name']); $i++) {

                            $image = array('name' => $_FILES['images']['name'][$i], 'tmp_name' => $_FILES['images']['tmp_name'][$i], 'size' => $_FILES['images']['size'][$i], 'error' => $_FILES['images']['error'][$i]);
                            $articlesImage = new Model_ArticlesPhotos();


                            $articlesImage->values(array('articles_id' => $articles->pk(), 'url' => "1"))->save();

                            $url = "/files/" . $articles->user_id . "/articles/" . $articlesImage->pk() . ".png";
                            $url_prev = "/files/" . $articles->user_id . "/articles/prev_" . $articlesImage->pk() . ".png";

                            $filename = Upload::save($image, $articlesImage->pk() . ".png", "./tmp", 0777);

                            Image::factory($filename)
                                ->resize(160, 100, Image::NONE)
                                ->save("." . $url_prev);

                            Image::factory($filename)
                                ->save("." . $url);

                            unlink($filename);
                        }
                    }

                    if (isset($_FILES['musics']['size']) && $_FILES['musics']['size'][0]>0)
                        for ($i = 0; $i < count($_FILES['musics']['name']); $i++) {

                            $file = array('name' => $_FILES['musics']['name'][$i], 'tmp_name' => $_FILES['musics']['tmp_name'][$i], 'size' => $_FILES['musics']['size'][$i], 'error' => $_FILES['musics']['error'][$i]);
                            $articlesMusic = new Model_ArticlesFiles();
                            $articlesMusic->values(array('articles_id' => $articles->pk(), 'url' => "1"))->save();

                            $articlesMusic->values(array('url' => "1", 'articles_id' => $articles->pk()))->save();
                            $url = "/files/" . $articles->user_id . "/articles";
                            $mus_key = $articlesMusic->pk() . ".mp3";
                            $filename = Upload::save($file, $mus_key, "." . $url, 0777);

                        }


                    if (isset($articles_temp->id)) {
                        $articles_temp->values($array_edit)->save();
                    }


                } catch (Exception $e) {
                    $this->redirect("/admin/articles");
                }

                $this->redirect("/admin/article/" . $id);
            }
        }

        $this->redirect("/admin/articles");
    }

    public function action_commentArticles()
    {

        if (isset($_POST['comment_id'])) {
            try {
                $id = $_POST['comment_id'];
                $text = Arr::get($_POST, 'text', '');
                $comments = new Model_ArticlesComments();
                $comment_temp = $comments->where('id', '=', $id)->find();
                if (isset($comment_temp->id)) {
                    $comment_temp->set('text', $text)->save();
                }
            } catch (Exception $e) {
                $this->redirect("/admin/commentsArticles");
            }
            $this->redirect("/admin/commentArticles/" . $id);
        }

        $this->redirect("/admin/commentsArticles");
    }


    public function action_commentConference()
    {

        if (isset($_POST['comment_id'])) {
            try {
                $id = $_POST['comment_id'];
                $text = Arr::get($_POST, 'text', '');
                $comments = new Model_ConferenceComments();
                $comment_temp = $comments->where('id', '=', $id)->find();
                if (isset($comment_temp->id)) {
                    $comment_temp->set('text', $text)->save();
                }
            } catch (Exception $e) {
                $this->redirect("/admin/commentsConference");
            }
            $this->redirect("/admin/commentConference/" . $id);
        }


        $this->redirect("/admin/commentsConference");
    }

    public function action_commentBuy()
    {

        if (isset($_POST['comment_id'])) {
            try {
                $id = $_POST['comment_id'];
                $text = Arr::get($_POST, 'text', '');
                $comments = new Model_BuyComments();
                $comment_temp = $comments->where('id', '=', $id)->find();
                if (isset($comment_temp->id)) {
                    $comment_temp->set('text', $text)->save();
                }
            } catch (Exception $e) {
                $this->redirect("/admin/commentsBuy");
            }
            $this->redirect("/admin/commentBuy/" . $id);
        }


        $this->redirect("/admin/commentsBuy");
    }

    public function action_conference()
    {

        if (isset($_POST['conference_id'])) {

            $id = $_POST['conference_id'];
            if (isset($_POST['ntitle']) && isset($_POST['npreview']) && isset($_POST['ntext'])) {
                try {
                    $title = strip_tags($_POST['ntitle']);
                    $preview = Security::xss_clean($_POST['npreview']);
                    $text = Security::xss_clean($_POST['ntext']);

                    $conference_temp = new Model_Conference();
                    $conference = $conference_temp->where('id', '=', $id)->find();
                    if (isset($conference->id)) {
                        $conference_temp->values(array('title' => $title, 'preview' => $preview, 'text' => $text))->save();
                    }

                    if (isset($_FILES['images']) && $_FILES['images']['size'][0]>0){
                        $oImages = new Model_ConferencePhotos();
                        $old_images = $oImages->where('conference_id','=',$id)->find_all();
                        foreach($old_images as $old){
                            $old->delete();
                        }
                        for ($i = 0; $i < count($_FILES['images']['name']); $i++) {

                            $image = array('name' => $_FILES['images']['name'][$i], 'tmp_name' => $_FILES['images']['tmp_name'][$i], 'size' => $_FILES['images']['size'][$i], 'error' => $_FILES['images']['error'][$i]);
                            $articlesImage = new Model_ConferencePhotos();
                            $articlesImage->values(array('conference_id' => $conference->pk(), 'url' => "1"))->save();

                            $url = "/files/" . $conference->user_id . "/conference/" . $articlesImage->pk() . ".png";
                            $url_prev = "/files/" . $conference->user_id . "/conference/prev_" . $articlesImage->pk() . ".png";

                            $filename = Upload::save($image, $articlesImage->pk() . ".png", "./tmp", 0777);

                            Image::factory($filename)
                                ->resize(160, 100, Image::NONE)
                                ->save("." . $url_prev);

                            Image::factory($filename)
                                ->save("." . $url);

                            unlink($filename);
                        }
                    }

                    if (isset($_FILES['musics']['size']) && $_FILES['musics']['size'][0]>0)
                        for ($i = 0; $i < count($_FILES['musics']['name']); $i++) {

                            $file = array('name' => $_FILES['musics']['name'][$i], 'tmp_name' => $_FILES['musics']['tmp_name'][$i], 'size' => $_FILES['musics']['size'][$i], 'error' => $_FILES['musics']['error'][$i]);
                            $articlesMusic = new Model_ConferenceFiles();
                            $articlesMusic->values(array('conference_id' => $conference->pk(), 'url' => "1"))->save();

                            $articlesMusic->values(array('url' => "1", 'articles_id' => $conference->pk()))->save();
                            $url = "/files/" . $conference->user_id . "/conference";
                            $mus_key = $articlesMusic->pk() . ".mp3";
                            $filename = Upload::save($file, $mus_key, "." . $url, 0777);

                        }


                } catch (Exception $e) {
                    $this->redirect("/admin/conferences");
                }
                $this->redirect("/admin/conference/" . $id);
            }
        }


        $this->redirect("/admin/conferences");
    }

    public function action_buy()
    {

        if (isset($_POST['buy_id'])) {
            $id = $_POST['buy_id'];
            if (isset($_POST['ntitle']) && isset($_POST['npreview']) && isset($_POST['ntext'])) {
                try {
                    $title = strip_tags($_POST['ntitle']);
                    $preview = Security::xss_clean($_POST['npreview']);
                    $text = Security::xss_clean($_POST['ntext']);
                    $price = Security::xss_clean($_POST['nprice']);

                    $buys_temp = new Model_Buy();
                    $buy = $buys_temp->where('id', '=', $id)->find();
                    if (isset($buy->id)) {
                        $buy->values(array('title' => $title, 'price' => $price, 'preview' => $preview, 'text' => $text))->save();
                    }

                    if (isset($_FILES['images']) && $_FILES['images']['size'][0]>0){
                        $oImages = new Model_BuyPhotos();
                        $old_images = $oImages->where('buy_id','=',$id)->find_all();
                        foreach($old_images as $old){
                            $old->delete();
                        }
                        for ($i = 0; $i < count($_FILES['images']['name']); $i++) {

                            $image = array('name' => $_FILES['images']['name'][$i], 'tmp_name' => $_FILES['images']['tmp_name'][$i], 'size' => $_FILES['images']['size'][$i], 'error' => $_FILES['images']['error'][$i]);
                            $articlesImage = new Model_BuyPhotos();
                            $articlesImage->values(array('buy_id' => $buy->pk(), 'url' => "1"))->save();

                            $url = "/files/" . $buy->user_id . "/buy/" . $articlesImage->pk() . ".png";
                            $url_prev = "/files/" . $buy->user_id . "/buy/prev_" . $articlesImage->pk() . ".png";

                            $filename = Upload::save($image, $articlesImage->pk() . ".png", "./tmp", 0777);

                            Image::factory($filename)
                                ->resize(160, 100, Image::NONE)
                                ->save("." . $url_prev);

                            Image::factory($filename)
                                ->save("." . $url);

                            unlink($filename);
                        }
                    }
                } catch (Exception $e) {
                    $this->redirect("/admin/buys");
                }
                $this->redirect("/admin/buy/" . $id);
            }
        }


        $this->redirect("/admin/buys");
    }

    public function action_blacklist()
    {

        if (isset($_POST['blacklist_id'])) {
            $id = $_POST['blacklist_id'];
            if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['comment'])) {
                try {
                    $name = strip_tags($_POST['name']);
                    $contacts = strip_tags($_POST['phone']);
                    $text = strip_tags($_POST['comment']);


                    $blacklist = new Model_Blacklist();
                    $blacklist_temp = $blacklist->where('id', '=', $id)->find();
                    if (isset($blacklist_temp->id)) {
                        $blacklist_temp->values(array('name' => $name, 'contacts' => $contacts, 'text' => $text))->save();
                    }
                } catch (Exception $e) {
                    $this->redirect("/admin/blacklists");
                }
                $this->redirect("/admin/blacklist/" . $id);
            }
        }

        $this->redirect("/admin/blacklists");
    }

    public function action_discount()
    {

        if (isset($_POST['discount_id'])) {
            $id = $_POST['discount_id'];
            if (isset($_POST['size']) && isset($_POST['date_start']) && isset($_POST['date_end']) && isset($_POST['comment'])) {
                try {
                    $size = strip_tags($_POST['size']);
                    $date_start = strip_tags($_POST['date_start']);
                    $date_end = strip_tags($_POST['date_end']);
                    $comment = strip_tags($_POST['comment']);


                    $discount = new Model_Discounts();
                    $discount_temp = $discount->where('id', '=', $id)->find();
                    if (isset($discount_temp->id)) {
                        $discount_temp->values(array('size' => $size, 'date_start' => $date_start, 'date_end' => $date_end, 'stipulation' => $comment))->save();
                    }
                } catch (Exception $e) {
                    $this->redirect("/admin/discounts");
                }
                $this->redirect("/admin/coupon/" . $id);
            }
        }


        $this->redirect("/admin/discounts");
    }

    public function action_partners()
    {

        if (isset($_POST['ntext'])) {
            try {
                $text = $_POST['ntext'];

                $page = new Model_Pages();
                $page_temp = $page->where('id', '=', 1)->find();
                if (isset($page_temp->id)) {
                    $page_temp->values(array('partner' => $text))->save();
                }
            } catch (Exception $e) {
                $this->redirect("/admin/partners");
            }
            $this->redirect("/admin/partners");
        }


        $this->redirect("/admin/partners");
    }

    public function action_advert()
    {

        if (isset($_POST['ntext'])) {

            try {
                $text = $_POST['ntext'];

                $page = new Model_Pages();
                $page_temp = $page->where('id', '=', 1)->find();
                if (isset($page_temp->id)) {
                    $page_temp->values(array('advert' => $text))->save();
                }
            } catch (Exception $e) {
                $this->redirect("/admin/adverts");
            }
            $this->redirect("/admin/adverts");
        }


        $this->redirect("/admin/adverts");
    }

    public function action_contacts()
    {

        if (isset($_POST['ntext'])) {

            try {
                $text = $_POST['ntext'];

                $page = new Model_Pages();
                $page_temp = $page->where('id', '=', 1)->find();
                if (isset($page_temp->id)) {
                    $page_temp->values(array('contacts' => $text))->save();
                }
            } catch (Exception $e) {
                $this->redirect("/admin/contacts");
            }
            $this->redirect("/admin/contacts");
        }


        $this->redirect("/admin/contacts");
    }

    public function action_about()
    {

        if (isset($_POST['ntext'])) {

            try {
                $text = $_POST['ntext'];

                $page = new Model_Pages();
                $page_temp = $page->where('id', '=', 1)->find();
                if (isset($page_temp->id)) {
                    $page_temp->values(array('about' => $text))->save();
                }
            } catch (Exception $e) {
                $this->redirect("/admin/about");
            }
            $this->redirect("/admin/about");
        }


        $this->redirect("/admin/about");
    }

    public function action_toc()
    {

        if (isset($_POST['ntext'])) {

            try {
                $text = $_POST['ntext'];

                $page = new Model_Pages();
                $page_temp = $page->where('id', '=', 1)->find();
                if (isset($page_temp->id)) {
                    $page_temp->values(array('toc' => $text))->save();
                }
            } catch (Exception $e) {
                $this->redirect("/admin/toc");
            }
            $this->redirect("/admin/toc");
        }


        $this->redirect("/admin/toc");
    }

    public function action_user()
    {
        if (isset($_POST['btnuseredit'])) {


            $array_edit = array();
            $auth = Auth::instance();
            $user_id = $_POST['user_id'];
            $email = Arr::get($_POST, 'email', '-1');
            $password = Arr::get($_POST, 'password', '-1');
            $password2 = Arr::get($_POST, 'password2', '-1');
            if ($password != $password2) {
                $this->redirect("/admin/user/" . $user_id . "?error=2");
            } else {
                if ($password != "" && strlen($password) > 1) {
                    $array_edit['password'] = $auth->hash_password($password);
                }
            }
            if ($email != -1 && strlen($email) >= 5) {
                $array_edit['email'] = $email;
            }
            try {
                $user_temp = $auth->get_user();


                $users = new Model_Users();
                $user = $users->where('id', '=', $user_id)->find();


                $user->values($array_edit)->save();
            } catch (Exception $e) {
                $this->redirect("/admin/user/" . $user_id . "?error=1");
            }
        }
        $this->redirect("/admin/user/" . $user_id);
    }


    public function action_addUser()
    {
        if (isset($_POST['btnuseredit'])) {


            $array_edit = array();
            $auth = Auth::instance();
            $email = Arr::get($_POST, 'email', '-1');
            $username = Arr::get($_POST, 'username', '-1');
            $password = Arr::get($_POST, 'password', '-1');
            $password2 = Arr::get($_POST, 'password2', '-1');
            if ($password != $password2) {
                $this->redirect("/admin/addUser?error=2");
            } else {
                if ($password != "" && strlen($password) > 1) {
                    $array_edit['password'] = $auth->hash_password($password);
                }
            }
            if ($email != -1 && strlen($email) >= 5) {
                $array_edit['email'] = $email;
            } else {
                $this->redirect("/admin/addUser?error=3");
            }

            if ($username != -1 && strlen($username) >= 3) {
                $array_edit['username'] = $username;
            } else {
                $this->redirect("/admin/addUser?error=4");
            }

            try {
                $users = new Model_Users();
                $users->values($array_edit)->save();
                $user_id = $users->where('email', '=', $email);
                if (isset($user_id->id)) {
                    $roles = new Model_RolesUsers();
                    $roles->values(array('user_id' => $user_id->id, 'role_id' => 1))->save();
                    $roles = new Model_RolesUsers();
                    $roles->values(array('user_id' => $user_id->id, 'role_id' => 2))->save();
                }

            } catch (Exception $e) {
                $this->redirect("/admin/addUser?error=1");
            }
        }

        $this->redirect("/admin/users");
    }

    public function action_work()
    {

        if (isset($_POST['work_id'])) {

            try {
                $name = $_POST['name'];
                $id = $_POST['work_id'];

                $work = new Model_Work();
                $work_temp = $work->where('id', '=', $id)->find();
                if (isset($work_temp->id)) {
                    $work_temp->values(array('name' => $name))->save();
                }
            } catch (Exception $e) {
                $this->redirect("/admin/works");
            }
            $this->redirect("/admin/works");
        }


        $this->redirect("/admin/works");
    }

    public function action_addWork()
    {

        if (isset($_POST['name'])) {

            try {
                $name = $_POST['name'];

                $work = new Model_Work();

                $work->values(array('name' => $name))->save();
            } catch (Exception $e) {
                $this->redirect("/admin/works");
            }
            $this->redirect("/admin/works");
        }


        $this->redirect("/admin/works");
    }

    public function action_works()
    {

        if (isset($_POST['works_sort'])) {

            try {
                $count_works = Arr::get($_POST,'count_works',0);
                for ($i = 1; $i <= $count_works; $i++){
                    if (isset($_POST['wid'.$i]) && isset($_POST['wsort'.$i])){
                        $id = $_POST['wid'.$i];
                        $sort = $_POST['wsort'.$i];

                        $work = new Model_Work();
                        $work_temp = $work->where('id','=',$id)->find();
                        if (isset($work_temp->sort)){
                            $work_temp->set('sort',$sort)->save();
                        }
                    }
                }

            } catch (Exception $e) {
                $this->redirect("/admin/works");
            }
            $this->redirect("/admin/works");
        }


        $this->redirect("/admin/works");
    }
} // End AdminSave
