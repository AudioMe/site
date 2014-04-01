<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-02-24 10:26:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/views/pages/search.php [ 5 ] in /var/www/audiome/data/www/audiome.ru/public_html/application/views/pages/search.php:5
2014-02-24 10:26:35 --- DEBUG: #0 /var/www/audiome/data/www/audiome.ru/public_html/application/views/pages/search.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/audiom...', 5, Array)
#1 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/audiom...')
#2 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/audiom...', Array)
#3 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/audiome/data/www/audiome.ru/public_html/application/views/basic/2columns.php(26): Kohana_View->__toString()
#5 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/audiom...')
#6 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/audiom...', Array)
#7 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#11 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/audiome/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/audiome/data/www/audiome.ru/public_html/application/views/pages/search.php:5
2014-02-24 10:36:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/pages/search.php [ 5 ] in file:line
2014-02-24 10:36:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-24 10:36:22 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/pages/search.php [ 5 ] in file:line
2014-02-24 10:36:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-24 14:46:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: studio ~ APPPATH/views/pages/search.php [ 34 ] in /var/www/audiome/data/www/audiome.ru/public_html/application/views/pages/search.php:34
2014-02-24 14:46:23 --- DEBUG: #0 /var/www/audiome/data/www/audiome.ru/public_html/application/views/pages/search.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/audiom...', 34, Array)
#1 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/audiom...')
#2 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/audiom...', Array)
#3 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/audiome/data/www/audiome.ru/public_html/application/views/basic/2columns.php(26): Kohana_View->__toString()
#5 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/audiom...')
#6 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/audiom...', Array)
#7 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#11 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/audiome/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/audiome/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/audiome/data/www/audiome.ru/public_html/application/views/pages/search.php:34