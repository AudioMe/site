<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-15 19:16:14 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function issset() ~ APPPATH\classes\Controller\Registers.php [ 19 ] in :
2013-07-15 19:16:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-15 19:19:30 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function issset() ~ APPPATH\classes\Controller\Registers.php [ 19 ] in :
2013-07-15 19:19:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-15 19:21:30 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function issset() ~ APPPATH\classes\Controller\Registers.php [ 17 ] in :
2013-07-15 19:21:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-15 19:24:58 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function issset() ~ APPPATH\classes\Controller\Registers.php [ 17 ] in :
2013-07-15 19:24:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-15 19:26:17 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function issset() ~ APPPATH\classes\Controller\Registers.php [ 17 ] in :
2013-07-15 19:26:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-15 19:27:05 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function issset() ~ APPPATH\classes\Controller\Registers.php [ 17 ] in :
2013-07-15 19:27:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-15 19:29:32 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function issset() ~ APPPATH\classes\Controller\Registers.php [ 19 ] in :
2013-07-15 19:29:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-15 19:30:24 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function issset() ~ APPPATH\classes\Controller\Registers.php [ 19 ] in :
2013-07-15 19:30:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-15 19:31:19 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function issset() ~ APPPATH\classes\Controller\Registers.php [ 19 ] in :
2013-07-15 19:31:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-15 19:32:42 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function issset() ~ APPPATH\classes\Controller\Registers.php [ 19 ] in :
2013-07-15 19:32:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-15 21:17:52 --- CRITICAL: Kohana_Exception [ 0 ]: Directory ./users/48/images/3.png must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in Z:\home\site.ru\www\application\classes\Controller\Add.php:28
2013-07-15 21:17:52 --- DEBUG: #0 Z:\home\site.ru\www\application\classes\Controller\Add.php(28): Kohana_Upload::save(Array, '3.png', './users/48/imag...', 511)
#1 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Add->action_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Add))
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\site.ru\www\application\classes\Controller\Add.php:28
2013-07-15 21:20:29 --- CRITICAL: Kohana_Exception [ 0 ]: Directory /users/48/images/4.png must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in Z:\home\site.ru\www\application\classes\Controller\Add.php:28
2013-07-15 21:20:29 --- DEBUG: #0 Z:\home\site.ru\www\application\classes\Controller\Add.php(28): Kohana_Upload::save(Array, '4.png', '/users/48/image...', 511)
#1 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Add->action_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Add))
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\site.ru\www\application\classes\Controller\Add.php:28
2013-07-15 21:21:54 --- CRITICAL: Kohana_Exception [ 0 ]: Directory /users/48/images must be writable ~ SYSPATH\classes\Kohana\Upload.php [ 80 ] in Z:\home\site.ru\www\application\classes\Controller\Add.php:28
2013-07-15 21:21:54 --- DEBUG: #0 Z:\home\site.ru\www\application\classes\Controller\Add.php(28): Kohana_Upload::save(Array, '5.png', '/users/48/image...', 511)
#1 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Add->action_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Add))
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\site.ru\www\application\classes\Controller\Add.php:28
2013-07-15 21:27:59 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::count_all() ~ APPPATH\views\pages\addPhoto.php [ 14 ] in :
2013-07-15 21:27:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-15 21:29:01 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::count_all() ~ APPPATH\views\pages\addPhoto.php [ 16 ] in :
2013-07-15 21:29:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-15 21:30:29 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::count_all() ~ APPPATH\views\pages\addPhoto.php [ 10 ] in :
2013-07-15 21:30:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-15 21:31:47 --- CRITICAL: ErrorException [ 8 ]: Object of class Database_MySQL_Result could not be converted to int ~ APPPATH\views\pages\addPhoto.php [ 16 ] in Z:\home\site.ru\www\application\views\pages\addPhoto.php:16
2013-07-15 21:31:47 --- DEBUG: #0 Z:\home\site.ru\www\application\views\pages\addPhoto.php(16): Kohana_Core::error_handler(8, 'Object of class...', 'Z:\home\site.ru...', 16, Array)
#1 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\site.ru\www\application\views\basic\3columns.php(15): Kohana_View->__toString()
#5 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#7 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_AddPhoto))
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\site.ru\www\application\views\pages\addPhoto.php:16
2013-07-15 22:36:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Remove.php [ 13 ] in :
2013-07-15 22:36:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-15 22:36:38 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Remove::action_photo(), called in Z:\home\site.ru\www\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\Remove.php [ 11 ] in Z:\home\site.ru\www\application\classes\Controller\Remove.php:11
2013-07-15 22:36:38 --- DEBUG: #0 Z:\home\site.ru\www\application\classes\Controller\Remove.php(11): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\site.ru...', 11, Array)
#1 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Remove->action_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Remove))
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\site.ru\www\application\classes\Controller\Remove.php:11
2013-07-15 22:40:54 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Remove::action_photo(), called in Z:\home\site.ru\www\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\Remove.php [ 11 ] in Z:\home\site.ru\www\application\classes\Controller\Remove.php:11
2013-07-15 22:40:54 --- DEBUG: #0 Z:\home\site.ru\www\application\classes\Controller\Remove.php(11): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\site.ru...', 11, Array)
#1 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Remove->action_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Remove))
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\site.ru\www\application\classes\Controller\Remove.php:11
2013-07-15 22:41:47 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Remove::action_photo(), called in Z:\home\site.ru\www\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\Remove.php [ 11 ] in Z:\home\site.ru\www\application\classes\Controller\Remove.php:11
2013-07-15 22:41:47 --- DEBUG: #0 Z:\home\site.ru\www\application\classes\Controller\Remove.php(11): Kohana_Core::error_handler(2, 'Missing argumen...', 'Z:\home\site.ru...', 11, Array)
#1 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Remove->action_photo()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Remove))
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\site.ru\www\application\classes\Controller\Remove.php:11
2013-07-15 22:52:33 --- CRITICAL: ErrorException [ 2 ]: unlink(/users/48/images/prev_7.png) [function.unlink]: No such file or directory ~ APPPATH\classes\Controller\Remove.php [ 22 ] in :
2013-07-15 22:52:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'unlink(/users/4...', 'Z:\home\site.ru...', 22, Array)
#1 Z:\home\site.ru\www\application\classes\Controller\Remove.php(22): unlink('/users/48/image...')
#2 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Remove->action_photo()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Remove))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-07-15 23:26:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: head ~ APPPATH\views\basic\2columns.php [ 4 ] in Z:\home\site.ru\www\application\views\basic\2columns.php:4
2013-07-15 23:26:48 --- DEBUG: #0 Z:\home\site.ru\www\application\views\basic\2columns.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 4, Array)
#1 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Studio))
#7 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\site.ru\www\application\views\basic\2columns.php:4
2013-07-15 23:27:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: head ~ APPPATH\views\basic\2columns.php [ 4 ] in Z:\home\site.ru\www\application\views\basic\2columns.php:4
2013-07-15 23:27:25 --- DEBUG: #0 Z:\home\site.ru\www\application\views\basic\2columns.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 4, Array)
#1 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Studio))
#7 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\site.ru\www\application\views\basic\2columns.php:4
2013-07-15 23:28:40 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete studiophotos model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1431 ] in Z:\home\site.ru\www\application\classes\Controller\Studio.php:26
2013-07-15 23:28:40 --- DEBUG: #0 Z:\home\site.ru\www\application\classes\Controller\Studio.php(26): Kohana_ORM->delete()
#1 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Studio->action_view()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Studio))
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\site.ru\www\application\classes\Controller\Studio.php:26
2013-07-15 23:44:12 --- CRITICAL: Kohana_Exception [ 0 ]: The adsress property does not exist in the Model_Studios class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-15 23:44:12 --- DEBUG: #0 Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('adsress')
#1 Z:\home\site.ru\www\application\views\pages\studio.php(8): Kohana_ORM->__get('adsress')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#4 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\site.ru\www\application\views\basic\2columns.php(15): Kohana_View->__toString()
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#7 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Studio))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-15 23:48:06 --- CRITICAL: Kohana_Exception [ 0 ]: The email property does not exist in the Model_Studios class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-15 23:48:06 --- DEBUG: #0 Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('email')
#1 Z:\home\site.ru\www\application\views\pages\studio.php(26): Kohana_ORM->__get('email')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#4 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\site.ru\www\application\views\basic\2columns.php(15): Kohana_View->__toString()
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#7 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Studio))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-15 23:48:48 --- CRITICAL: Kohana_Exception [ 0 ]: The email property does not exist in the Model_Studios class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-15 23:48:48 --- DEBUG: #0 Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('email')
#1 Z:\home\site.ru\www\application\views\pages\studio.php(26): Kohana_ORM->__get('email')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#4 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\site.ru\www\application\views\basic\2columns.php(15): Kohana_View->__toString()
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#7 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Studio))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-15 23:49:52 --- CRITICAL: Kohana_Exception [ 0 ]: The email property does not exist in the Model_Studios class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-15 23:49:52 --- DEBUG: #0 Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('email')
#1 Z:\home\site.ru\www\application\views\pages\studio.php(26): Kohana_ORM->__get('email')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#4 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\site.ru\www\application\views\basic\2columns.php(15): Kohana_View->__toString()
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#7 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Studio))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-15 23:51:51 --- CRITICAL: Kohana_Exception [ 0 ]: The email property does not exist in the Model_Studios class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-15 23:51:51 --- DEBUG: #0 Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('email')
#1 Z:\home\site.ru\www\application\views\pages\studio.php(26): Kohana_ORM->__get('email')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#4 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\site.ru\www\application\views\basic\2columns.php(15): Kohana_View->__toString()
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#7 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Studio))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-15 23:52:08 --- CRITICAL: Kohana_Exception [ 0 ]: The email property does not exist in the Model_Studios class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-15 23:52:08 --- DEBUG: #0 Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('email')
#1 Z:\home\site.ru\www\application\views\pages\studio.php(26): Kohana_ORM->__get('email')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#4 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\site.ru\www\application\views\basic\2columns.php(15): Kohana_View->__toString()
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#7 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Studio))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-15 23:52:09 --- CRITICAL: Kohana_Exception [ 0 ]: The email property does not exist in the Model_Studios class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-15 23:52:09 --- DEBUG: #0 Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('email')
#1 Z:\home\site.ru\www\application\views\pages\studio.php(26): Kohana_ORM->__get('email')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#4 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\site.ru\www\application\views\basic\2columns.php(15): Kohana_View->__toString()
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#7 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Studio))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-15 23:52:45 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Studio' not found ~ APPPATH\classes\Controller\Studio.php [ 27 ] in :
2013-07-15 23:52:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-15 23:53:30 --- CRITICAL: Kohana_Exception [ 0 ]: The email property does not exist in the Model_Studios class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-15 23:53:30 --- DEBUG: #0 Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('email')
#1 Z:\home\site.ru\www\application\views\pages\studio.php(26): Kohana_ORM->__get('email')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#4 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\site.ru\www\application\views\basic\2columns.php(15): Kohana_View->__toString()
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#7 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Studio))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-15 23:54:44 --- CRITICAL: Kohana_Exception [ 0 ]: The email property does not exist in the Model_Studios class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-15 23:54:44 --- DEBUG: #0 Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('email')
#1 Z:\home\site.ru\www\application\views\pages\studio.php(26): Kohana_ORM->__get('email')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#4 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\site.ru\www\application\views\basic\2columns.php(15): Kohana_View->__toString()
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#7 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Studio))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-15 23:55:55 --- CRITICAL: Kohana_Exception [ 0 ]: The email property does not exist in the Model_Studios class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-15 23:55:55 --- DEBUG: #0 Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('email')
#1 Z:\home\site.ru\www\application\views\pages\studio.php(26): Kohana_ORM->__get('email')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#4 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\site.ru\www\application\views\basic\2columns.php(15): Kohana_View->__toString()
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#7 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Studio))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-15 23:56:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\classes\Controller\Studio.php [ 32 ] in Z:\home\site.ru\www\application\classes\Controller\Studio.php:32
2013-07-15 23:56:35 --- DEBUG: #0 Z:\home\site.ru\www\application\classes\Controller\Studio.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 32, Array)
#1 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Studio->action_view()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Studio))
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\site.ru\www\application\classes\Controller\Studio.php:32
2013-07-15 23:57:01 --- CRITICAL: Kohana_Exception [ 0 ]: The email property does not exist in the Model_Studios class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-15 23:57:01 --- DEBUG: #0 Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('email')
#1 Z:\home\site.ru\www\application\views\pages\studio.php(26): Kohana_ORM->__get('email')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#4 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\site.ru\www\application\views\basic\2columns.php(15): Kohana_View->__toString()
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#7 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Studio))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-15 23:57:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: studio ~ APPPATH\views\pages\studio.php [ 2 ] in Z:\home\site.ru\www\application\views\pages\studio.php:2
2013-07-15 23:57:22 --- DEBUG: #0 Z:\home\site.ru\www\application\views\pages\studio.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 2, Array)
#1 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\site.ru\www\application\views\basic\2columns.php(15): Kohana_View->__toString()
#5 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#7 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Studio))
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\site.ru\www\application\views\pages\studio.php:2
2013-07-15 23:57:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: studio ~ APPPATH\views\pages\studio.php [ 2 ] in Z:\home\site.ru\www\application\views\pages\studio.php:2
2013-07-15 23:57:23 --- DEBUG: #0 Z:\home\site.ru\www\application\views\pages\studio.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 2, Array)
#1 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\site.ru\www\application\views\basic\2columns.php(15): Kohana_View->__toString()
#5 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#7 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Studio))
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\site.ru\www\application\views\pages\studio.php:2
2013-07-15 23:57:50 --- CRITICAL: Kohana_Exception [ 0 ]: The email property does not exist in the Model_Studios class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-15 23:57:50 --- DEBUG: #0 Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('email')
#1 Z:\home\site.ru\www\application\views\pages\studio.php(26): Kohana_ORM->__get('email')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#4 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\site.ru\www\application\views\basic\2columns.php(15): Kohana_View->__toString()
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#7 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Studio))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-15 23:58:19 --- CRITICAL: Kohana_Exception [ 0 ]: The email property does not exist in the Model_Studios class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-15 23:58:19 --- DEBUG: #0 Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('email')
#1 Z:\home\site.ru\www\application\views\pages\studio.php(26): Kohana_ORM->__get('email')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#4 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\site.ru\www\application\views\basic\2columns.php(15): Kohana_View->__toString()
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#7 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Studio))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-15 23:58:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: email ~ APPPATH\views\pages\studio.php [ 26 ] in Z:\home\site.ru\www\application\views\pages\studio.php:26
2013-07-15 23:58:33 --- DEBUG: #0 Z:\home\site.ru\www\application\views\pages\studio.php(26): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 26, Array)
#1 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\site.ru\www\application\views\basic\2columns.php(15): Kohana_View->__toString()
#5 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#7 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Studio))
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\site.ru\www\application\views\pages\studio.php:26