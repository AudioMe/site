<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-18 00:01:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\elements\right.php [ 30 ] in :
2013-07-18 00:01:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-18 00:02:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\elements\right.php [ 30 ] in :
2013-07-18 00:02:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-18 11:02:11 --- CRITICAL: Kohana_Exception [ 0 ]: The lantitude property does not exist in the Model_Studios class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-18 11:02:11 --- DEBUG: #0 Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('lantitude')
#1 Z:\home\site.ru\www\application\views\pages\search.php(160): Kohana_ORM->__get('lantitude')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#4 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\site.ru\www\application\views\basic\3columns.php(15): Kohana_View->__toString()
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#7 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-18 11:10:50 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in Z:\home\site.ru\www\application\classes\Controller\Welcome.php on line 15 and defined ~ SYSPATH\classes\Kohana\View.php [ 28 ] in Z:\home\site.ru\www\system\classes\Kohana\View.php:28
2013-07-18 11:10:50 --- DEBUG: #0 Z:\home\site.ru\www\system\classes\Kohana\View.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'Z:\home\site.ru...', 28, Array)
#1 Z:\home\site.ru\www\application\classes\Controller\Welcome.php(15): Kohana_View::factory('pages/index', Object(Model_Studios))
#2 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\site.ru\www\system\classes\Kohana\View.php:28
2013-07-18 14:09:06 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in Z:\home\site.ru\www\application\views\pages\blacklist.php:25
2013-07-18 14:09:06 --- DEBUG: #0 Z:\home\site.ru\www\application\views\pages\blacklist.php(25): Kohana_ORM->find()
#1 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\site.ru\www\application\views\basic\3columns.php(15): Kohana_View->__toString()
#5 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#7 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Blacklist))
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\site.ru\www\application\views\pages\blacklist.php:25
2013-07-18 14:58:13 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function _strlen() ~ APPPATH\classes\Controller\Blacklist.php [ 10 ] in :
2013-07-18 14:58:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-18 17:37:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: studio_id ~ APPPATH\views\pages\addBlacklist.php [ 43 ] in Z:\home\site.ru\www\application\views\pages\addBlacklist.php:43
2013-07-18 17:37:08 --- DEBUG: #0 Z:\home\site.ru\www\application\views\pages\addBlacklist.php(43): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 43, Array)
#1 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\site.ru\www\application\views\basic\3columns.php(15): Kohana_View->__toString()
#5 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#7 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_AddBlacklist))
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\site.ru\www\application\views\pages\addBlacklist.php:43
2013-07-18 18:20:46 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete studiomusics model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1431 ] in Z:\home\site.ru\www\application\classes\Controller\Remove.php:68
2013-07-18 18:20:46 --- DEBUG: #0 Z:\home\site.ru\www\application\classes\Controller\Remove.php(68): Kohana_ORM->delete()
#1 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Remove->action_blacklist()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Remove))
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\site.ru\www\application\classes\Controller\Remove.php:68
2013-07-18 18:21:55 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete studiomusics model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1431 ] in Z:\home\site.ru\www\application\classes\Controller\Remove.php:70
2013-07-18 18:21:55 --- DEBUG: #0 Z:\home\site.ru\www\application\classes\Controller\Remove.php(70): Kohana_ORM->delete()
#1 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Remove->action_blacklist()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Remove))
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\site.ru\www\application\classes\Controller\Remove.php:70
2013-07-18 19:27:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: metro ~ APPPATH\views\pages\edit.php [ 30 ] in Z:\home\site.ru\www\application\views\pages\edit.php:30
2013-07-18 19:27:50 --- DEBUG: #0 Z:\home\site.ru\www\application\views\pages\edit.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 30, Array)
#1 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\site.ru\www\application\views\basic\3columns.php(15): Kohana_View->__toString()
#5 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#7 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Edit))
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\site.ru\www\application\views\pages\edit.php:30
2013-07-18 19:28:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: metro ~ APPPATH\views\pages\edit.php [ 30 ] in Z:\home\site.ru\www\application\views\pages\edit.php:30
2013-07-18 19:28:25 --- DEBUG: #0 Z:\home\site.ru\www\application\views\pages\edit.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 30, Array)
#1 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\site.ru\www\application\views\basic\3columns.php(15): Kohana_View->__toString()
#5 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#7 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Edit))
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\site.ru\www\application\views\pages\edit.php:30
2013-07-18 19:41:27 --- CRITICAL: View_Exception [ 0 ]: The requested view elements/righ_addt could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\site.ru\www\system\classes\Kohana\View.php:137
2013-07-18 19:41:27 --- DEBUG: #0 Z:\home\site.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('elements/righ_a...')
#1 Z:\home\site.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('elements/righ_a...', Array)
#2 Z:\home\site.ru\www\application\classes\Controller\Edit.php(27): Kohana_View::factory('elements/righ_a...', Array)
#3 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Edit->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Edit))
#6 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\site.ru\www\system\classes\Kohana\View.php:137
2013-07-18 19:41:51 --- CRITICAL: View_Exception [ 0 ]: The requested view elements/righ_add could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\site.ru\www\system\classes\Kohana\View.php:137
2013-07-18 19:41:51 --- DEBUG: #0 Z:\home\site.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('elements/righ_a...')
#1 Z:\home\site.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('elements/righ_a...', Array)
#2 Z:\home\site.ru\www\application\classes\Controller\Edit.php(27): Kohana_View::factory('elements/righ_a...', Array)
#3 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Edit->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Edit))
#6 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\site.ru\www\system\classes\Kohana\View.php:137
2013-07-18 19:45:15 --- CRITICAL: ErrorException [ 2 ]: array_search() expects parameter 2 to be array, object given ~ APPPATH\views\elements\right_add.php [ 33 ] in :
2013-07-18 19:45:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_search() ...', 'Z:\home\site.ru...', 33, Array)
#1 Z:\home\site.ru\www\application\views\elements\right_add.php(33): array_search('1', Object(Database_MySQL_Result))
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#4 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\site.ru\www\application\views\basic\3columns.php(29): Kohana_View->__toString()
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#7 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Edit))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#15 {main} in :
2013-07-18 23:10:01 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in Z:\home\site.ru\www\application\classes\Controller\Edit.php:19
2013-07-18 23:10:01 --- DEBUG: #0 Z:\home\site.ru\www\application\classes\Controller\Edit.php(19): Kohana_ORM->find()
#1 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Edit->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Edit))
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\site.ru\www\application\classes\Controller\Edit.php:19
2013-07-18 23:10:50 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in Z:\home\site.ru\www\application\classes\Controller\Edit.php:19
2013-07-18 23:10:50 --- DEBUG: #0 Z:\home\site.ru\www\application\classes\Controller\Edit.php(19): Kohana_ORM->find()
#1 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Edit->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Edit))
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\site.ru\www\application\classes\Controller\Edit.php:19
2013-07-18 23:10:57 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in Z:\home\site.ru\www\application\classes\Controller\Edit.php:19
2013-07-18 23:10:57 --- DEBUG: #0 Z:\home\site.ru\www\application\classes\Controller\Edit.php(19): Kohana_ORM->find()
#1 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Edit->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Edit))
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\site.ru\www\application\classes\Controller\Edit.php:19
2013-07-18 23:11:34 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 988 ] in Z:\home\site.ru\www\application\classes\Controller\Edit.php:19
2013-07-18 23:11:34 --- DEBUG: #0 Z:\home\site.ru\www\application\classes\Controller\Edit.php(19): Kohana_ORM->find_all()
#1 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Edit->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Edit))
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\site.ru\www\application\classes\Controller\Edit.php:19
2013-07-18 23:13:22 --- CRITICAL: Kohana_Exception [ 0 ]: The email property does not exist in the Model_Studios class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-18 23:13:22 --- DEBUG: #0 Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('email')
#1 Z:\home\site.ru\www\application\views\pages\edit.php(17): Kohana_ORM->__get('email')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#4 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\site.ru\www\application\views\basic\3columns.php(15): Kohana_View->__toString()
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#7 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Edit))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600