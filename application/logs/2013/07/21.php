<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-21 13:41:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: studio_id ~ APPPATH\views\pages\view_news.php [ 44 ] in Z:\home\site.ru\www\application\views\pages\view_news.php:44
2013-07-21 13:41:28 --- DEBUG: #0 Z:\home\site.ru\www\application\views\pages\view_news.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 44, Array)
#1 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\site.ru\www\application\views\basic\3columns.php(15): Kohana_View->__toString()
#5 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#7 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\site.ru\www\application\views\pages\view_news.php:44
2013-07-21 13:50:53 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`music`.`comments`, CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE) [ INSERT INTO `comments` (`date`, `name`, `phone`, `text`) VALUES ('2013-07-21 13:50:52', 'Андрей', '+7(000) 000 00 00', 'Я первый...') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\site.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2013-07-21 13:50:53 --- DEBUG: #0 Z:\home\site.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `co...', false, Array)
#1 Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\site.ru\www\application\classes\Controller\Add.php(245): Kohana_ORM->save()
#4 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Add->action_commentsNews()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Add))
#7 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\site.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2013-07-21 15:52:51 --- CRITICAL: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Articles class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-21 15:52:51 --- DEBUG: #0 Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('title')
#1 Z:\home\site.ru\www\application\views\pages\articles.php(7): Kohana_ORM->__get('title')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#4 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\site.ru\www\application\views\basic\3columns.php(15): Kohana_View->__toString()
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#7 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Articles))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-07-21 16:03:42 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$title ~ APPPATH\classes\Controller\Articles.php [ 71 ] in Z:\home\site.ru\www\application\classes\Controller\Articles.php:71
2013-07-21 16:03:42 --- DEBUG: #0 Z:\home\site.ru\www\application\classes\Controller\Articles.php(71): Kohana_Core::error_handler(8, 'Undefined prope...', 'Z:\home\site.ru...', 71, Array)
#1 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Articles->action_view()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Articles))
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\site.ru\www\application\classes\Controller\Articles.php:71
2013-07-21 16:08:31 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH\classes\Controller\Add.php [ 274 ] in :
2013-07-21 16:08:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-21 16:24:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: news_id ~ APPPATH\views\pages\view_buy.php [ 44 ] in Z:\home\site.ru\www\application\views\pages\view_buy.php:44
2013-07-21 16:24:04 --- DEBUG: #0 Z:\home\site.ru\www\application\views\pages\view_buy.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 44, Array)
#1 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\site.ru\www\application\views\basic\3columns.php(15): Kohana_View->__toString()
#5 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#7 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Buy))
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\site.ru\www\application\views\pages\view_buy.php:44
2013-07-21 16:39:39 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'news_id' in 'where clause' [ SELECT `conferencecomments`.`id` AS `id`, `conferencecomments`.`user_id` AS `user_id`, `conferencecomments`.`conference_id` AS `conference_id`, `conferencecomments`.`date` AS `date`, `conferencecomments`.`text` AS `text` FROM `conference_comments` AS `conferencecomments` WHERE `news_id` = '1' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\site.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2013-07-21 16:39:39 --- DEBUG: #0 Z:\home\site.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `confere...', 'Model_Conferenc...', Array)
#1 Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 Z:\home\site.ru\www\application\classes\Controller\Conference.php(69): Kohana_ORM->find_all()
#4 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Conference->action_view()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Conference))
#7 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\site.ru\www\modules\database\classes\Kohana\Database\Query.php:251