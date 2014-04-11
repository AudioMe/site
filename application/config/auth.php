<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(

    'driver'       => 'ORM',
    'hash_method'  => 'sha256',
    'hash_key'     => '2, 4, 6, 7, 7, 15, 20, 23, 25, 30',
    'lifetime'     => 1209600,
    'session_type' => Session::$default,
    'session_key'  => 'auth_user',

	// Username/password combinations for the Auth File driver
	'users' => array(
		'admin' => '65e84be33532fb784c48129675f9eff3a682b27168c0ea744b2cf58ee02337c5',
	),

);
