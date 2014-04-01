<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Remind extends Controller_Template
{
    public $template = "basic/2columns";

    public function action_index()
    {
        $data['title'] = "Напомнить пароль";
        $data_content = array();
        $email = Arr::get($_POST, "email", "");
        try {
            if ($email != "") {

                $users = new Model_Users();
                $u = $users->where('email', '=', $email)->find();
                if (isset($u->id)) {
                    $useful = new Model_Useful();
                    $genpass = $useful->generatePassword(15);
                    $u->set("code", $genpass)->save();

                    $config = new Model_Configuration();
                    $from = $config->fromEmail;
                    $subject = 'Восстановление пароля для сайта audiome.ru';
                    $message = "Для восстановления пароля перейдите по ссылке: http://" . $_SERVER['HTTP_HOST'] . "/Remind/setCode/" . $genpass;
                    $useful->native_mail($email, $from, $subject, $message);

                    $data_content['message'] = "Данные для восстановления пароля отправлены на email: " . $email;

                } else {
                    $data_content['error'] = "Пользователь с таким email не найден";
                }
            }
        } catch (Exception $e) {

        }

        $this->template->head = View::factory('elements/head', $data);
        $this->template->header = View::factory('elements/header');
        $this->template->left = View::factory('elements/left');
        $this->template->right = View::factory('elements/right');
        $this->template->content = View::factory('pages/remind', $data_content);
        $this->template->footer = View::factory('elements/footer');
    }

    public function action_setCode()
    {
        $data_content = array();
        $data['title'] = "Восстановление пароля";
        $id = $this->request->param('id', -1);
        try {
            if ($id != -1) {
                $users = new Model_Users();
                $u = $users->where('code', '=', $id)->find();
                if (isset($u->id)) {
                    $auth = Auth::instance();
                    $useful = new Model_Useful();
                    $genpass = $useful->generatePassword(8);
                    $u->values(array("code" => "-1", "password" => $auth->hash_password($genpass)))->save();

                    $email = $u->email;
                    $config = new Model_Configuration();
                    $from = $config->fromEmail;
                    $subject = 'Восстановление пароля audiome.ru';
                    $message = "Ваш логин: " . $email . " Ваш новый пароль: $genpass";
                    $useful->native_mail($email, $from, $subject, $message);

                    $data_content['message'] = "Новый пароль отправлен на Ваш email: " . $email;

                } else {
                    $data_content['message'] = "Неправильная ссылка для восстановления";
                }
            }
        } catch (Exception $e) {

        }
        $this->template->head = View::factory('elements/head', $data);
        $this->template->header = View::factory('elements/header');
        $this->template->left = View::factory('elements/left');
        $this->template->right = View::factory('elements/right');
        $this->template->content = View::factory('pages/remind', $data_content);
        $this->template->footer = View::factory('elements/footer');

    }

} // End Remind
