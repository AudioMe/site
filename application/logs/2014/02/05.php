<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-02-05 12:36:33 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/admin/articles.php [ 13 ] in /var/www/antony/data/www/audiome.ru/public_html/application/views/admin/articles.php:13
2014-02-05 12:36:33 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/views/admin/articles.php(13): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/antony...', 13, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/antony/data/www/audiome.ru/public_html/application/views/basic/admin.php(30): Kohana_View->__toString()
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#7 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#11 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/views/admin/articles.php:13
2014-02-05 13:15:34 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/admin/articles.php [ 13 ] in /var/www/antony/data/www/audiome.ru/public_html/application/views/admin/articles.php:13
2014-02-05 13:15:34 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/views/admin/articles.php(13): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/antony...', 13, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/antony/data/www/audiome.ru/public_html/application/views/basic/admin.php(30): Kohana_View->__toString()
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#7 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#11 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/views/admin/articles.php:13
2014-02-05 23:35:37 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/admin/articles.php [ 13 ] in /var/www/antony/data/www/audiome.ru/public_html/application/views/admin/articles.php:13
2014-02-05 23:35:37 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/views/admin/articles.php(13): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/antony...', 13, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/antony/data/www/audiome.ru/public_html/application/views/basic/admin.php(30): Kohana_View->__toString()
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#7 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#11 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/views/admin/articles.php:13
2014-02-05 23:35:39 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/admin/articles.php [ 13 ] in /var/www/antony/data/www/audiome.ru/public_html/application/views/admin/articles.php:13
2014-02-05 23:35:39 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/views/admin/articles.php(13): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/antony...', 13, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/antony/data/www/audiome.ru/public_html/application/views/basic/admin.php(30): Kohana_View->__toString()
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#7 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#11 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/views/admin/articles.php:13