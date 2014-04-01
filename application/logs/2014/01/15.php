<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-15 05:17:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: HTTP_REFERER ~ APPPATH/classes/Controller/Auth.php [ 20 ] in /var/www/antony/data/www/audiome.ru/application/classes/Controller/Auth.php:20
2014-01-15 05:17:39 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Auth.php(20): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/antony...', 20, Array)
#1 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Auth->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#4 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/antony/data/www/audiome.ru/application/classes/Controller/Auth.php:20