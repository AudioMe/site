<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-27 00:00:02 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ':' ~ APPPATH/classes/Controller/Welcome.php [ 27 ] in file:line
2013-10-27 00:00:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-27 00:01:30 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_object() ~ APPPATH/classes/Model/Studios.php [ 18 ] in file:line
2013-10-27 00:01:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-27 02:31:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: photo ~ APPPATH/classes/Controller/AdminSave.php [ 28 ] in /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/AdminSave.php:28
2013-10-27 02:31:01 --- DEBUG: #0 /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/AdminSave.php(28): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/php/au...', 28, Array)
#1 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Controller.php(84): Controller_AdminSave->action_studio()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_AdminSave))
#4 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/audiome.ax.lt/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/AdminSave.php:28
2013-10-27 02:31:32 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: photo ~ APPPATH/classes/Controller/AdminSave.php [ 28 ] in /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/AdminSave.php:28
2013-10-27 02:31:32 --- DEBUG: #0 /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/AdminSave.php(28): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/php/au...', 28, Array)
#1 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Controller.php(84): Controller_AdminSave->action_studio()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_AdminSave))
#4 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/audiome.ax.lt/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/AdminSave.php:28
2013-10-27 02:32:34 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: photo ~ APPPATH/classes/Controller/AdminSave.php [ 28 ] in /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/AdminSave.php:28
2013-10-27 02:32:34 --- DEBUG: #0 /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/AdminSave.php(28): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/php/au...', 28, Array)
#1 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Controller.php(84): Controller_AdminSave->action_studio()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_AdminSave))
#4 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/audiome.ax.lt/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/AdminSave.php:28