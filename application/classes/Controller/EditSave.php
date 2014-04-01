<?php defined('SYSPATH') or die('No direct script access.');

class Controller_EditSave extends AdminPagesNoTemplate
{

    public function action_index()
    {
        $this->response->body('audiome.ru');
        $this->redirect("/Edit");
    }

    public function action_musicDescription()
    {
        $id = Arr::get($_POST,'id',-1);
        $desc = Arr::get($_POST,'desc',"");
        if ($id != -1){
            $auth = Auth::instance();
            $user_temp = $auth->get_user();
            $user_id = $user_temp->id;


            $musics = new Model_StudioMusics();
            $mus = $musics->where('user_id','=', $user_id)->where('id','=', $id)->find();
            if (isset($mus->id)){
                $mus->set('description', $desc)->save();
            }
        }
    }
    public function action_delAva() {
        $auth = Auth::instance();
        $result = 'ERROR';
        if ($user_temp = $auth->get_user()) {
            $user_id = $user_temp->id;
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

    public function action_loadAvatar() {
        $result = 'ERROR';
        $auth = Auth::instance();
        if ($user_temp = $auth->get_user()) {        
            if (isset($_FILES['photo'])) {
                $user_id = $user_temp->id;
                try {
                    $tmp_name = $user_id . '_tmp_.png';
                    $res = Upload::save($_FILES['photo'], $tmp_name, './tmp', 0777);
                    $result = '/tmp/' . $tmp_name;
                } catch (Exception $e) {

                }
            }
        }
        echo $result;        

    }
    
    public function action_studioavatar() {
        $result = 'ERROR';
        $auth = Auth::instance();
        if ($user_temp = $auth->get_user()) {        
            if (isset($_FILES['photo'])) {
                $user_id = $user_temp->id;
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
        }
        echo $result;        
    }
    private function _printJson($json) {
	echo json_encode($json, true);
	exit;
    }
    public function action_studio()
    {
	$is_ajax = (bool) Arr::get($_GET, 'ajax', false);
	if ($is_ajax) {
		$response = array('code' => 1, 'message' => 'fault');
	}
        try {
            $next_operation = true;
            if (isset($_POST['sbmbuttonedit'])) {
                $array_edit = array();
                $auth = Auth::instance();
                $user_temp = $auth->get_user();
                $user_id = $user_temp->id;


                //Проверка трубуемых полей
                if (isset($_POST['region_id'])) $array_edit['region_id'] = strip_tags($_POST['region_id']);
                if (isset($_POST['city_id'])) $array_edit['city_id'] = strip_tags($_POST['city_id']);
                if (isset($_POST['adres'])) $array_edit['address'] = strip_tags($_POST['adres']);
                if (isset($_POST['phone'])) $array_edit['phone'] = strip_tags($_POST['phone']);
                if (isset($_POST['metro'])) $array_edit['metro'] = strip_tags($_POST['metro']);
                if (isset($_POST['name'])) $array_edit['name'] = strip_tags($_POST['name']);
                if (isset($_POST['url'])) $array_edit['url'] = strip_tags($_POST['url']);
                if (isset($_POST['area'])) $array_edit['area'] = strip_tags($_POST['area']);
                if (isset($_POST['price'])) $array_edit['price'] = strip_tags($_POST['price']);
                if (isset($_POST['count_record'])) $array_edit['count_channel'] = strip_tags($_POST['count_record']);
                if (isset($_POST['in_park'])) $array_edit['microphones'] = strip_tags($_POST['in_park']);
                if (isset($_POST['in_musics'])) $array_edit['music_tools'] = strip_tags($_POST['in_musics']);
                if (isset($_POST['fio'])) $array_edit['fio'] = strip_tags($_POST['fio']);
                if (isset($_POST['in_about'])) $array_edit['more'] = strip_tags($_POST['in_about']);


                if (isset($_POST['email'])) {
                    try {
                        $user = new Model_Users();
                        $email = $_POST['email'];

                        $new_val = array();
                        $new_val['email'] = $email;
                        $new_val['username'] = $email;
                        $u = $user->where('id', '=', $user_id)->find();
			$cur_password = Arr::get($_POST, 'cur_password', '');
                        $password = Arr::get($_POST, 'edit_password', '');
                        $password2 = Arr::get($_POST, 'edit_password2', '');

                        if (isset($u->id)) {
			    if (strlen($cur_password) && 
			    	$auth->hash_password($cur_password) != $u->password) { 
				    $response = array('code' => 2, 'message' => 'bad_cur_pwd');
				    $this->_printJson($response);
			    }
			    else if (strlen($password) && $password == $password2) {
				    $new_val['password'] =  $auth->hash_password($password);
				    $u->values($new_val)->save();
				    $response = array('code' => 0, 'message' => 'success');
				    $this->_printJson($response);
			    }
                        }
                    } catch (Exception $e) {
			$response = array('code' => $e->getCode(),
						'message' => $e->getMessage()
					);	
		    $this->_printJson($response);
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
                            ->resize(604)
                            ->save("." . $url);


//                        Image::factory($filename)
//                            ->save("." . $url);

//                        if ($i==(count($_FILES['images']['name'])-1)){
//                            Image::factory($filename)
//                                ->resize(120, 120, Image::NONE)
//                                ->save("./files/" . $user_id . "/" . $user_id . ".png");
//                            $value_array['photo'] = "/files/" . $user_id . "/" . $user_id . ".png";
//                        }
                        unlink($filename);
                    }

                if (isset($_FILES['musics']['size']) && $_FILES['musics']['size'][0]>0)
                    for ($i = 0; $i < count($_FILES['musics']['name']); $i++) {

                        $file = array('name' => $_FILES['musics']['name'][$i], 'tmp_name' => $_FILES['musics']['tmp_name'][$i], 'size' => $_FILES['musics']['size'][$i], 'error' => $_FILES['musics']['error'][$i]);
                        $desc = pathinfo($_FILES['musics']['name'][$i], PATHINFO_FILENAME);
                        $articlesMusic = new Model_StudioMusics();
                        $ni = rand(1, 5000);
                        $articlesMusic->values(array('user_id' => $user_id, 'url' => $i.$ni, 'description' => $desc))->save();

                        $url = "/files/" . $user_id . "/musics";
                        $mus_key = $i.$ni.".mp3";
                        $filename = Upload::save($file, $mus_key, "." . $url, 0777);

                    }




                $studio = new Model_Studios();
                $st = $studio->where('user_id', '=', $user_id)->find();
                if (isset($st->id)) {
                    //$array_edit['public'] = 0;
                    $st->values($array_edit)->save();
		    $response = array('code' => 0, 'message' => 'success');
                }


            }
        } catch (Exception $e) {
	    if ($is_ajax) {
			$response = array('code' => $e->getCode(),
						'message' => $e->getMessage()
					);	
	    	$this->_printJson($response);
		}
		else
            		$this->redirect("/Edit");
        }
	if ($is_ajax) {
	    	$this->_printJson($response);
	}
	else
        	$this->redirect("/Edit");
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
                        $news_id = -1;
                        if (isset($_POST['news_id'])){
                            $news_id = $_POST['news_id'];
                        }
                        if ($title != "" && $preview != "" && $news_id != -1) {
                            $n = new Model_News();
                            $news = $n->where('id','=', $news_id)->find();
                            $news->values(array( 'date' => $sDate, 'title' => $title, 'preview' => $preview, 'text' => $text))->save();
                            if (isset($_FILES['images']) && $_FILES['images']['size'][0]>0){
                                $oImages = new Model_NewsPhotos();
                                $old_images = $oImages->where('news_id','=',$news_id)->find_all();
                                foreach($old_images as $old){
                                    $old->delete();
                                }
                                for ($i = 0; $i < count($_FILES['images']['name']); $i++) {

                                    $image = array('name' => $_FILES['images']['name'][$i], 'tmp_name' => $_FILES['images']['tmp_name'][$i], 'size' => $_FILES['images']['size'][$i], 'error' => $_FILES['images']['error'][$i]);
                                    $newsImage = new Model_NewsPhotos();
                                    $newsImage->values(array('news_id' => $news->pk(), 'url' => "1"))->save();

                                    $url = "/files/" . $user_id . "/news/" . $newsImage->pk() . ".png";
                                    $url_prev = "/files/" . $user_id . "/news/prev_" . $newsImage->pk() . ".png";

                                    $filename = Upload::save($image, $newsImage->pk() . ".png", "./tmp", 0777);

                                    Image::factory($filename)
                                        ->resize(160, 100, Image::NONE)
                                        ->save("." . $url_prev);

                                    Image::factory($filename)
                                        ->save("." . $url);

                                    unlink($filename);
                                }
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
                        $id = -1;
                        if (isset($_POST['articles_id'])){
                            $id = $_POST['articles_id'];
                        }
                        if ($title != "" && $preview != "" && $id != -1) {
                            $articles = new Model_Articles();
                            $article = $articles->where('id','=',$id)->find();
                            $article->values(array( 'date' => $sDate, 'title' => $title, 'preview' => $preview, 'text' => $text))->save();
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

                                    $url = "/files/" . $user_id . "/articles/" . $articlesImage->pk() . ".png";
                                    $url_prev = "/files/" . $user_id . "/articles/prev_" . $articlesImage->pk() . ".png";

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

    public function action_conference()
    {
        try {
            $next_operation = false;
            if (isset($_POST['btnsubmconference'])) {
                $auth = Auth::instance();
                $user_temp = $auth->get_user();
                $user_id = $user_temp->id;
                try {
                    $id = -1;
                    if (isset($_POST['conference_id'])){}
                    $id = $_POST['conference_id'];

                    if (isset($_POST['ntitle']) && isset($_POST['npreview']) && $id != -1) {
                        $next_operation = true;
                        $title = strip_tags($_POST['ntitle']);
                        $preview = Security::xss_clean($_POST['npreview']);
                        $text = Security::xss_clean($_POST['ntext']);
                        $sDate = date("Y-m-d G:i:s");
                        if ($title != "" && $preview != "") {
                            $conf = new Model_Conference();
                            $conference = $conf->where('id','=', $id)->find();
                            $conference->values(array('date' => $sDate, 'title' => $title, 'preview' => $preview, 'text' => $text))->save();


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
                } catch (Exception $e) {
                    $next_operation = false;
                }
            }
        } catch (Exception $e) {

        }
        $this->redirect($_SERVER['HTTP_REFERER']);
    }


    public function action_buy()
    {
        try {
            $next_operation = false;
            if (isset($_POST['btnsubmnews'])) {
                $auth = Auth::instance();
                $user_temp = $auth->get_user();
                $user_id = $user_temp->id;
                try {

                    if (isset($_POST['ntitle']) && isset($_POST['npreview']) && isset($_POST['ntext']) && isset($_POST['nprice'])) {
                        $next_operation = true;
                        $title = strip_tags($_POST['ntitle']);
                        $preview = Security::xss_clean($_POST['npreview']);
                        $currency = Security::xss_clean($_POST['currency']);
                        $price = strip_tags($_POST['nprice']);
                        $text = Security::xss_clean($_POST['ntext']);
                        $sDate = date("Y-m-d G:i:s");
                        $id = Arr::get($_POST,"buy_id", -1);

                        if ($title != "" && $preview != "" && $id != -1) {
                            $b = new Model_Buy();
                            $buy = $b->where('id','=', $id)->find();
                            $buy->values(array( 'date' => $sDate, 'title' => $title, 'price' => $price, 'currency_id' => $currency, 'preview' => $preview, 'text' => $text))->save();

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

        if (isset($_POST['discount_id'])) {
            $id = $_POST['discount_id'];
            $auth = Auth::instance();
            $user_temp = $auth->get_user();
            $user_id = $user_temp->id;
            if (isset($_POST['size']) && isset($_POST['date_start']) && isset($_POST['date_end']) && isset($_POST['comment'])) {
                try {
                    $size = strip_tags($_POST['size']);
                    $date_start = strip_tags($_POST['date_start']);
                    $date_end = strip_tags($_POST['date_end']);
                    $comment = strip_tags($_POST['comment']);


                    $discount = new Model_Discounts();
                    $discount_temp = $discount->where('id', '=', $id)->where('user_id','=',$user_id)->find();
                    if (isset($discount_temp->id)) {
                        $discount_temp->values(array('size' => $size, 'date_start' => $date_start, 'date_end' => $date_end, 'stipulation' => $comment))->save();
                    }
                } catch (Exception $e) {
                    $this->redirect("/discount");
                }
                $this->redirect("/edit/coupon/" . $id);
            }
        }


        $this->redirect("/discount");
    }

    public function action_blacklist()
    {

        if (isset($_POST['blacklist_id'])) {
            $id = $_POST['blacklist_id'];
            $auth = Auth::instance();
            $user_temp = $auth->get_user();
            $user_id = $user_temp->id;
            if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['comment'])) {
                try {
                    $name = strip_tags($_POST['name']);
                    $contacts = strip_tags($_POST['phone']);
                    $text = strip_tags($_POST['comment']);


                    $blacklist = new Model_Blacklist();
                    $blacklist_temp = $blacklist->where('id', '=', $id)->where('user_id','=',$user_id)->find();
                    if (isset($blacklist_temp->id)) {
                        $blacklist_temp->values(array('name' => $name, 'contacts' => $contacts, 'text' => $text))->save();
                    }
                } catch (Exception $e) {
                    $this->redirect("/blacklists");
                }
                $this->redirect("/edit/blacklist/" . $id);
            }
        }

        $this->redirect("/admin/blacklists");
    }
} // End Welcome
