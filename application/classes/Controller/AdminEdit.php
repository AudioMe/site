<?php defined('SYSPATH') or die('No direct script access.');

class Controller_AdminEdit extends Controller_Template
{
    public $template = "basic/2columns";

    public function action_index()
    {


    }

    public function action_view()
    {

        $id = $this->request->param('id', -1);
        if ($id != -1) {
            $users = new Model_Users();
            $user_temp = $users->where('id', '=', $id)->find();
            $user_id = $user_temp->id;

            $studios = new Model_Studios();
            $studio = $studios->where('user_id', '=', $user_id)->find();
            $data_right['s_class'] = $studio->class;

            $metro = new Model_Metro();

            $data_content['metro'] = $metro->find_all();


            $photo = new Model_StudioPhotos();
            $music = new Model_StudioMusics();

            $data_content['photos'] = $photo->where('user_id', '=', $user_id)->find_all();
            $data_content['musics'] = $music->where('user_id', '=', $user_id)->find_all();



            $data_content['studio'] = $studio;
            $data_content['email'] = $user_temp->email;
            $data_left['other_menu'] = "";

            $works = new Model_StudioWorks();
            $studio_works = $works->where('user_id', '=', $user_id)->find_all();
            $new_array = array();
            foreach ($studio_works as $sw) {
                array_push($new_array, $sw->work);
            }
        }
        $data_right['sworks'] = $new_array;

        $data['title'] = "Редактировать";

        $this->template->head = View::factory('elements/head', $data);
        $this->template->header = View::factory('elements/header');
        $this->template->left = View::factory('elements/left', $data_left);
        $this->template->right = View::factory('elements/right_add', $data_right);
        $this->template->content = View::factory('pages/admin_edit', $data_content);
        $this->template->footer = View::factory('elements/footer');
    }

} // End Welcome
