<?php defined('SYSPATH') or die('No direct script access.');

class Controller_AdminEditSave extends Controller
{

    public function action_index()
    {
        $this->response->body('audiome.ru');
    }

    public function action_studio()
    {
        $next_operation = true;
        if (isset($_POST['sbmbuttonedit'])) {
            $array_edit = array();

            $user_id = $this->request->param('id', -1);
            if ($user_id != -1) {
                //Проверка трубуемых полей
                if (isset($_POST['adres'])) $array_edit['address'] = $_POST['adres'];
                if (isset($_POST['phone'])) $array_edit['phone'] = $_POST['phone'];
                if (isset($_POST['longitude'])) $array_edit['longitude'] = $_POST['longitude'];
                if (isset($_POST['latitude'])) $array_edit['latitude'] = $_POST['latitude'];
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

                if (isset($_FILES['photo']) && $_FILES['photo']['size'] > 100) {
                    try {
                        $filename = Upload::save($_FILES['photo'], 'temp.png', './tmp', 0777);

                        try {
                            unlink("./files/" . $user_id . "/" . $user_id . ".png");
                        } catch (Exception $e) {

                        }
                        Image::factory($filename)
                            ->resize(200, 130, Image::NONE)
                            ->save("./files/" . $user_id . "/" . $user_id . ".png");

                        unlink($filename);
                        $array_edit['photo'] = "/files/" . $user_id . "/" . $user_id . ".png";
                    } catch (Exception $e) {
                    }
                }

                $studio = new Model_Studios();
                $st = $studio->where('user_id', '=', $user_id)->find();
                if (isset($st->id)) {
                    $array_edit['public'] = 1;
                                        
                    $newpack = (int) $this->request->query('premium_type');
                    $cur_pack = (int) Model_Premium::getUserPackage($user_id, 'premium_type_id');
                    if ($cur_pack != $newpack || !$cur_pack) {
                        $array_edit['premium_type_id'] = $newpack;
                    }
                    $st->values($array_edit)->save();
                }
            }

        }
        $this->redirect("/admin");
    }
} // End Welcome
