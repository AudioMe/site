<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-17 00:02:11 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function find_all() ~ APPPATH\classes\Controller\Conference.php [ 87 ] in :
2013-09-17 00:02:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-17 00:03:05 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 988 ] in Z:\home\site.ru\www\application\classes\Controller\Conference.php:87
2013-09-17 00:03:05 --- DEBUG: #0 Z:\home\site.ru\www\application\classes\Controller\Conference.php(87): Kohana_ORM->find_all()
#1 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Conference->action_view()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Conference))
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\site.ru\www\application\classes\Controller\Conference.php:87
2013-09-17 00:09:00 --- CRITICAL: ErrorException [ 2 ]: array_push() expects parameter 1 to be array, null given ~ APPPATH\classes\Controller\Buy.php [ 80 ] in :
2013-09-17 00:09:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_push() ex...', 'Z:\home\site.ru...', 80, Array)
#1 Z:\home\site.ru\www\application\classes\Controller\Buy.php(80): array_push(NULL, Object(Model_Buy))
#2 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Buy->action_view()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Buy))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-09-17 00:09:21 --- CRITICAL: ErrorException [ 2 ]: array_push() expects parameter 1 to be array, null given ~ APPPATH\classes\Controller\Buy.php [ 80 ] in :
2013-09-17 00:09:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_push() ex...', 'Z:\home\site.ru...', 80, Array)
#1 Z:\home\site.ru\www\application\classes\Controller\Buy.php(80): array_push(NULL, Object(Model_Buy))
#2 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Buy->action_view()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Buy))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-09-17 00:09:33 --- CRITICAL: ErrorException [ 2 ]: array_push() expects parameter 1 to be array, null given ~ APPPATH\classes\Controller\Buy.php [ 82 ] in :
2013-09-17 00:09:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_push() ex...', 'Z:\home\site.ru...', 82, Array)
#1 Z:\home\site.ru\www\application\classes\Controller\Buy.php(82): array_push(NULL, Object(Model_Buy))
#2 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Buy->action_view()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Buy))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-09-17 00:09:56 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'buy_id' in 'where clause' [ SELECT `buy`.`id` AS `id`, `buy`.`user_id` AS `user_id`, `buy`.`date` AS `date`, `buy`.`title` AS `title`, `buy`.`preview` AS `preview`, `buy`.`price` AS `price`, `buy`.`text` AS `text` FROM `buy` AS `buy` WHERE `buy_id` = '3' ORDER BY `buy`.`id` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\site.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2013-09-17 00:09:56 --- DEBUG: #0 Z:\home\site.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `buy`.`i...', 'Model_Buy', Array)
#1 Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\site.ru\www\application\views\pages\view_buy.php(76): Kohana_ORM->find_all()
#4 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#5 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#7 Z:\home\site.ru\www\application\views\basic\3columns.php(23): Kohana_View->__toString()
#8 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#9 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#10 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#11 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Buy))
#14 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#17 {main} in Z:\home\site.ru\www\modules\database\classes\Kohana\Database\Query.php:251