<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-02-18 17:38:21 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/pages/view_conference.php [ 65 ] in /var/www/audiome/data/www/audiome.ru/public_html/application/views/pages/view_conference.php:65
2014-02-18 17:38:21 --- DEBUG: #0 /var/www/audiome/data/www/audiome.ru/public_html/application/views/pages/view_conference.php(65): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/audiom...', 65, Array)
#1 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/audiom...')
#2 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/audiom...', Array)
#3 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/audiome/data/www/audiome.ru/public_html/application/views/basic/2columns.php(26): Kohana_View->__toString()
#5 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/audiom...')
#6 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/audiom...', Array)
#7 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Conference))
#11 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/audiome/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/audiome/data/www/audiome.ru/public_html/application/views/pages/view_conference.php:65
2014-02-18 18:38:10 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Profile.php [ 10 ] in /var/www/audiome/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php:10
2014-02-18 18:38:10 --- DEBUG: #0 /var/www/audiome/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php(10): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/audiom...', 10, Array)
#1 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_Profile->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/audiome/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/audiome/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php:10
2014-02-18 19:32:04 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Profile.php [ 10 ] in /var/www/audiome/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php:10
2014-02-18 19:32:04 --- DEBUG: #0 /var/www/audiome/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php(10): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/audiom...', 10, Array)
#1 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_Profile->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/audiome/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/audiome/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php:10