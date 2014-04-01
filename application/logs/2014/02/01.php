<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-02-01 01:19:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: m ~ APPPATH/views/pages/register.php [ 24 ] in /var/www/antony/data/www/audiome.ru/public_html/application/views/pages/register.php:24
2014-02-01 01:19:35 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/views/pages/register.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/antony...', 24, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/antony/data/www/audiome.ru/public_html/application/views/basic/2columns.php(26): Kohana_View->__toString()
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#7 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#11 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/views/pages/register.php:24
2014-02-01 01:35:28 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php:137
2014-02-01 01:35:28 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php:137
2014-02-01 01:36:09 --- EMERGENCY: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php:137
2014-02-01 01:36:09 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(137): Kohana_View->set_filename('template')
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(30): Kohana_View->__construct('template', NULL)
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(33): Kohana_View::factory('template')
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php:137
2014-02-01 01:38:27 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::loaded() ~ APPPATH/classes/Controller/Ajax.php [ 10 ] in file:line
2014-02-01 01:38:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-01 01:43:21 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_Ajax::action_getCityesByRegion(), called in /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/Ajax.php [ 5 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Ajax.php:5
2014-02-01 01:43:21 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Ajax.php(5): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/antony...', 5, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_getCityesByRegion()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Ajax.php:5
2014-02-01 01:43:26 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_Ajax::action_getCityesByRegion(), called in /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/Ajax.php [ 5 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Ajax.php:5
2014-02-01 01:43:26 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Ajax.php(5): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/antony...', 5, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_getCityesByRegion()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Ajax.php:5
2014-02-01 01:51:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: region_id ~ APPPATH/classes/Controller/Ajax.php [ 6 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Ajax.php:6
2014-02-01 01:51:47 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Ajax.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/antony...', 6, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_Ajax->action_getCityesByRegion()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Ajax))
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Ajax.php:6
2014-02-01 13:11:55 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_Metro::count() ~ APPPATH/views/pages/index.php [ 15 ] in file:line
2014-02-01 13:11:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-01 13:16:47 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/pages/index.php [ 36 ] in file:line
2014-02-01 13:16:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-01 13:27:38 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: m ~ APPPATH/views/pages/edit.php [ 89 ] in /var/www/antony/data/www/audiome.ru/public_html/application/views/pages/edit.php:89
2014-02-01 13:27:38 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/views/pages/edit.php(89): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/antony...', 89, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/antony/data/www/audiome.ru/public_html/application/views/basic/2columns.php(26): Kohana_View->__toString()
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#7 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Edit))
#11 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/views/pages/edit.php:89
2014-02-01 13:28:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH/views/pages/edit.php [ 89 ] in /var/www/antony/data/www/audiome.ru/public_html/application/views/pages/edit.php:89
2014-02-01 13:28:45 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/views/pages/edit.php(89): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/antony...', 89, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/antony/data/www/audiome.ru/public_html/application/views/basic/2columns.php(26): Kohana_View->__toString()
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#7 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Edit))
#11 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/views/pages/edit.php:89
2014-02-01 13:38:52 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH/views/pages/edit.php [ 89 ] in /var/www/antony/data/www/audiome.ru/public_html/application/views/pages/edit.php:89
2014-02-01 13:38:52 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/views/pages/edit.php(89): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/antony...', 89, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/antony/data/www/audiome.ru/public_html/application/views/basic/2columns.php(26): Kohana_View->__toString()
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#7 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Edit))
#11 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/views/pages/edit.php:89
2014-02-01 13:41:16 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Studios as array ~ APPPATH/classes/Controller/Edit.php [ 37 ] in file:line
2014-02-01 13:41:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line