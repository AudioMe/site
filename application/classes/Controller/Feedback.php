<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Feedback extends Controller_Template
{
    public $template = "basic/1column";

    public function action_index()
    {
        $data['title'] = "Обратная связь";
        $data_content = array();

        if (isset($_POST['btnfeedback'])) {
            $name = Arr::get($_POST, 'name', "");
            $email = Arr::get($_POST, 'email', "");
            $text = Arr::get($_POST, 'text', "");
            $useful = new Model_Useful();

            try {
                $config = new Model_Configuration();
                $from = $config->fromEmail;
                $subject = 'Вопрос на сайта audiome.ru';
                $message = "Имя пользователя: " . $name . "\nEmail: $email" . "\nТекст вопроса: " . $text;
                $useful->native_mail($config->adminEmail, $from, $subject, $message);
                $data_content['ok'] = 1;
            } catch (Exception $e) {
                $data_content['error'] = 1;
            }
        }

        $this->template->head = View::factory('elements/head', $data);
        $this->template->header = View::factory('elements/header');
        $this->template->left = View::factory('elements/left');
        //$this->template->right = View::factory('elements/right');
        $this->template->content = View::factory('pages/feedback', $data_content);
        $this->template->footer = View::factory('elements/footer');
    }

} // End FeedBack
