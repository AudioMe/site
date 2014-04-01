<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-31 11:44:56 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'public' in 'where clause' [ SELECT `comments`.`id` AS `id`, `comments`.`user_id` AS `user_id`, `comments`.`date` AS `date`, `comments`.`name` AS `name`, `comments`.`phone` AS `phone`, `comments`.`text` AS `text` FROM `comments` AS `comments` WHERE `public` = '0' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\site.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2013-07-31 11:44:56 --- DEBUG: #0 Z:\home\site.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `comment...', 'Model_Comments', Array)
#1 Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\site.ru\www\application\classes\Controller\Admin.php(27): Kohana_ORM->find_all()
#4 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#7 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\site.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2013-07-31 12:19:11 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::where() ~ APPPATH\classes\Controller\Admin.php [ 19 ] in :
2013-07-31 12:19:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-31 12:19:12 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::where() ~ APPPATH\classes\Controller\Admin.php [ 19 ] in :
2013-07-31 12:19:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-31 12:20:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: studios_all_no_public ~ APPPATH\views\admin\admin.php [ 4 ] in Z:\home\site.ru\www\application\views\admin\admin.php:4
2013-07-31 12:20:50 --- DEBUG: #0 Z:\home\site.ru\www\application\views\admin\admin.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 4, Array)
#1 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\site.ru\www\application\views\basic\admin.php(27): Kohana_View->__toString()
#5 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#7 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\site.ru\www\application\views\admin\admin.php:4