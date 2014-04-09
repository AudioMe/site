<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(

	'driver'       => 'File',
	'hash_method'  => 'sha256',
	'hash_key'     => NULL,
	'lifetime'     => 1209600,
	'session_type' => Session::$default,
	'session_key'  => 'auth_user',

	// Username/password combinations for the Auth File driver
	'users' => array(
		 //'admin' => 'b3154acf3a344170077d11bdb5fff31532f679a1919e716a02',
		'admin'	=> 'b867e6f1b3d9763967ab81643560f55f5193c95a6a57e7a3d70bace9580e8ec9'
	),

);
