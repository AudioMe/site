<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-17 00:24:28 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function issset() ~ APPPATH\classes\Controller\Add.php [ 109 ] in :
2013-07-17 00:24:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-17 19:27:48 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::where() ~ APPPATH\classes\Controller\Search.php [ 12 ] in :
2013-07-17 19:27:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-17 19:42:23 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function issset() ~ APPPATH\classes\Controller\Search.php [ 14 ] in :
2013-07-17 19:42:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-17 19:42:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: studios_temp ~ APPPATH\classes\Controller\Search.php [ 24 ] in Z:\home\site.ru\www\application\classes\Controller\Search.php:24
2013-07-17 19:42:33 --- DEBUG: #0 Z:\home\site.ru\www\application\classes\Controller\Search.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 24, Array)
#1 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Search->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\site.ru\www\application\classes\Controller\Search.php:24
2013-07-17 20:06:15 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be an array, object given, called in Z:\home\site.ru\www\application\classes\Controller\Search.php on line 53 and defined ~ SYSPATH\classes\Kohana\View.php [ 28 ] in Z:\home\site.ru\www\system\classes\Kohana\View.php:28
2013-07-17 20:06:15 --- DEBUG: #0 Z:\home\site.ru\www\system\classes\Kohana\View.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'Z:\home\site.ru...', 28, Array)
#1 Z:\home\site.ru\www\application\classes\Controller\Search.php(53): Kohana_View::factory('pages/search', Object(Database_MySQL_Result))
#2 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Search->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\site.ru\www\system\classes\Kohana\View.php:28
2013-07-17 20:15:00 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$count ~ APPPATH\classes\Controller\Search.php [ 36 ] in Z:\home\site.ru\www\application\classes\Controller\Search.php:36
2013-07-17 20:15:00 --- DEBUG: #0 Z:\home\site.ru\www\application\classes\Controller\Search.php(36): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\site.ru...', 36, Array)
#1 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Search->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\site.ru\www\application\classes\Controller\Search.php:36
2013-07-17 20:29:08 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\pages\search.php [ 4 ] in Z:\home\site.ru\www\application\views\pages\search.php:4
2013-07-17 20:29:08 --- DEBUG: #0 Z:\home\site.ru\www\application\views\pages\search.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\site.ru...', 4, Array)
#1 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\site.ru\www\application\views\basic\3columns.php(15): Kohana_View->__toString()
#5 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#7 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\site.ru\www\application\views\pages\search.php:4
2013-07-17 20:31:30 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\pages\search.php [ 4 ] in Z:\home\site.ru\www\application\views\pages\search.php:4
2013-07-17 20:31:30 --- DEBUG: #0 Z:\home\site.ru\www\application\views\pages\search.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\site.ru...', 4, Array)
#1 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\site.ru\www\application\views\basic\3columns.php(15): Kohana_View->__toString()
#5 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#7 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\site.ru\www\application\views\pages\search.php:4
2013-07-17 20:32:34 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\pages\search.php [ 4 ] in Z:\home\site.ru\www\application\views\pages\search.php:4
2013-07-17 20:32:34 --- DEBUG: #0 Z:\home\site.ru\www\application\views\pages\search.php(4): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\site.ru...', 4, Array)
#1 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\site.ru\www\application\views\basic\3columns.php(15): Kohana_View->__toString()
#5 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#7 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\site.ru\www\application\views\pages\search.php:4
2013-07-17 21:01:16 --- CRITICAL: Kohana_Exception [ 0 ]: The where property does not exist in the Model_StudioWorks class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-17 21:01:16 --- DEBUG: #0 Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('where')
#1 Z:\home\site.ru\www\application\classes\Controller\Search.php(64): Kohana_ORM->__get('where')
#2 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Search->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-17 21:03:16 --- CRITICAL: Kohana_Exception [ 0 ]: The where property does not exist in the Model_StudioWorks class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-17 21:03:16 --- DEBUG: #0 Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('where')
#1 Z:\home\site.ru\www\application\classes\Controller\Search.php(64): Kohana_ORM->__get('where')
#2 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Search->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-17 21:03:26 --- CRITICAL: Kohana_Exception [ 0 ]: The where property does not exist in the Model_StudioWorks class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-17 21:03:26 --- DEBUG: #0 Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('where')
#1 Z:\home\site.ru\www\application\classes\Controller\Search.php(64): Kohana_ORM->__get('where')
#2 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Search->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-17 21:03:59 --- CRITICAL: Kohana_Exception [ 0 ]: The where property does not exist in the Model_StudioWorks class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-17 21:03:59 --- DEBUG: #0 Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('where')
#1 Z:\home\site.ru\www\application\classes\Controller\Search.php(64): Kohana_ORM->__get('where')
#2 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Search->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-17 21:04:45 --- CRITICAL: Kohana_Exception [ 0 ]: The where property does not exist in the Model_StudioWorks class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-17 21:04:45 --- DEBUG: #0 Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('where')
#1 Z:\home\site.ru\www\application\classes\Controller\Search.php(64): Kohana_ORM->__get('where')
#2 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Search->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-17 21:10:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\classes\Controller\Search.php(68) : eval()'d code [ 1 ] in :
2013-07-17 21:10:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-17 21:31:21 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_StudioWorks::count() ~ APPPATH\classes\Controller\Search.php [ 68 ] in :
2013-07-17 21:31:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-17 23:29:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: stud ~ APPPATH\views\pages\search.php [ 15 ] in Z:\home\site.ru\www\application\views\pages\search.php:15
2013-07-17 23:29:27 --- DEBUG: #0 Z:\home\site.ru\www\application\views\pages\search.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 15, Array)
#1 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\site.ru\www\application\views\basic\3columns.php(15): Kohana_View->__toString()
#5 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#7 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\site.ru\www\application\views\pages\search.php:15
2013-07-17 23:57:37 --- CRITICAL: ErrorException [ 2 ]: array_search() expects parameter 2 to be array, integer given ~ APPPATH\views\elements\right.php [ 30 ] in :
2013-07-17 23:57:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_search() ...', 'Z:\home\site.ru...', 30, Array)
#1 Z:\home\site.ru\www\application\views\elements\right.php(30): array_search(Array, 10)
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#4 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\site.ru\www\application\views\basic\3columns.php(29): Kohana_View->__toString()
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#7 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#15 {main} in :