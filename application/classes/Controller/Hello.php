<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Hello extends Controller_Template
{
    public $template = "basic/2columns";

    public function action_index()
    {
		$config = new Model_Configuration();
		$useful = new Model_Useful();
		$from = $config->fromEmail;
		$subject = 'Восстановление пароля для сайта audiome.ru';
		$email = 'tevtushok@gmail.com';
		$message = 'test';
		$useful->sendemail($email, $from, $subject, $message);
		echo 'sendto: ' . $email;
		exit;
    }

} // End Hello 
