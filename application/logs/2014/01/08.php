<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-08 01:42:32 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH/views/pages/view_articles.php [ 33 ] in file:line
2014-01-08 01:42:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-08 01:42:35 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH/views/pages/view_articles.php [ 33 ] in file:line
2014-01-08 01:42:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-08 01:42:35 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH/views/pages/view_articles.php [ 33 ] in file:line
2014-01-08 01:42:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-08 02:02:00 --- EMERGENCY: ErrorException [ 2 ]: preg_replace(): Empty regular expression ~ APPPATH/views/pages/view_articles.php [ 37 ] in file:line
2014-01-08 02:02:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', '/home/tim/www/a...', 37, Array)
#1 /home/tim/www/audiome.ru/public_html/application/views/pages/view_articles.php(37): preg_replace(' ', ' ', '<p>asdasdasdasd...')
#2 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/home/tim/www/a...')
#3 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/tim/www/a...', Array)
#4 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/tim/www/audiome.ru/public_html/application/views/basic/2columns.php(26): Kohana_View->__toString()
#6 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/home/tim/www/a...')
#7 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/tim/www/a...', Array)
#8 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Articles))
#12 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#14 /home/tim/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2014-01-08 02:02:03 --- EMERGENCY: ErrorException [ 2 ]: preg_replace(): Empty regular expression ~ APPPATH/views/pages/view_articles.php [ 37 ] in file:line
2014-01-08 02:02:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'preg_replace():...', '/home/tim/www/a...', 37, Array)
#1 /home/tim/www/audiome.ru/public_html/application/views/pages/view_articles.php(37): preg_replace(' ', ' ', '<p>asdasdasdasd...')
#2 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/home/tim/www/a...')
#3 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/tim/www/a...', Array)
#4 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/tim/www/audiome.ru/public_html/application/views/basic/2columns.php(26): Kohana_View->__toString()
#6 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/home/tim/www/a...')
#7 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/tim/www/a...', Array)
#8 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Articles))
#12 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#14 /home/tim/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2014-01-08 02:03:41 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '.' ~ APPPATH/views/pages/view_articles.php [ 38 ] in file:line
2014-01-08 02:03:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-08 02:03:43 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '.' ~ APPPATH/views/pages/view_articles.php [ 38 ] in file:line
2014-01-08 02:03:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-08 02:03:44 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '.' ~ APPPATH/views/pages/view_articles.php [ 38 ] in file:line
2014-01-08 02:03:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-08 02:14:18 --- EMERGENCY: ErrorException [ 2 ]: file_put_contents(dump.log): failed to open stream: Permission denied ~ APPPATH/views/pages/view_articles.php [ 34 ] in file:line
2014-01-08 02:14:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/home/tim/www/a...', 34, Array)
#1 /home/tim/www/audiome.ru/public_html/application/views/pages/view_articles.php(34): file_put_contents('dump.log', ''<p>asdasdasdas...')
#2 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/home/tim/www/a...')
#3 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/tim/www/a...', Array)
#4 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/tim/www/audiome.ru/public_html/application/views/basic/2columns.php(26): Kohana_View->__toString()
#6 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/home/tim/www/a...')
#7 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/tim/www/a...', Array)
#8 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Articles))
#12 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#14 /home/tim/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2014-01-08 02:14:21 --- EMERGENCY: ErrorException [ 2 ]: file_put_contents(dump.log): failed to open stream: Permission denied ~ APPPATH/views/pages/view_articles.php [ 34 ] in file:line
2014-01-08 02:14:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_put_conten...', '/home/tim/www/a...', 34, Array)
#1 /home/tim/www/audiome.ru/public_html/application/views/pages/view_articles.php(34): file_put_contents('dump.log', ''<p>asdasdasdas...')
#2 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/home/tim/www/a...')
#3 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/tim/www/a...', Array)
#4 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/tim/www/audiome.ru/public_html/application/views/basic/2columns.php(26): Kohana_View->__toString()
#6 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/home/tim/www/a...')
#7 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/tim/www/a...', Array)
#8 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Articles))
#12 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#14 /home/tim/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#15 {main} in file:line
2014-01-08 02:33:03 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'articles_id' in 'where clause' [ SELECT `newsphotos`.`id` AS `id`, `newsphotos`.`news_id` AS `news_id`, `newsphotos`.`url` AS `url` FROM `news_photos` AS `newsphotos` WHERE `articles_id` = '14' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/tim/www/audiome.ru/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-08 02:33:03 --- DEBUG: #0 /home/tim/www/audiome.ru/public_html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `newspho...', 'Model_NewsPhoto...', Array)
#1 /home/tim/www/audiome.ru/public_html/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/tim/www/audiome.ru/public_html/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /home/tim/www/audiome.ru/public_html/application/views/pages/view_news.php(51): Kohana_ORM->find_all()
#4 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/home/tim/www/a...')
#5 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/tim/www/a...', Array)
#6 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#7 /home/tim/www/audiome.ru/public_html/application/views/basic/2columns.php(26): Kohana_View->__toString()
#8 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/home/tim/www/a...')
#9 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/tim/www/a...', Array)
#10 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#11 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#14 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#16 /home/tim/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#17 {main} in /home/tim/www/audiome.ru/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-08 02:33:04 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'articles_id' in 'where clause' [ SELECT `newsphotos`.`id` AS `id`, `newsphotos`.`news_id` AS `news_id`, `newsphotos`.`url` AS `url` FROM `news_photos` AS `newsphotos` WHERE `articles_id` = '13' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/tim/www/audiome.ru/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-08 02:33:04 --- DEBUG: #0 /home/tim/www/audiome.ru/public_html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `newspho...', 'Model_NewsPhoto...', Array)
#1 /home/tim/www/audiome.ru/public_html/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/tim/www/audiome.ru/public_html/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /home/tim/www/audiome.ru/public_html/application/views/pages/view_news.php(51): Kohana_ORM->find_all()
#4 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/home/tim/www/a...')
#5 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/tim/www/a...', Array)
#6 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#7 /home/tim/www/audiome.ru/public_html/application/views/basic/2columns.php(26): Kohana_View->__toString()
#8 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/home/tim/www/a...')
#9 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/tim/www/a...', Array)
#10 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#11 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#14 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#16 /home/tim/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#17 {main} in /home/tim/www/audiome.ru/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-08 02:40:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: stud ~ APPPATH/views/pages/view_news.php [ 44 ] in /home/tim/www/audiome.ru/public_html/application/views/pages/view_news.php:44
2014-01-08 02:40:56 --- DEBUG: #0 /home/tim/www/audiome.ru/public_html/application/views/pages/view_news.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/tim/www/a...', 44, Array)
#1 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/home/tim/www/a...')
#2 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/tim/www/a...', Array)
#3 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/tim/www/audiome.ru/public_html/application/views/basic/2columns.php(26): Kohana_View->__toString()
#5 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/home/tim/www/a...')
#6 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/tim/www/a...', Array)
#7 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#11 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#13 /home/tim/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /home/tim/www/audiome.ru/public_html/application/views/pages/view_news.php:44
2014-01-08 02:40:59 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: stud ~ APPPATH/views/pages/view_news.php [ 44 ] in /home/tim/www/audiome.ru/public_html/application/views/pages/view_news.php:44
2014-01-08 02:40:59 --- DEBUG: #0 /home/tim/www/audiome.ru/public_html/application/views/pages/view_news.php(44): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/tim/www/a...', 44, Array)
#1 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/home/tim/www/a...')
#2 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/tim/www/a...', Array)
#3 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/tim/www/audiome.ru/public_html/application/views/basic/2columns.php(26): Kohana_View->__toString()
#5 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/home/tim/www/a...')
#6 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/tim/www/a...', Array)
#7 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_News))
#11 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#13 /home/tim/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /home/tim/www/audiome.ru/public_html/application/views/pages/view_news.php:44
2014-01-08 06:38:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: news ~ APPPATH/views/pages/view_buy.php [ 15 ] in /home/tim/www/audiome.ru/public_html/application/views/pages/view_buy.php:15
2014-01-08 06:38:45 --- DEBUG: #0 /home/tim/www/audiome.ru/public_html/application/views/pages/view_buy.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/tim/www/a...', 15, Array)
#1 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/home/tim/www/a...')
#2 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/tim/www/a...', Array)
#3 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/tim/www/audiome.ru/public_html/application/views/basic/2columns.php(26): Kohana_View->__toString()
#5 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/home/tim/www/a...')
#6 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/tim/www/a...', Array)
#7 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Buy))
#11 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#13 /home/tim/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /home/tim/www/audiome.ru/public_html/application/views/pages/view_buy.php:15
2014-01-08 06:38:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: news ~ APPPATH/views/pages/view_buy.php [ 15 ] in /home/tim/www/audiome.ru/public_html/application/views/pages/view_buy.php:15
2014-01-08 06:38:48 --- DEBUG: #0 /home/tim/www/audiome.ru/public_html/application/views/pages/view_buy.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/tim/www/a...', 15, Array)
#1 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/home/tim/www/a...')
#2 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/tim/www/a...', Array)
#3 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/tim/www/audiome.ru/public_html/application/views/basic/2columns.php(26): Kohana_View->__toString()
#5 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/home/tim/www/a...')
#6 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/tim/www/a...', Array)
#7 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Buy))
#11 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#13 /home/tim/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /home/tim/www/audiome.ru/public_html/application/views/pages/view_buy.php:15
2014-01-08 06:39:16 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'buy_id' in 'where clause' [ SELECT `articlesphotos`.`id` AS `id`, `articlesphotos`.`articles_id` AS `articles_id`, `articlesphotos`.`url` AS `url` FROM `articles_photos` AS `articlesphotos` WHERE `buy_id` = '13' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/tim/www/audiome.ru/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-08 06:39:16 --- DEBUG: #0 /home/tim/www/audiome.ru/public_html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `article...', 'Model_ArticlesP...', Array)
#1 /home/tim/www/audiome.ru/public_html/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/tim/www/audiome.ru/public_html/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /home/tim/www/audiome.ru/public_html/application/views/pages/view_buy.php(65): Kohana_ORM->find_all()
#4 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/home/tim/www/a...')
#5 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/tim/www/a...', Array)
#6 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#7 /home/tim/www/audiome.ru/public_html/application/views/basic/2columns.php(26): Kohana_View->__toString()
#8 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/home/tim/www/a...')
#9 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/tim/www/a...', Array)
#10 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#11 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Buy))
#14 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#16 /home/tim/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#17 {main} in /home/tim/www/audiome.ru/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-08 06:39:19 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'buy_id' in 'where clause' [ SELECT `articlesphotos`.`id` AS `id`, `articlesphotos`.`articles_id` AS `articles_id`, `articlesphotos`.`url` AS `url` FROM `articles_photos` AS `articlesphotos` WHERE `buy_id` = '17' ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/tim/www/audiome.ru/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-08 06:39:19 --- DEBUG: #0 /home/tim/www/audiome.ru/public_html/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `article...', 'Model_ArticlesP...', Array)
#1 /home/tim/www/audiome.ru/public_html/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/tim/www/audiome.ru/public_html/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /home/tim/www/audiome.ru/public_html/application/views/pages/view_buy.php(65): Kohana_ORM->find_all()
#4 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/home/tim/www/a...')
#5 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/tim/www/a...', Array)
#6 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#7 /home/tim/www/audiome.ru/public_html/application/views/basic/2columns.php(26): Kohana_View->__toString()
#8 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/home/tim/www/a...')
#9 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/tim/www/a...', Array)
#10 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#11 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Buy))
#14 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#16 /home/tim/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#17 {main} in /home/tim/www/audiome.ru/public_html/modules/database/classes/Kohana/Database/Query.php:251
2014-01-08 13:54:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: reclam_class ~ APPPATH/views/elements/right.php [ 361 ] in /home/tim/www/audiome.ru/public_html/application/views/elements/right.php:361
2014-01-08 13:54:24 --- DEBUG: #0 /home/tim/www/audiome.ru/public_html/application/views/elements/right.php(361): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/tim/www/a...', 361, Array)
#1 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/home/tim/www/a...')
#2 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/tim/www/a...', Array)
#3 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/tim/www/audiome.ru/public_html/application/views/basic/2columns.php(30): Kohana_View->__toString()
#5 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/home/tim/www/a...')
#6 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/tim/www/a...', Array)
#7 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Articles))
#11 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#13 /home/tim/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /home/tim/www/audiome.ru/public_html/application/views/elements/right.php:361
2014-01-08 13:54:26 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: reclam_class ~ APPPATH/views/elements/right.php [ 361 ] in /home/tim/www/audiome.ru/public_html/application/views/elements/right.php:361
2014-01-08 13:54:26 --- DEBUG: #0 /home/tim/www/audiome.ru/public_html/application/views/elements/right.php(361): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/tim/www/a...', 361, Array)
#1 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/home/tim/www/a...')
#2 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/tim/www/a...', Array)
#3 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/tim/www/audiome.ru/public_html/application/views/basic/2columns.php(30): Kohana_View->__toString()
#5 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/home/tim/www/a...')
#6 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/tim/www/a...', Array)
#7 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Articles))
#11 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#13 /home/tim/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /home/tim/www/audiome.ru/public_html/application/views/elements/right.php:361
2014-01-08 17:11:58 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/elements/right.php [ 162 ] in file:line
2014-01-08 17:11:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-08 17:12:01 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/elements/right.php [ 162 ] in file:line
2014-01-08 17:12:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-08 17:12:02 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/elements/right.php [ 162 ] in file:line
2014-01-08 17:12:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-08 17:13:17 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ']' ~ APPPATH/views/elements/right.php [ 55 ] in file:line
2014-01-08 17:13:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-08 17:13:19 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ']' ~ APPPATH/views/elements/right.php [ 55 ] in file:line
2014-01-08 17:13:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-08 17:13:20 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ']' ~ APPPATH/views/elements/right.php [ 55 ] in file:line
2014-01-08 17:13:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line