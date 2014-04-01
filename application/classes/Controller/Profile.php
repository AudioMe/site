<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Profile extends Controller_Template
{
    public $template = "basic/2columns";

    public function action_index() {
        $auth = Auth::instance();
        $user_temp = $auth->get_user();
        $id = $user_temp->id;
        if (!$id || $auth->logged_in('admin')) {
            $this->redirect("/register");
        }
        try {
            if ($id != -1) {
                $user_temp = new Model_Users($id);

                $studio = new Model_Studios();
                $photo = new Model_StudioPhotos();
                $music = new Model_StudioMusics();
                $works = new Model_StudioWorks();
                $metro = new Model_Metro();
                $m_city = new Model_City();
                $comments = new Model_Comments();
                $work_str = "";


                $studio_temp = $studio->where('user_id', '=', $id)->find();
                $count_view = $studio_temp->view + 1;
                $studio_temp->set('view', $count_view)->save();
                $work_temp = $works->where('user_id', '=', $id)->find_all();
                $comments_temp = $comments->where('user_id', '=', $id)->find_all();
                $work_array = array();
                $city = $m_city
                    ->where('country_id', '=', $studio_temp->country_id)
                    ->where('region_id', '=', $studio_temp->region_id)
                    ->where('city_id', '=', $studio_temp->city_id)
                    ->find();
                foreach ($work_temp as $w) {
                    $w_temp = new Model_Work($w->work);
                    array_push($work_array, $w_temp);
                }
					
                $data['title'] = $studio_temp->name;
                $data_content['social_title'] = $studio_temp->name;
                $data_content['studio_id'] = $id;
                $data_content['metro'] = $studio_temp->metro;
                $data_content['city'] = $city;
                $data_content['email'] = $user_temp->email;
                $data_content['work'] = $work_array;
                $data_content['comments'] = $comments_temp;
                
                $studio_url =  $studio_temp->url;
                if ( 0 !== strpos($studio_url, 'http://')) {
                    $studio_url = 'http://' . $studio_url;
                }
                $data_content['studio_url'] = $studio_url;
                $data_content['studio'] = $studio_temp;
                $data_content['photos'] = $photo->where('user_id', '=', $id)->find_all();
                $data_content['musics'] = $music->where('user_id', '=', $id)->find_all();
                $data_right['profile'] = true;
                $data_header['profile'] = true;

                $this->template->head = View::factory('elements/head', $data);
                $this->template->header = View::factory('elements/header', $data_header);
                $this->template->left = View::factory('elements/left');
                $this->template->right = View::factory('elements/right', $data_right);
                $this->template->content = View::factory('pages/profile', $data_content);
                $this->template->footer = View::factory('elements/footer');

            } else {
                $this->redirect("/");
            }

        } catch (Exception $e) {
		echo $e->getMessage();die;
            $this->redirect("/");
        }
    }

} // End Studio
