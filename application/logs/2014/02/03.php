<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-02-03 11:42:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: metro ~ APPPATH/views/pages/catalog.php [ 20 ] in /var/www/antony/data/www/audiome.ru/public_html/application/views/pages/catalog.php:20
2014-02-03 11:42:38 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/views/pages/catalog.php(20): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/antony...', 20, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/antony/data/www/audiome.ru/public_html/application/views/basic/2columns.php(26): Kohana_View->__toString()
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#7 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#11 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/views/pages/catalog.php:20
2014-02-03 12:31:23 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/pages/index.php [ 40 ] in file:line
2014-02-03 12:31:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-03 15:40:05 --- EMERGENCY: View_Exception [ 0 ]: The requested view basic/1columns could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php:137
2014-02-03 15:40:05 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('basic/1columns')
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(30): Kohana_View->__construct('basic/1columns', NULL)
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('basic/1columns')
#3 /var/www/antony/data/www/audiome.ru/public_html/application/classes/AdminPages.php(11): Kohana_Controller_Template->before()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(69): AdminPages->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Premium))
#7 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php:137
2014-02-03 15:57:14 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_GetPremium::_fail(), called in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php on line 224 and defined ~ APPPATH/classes/Controller/GetPremium.php [ 228 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:228
2014-02-03 15:57:14 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(228): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/antony...', 228, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(224): Controller_GetPremium->_fail()
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_result()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:228
2014-02-03 18:46:16 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/pages/search.php [ 70 ] in file:line
2014-02-03 18:46:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-03 18:46:30 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/pages/search.php [ 70 ] in file:line
2014-02-03 18:46:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-03 20:52:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_id ~ APPPATH/classes/Controller/Profile.php [ 11 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php:11
2014-02-03 20:52:26 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php(11): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/antony...', 11, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_Profile->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php:11
2014-02-03 20:53:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: next_id ~ APPPATH/views/pages/studio.php [ 12 ] in /var/www/antony/data/www/audiome.ru/public_html/application/views/pages/studio.php:12
2014-02-03 20:53:20 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/views/pages/studio.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/antony...', 12, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/antony/data/www/audiome.ru/public_html/application/views/basic/2columns.php(26): Kohana_View->__toString()
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#7 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#11 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/views/pages/studio.php:12
2014-02-03 20:53:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: next_id ~ APPPATH/views/pages/profile.php [ 340 ] in /var/www/antony/data/www/audiome.ru/public_html/application/views/pages/profile.php:340
2014-02-03 20:53:45 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/views/pages/profile.php(340): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/antony...', 340, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/antony/data/www/audiome.ru/public_html/application/views/basic/2columns.php(26): Kohana_View->__toString()
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#7 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#11 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/views/pages/profile.php:340
2014-02-03 20:56:58 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/elements/right.php [ 54 ] in file:line
2014-02-03 20:56:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-03 21:00:25 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/elements/right.php [ 54 ] in file:line
2014-02-03 21:00:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-03 21:06:52 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_ISSET, expecting '(' ~ APPPATH/views/elements/header.php [ 49 ] in file:line
2014-02-03 21:06:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-03 22:37:15 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/AddFree.php [ 338 ] in file:line
2014-02-03 22:37:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-03 22:37:32 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/AddFree.php [ 338 ] in file:line
2014-02-03 22:37:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-03 22:38:39 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/AddFree.php [ 339 ] in file:line
2014-02-03 22:38:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-03 22:38:54 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/AddFree.php [ 338 ] in file:line
2014-02-03 22:38:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-03 22:39:05 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/AddFree.php [ 338 ] in file:line
2014-02-03 22:39:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-03 23:29:25 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/AddFree.php [ 417 ] in file:line
2014-02-03 23:29:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-03 23:29:53 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/AddFree.php [ 417 ] in file:line
2014-02-03 23:29:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-03 23:30:44 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/AddFree.php [ 417 ] in file:line
2014-02-03 23:30:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-03 23:31:37 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/AddFree.php [ 417 ] in file:line
2014-02-03 23:31:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-03 23:32:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/AddFree.php [ 417 ] in file:line
2014-02-03 23:32:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-03 23:33:02 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/AddFree.php [ 417 ] in file:line
2014-02-03 23:33:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-03 23:33:44 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/AddFree.php [ 417 ] in file:line
2014-02-03 23:33:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line