<?php defined('SYSPATH') or die('No direct script access.');
require_once(Kohana::find_file('vendor', 'securimage/securimage'));

class Controller_Registers extends Controller
{

    public function action_index()
    {
        $this->response->body('audiome.ru');
        $this->redirect("/Registers");
    }

    public function action_user()
    {
        $session = Session::instance();
        $next_operation = true;
        try {
            if (isset($_POST['sbmbuttonregister'])) {
                $register = $_POST;

                //Проверка трубуемых полей
                if (!isset($_POST['adres'])) $next_operation = false;
                if (!isset($register['phone'])) $next_operation = false;
                //if (!isset($register['metro'])) $next_operation = false;
                if (!isset($register['name'])) $next_operation = false;
                //if (!isset($register['url'])) $next_operation = false;
                if (!isset($register['area'])) $next_operation = false;
//            if (!isset($register['recorder'])) $next_operation = false;
                if (!isset($register['price'])) $next_operation = false;
                if (!isset($register['count_record'])) $next_operation = false;
                // if (!isset($register['in_park'])) $next_operation = false;
                // if (!isset($register['in_musics'])) $next_operation = false;
//            if (!isset($register['interer'])) $next_operation = false;
                if (!isset($register['fio'])) $next_operation = false;
                if (!isset($register['in_about'])) $next_operation = false;
                if (!isset($register['formreg2'])) $next_operation = false;
                if (!isset($register['email'])) $next_operation = false;
//            if (!isset($register['in_monitor'])) $next_operation = false;
                
                if (!$next_operation) {
                    echo "<h1>Введённые данные некорректны. </h1>";
                }
                $securimage = new Securimage();
                if (empty($_POST['captcha_code']) || $securimage->check($_POST['captcha_code']) == false) {
                    $next_operation = false;
                    echo 'EROR_CAPTCHA';
                    exit;
                }

                if ($next_operation) {
                    if (isset($register)) {
                        $value_array = array();
                        $auth = Auth::instance();
                        $useful = new Model_Useful();
                        $genpass = $useful->generatePassword(8);
                        $user = new Model_Users();
                        $roles = new Model_RolesUsers();




                        try {







                            $email = $register['email'];
                            $mail_count = $user->where('email', '=', $email)->count_all();
                            if ($mail_count > 0) {
                                $next_operation = false;
				echo 'USER_EXISTS';
				exit;
                            }
                        } catch (Exception $e) {
                            echo "<h1>Произошла ошибка доступа к базе данных, повторите запрос позднее.</h1>";
                        }

                        //Отправка добавление пользователя
                        try {
                            if ($next_operation) {
                                $email = $register['email'];
                                $user->values(array('email' => $email, 'username' => $email, 'password' => $auth->hash_password($genpass)))->save();
                                $last_id = $user->where('email', '=', $email);
                                $roles->values(array('user_id' => $last_id->id, 'role_id' => 1))->save();
                            }

                        } catch (Exception $e) {
                            echo "<h1>Произошла ошибка добавления нового пользователя, попробуйте повторить Ваш запрос позднее.</h1>";
                            $next_operation = false;

                        }

                        //Отправка почты
                        try {
                            if ($next_operation) {
                                $email = $register['email'];
                                $to = $register['email'];
                                $from = 'irobot@audiome.ru';
                                $subject = 'Регистрация на сайта audiome.ru';
                                $message = '<p>Ваша студия успешно размещена в каталоге сайта AudioMe.ru.</p>';
                                $message .= '<p>Вы тоже можете присоединиться к нашей команде и получить
                                    сертификат "Aссоциации студий звукозаписи", что безусловно повысит 
                                    рейтинг, укрепит Ваши позиции и престиж на рынке услуг в сфере звукозаписи.</p>';

                                $message .= '<p>При регистрации на срок более полугода и проверки достоверности 
                                    информации, Вы получаете сертификат "Ассоциации студий звукозаписи".</p>';

                                $message .='<p>Зайдите в личный кабинет и нажмите: "Присоединиться!"</p>';
                                $message .= '<p>Логин: ' . $email . '</p>' . '<p>Пароль: ' . $genpass . '</p>';
                                $useful->native_mail($email, $from, $subject, $message);
 
     
                            }
                        } catch (Exception $e) {
                            echo "<h1>Произошла ошибка отправки почты, свяжитесь с администрацией сайта.</h1>";
                            $next_operation = false;
                        }

                        //Добавление данных студии
                        try {
                            if ($next_operation) {
                                $studio = new Model_Studios();


                                $email = $register['email'];
                                $user_temp = ORM::factory('users', array('email' => $email));
                                $user_id = $user_temp->id;

                                mkdir("./files/" . $user_id . "/images/", 0777, true);
                                mkdir("./files/" . $user_id . "/musics", 0777, true);
                                mkdir("./files/" . $user_id . "/news", 0777, true);
                                mkdir("./files/" . $user_id . "/articles", 0777, true);
                                mkdir("./files/" . $user_id . "/buy", 0777, true);
                                mkdir("./files/" . $user_id . "/conference", 0777, true);

                                if (isset($_FILES['photo'])) {

                                    $filename = Upload::save($_FILES['photo'], 'temp.png', './tmp', 0777);

                                    Image::factory($filename)
                                        ->resize(120, 120, Image::NONE)
                                        ->save("./files/" . $user_id . "/" . $user_id . ".png");

                                    unlink($filename);       
                                    $avatar = "/files/" . $user_id . "/" . $user_id . ".png";
                                    $value_array['photo'] = $avatar;
                                } 


                                if (isset($_FILES['images']) && $_FILES['images']['size'][0]>0)
                                    for ($i = 0; $i < count($_FILES['images']['name']); $i++) {

                                        $image = array('name' => $_FILES['images']['name'][$i], 'tmp_name' => $_FILES['images']['tmp_name'][$i], 'size' => $_FILES['images']['size'][$i], 'error' => $_FILES['images']['error'][$i]);
                                        $articlesImage = new Model_StudioPhotos();
                                        $articlesImage->values(array('user_id' => $user_id, 'url' => $i))->save();
                                        
                                        $url = "/files/" . $user_id . "/images/" . $i . ".png";
                                        $url_prev = "/files/" . $user_id . "/images/prev_" . $i . ".png";

                                        $filename = Upload::save($image, $i . ".png", "./tmp", 0777);

                                        Image::factory($filename)
                                            ->resize(160, 100, Image::NONE)
                                            ->save("." . $url_prev);


                                        Image::factory($filename)
                                            ->resize(604)
                                            ->save("." . $url);

//                                        Image::factory($filename)
//                                            ->save("." . $url);

                                        unlink($filename);
                                    }

                                $value_array['user_id'] = $user_id;
                                if (isset($_POST['time'])){
                                    $value_array['time'] = $register['time'];
                                }
                                $value_array['address'] = $register['adres'];
                                $value_array['name'] = $register['name'];
                                $value_array['phone'] = $register['phone'];
                                $value_array['metro'] = $register['metro'];
                                // hardcoded
                                $value_array['country_id'] = 3159;
                                $value_array['region_id'] = $register['region_id'];
                                $value_array['city_id'] = $register['city_id'];
                                $value_array['url'] = $register['url'];
                                $value_array['area'] = $register['area'];
//                            $value_array['recorder'] = $register['recorder'];
                                $value_array['price'] = $register['price'];
                                $value_array['count_channel'] = $register['count_record'];
                                $value_array['microphones'] = $register['in_park'];
//                            $value_array['monitor'] = $register['in_monitor'];
                                $value_array['music_tools'] = $register['in_musics'];
//                            $value_array['interior'] = $register['interer'];

                                $value_array['fio'] = $register['fio'];
                                $value_array['more'] = $register['in_about'];
				$m_city = new Model_City();
			        $city = $m_city
				    ->where('country_id', '=', $value_array['country_id'])
				    ->where('region_id', '=', $value_array['region_id'])
				    ->where('city_id', '=', $value_array['city_id'])
				    ->find();

				if (!empty($city->name)) {	
					$params = array(
					    'geocode' => $city->name . ', ' . $value_array['address'],
					    'format'  => 'json',
					    'results' => 1,
					);
					$response = json_decode(file_get_contents('http://geocode-maps.yandex.ru/1.x/?' . http_build_query($params, '', '&')));

					if ($response->response->GeoObjectCollection->metaDataProperty->GeocoderResponseMetaData->found > 0)
					{
						list($latitude, $longitude) = explode(' ', $response->response->GeoObjectCollection->featureMember[0]->GeoObject->Point->pos);
						$value_array['latitude'] = $latitude;
						$value_array['longitude'] = $longitude;

					}
				}


                                if (isset($_POST['formreg2'])) {
                                    $formreg2 = $_POST['formreg2'];
                                    $formreg2 = str_replace('studio_type=', '', $formreg2);
                                    $formreg2 = str_replace('find_check', '', $formreg2);
                                    $formreg2 = str_replace('=on', '', $formreg2);
                                    $formreg2_array = explode('&', $formreg2);
                                    $value_array['class'] = $formreg2_array[0];


                                    for ($i = 1; $i < count($formreg2_array); $i++) {
                                        $studio_work = new Model_StudioWorks();
                                        $studio_work->values(array('user_id' => $user_id, 'work' => $formreg2_array[$i]))->save();
                                    }

                                }
                                $studio->values($value_array)->save();
                            }
                        } catch (Exception $e) {
				echo $e->getMessage();
                            echo "<h1>Произошла ошибка: не удалось добавить данные студии, попробуйте повторить позднее.</h1>";
                            $next_operation = false;
                        }

                    }
                }
            }
            if ($next_operation) {
                $this->response->body('<h1>Вы успешно зарегистрировались, пароль выслан на Ваш E-mail.</h1>');
            }
        } catch (Exception $e) {
            $this->response->body('<h1>Произошла ошибка.</h1>');
        }
    }


} // End Registers
