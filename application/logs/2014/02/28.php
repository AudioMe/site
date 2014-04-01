<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-02-28 12:13:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: sworks ~ APPPATH/views/elements/right.php [ 281 ] in /var/www/audiome/data/www/audiome.ru/public_html/application/views/elements/right.php:281
2014-02-28 12:13:25 --- DEBUG: #0 /var/www/audiome/data/www/audiome.ru/public_html/application/views/elements/right.php(281): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/audiom...', 281, Array)
#1 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/audiom...')
#2 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/audiom...', Array)
#3 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/audiome/data/www/audiome.ru/public_html/application/views/basic/2columns.php(30): Kohana_View->__toString()
#5 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/audiom...')
#6 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/audiom...', Array)
#7 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#11 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/audiome/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/audiome/data/www/audiome.ru/public_html/application/views/elements/right.php:281
2014-02-28 18:04:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/Controller/Admin.php [ 1293 ] in file:line
2014-02-28 18:04:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 18:04:40 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/Controller/Admin.php [ 1296 ] in file:line
2014-02-28 18:04:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 18:18:40 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_ELSE ~ APPPATH/views/admin/newsletter.php [ 5 ] in file:line
2014-02-28 18:18:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 18:24:17 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_ELSEIF ~ APPPATH/views/admin/newsletter.php [ 5 ] in file:line
2014-02-28 18:24:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 18:32:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: register ~ APPPATH/classes/Controller/Admin.php [ 1318 ] in /var/www/audiome/data/www/audiome.ru/public_html/application/classes/Controller/Admin.php:1318
2014-02-28 18:32:35 --- DEBUG: #0 /var/www/audiome/data/www/audiome.ru/public_html/application/classes/Controller/Admin.php(1318): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/audiom...', 1318, Array)
#1 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_Admin->action_newsletter()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/audiome/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/audiome/data/www/audiome.ru/public_html/application/classes/Controller/Admin.php:1318
2014-02-28 18:35:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_STRING ~ APPPATH/classes/Controller/Admin.php [ 1315 ] in file:line
2014-02-28 18:35:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-28 18:35:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: message ~ APPPATH/classes/Controller/Admin.php [ 1321 ] in /var/www/audiome/data/www/audiome.ru/public_html/application/classes/Controller/Admin.php:1321
2014-02-28 18:35:39 --- DEBUG: #0 /var/www/audiome/data/www/audiome.ru/public_html/application/classes/Controller/Admin.php(1321): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/audiom...', 1321, Array)
#1 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_Admin->action_newsletter()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/audiome/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/audiome/data/www/audiome.ru/public_html/application/classes/Controller/Admin.php:1321
2014-02-28 18:35:49 --- EMERGENCY: ErrorException [ 2 ]: mail() expects parameter 1 to be string, array given ~ APPPATH/classes/Model/Useful.php [ 50 ] in file:line
2014-02-28 18:35:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'mail() expects ...', '/var/www/audiom...', 50, Array)
#1 /var/www/audiome/data/www/audiome.ru/public_html/application/classes/Model/Useful.php(50): mail(Array, '321', '<p>231</p>', 'From: irobot@au...')
#2 /var/www/audiome/data/www/audiome.ru/public_html/application/classes/Controller/Admin.php(1322): Model_Useful->native_mail(Array, 'irobot@audiome....', '321', '<p>231</p>')
#3 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_Admin->action_newsletter()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#6 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/audiome/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#9 {main} in file:line