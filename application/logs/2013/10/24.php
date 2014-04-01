<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-24 22:42:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: config ~ APPPATH/views/pages/premiumPay.php [ 5 ] in /var/www/audiome.ax.lt/public_html/application/views/pages/premiumPay.php:5
2013-10-24 22:42:30 --- DEBUG: #0 /var/www/audiome.ax.lt/public_html/application/views/pages/premiumPay.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/audiom...', 5, Array)
#1 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/View.php(61): include('/var/www/audiom...')
#2 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/audiom...', Array)
#3 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/audiome.ax.lt/public_html/application/views/basic/3columns.php(23): Kohana_View->__toString()
#5 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/View.php(61): include('/var/www/audiom...')
#6 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/audiom...', Array)
#7 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#11 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/audiome.ax.lt/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/audiome.ax.lt/public_html/application/views/pages/premiumPay.php:5
2013-10-24 23:06:39 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '\' (T_NS_SEPARATOR) ~ APPPATH/views/pages/premiumPay.php [ 31 ] in file:line
2013-10-24 23:06:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line