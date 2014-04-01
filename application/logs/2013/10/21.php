<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-21 01:02:22 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC), expecting ',' or ';' ~ APPPATH/classes/Model/Configuration.php [ 6 ] in file:line
2013-10-21 01:02:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 21:46:13 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/Model/Configuration.php [ 11 ] in file:line
2013-10-21 21:46:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 23:41:52 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/admin/studio.php [ 34 ] in /var/www/audiome.ax.lt/public_html/application/views/admin/studio.php:34
2013-10-21 23:41:52 --- DEBUG: #0 /var/www/audiome.ax.lt/public_html/application/views/admin/studio.php(34): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/audiom...', 34, Array)
#1 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/View.php(61): include('/var/www/audiom...')
#2 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/audiom...', Array)
#3 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/audiome.ax.lt/public_html/application/views/basic/admin.php(30): Kohana_View->__toString()
#5 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/View.php(61): include('/var/www/audiom...')
#6 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/audiom...', Array)
#7 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#11 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/audiome.ax.lt/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/audiome.ax.lt/public_html/application/views/admin/studio.php:34
2013-10-21 23:43:06 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/admin/studio.php [ 34 ] in /var/www/audiome.ax.lt/public_html/application/views/admin/studio.php:34
2013-10-21 23:43:06 --- DEBUG: #0 /var/www/audiome.ax.lt/public_html/application/views/admin/studio.php(34): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/audiom...', 34, Array)
#1 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/View.php(61): include('/var/www/audiom...')
#2 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/audiom...', Array)
#3 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/audiome.ax.lt/public_html/application/views/basic/admin.php(30): Kohana_View->__toString()
#5 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/View.php(61): include('/var/www/audiom...')
#6 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/audiom...', Array)
#7 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#11 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/audiome.ax.lt/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/audiome.ax.lt/public_html/application/views/admin/studio.php:34
2013-10-21 23:44:12 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::find_all() ~ APPPATH/classes/Controller/Admin.php [ 502 ] in file:line
2013-10-21 23:44:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 23:44:45 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ APPPATH/classes/Controller/Admin.php [ 502 ] in file:line
2013-10-21 23:44:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 23:46:26 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '(' ~ APPPATH/classes/Controller/Admin.php [ 502 ] in file:line
2013-10-21 23:46:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-21 23:52:04 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/admin/studio.php [ 35 ] in /var/www/audiome.ax.lt/public_html/application/views/admin/studio.php:35
2013-10-21 23:52:04 --- DEBUG: #0 /var/www/audiome.ax.lt/public_html/application/views/admin/studio.php(35): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/audiom...', 35, Array)
#1 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/View.php(61): include('/var/www/audiom...')
#2 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/audiom...', Array)
#3 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/audiome.ax.lt/public_html/application/views/basic/admin.php(30): Kohana_View->__toString()
#5 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/View.php(61): include('/var/www/audiom...')
#6 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/audiom...', Array)
#7 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#11 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/audiome.ax.lt/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/audiome.ax.lt/public_html/application/views/admin/studio.php:35