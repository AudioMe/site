<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-26 14:11:11 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: name ~ APPPATH/classes/Controller/GetPremium.php [ 84 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:84
2014-01-26 14:11:11 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(84): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/antony...', 84, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_pay()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:84
2014-01-26 15:03:03 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/Controller/Invoice.php [ 8 ] in file:line
2014-01-26 15:03:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-26 15:03:19 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/Controller/Invoice.php [ 8 ] in file:line
2014-01-26 15:03:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-26 15:03:29 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/Controller/Invoice.php [ 8 ] in file:line
2014-01-26 15:03:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-26 15:05:23 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/Controller/Invoice.php [ 8 ] in file:line
2014-01-26 15:05:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-26 15:05:33 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/Controller/Invoice.php [ 8 ] in file:line
2014-01-26 15:05:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-26 15:05:43 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/Controller/Invoice.php [ 8 ] in file:line
2014-01-26 15:05:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-26 15:21:26 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/Controller/Invoice.php [ 8 ] in file:line
2014-01-26 15:21:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-26 15:21:34 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_OBJECT_OPERATOR ~ APPPATH/classes/Controller/Invoice.php [ 8 ] in file:line
2014-01-26 15:21:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-26 15:22:07 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php:137
2014-01-26 15:22:07 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/antony/data/www/audiome.ru/public_html/application/classes/AdminPages.php(11): Kohana_Controller_Template->before()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(69): AdminPages->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Invoice))
#7 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php:137
2014-01-26 15:33:52 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php:137
2014-01-26 15:33:52 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/antony/data/www/audiome.ru/public_html/application/classes/AdminPages.php(11): Kohana_Controller_Template->before()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(69): AdminPages->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Invoice))
#7 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php:137
2014-01-26 15:34:01 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php:137
2014-01-26 15:34:01 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/antony/data/www/audiome.ru/public_html/application/classes/AdminPages.php(11): Kohana_Controller_Template->before()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(69): AdminPages->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Invoice))
#7 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php:137
2014-01-26 15:34:41 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php:137
2014-01-26 15:34:41 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/antony/data/www/audiome.ru/public_html/application/classes/AdminPages.php(11): Kohana_Controller_Template->before()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(69): AdminPages->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Invoice))
#7 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php:137
2014-01-26 15:36:23 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php:137
2014-01-26 15:36:23 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/antony/data/www/audiome.ru/public_html/application/classes/AdminPages.php(11): Kohana_Controller_Template->before()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(69): AdminPages->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Invoice))
#7 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php:137
2014-01-26 15:36:55 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php:137
2014-01-26 15:36:55 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/antony/data/www/audiome.ru/public_html/application/classes/AdminPages.php(11): Kohana_Controller_Template->before()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(69): AdminPages->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Invoice))
#7 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php:137
2014-01-26 15:37:50 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php:137
2014-01-26 15:37:50 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/antony/data/www/audiome.ru/public_html/application/classes/AdminPages.php(11): Kohana_Controller_Template->before()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(69): AdminPages->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Invoice))
#7 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php:137
2014-01-26 15:43:17 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php:137
2014-01-26 15:43:17 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/antony/data/www/audiome.ru/public_html/application/classes/AdminPages.php(11): Kohana_Controller_Template->before()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(69): AdminPages->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Invoice))
#7 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php:137
2014-01-26 15:43:38 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php:137
2014-01-26 15:43:38 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/antony/data/www/audiome.ru/public_html/application/classes/AdminPages.php(11): Kohana_Controller_Template->before()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(69): AdminPages->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Invoice))
#7 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php:137
2014-01-26 15:43:47 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php:137
2014-01-26 15:43:47 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/antony/data/www/audiome.ru/public_html/application/classes/AdminPages.php(11): Kohana_Controller_Template->before()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(69): AdminPages->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Invoice))
#7 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php:137
2014-01-26 15:43:48 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php:137
2014-01-26 15:43:48 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/antony/data/www/audiome.ru/public_html/application/classes/AdminPages.php(11): Kohana_Controller_Template->before()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(69): AdminPages->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Invoice))
#7 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php:137
2014-01-26 15:48:11 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php:137
2014-01-26 15:48:11 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/antony/data/www/audiome.ru/public_html/application/classes/AdminPages.php(11): Kohana_Controller_Template->before()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(69): AdminPages->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Invoice))
#7 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php:137
2014-01-26 15:50:50 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php:137
2014-01-26 15:50:50 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/antony/data/www/audiome.ru/public_html/application/classes/AdminPages.php(11): Kohana_Controller_Template->before()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(69): AdminPages->before()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Invoice))
#7 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php:137
2014-01-26 15:52:15 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php:137
2014-01-26 15:52:15 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Invoice))
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php:137
2014-01-26 15:53:00 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php:137
2014-01-26 15:53:00 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Invoice))
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php:137