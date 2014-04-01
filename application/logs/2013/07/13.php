<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-13 15:19:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: register ~ APPPATH\views\pages\register.php [ 2 ] in Z:\home\site.ru\www\application\views\pages\register.php:2
2013-07-13 15:19:40 --- DEBUG: #0 Z:\home\site.ru\www\application\views\pages\register.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 2, Array)
#1 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\site.ru\www\application\views\basic\3columns.php(15): Kohana_View->__toString()
#5 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#7 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\site.ru\www\application\views\pages\register.php:2
2013-07-13 15:26:50 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant str - assumed 'str' ~ APPPATH\views\pages\register.php [ 8 ] in Z:\home\site.ru\www\application\views\pages\register.php:8
2013-07-13 15:26:50 --- DEBUG: #0 Z:\home\site.ru\www\application\views\pages\register.php(8): Kohana_Core::error_handler(8, 'Use of undefine...', 'Z:\home\site.ru...', 8, Array)
#1 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\site.ru\www\application\views\basic\3columns.php(15): Kohana_View->__toString()
#5 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#7 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\site.ru\www\application\views\pages\register.php:8
2013-07-13 15:27:08 --- CRITICAL: ErrorException [ 8192 ]: Function split() is deprecated ~ APPPATH\views\pages\register.php [ 8 ] in :
2013-07-13 15:27:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8192, 'Function split(...', 'Z:\home\site.ru...', 8, Array)
#1 Z:\home\site.ru\www\application\views\pages\register.php(8): split()
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#4 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\site.ru\www\application\views\basic\3columns.php(15): Kohana_View->__toString()
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#7 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#15 {main} in :
2013-07-13 15:51:43 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`music`.`studios`, CONSTRAINT `studios_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE) [ INSERT INTO `studios` (`user_id`, `address`, `phone`, `metro`, `url`, `area`, `recorder`, `price`, `count_channel`, `microphones`, `music_tools`, `interior`, `photo`, `fio`, `more`) VALUES (1, 'Улица длодлодло', '+7(123) 456 78 90', '1', 'coderov.ru', '500 м2', 'рекордер', '500', '500', 'Много микрофонов', 'Дофига', 'Отличный', 'pvt.jpg', 'ЯЯЯ', 'Подробная инфа...') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\site.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2013-07-13 15:51:43 --- DEBUG: #0 Z:\home\site.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `st...', false, Array)
#1 Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\site.ru\www\application\views\pages\register.php(28): Kohana_ORM->save()
#4 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#5 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#7 Z:\home\site.ru\www\application\views\basic\3columns.php(15): Kohana_View->__toString()
#8 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#9 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#10 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#11 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#14 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#17 {main} in Z:\home\site.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2013-07-13 19:30:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: password ~ APPPATH\views\pages\index.php [ 1 ] in Z:\home\site.ru\www\application\views\pages\index.php:1
2013-07-13 19:30:52 --- DEBUG: #0 Z:\home\site.ru\www\application\views\pages\index.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 1, Array)
#1 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\site.ru\www\application\views\basic\3columns.php(15): Kohana_View->__toString()
#5 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#7 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\site.ru\www\application\views\pages\index.php:1
2013-07-13 19:59:53 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-13 19:59:53 --- DEBUG: #0 Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('name')
#1 Z:\home\site.ru\www\application\views\elements\header.php(21): Kohana_ORM->__get('name')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#4 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\site.ru\www\application\views\basic\3columns.php(9): Kohana_View->__toString()
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#7 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-13 20:00:32 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-13 20:00:32 --- DEBUG: #0 Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('name')
#1 Z:\home\site.ru\www\application\views\elements\header.php(21): Kohana_ORM->__get('name')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#4 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\site.ru\www\application\views\basic\3columns.php(9): Kohana_View->__toString()
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#7 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-13 20:01:12 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Users class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-13 20:01:12 --- DEBUG: #0 Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('name')
#1 Z:\home\site.ru\www\application\views\elements\header.php(21): Kohana_ORM->__get('name')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#4 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\site.ru\www\application\views\basic\3columns.php(9): Kohana_View->__toString()
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#7 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-13 20:02:12 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Users class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-13 20:02:12 --- DEBUG: #0 Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('name')
#1 Z:\home\site.ru\www\application\views\elements\header.php(21): Kohana_ORM->__get('name')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#4 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\site.ru\www\application\views\basic\3columns.php(9): Kohana_View->__toString()
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#7 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-13 20:12:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ':', expecting ')' ~ APPPATH\views\pages\register.php [ 13 ] in :
2013-07-13 20:12:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-13 20:20:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\views\pages\register.php [ 13 ] in :
2013-07-13 20:20:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-13 20:35:31 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\email\classes\email.php [ 34 ] in :
2013-07-13 20:35:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-13 20:37:51 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\email\classes\email.php [ 34 ] in :
2013-07-13 20:37:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-13 20:42:20 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\email\classes\email.php [ 34 ] in :
2013-07-13 20:42:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-13 21:20:32 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\email\classes\email.php [ 34 ] in :
2013-07-13 21:20:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-13 21:26:48 --- CRITICAL: ErrorException [ 1 ]: Class 'Swift_Preferences' not found ~ MODPATH\email\classes\Kohana\Email.php [ 442 ] in :
2013-07-13 21:26:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-13 22:36:42 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Email::factory() ~ APPPATH\classes\Model\Useful.php [ 39 ] in :
2013-07-13 22:36:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-13 22:39:00 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\email\classes\email.php [ 34 ] in :
2013-07-13 22:39:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-13 22:41:44 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 22:41:44 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'Z:\home\site.ru...', 4, Array)
#1 Z:\home\site.ru\www\modules\email\init.php(4): include()
#2 Z:\home\site.ru\www\system\classes\Kohana\Core.php(602): require_once('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\application\bootstrap.php(121): Kohana_Core::modules(Array)
#4 Z:\home\site.ru\www\index.php(102): require('Z:\home\site.ru...')
#5 {main} in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 22:43:04 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 22:43:04 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'Z:\home\site.ru...', 4, Array)
#1 Z:\home\site.ru\www\modules\email\init.php(4): include()
#2 Z:\home\site.ru\www\system\classes\Kohana\Core.php(602): require_once('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\application\bootstrap.php(121): Kohana_Core::modules(Array)
#4 Z:\home\site.ru\www\index.php(102): require('Z:\home\site.ru...')
#5 {main} in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 22:45:31 --- CRITICAL: ErrorException [ 1 ]: Class 'Swift_SmtpTransport' not found ~ MODPATH\email\classes\Email\Core.php [ 37 ] in :
2013-07-13 22:45:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-13 22:47:02 --- CRITICAL: ErrorException [ 1 ]: Class 'Swift_SmtpTransport' not found ~ MODPATH\email\classes\Email\Core.php [ 37 ] in :
2013-07-13 22:47:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-13 22:48:39 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 22:48:39 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'Z:\home\site.ru...', 4, Array)
#1 Z:\home\site.ru\www\modules\email\init.php(4): include()
#2 Z:\home\site.ru\www\system\classes\Kohana\Core.php(602): require_once('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\application\bootstrap.php(121): Kohana_Core::modules(Array)
#4 Z:\home\site.ru\www\index.php(102): require('Z:\home\site.ru...')
#5 {main} in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 22:50:13 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 22:50:13 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'Z:\home\site.ru...', 4, Array)
#1 Z:\home\site.ru\www\modules\email\init.php(4): include()
#2 Z:\home\site.ru\www\system\classes\Kohana\Core.php(602): require_once('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\application\bootstrap.php(121): Kohana_Core::modules(Array)
#4 Z:\home\site.ru\www\index.php(102): require('Z:\home\site.ru...')
#5 {main} in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 22:50:16 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 22:50:16 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'Z:\home\site.ru...', 4, Array)
#1 Z:\home\site.ru\www\modules\email\init.php(4): include()
#2 Z:\home\site.ru\www\system\classes\Kohana\Core.php(602): require_once('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\application\bootstrap.php(121): Kohana_Core::modules(Array)
#4 Z:\home\site.ru\www\index.php(102): require('Z:\home\site.ru...')
#5 {main} in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 22:50:22 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 22:50:22 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'Z:\home\site.ru...', 4, Array)
#1 Z:\home\site.ru\www\modules\email\init.php(4): include()
#2 Z:\home\site.ru\www\system\classes\Kohana\Core.php(602): require_once('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\application\bootstrap.php(121): Kohana_Core::modules(Array)
#4 Z:\home\site.ru\www\index.php(102): require('Z:\home\site.ru...')
#5 {main} in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 22:50:25 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 22:50:25 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'Z:\home\site.ru...', 4, Array)
#1 Z:\home\site.ru\www\modules\email\init.php(4): include()
#2 Z:\home\site.ru\www\system\classes\Kohana\Core.php(602): require_once('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\application\bootstrap.php(121): Kohana_Core::modules(Array)
#4 Z:\home\site.ru\www\index.php(102): require('Z:\home\site.ru...')
#5 {main} in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 22:50:28 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 22:50:28 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'Z:\home\site.ru...', 4, Array)
#1 Z:\home\site.ru\www\modules\email\init.php(4): include()
#2 Z:\home\site.ru\www\system\classes\Kohana\Core.php(602): require_once('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\application\bootstrap.php(121): Kohana_Core::modules(Array)
#4 Z:\home\site.ru\www\index.php(102): require('Z:\home\site.ru...')
#5 {main} in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 22:50:29 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 22:50:29 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'Z:\home\site.ru...', 4, Array)
#1 Z:\home\site.ru\www\modules\email\init.php(4): include()
#2 Z:\home\site.ru\www\system\classes\Kohana\Core.php(602): require_once('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\application\bootstrap.php(121): Kohana_Core::modules(Array)
#4 Z:\home\site.ru\www\index.php(102): require('Z:\home\site.ru...')
#5 {main} in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 22:51:35 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 22:51:35 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'Z:\home\site.ru...', 4, Array)
#1 Z:\home\site.ru\www\modules\email\init.php(4): include()
#2 Z:\home\site.ru\www\system\classes\Kohana\Core.php(602): require_once('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\application\bootstrap.php(121): Kohana_Core::modules(Array)
#4 Z:\home\site.ru\www\index.php(102): require('Z:\home\site.ru...')
#5 {main} in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 22:57:39 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 22:57:39 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'Z:\home\site.ru...', 4, Array)
#1 Z:\home\site.ru\www\modules\email\init.php(4): include()
#2 Z:\home\site.ru\www\system\classes\Kohana\Core.php(602): require_once('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\application\bootstrap.php(121): Kohana_Core::modules(Array)
#4 Z:\home\site.ru\www\index.php(102): require('Z:\home\site.ru...')
#5 {main} in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 22:57:43 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 22:57:43 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'Z:\home\site.ru...', 4, Array)
#1 Z:\home\site.ru\www\modules\email\init.php(4): include()
#2 Z:\home\site.ru\www\system\classes\Kohana\Core.php(602): require_once('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\application\bootstrap.php(121): Kohana_Core::modules(Array)
#4 Z:\home\site.ru\www\index.php(102): require('Z:\home\site.ru...')
#5 {main} in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 22:59:36 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Email::connect() ~ APPPATH\views\pages\register.php [ 30 ] in :
2013-07-13 22:59:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-13 23:03:34 --- CRITICAL: ErrorException [ 8 ]: Undefined index: support ~ MODPATH\email\classes\Email.php [ 68 ] in Z:\home\site.ru\www\modules\email\classes\Email.php:68
2013-07-13 23:03:34 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\classes\Email.php(68): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\site.ru...', 68, Array)
#1 Z:\home\site.ru\www\modules\email\classes\Email.php(85): Email::instance('support')
#2 Z:\home\site.ru\www\application\views\pages\register.php(63): Email::send('support', 'First message', 'Hello, world!', Array, 'flash2048@gmail...')
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#4 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#5 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 Z:\home\site.ru\www\application\views\basic\3columns.php(15): Kohana_View->__toString()
#7 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#8 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#9 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#13 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\site.ru\www\modules\email\classes\Email.php:68
2013-07-13 23:09:35 --- CRITICAL: ErrorException [ 8 ]: Undefined index: support ~ MODPATH\email\classes\Email.php [ 68 ] in Z:\home\site.ru\www\modules\email\classes\Email.php:68
2013-07-13 23:09:35 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\classes\Email.php(68): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\site.ru...', 68, Array)
#1 Z:\home\site.ru\www\modules\email\classes\Email.php(85): Email::instance('support')
#2 Z:\home\site.ru\www\application\views\pages\register.php(63): Email::send('support', 'First message', 'Hello, world!', Array, 'flash2048@gmail...')
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#4 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#5 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 Z:\home\site.ru\www\application\views\basic\3columns.php(15): Kohana_View->__toString()
#7 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#8 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#9 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#13 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\site.ru\www\modules\email\classes\Email.php:68
2013-07-13 23:11:17 --- CRITICAL: ErrorException [ 8 ]: Undefined index: support ~ MODPATH\email\classes\Email.php [ 68 ] in Z:\home\site.ru\www\modules\email\classes\Email.php:68
2013-07-13 23:11:17 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\classes\Email.php(68): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\site.ru...', 68, Array)
#1 Z:\home\site.ru\www\modules\email\classes\Email.php(85): Email::instance('support')
#2 Z:\home\site.ru\www\application\views\pages\register.php(63): Email::send('support', 'First message', 'Hello, world!', Array, 'flash2048@gmail...')
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#4 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#5 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 Z:\home\site.ru\www\application\views\basic\3columns.php(15): Kohana_View->__toString()
#7 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#8 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#9 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#13 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\site.ru\www\modules\email\classes\Email.php:68
2013-07-13 23:13:34 --- CRITICAL: ErrorException [ 8 ]: Undefined index: support ~ MODPATH\email\classes\Email.php [ 68 ] in Z:\home\site.ru\www\modules\email\classes\Email.php:68
2013-07-13 23:13:34 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\classes\Email.php(68): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\site.ru...', 68, Array)
#1 Z:\home\site.ru\www\modules\email\classes\Email.php(85): Email::instance('support')
#2 Z:\home\site.ru\www\application\views\pages\register.php(63): Email::send('support', 'First message', 'Hello, world!', Array, 'flash2048@gmail...')
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#4 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#5 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 Z:\home\site.ru\www\application\views\basic\3columns.php(15): Kohana_View->__toString()
#7 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#8 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#9 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#13 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\site.ru\www\modules\email\classes\Email.php:68
2013-07-13 23:13:55 --- CRITICAL: ErrorException [ 8 ]: Undefined index: support ~ MODPATH\email\classes\Email.php [ 71 ] in Z:\home\site.ru\www\modules\email\classes\Email.php:71
2013-07-13 23:13:55 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\classes\Email.php(71): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\site.ru...', 71, Array)
#1 Z:\home\site.ru\www\modules\email\classes\Email.php(85): Email::instance('support')
#2 Z:\home\site.ru\www\application\views\pages\register.php(63): Email::send('support', 'First message', 'Hello, world!', Array, 'flash2048@gmail...')
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#4 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#5 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 Z:\home\site.ru\www\application\views\basic\3columns.php(15): Kohana_View->__toString()
#7 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#8 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#9 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#13 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\site.ru\www\modules\email\classes\Email.php:71
2013-07-13 23:15:20 --- CRITICAL: ErrorException [ 8 ]: Undefined index: support ~ MODPATH\email\classes\Email.php [ 68 ] in Z:\home\site.ru\www\modules\email\classes\Email.php:68
2013-07-13 23:15:20 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\classes\Email.php(68): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\site.ru...', 68, Array)
#1 Z:\home\site.ru\www\modules\email\classes\Email.php(85): Email::instance('support')
#2 Z:\home\site.ru\www\application\views\pages\register.php(63): Email::send('support', 'First message', 'Hello, world!', Array, 'flash2048@gmail...')
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#4 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#5 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 Z:\home\site.ru\www\application\views\basic\3columns.php(15): Kohana_View->__toString()
#7 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#8 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#9 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#13 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\site.ru\www\modules\email\classes\Email.php:68
2013-07-13 23:16:01 --- CRITICAL: ErrorException [ 8 ]: Undefined index: support ~ MODPATH\email\classes\Email.php [ 68 ] in Z:\home\site.ru\www\modules\email\classes\Email.php:68
2013-07-13 23:16:01 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\classes\Email.php(68): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\site.ru...', 68, Array)
#1 Z:\home\site.ru\www\modules\email\classes\Email.php(85): Email::instance('support')
#2 Z:\home\site.ru\www\application\views\pages\register.php(63): Email::send('support', 'First message', 'Hello, world!', Array, 'flash2048@gmail...')
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#4 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#5 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 Z:\home\site.ru\www\application\views\basic\3columns.php(15): Kohana_View->__toString()
#7 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#8 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#9 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#13 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\site.ru\www\modules\email\classes\Email.php:68
2013-07-13 23:16:43 --- CRITICAL: ErrorException [ 8 ]: Undefined index: support ~ MODPATH\email\classes\Email.php [ 68 ] in Z:\home\site.ru\www\modules\email\classes\Email.php:68
2013-07-13 23:16:43 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\classes\Email.php(68): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\site.ru...', 68, Array)
#1 Z:\home\site.ru\www\modules\email\classes\Email.php(85): Email::instance('support')
#2 Z:\home\site.ru\www\application\views\pages\register.php(63): Email::send('support', 'First message', 'Hello, world!', Array, 'flash2048@gmail...')
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#4 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#5 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 Z:\home\site.ru\www\application\views\basic\3columns.php(15): Kohana_View->__toString()
#7 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#8 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#9 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#13 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\site.ru\www\modules\email\classes\Email.php:68
2013-07-13 23:21:59 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\email\classes\email.php [ 34 ] in :
2013-07-13 23:21:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-13 23:22:50 --- CRITICAL: ErrorException [ 2 ]: fsockopen() [function.fsockopen]: unable to connect to ssl://smtp.gmail.com:465 (Unable to find the socket transport &quot;ssl&quot; - did you forget to enable it when you configured PHP?) ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 243 ] in :
2013-07-13 23:22:50 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fsockopen() [<a...', 'Z:\home\site.ru...', 243, Array)
#1 Z:\home\site.ru\www\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(243): fsockopen('ssl://smtp.gmai...', 465, 77295888, 'Unable to find ...', 5)
#2 Z:\home\site.ru\www\modules\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php(80): Swift_Transport_StreamBuffer->_establishSocketConnection()
#3 Z:\home\site.ru\www\modules\email\vendor\swift\classes\Swift\Transport\AbstractSmtpTransport.php(111): Swift_Transport_StreamBuffer->initialize(Array)
#4 Z:\home\site.ru\www\modules\email\vendor\swift\classes\Swift\Mailer.php(84): Swift_Transport_AbstractSmtpTransport->start()
#5 Z:\home\site.ru\www\modules\email\classes\email.php(142): Swift_Mailer->send(Object(Swift_Message))
#6 Z:\home\site.ru\www\application\views\pages\register.php(64): Email::send('flash2048@gmail...', 'flash2048@gmail...', '???????????????...', '???????????????...', false)
#7 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#8 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#9 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#10 Z:\home\site.ru\www\application\views\basic\3columns.php(15): Kohana_View->__toString()
#11 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#12 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#13 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#14 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#15 [internal function]: Kohana_Controller->execute()
#16 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#17 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#19 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#20 {main} in :
2013-07-13 23:25:53 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 177 ] in :
2013-07-13 23:25:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-13 23:26:53 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\email\vendor\swift\classes\Swift\Transport\StreamBuffer.php [ 177 ] in :
2013-07-13 23:26:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-13 23:29:32 --- CRITICAL: ErrorException [ 8 ]: Undefined index: support ~ MODPATH\email\classes\Email.php [ 68 ] in Z:\home\site.ru\www\modules\email\classes\Email.php:68
2013-07-13 23:29:32 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\classes\Email.php(68): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\site.ru...', 68, Array)
#1 Z:\home\site.ru\www\modules\email\classes\Email.php(85): Email::instance('support')
#2 Z:\home\site.ru\www\application\views\pages\register.php(64): Email::send('support', 'First message', 'Hello, world!', Array, 'flash2048@gmail...')
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#4 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#5 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 Z:\home\site.ru\www\application\views\basic\3columns.php(15): Kohana_View->__toString()
#7 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#8 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#9 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#13 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\site.ru\www\modules\email\classes\Email.php:68
2013-07-13 23:30:28 --- CRITICAL: ErrorException [ 8 ]: Undefined index: support ~ MODPATH\email\classes\Email.php [ 68 ] in Z:\home\site.ru\www\modules\email\classes\Email.php:68
2013-07-13 23:30:28 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\classes\Email.php(68): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\site.ru...', 68, Array)
#1 Z:\home\site.ru\www\modules\email\classes\Email.php(85): Email::instance('support')
#2 Z:\home\site.ru\www\application\views\pages\register.php(64): Email::send('support', 'First message', 'Hello, world!', Array, 'flash2048@gmail...')
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#4 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#5 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 Z:\home\site.ru\www\application\views\basic\3columns.php(15): Kohana_View->__toString()
#7 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#8 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#9 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#13 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#16 {main} in Z:\home\site.ru\www\modules\email\classes\Email.php:68
2013-07-13 23:31:39 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 23:31:39 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'Z:\home\site.ru...', 4, Array)
#1 Z:\home\site.ru\www\modules\email\init.php(4): include()
#2 Z:\home\site.ru\www\system\classes\Kohana\Core.php(602): require_once('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\application\bootstrap.php(121): Kohana_Core::modules(Array)
#4 Z:\home\site.ru\www\index.php(102): require('Z:\home\site.ru...')
#5 {main} in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 23:32:04 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 23:32:04 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'Z:\home\site.ru...', 4, Array)
#1 Z:\home\site.ru\www\modules\email\init.php(4): include()
#2 Z:\home\site.ru\www\system\classes\Kohana\Core.php(602): require_once('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\application\bootstrap.php(122): Kohana_Core::modules(Array)
#4 Z:\home\site.ru\www\index.php(102): require('Z:\home\site.ru...')
#5 {main} in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 23:32:09 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 23:32:09 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'Z:\home\site.ru...', 4, Array)
#1 Z:\home\site.ru\www\modules\email\init.php(4): include()
#2 Z:\home\site.ru\www\system\classes\Kohana\Core.php(602): require_once('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\application\bootstrap.php(122): Kohana_Core::modules(Array)
#4 Z:\home\site.ru\www\index.php(102): require('Z:\home\site.ru...')
#5 {main} in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 23:35:46 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 23:35:46 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'Z:\home\site.ru...', 4, Array)
#1 Z:\home\site.ru\www\modules\email\init.php(4): include()
#2 Z:\home\site.ru\www\system\classes\Kohana\Core.php(602): require_once('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\application\bootstrap.php(122): Kohana_Core::modules(Array)
#4 Z:\home\site.ru\www\index.php(102): require('Z:\home\site.ru...')
#5 {main} in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 23:36:27 --- CRITICAL: ErrorException [ 1 ]: Class 'email' not found ~ APPPATH\views\pages\register.php [ 62 ] in :
2013-07-13 23:36:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-13 23:37:11 --- CRITICAL: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH\views\pages\register.php [ 62 ] in :
2013-07-13 23:37:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-13 23:38:12 --- CRITICAL: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH\views\pages\register.php [ 62 ] in :
2013-07-13 23:38:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-13 23:40:48 --- CRITICAL: ErrorException [ 1 ]: Class 'Email' not found ~ APPPATH\views\pages\register.php [ 64 ] in :
2013-07-13 23:40:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-13 23:42:48 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 23:42:48 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'Z:\home\site.ru...', 4, Array)
#1 Z:\home\site.ru\www\modules\email\init.php(4): include()
#2 Z:\home\site.ru\www\system\classes\Kohana\Core.php(602): require_once('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\application\bootstrap.php(121): Kohana_Core::modules(Array)
#4 Z:\home\site.ru\www\index.php(102): require('Z:\home\site.ru...')
#5 {main} in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 23:45:45 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 23:45:45 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'Z:\home\site.ru...', 4, Array)
#1 Z:\home\site.ru\www\modules\email\init.php(4): include()
#2 Z:\home\site.ru\www\system\classes\Kohana\Core.php(602): require_once('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\application\bootstrap.php(121): Kohana_Core::modules(Array)
#4 Z:\home\site.ru\www\index.php(102): require('Z:\home\site.ru...')
#5 {main} in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 23:45:46 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 23:45:46 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'Z:\home\site.ru...', 4, Array)
#1 Z:\home\site.ru\www\modules\email\init.php(4): include()
#2 Z:\home\site.ru\www\system\classes\Kohana\Core.php(602): require_once('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\application\bootstrap.php(121): Kohana_Core::modules(Array)
#4 Z:\home\site.ru\www\index.php(102): require('Z:\home\site.ru...')
#5 {main} in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 23:46:03 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 23:46:03 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'Z:\home\site.ru...', 4, Array)
#1 Z:\home\site.ru\www\modules\email\init.php(4): include()
#2 Z:\home\site.ru\www\system\classes\Kohana\Core.php(602): require_once('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\application\bootstrap.php(121): Kohana_Core::modules(Array)
#4 Z:\home\site.ru\www\index.php(102): require('Z:\home\site.ru...')
#5 {main} in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 23:46:04 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 23:46:04 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'Z:\home\site.ru...', 4, Array)
#1 Z:\home\site.ru\www\modules\email\init.php(4): include()
#2 Z:\home\site.ru\www\system\classes\Kohana\Core.php(602): require_once('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\application\bootstrap.php(121): Kohana_Core::modules(Array)
#4 Z:\home\site.ru\www\index.php(102): require('Z:\home\site.ru...')
#5 {main} in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 23:46:47 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 23:46:47 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'Z:\home\site.ru...', 4, Array)
#1 Z:\home\site.ru\www\modules\email\init.php(4): include()
#2 Z:\home\site.ru\www\system\classes\Kohana\Core.php(602): require_once('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\application\bootstrap.php(121): Kohana_Core::modules(Array)
#4 Z:\home\site.ru\www\index.php(102): require('Z:\home\site.ru...')
#5 {main} in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 23:46:48 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 23:46:48 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'Z:\home\site.ru...', 4, Array)
#1 Z:\home\site.ru\www\modules\email\init.php(4): include()
#2 Z:\home\site.ru\www\system\classes\Kohana\Core.php(602): require_once('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\application\bootstrap.php(121): Kohana_Core::modules(Array)
#4 Z:\home\site.ru\www\index.php(102): require('Z:\home\site.ru...')
#5 {main} in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 23:48:00 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 23:48:00 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'Z:\home\site.ru...', 4, Array)
#1 Z:\home\site.ru\www\modules\email\init.php(4): include()
#2 Z:\home\site.ru\www\system\classes\Kohana\Core.php(602): require_once('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\application\bootstrap.php(121): Kohana_Core::modules(Array)
#4 Z:\home\site.ru\www\index.php(102): require('Z:\home\site.ru...')
#5 {main} in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 23:48:48 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 23:48:48 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'Z:\home\site.ru...', 4, Array)
#1 Z:\home\site.ru\www\modules\email\init.php(4): include()
#2 Z:\home\site.ru\www\system\classes\Kohana\Core.php(602): require_once('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\application\bootstrap.php(121): Kohana_Core::modules(Array)
#4 Z:\home\site.ru\www\index.php(102): require('Z:\home\site.ru...')
#5 {main} in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 23:48:49 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 23:48:49 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'Z:\home\site.ru...', 4, Array)
#1 Z:\home\site.ru\www\modules\email\init.php(4): include()
#2 Z:\home\site.ru\www\system\classes\Kohana\Core.php(602): require_once('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\application\bootstrap.php(121): Kohana_Core::modules(Array)
#4 Z:\home\site.ru\www\index.php(102): require('Z:\home\site.ru...')
#5 {main} in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 23:51:40 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 23:51:40 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'Z:\home\site.ru...', 4, Array)
#1 Z:\home\site.ru\www\modules\email\init.php(4): include()
#2 Z:\home\site.ru\www\system\classes\Kohana\Core.php(602): require_once('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\application\bootstrap.php(122): Kohana_Core::modules(Array)
#4 Z:\home\site.ru\www\index.php(102): require('Z:\home\site.ru...')
#5 {main} in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 23:52:57 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 23:52:57 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'Z:\home\site.ru...', 4, Array)
#1 Z:\home\site.ru\www\modules\email\init.php(4): include()
#2 Z:\home\site.ru\www\system\classes\Kohana\Core.php(602): require_once('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\application\bootstrap.php(122): Kohana_Core::modules(Array)
#4 Z:\home\site.ru\www\index.php(102): require('Z:\home\site.ru...')
#5 {main} in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 23:55:49 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 23:55:49 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'Z:\home\site.ru...', 4, Array)
#1 Z:\home\site.ru\www\modules\email\init.php(4): include()
#2 Z:\home\site.ru\www\system\classes\Kohana\Core.php(602): require_once('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\application\bootstrap.php(122): Kohana_Core::modules(Array)
#4 Z:\home\site.ru\www\index.php(102): require('Z:\home\site.ru...')
#5 {main} in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 23:55:53 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 23:55:53 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'Z:\home\site.ru...', 4, Array)
#1 Z:\home\site.ru\www\modules\email\init.php(4): include()
#2 Z:\home\site.ru\www\system\classes\Kohana\Core.php(602): require_once('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\application\bootstrap.php(122): Kohana_Core::modules(Array)
#4 Z:\home\site.ru\www\index.php(102): require('Z:\home\site.ru...')
#5 {main} in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 23:58:58 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 23:58:58 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'Z:\home\site.ru...', 4, Array)
#1 Z:\home\site.ru\www\modules\email\init.php(4): include()
#2 Z:\home\site.ru\www\system\classes\Kohana\Core.php(602): require_once('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\application\bootstrap.php(122): Kohana_Core::modules(Array)
#4 Z:\home\site.ru\www\index.php(102): require('Z:\home\site.ru...')
#5 {main} in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 23:59:48 --- CRITICAL: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ MODPATH\email\init.php [ 4 ] in Z:\home\site.ru\www\modules\email\init.php:4
2013-07-13 23:59:48 --- DEBUG: #0 Z:\home\site.ru\www\modules\email\init.php(4): Kohana_Core::error_handler(2, 'include() [<a h...', 'Z:\home\site.ru...', 4, Array)
#1 Z:\home\site.ru\www\modules\email\init.php(4): include()
#2 Z:\home\site.ru\www\system\classes\Kohana\Core.php(602): require_once('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\application\bootstrap.php(122): Kohana_Core::modules(Array)
#4 Z:\home\site.ru\www\index.php(102): require('Z:\home\site.ru...')
#5 {main} in Z:\home\site.ru\www\modules\email\init.php:4