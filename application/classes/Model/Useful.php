<?php defined('SYSPATH') or die('No direct script access.');

class Model_Useful
{

	public function generatePassword($number)
	{
            //$number - кол-во символов в пароле
            $arr = array('a','b','c','d','e','f',
			'g','h','i','j','k','l',
			'm','n','o','p','r','s',
			't','u','v','x','y','z',
			'A','B','C','D','E','F',
			'G','H','I','J','K','L',
			'M','N','O','P','R','S',
			'T','U','V','X','Y','Z',
			'1','2','3','4','5','6',
			'7','8','9','0');

            // Генерируем пароль
		$pass = "";
		for($i = 0; $i < $number; $i++)
		{
		// Вычисляем случайный индекс массива
			$index = rand(0, count($arr) - 1);
			$pass .= $arr[$index];
		}
		return $pass;
  	}

        public function sendemail($to, $from, $subject, $message)
        {
                try
                {
                   $count = Email::send($to, $from, $subject, $message, $html = false);
                    return TRUE;
                }
                catch (Exception $e)
                {
                        echo $e->getMessage();
                        return FALSE;
                }
        }
        public function native_mail($to, $from, $subject, $message, $html = false) {        
            $headers = 'From: ' . $from . "\r\n" .
                "Content-type: text/html; charset=utf-8\r\n".
                'Reply-To: ' . $from . "\r\n" .
                "MIME-Version: 1.0\r\n".
                'X-Mailer: PHP/' . phpversion();
            mail($to, $subject, $message, $headers);
        }
}
