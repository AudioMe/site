<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-30 02:51:38 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH/views/pages/view_articles.php [ 496 ] in file:line
2013-12-30 02:51:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-30 02:52:09 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function where() on a non-object ~ APPPATH/views/pages/view_articles.php [ 48 ] in file:line
2013-12-30 02:52:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-30 03:43:19 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH/views/pages/view_articles.php [ 222 ] in file:line
2013-12-30 03:43:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-30 03:47:50 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: comment ~ APPPATH/views/pages/view_articles.php [ 147 ] in /home/tim/www/audiome.ru/public_html/application/views/pages/view_articles.php:147
2013-12-30 03:47:50 --- DEBUG: #0 /home/tim/www/audiome.ru/public_html/application/views/pages/view_articles.php(147): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/tim/www/a...', 147, Array)
#1 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/home/tim/www/a...')
#2 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/tim/www/a...', Array)
#3 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /home/tim/www/audiome.ru/public_html/application/views/basic/2columns.php(26): Kohana_View->__toString()
#5 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/home/tim/www/a...')
#6 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/tim/www/a...', Array)
#7 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Articles))
#11 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#13 /home/tim/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /home/tim/www/audiome.ru/public_html/application/views/pages/view_articles.php:147
2013-12-30 04:22:15 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH/views/pages/view_articles.php [ 106 ] in file:line
2013-12-30 04:22:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-30 04:40:54 --- EMERGENCY: Kohana_Exception [ 0 ]: The add_user_id property does not exist in the Model_ArticlesComments class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/tim/www/audiome.ru/public_html/modules/orm/classes/Kohana/ORM.php:600
2013-12-30 04:40:54 --- DEBUG: #0 /home/tim/www/audiome.ru/public_html/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('add_user_id')
#1 /home/tim/www/audiome.ru/public_html/application/views/pages/view_articles.php(99): Kohana_ORM->__get('add_user_id')
#2 /home/tim/www/audiome.ru/public_html/application/views/pages/view_articles.php(189): print_comment(Object(Model_ArticlesComments), Array, 0)
#3 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/home/tim/www/a...')
#4 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/tim/www/a...', Array)
#5 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#6 /home/tim/www/audiome.ru/public_html/application/views/basic/2columns.php(26): Kohana_View->__toString()
#7 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/home/tim/www/a...')
#8 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/tim/www/a...', Array)
#9 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#10 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Articles))
#13 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#15 /home/tim/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#16 {main} in /home/tim/www/audiome.ru/public_html/modules/orm/classes/Kohana/ORM.php:600
2013-12-30 07:19:46 --- EMERGENCY: Kohana_Exception [ 0 ]: The email property does not exist in the Model_Studios class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /home/tim/www/audiome.ru/public_html/modules/orm/classes/Kohana/ORM.php:600
2013-12-30 07:19:46 --- DEBUG: #0 /home/tim/www/audiome.ru/public_html/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('email')
#1 /home/tim/www/audiome.ru/public_html/application/views/pages/studio.php(74): Kohana_ORM->__get('email')
#2 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/home/tim/www/a...')
#3 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/tim/www/a...', Array)
#4 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /home/tim/www/audiome.ru/public_html/application/views/basic/2columns.php(26): Kohana_View->__toString()
#6 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/home/tim/www/a...')
#7 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/tim/www/a...', Array)
#8 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Studio))
#12 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#14 /home/tim/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#15 {main} in /home/tim/www/audiome.ru/public_html/modules/orm/classes/Kohana/ORM.php:600