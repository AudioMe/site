<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-04 00:05:09 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/pages/view_articles.php [ 95 ] in /var/www/antony/data/www/audiome.ru/application/views/pages/view_articles.php:95
2013-12-04 00:05:09 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/application/views/pages/view_articles.php(95): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/antony...', 95, Array)
#1 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#2 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/antony/data/www/audiome.ru/application/views/basic/3columns.php(24): Kohana_View->__toString()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Articles))
#11 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/antony/data/www/audiome.ru/application/views/pages/view_articles.php:95
2013-12-04 00:05:11 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/pages/view_articles.php [ 95 ] in /var/www/antony/data/www/audiome.ru/application/views/pages/view_articles.php:95
2013-12-04 00:05:11 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/application/views/pages/view_articles.php(95): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/antony...', 95, Array)
#1 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#2 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/antony/data/www/audiome.ru/application/views/basic/3columns.php(24): Kohana_View->__toString()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Articles))
#11 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/antony/data/www/audiome.ru/application/views/pages/view_articles.php:95
2013-12-04 02:24:29 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function http_response_code() ~ APPPATH/classes/Controller/EditSave.php [ 105 ] in file:line
2013-12-04 02:24:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-04 02:24:43 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function http_response_code() ~ APPPATH/classes/Controller/EditSave.php [ 105 ] in file:line
2013-12-04 02:24:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-04 02:25:01 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function http_response_code() ~ APPPATH/classes/Controller/EditSave.php [ 128 ] in file:line
2013-12-04 02:25:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-04 02:25:14 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function http_response_code() ~ APPPATH/classes/Controller/EditSave.php [ 131 ] in file:line
2013-12-04 02:25:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-04 02:25:26 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function http_response_code() ~ APPPATH/classes/Controller/EditSave.php [ 131 ] in file:line
2013-12-04 02:25:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-04 18:01:24 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/elements/header.php [ 28 ] in file:line
2013-12-04 18:01:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-04 18:04:38 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/elements/header.php [ 31 ] in file:line
2013-12-04 18:04:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-04 18:08:34 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH/views/elements/header.php [ 128 ] in file:line
2013-12-04 18:08:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line