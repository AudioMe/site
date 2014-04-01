<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-27 02:26:04 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php:137
2014-01-27 02:26:04 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Invoice))
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php:137
2014-01-27 02:53:22 --- EMERGENCY: ErrorException [ 2 ]: file_put_contents(test.out): failed to open stream: Отказано в доступе ~ APPPATH/classes/Controller/GetPremium.php [ 118 ] in file:line
2014-01-27 02:53:22 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/var/www/antony...', 118, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(118): file_put_contents('test.out', 'array (?  'OutS...', 8)
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_result()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-01-27 02:54:24 --- EMERGENCY: ErrorException [ 2 ]: file_put_contents(test.out): failed to open stream: Отказано в доступе ~ APPPATH/classes/Controller/GetPremium.php [ 118 ] in file:line
2014-01-27 02:54:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/var/www/antony...', 118, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(118): file_put_contents('test.out', 'array (?  'OutS...', 8)
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_result()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-01-27 03:19:00 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: OutSum ~ APPPATH/classes/Controller/GetPremium.php [ 114 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:114
2014-01-27 03:19:00 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(114): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/antony...', 114, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_result()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:114
2014-01-27 03:33:26 --- EMERGENCY: ErrorException [ 2 ]: file_put_contents(test.out): failed to open stream: Отказано в доступе ~ APPPATH/classes/Controller/GetPremium.php [ 110 ] in file:line
2014-01-27 03:33:26 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/var/www/antony...', 110, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(110): file_put_contents('test.out', 'array (?  'OutS...', 8)
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_result()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-01-27 03:34:48 --- EMERGENCY: ErrorException [ 2 ]: file_put_contents(test.out): failed to open stream: Отказано в доступе ~ APPPATH/classes/Controller/GetPremium.php [ 110 ] in file:line
2014-01-27 03:34:48 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/var/www/antony...', 110, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(110): file_put_contents('test.out', 'array (?  'OutS...', 8)
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_result()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-01-27 03:35:15 --- EMERGENCY: ErrorException [ 2 ]: file_put_contents(test.out): failed to open stream: Отказано в доступе ~ APPPATH/classes/Controller/GetPremium.php [ 110 ] in file:line
2014-01-27 03:35:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/var/www/antony...', 110, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(110): file_put_contents('test.out', 'array (?  'OutS...', 8)
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_result()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-01-27 03:37:49 --- EMERGENCY: ErrorException [ 2 ]: file_put_contents(test.out): failed to open stream: Отказано в доступе ~ APPPATH/classes/Controller/GetPremium.php [ 110 ] in file:line
2014-01-27 03:37:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/var/www/antony...', 110, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(110): file_put_contents('test.out', 'array (?  'OutS...', 8)
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_result()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-01-27 06:29:17 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_GetPremium::_fail(), called in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php on line 204 and defined ~ APPPATH/classes/Controller/GetPremium.php [ 208 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:208
2014-01-27 06:29:17 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(208): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/antony...', 208, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(204): Controller_GetPremium->_fail()
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_result()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:208
2014-01-27 06:39:53 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_GetPremium::_fail(), called in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php on line 202 and defined ~ APPPATH/classes/Controller/GetPremium.php [ 206 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:206
2014-01-27 06:39:53 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(206): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/antony...', 206, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(202): Controller_GetPremium->_fail()
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_result()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:206
2014-01-27 06:42:20 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_GetPremium::_fail(), called in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php on line 201 and defined ~ APPPATH/classes/Controller/GetPremium.php [ 205 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:205
2014-01-27 06:42:20 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(205): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/antony...', 205, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(201): Controller_GetPremium->_fail()
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_result()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:205
2014-01-27 06:45:51 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_GetPremium::_fail(), called in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php on line 213 and defined ~ APPPATH/classes/Controller/GetPremium.php [ 217 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:217
2014-01-27 06:45:51 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(217): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/antony...', 217, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(213): Controller_GetPremium->_fail()
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_result()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:217
2014-01-27 06:46:34 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_GetPremium::_fail(), called in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php on line 214 and defined ~ APPPATH/classes/Controller/GetPremium.php [ 218 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:218
2014-01-27 06:46:34 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(218): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/antony...', 218, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(214): Controller_GetPremium->_fail()
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_result()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:218
2014-01-27 06:50:55 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_GetPremium::_fail(), called in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php on line 216 and defined ~ APPPATH/classes/Controller/GetPremium.php [ 220 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:220
2014-01-27 06:50:55 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(220): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/antony...', 220, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(216): Controller_GetPremium->_fail()
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_result()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:220
2014-01-27 06:52:12 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_GetPremium::_fail(), called in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php on line 218 and defined ~ APPPATH/classes/Controller/GetPremium.php [ 222 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:222
2014-01-27 06:52:12 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(222): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/antony...', 222, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(218): Controller_GetPremium->_fail()
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_result()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:222
2014-01-27 06:52:46 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_GetPremium::_fail(), called in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php on line 218 and defined ~ APPPATH/classes/Controller/GetPremium.php [ 222 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:222
2014-01-27 06:52:46 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(222): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/antony...', 222, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(218): Controller_GetPremium->_fail()
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_result()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:222
2014-01-27 06:53:21 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_GetPremium::_fail(), called in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php on line 219 and defined ~ APPPATH/classes/Controller/GetPremium.php [ 223 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:223
2014-01-27 06:53:21 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(223): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/antony...', 223, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(219): Controller_GetPremium->_fail()
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_result()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:223
2014-01-27 06:54:07 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_GetPremium::_fail(), called in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php on line 220 and defined ~ APPPATH/classes/Controller/GetPremium.php [ 224 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:224
2014-01-27 06:54:07 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(224): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/antony...', 224, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(220): Controller_GetPremium->_fail()
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_result()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:224
2014-01-27 06:54:55 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_GetPremium::_fail(), called in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php on line 218 and defined ~ APPPATH/classes/Controller/GetPremium.php [ 222 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:222
2014-01-27 06:54:55 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(222): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/antony...', 222, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(218): Controller_GetPremium->_fail()
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_result()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:222
2014-01-27 06:56:15 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_GetPremium::_fail(), called in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php on line 219 and defined ~ APPPATH/classes/Controller/GetPremium.php [ 223 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:223
2014-01-27 06:56:15 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(223): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/antony...', 223, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(219): Controller_GetPremium->_fail()
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_result()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:223
2014-01-27 07:09:54 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_GetPremium::_fail(), called in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php on line 225 and defined ~ APPPATH/classes/Controller/GetPremium.php [ 229 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:229
2014-01-27 07:09:54 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(229): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/antony...', 229, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(225): Controller_GetPremium->_fail()
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_result()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:229
2014-01-27 07:10:27 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_GetPremium::_fail(), called in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php on line 225 and defined ~ APPPATH/classes/Controller/GetPremium.php [ 229 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:229
2014-01-27 07:10:27 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(229): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/antony...', 229, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(225): Controller_GetPremium->_fail()
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_result()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:229
2014-01-27 07:11:58 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_GetPremium::_fail(), called in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php on line 225 and defined ~ APPPATH/classes/Controller/GetPremium.php [ 229 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:229
2014-01-27 07:11:58 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(229): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/antony...', 229, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(225): Controller_GetPremium->_fail()
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_result()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:229
2014-01-27 07:12:24 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_GetPremium::_fail(), called in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php on line 220 and defined ~ APPPATH/classes/Controller/GetPremium.php [ 224 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:224
2014-01-27 07:12:24 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(224): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/antony...', 224, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(220): Controller_GetPremium->_fail()
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_result()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:224
2014-01-27 07:13:25 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_GetPremium::_fail(), called in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php on line 224 and defined ~ APPPATH/classes/Controller/GetPremium.php [ 228 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:228
2014-01-27 07:13:25 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(228): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/antony...', 228, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(224): Controller_GetPremium->_fail()
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_result()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:228
2014-01-27 07:14:23 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_GetPremium::_fail(), called in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php on line 224 and defined ~ APPPATH/classes/Controller/GetPremium.php [ 228 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:228
2014-01-27 07:14:23 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(228): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/antony...', 228, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(224): Controller_GetPremium->_fail()
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_result()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:228
2014-01-27 07:14:40 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_GetPremium::_fail(), called in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php on line 222 and defined ~ APPPATH/classes/Controller/GetPremium.php [ 226 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:226
2014-01-27 07:14:40 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(226): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/antony...', 226, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(222): Controller_GetPremium->_fail()
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_result()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:226
2014-01-27 07:16:16 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_GetPremium::_fail(), called in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php on line 220 and defined ~ APPPATH/classes/Controller/GetPremium.php [ 224 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:224
2014-01-27 07:16:16 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(224): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/antony...', 224, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(220): Controller_GetPremium->_fail()
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_result()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:224
2014-01-27 07:20:18 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/Controller/GetPremium.php [ 188 ] in file:line
2014-01-27 07:20:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-27 07:22:08 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_GetPremium::_fail(), called in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php on line 223 and defined ~ APPPATH/classes/Controller/GetPremium.php [ 227 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:227
2014-01-27 07:22:08 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(227): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/antony...', 227, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(223): Controller_GetPremium->_fail()
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_result()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:227
2014-01-27 07:27:08 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_GetPremium::_fail(), called in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php on line 222 and defined ~ APPPATH/classes/Controller/GetPremium.php [ 226 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:226
2014-01-27 07:27:08 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(226): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/antony...', 226, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(222): Controller_GetPremium->_fail()
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_result()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:226
2014-01-27 07:33:57 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_GetPremium::_fail(), called in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php on line 223 and defined ~ APPPATH/classes/Controller/GetPremium.php [ 227 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:227
2014-01-27 07:33:57 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(227): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/antony...', 227, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(223): Controller_GetPremium->_fail()
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_result()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:227
2014-01-27 07:42:18 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_GetPremium::_fail(), called in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php on line 224 and defined ~ APPPATH/classes/Controller/GetPremium.php [ 228 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:228
2014-01-27 07:42:18 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(228): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/antony...', 228, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(224): Controller_GetPremium->_fail()
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_result()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:228