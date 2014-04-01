<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-01-25 13:19:49 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: pack_details ~ APPPATH/views/pages/getPremium.php [ 8 ] in /var/www/antony/data/www/audiome.ru/public_html/application/views/pages/getPremium.php:8
2014-01-25 13:19:49 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/views/pages/getPremium.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/antony...', 8, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/antony/data/www/audiome.ru/public_html/application/views/basic/2columns.php(26): Kohana_View->__toString()
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#7 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Premium))
#11 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/views/pages/getPremium.php:8
2014-01-25 13:43:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: shp_user ~ APPPATH/classes/Controller/GetPremium.php [ 86 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:86
2014-01-25 13:43:51 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(86): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/antony...', 86, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_pay()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:86
2014-01-25 13:51:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: shp_user ~ APPPATH/classes/Controller/GetPremium.php [ 86 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:86
2014-01-25 13:51:02 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(86): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/antony...', 86, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_pay()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:86
2014-01-25 13:51:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_GetPremium::$user_id ~ APPPATH/classes/Controller/GetPremium.php [ 86 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:86
2014-01-25 13:51:15 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(86): Kohana_Core::error_handler(8, 'Undefined prope...', '/var/www/antony...', 86, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_pay()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php:86
2014-01-25 14:29:44 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Orders' not found ~ APPPATH/classes/Controller/GetPremium.php [ 90 ] in file:line
2014-01-25 14:29:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-25 14:55:59 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_Orders' not found ~ APPPATH/classes/Controller/GetPremium.php [ 90 ] in file:line
2014-01-25 14:55:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-25 14:56:53 --- EMERGENCY: ErrorException [ 1 ]: Nesting level too deep - recursive dependency? ~ APPPATH/classes/Controller/GetPremium.php [ 92 ] in file:line
2014-01-25 14:56:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-01-25 14:59:30 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_ORM::save() must be an instance of Validation, integer given, called in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php on line 91 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 1416 ] in /var/www/antony/data/www/audiome.ru/public_html/modules/orm/classes/Kohana/ORM.php:1416
2014-01-25 14:59:30 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/modules/orm/classes/Kohana/ORM.php(1416): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/antony...', 1416, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(91): Kohana_ORM->save(1)
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_pay()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/antony/data/www/audiome.ru/public_html/modules/orm/classes/Kohana/ORM.php:1416
2014-01-25 15:08:06 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_ORM::save() must be an instance of Validation, array given, called in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php on line 98 and defined ~ MODPATH/orm/classes/Kohana/ORM.php [ 1416 ] in /var/www/antony/data/www/audiome.ru/public_html/modules/orm/classes/Kohana/ORM.php:1416
2014-01-25 15:08:06 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/modules/orm/classes/Kohana/ORM.php(1416): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/var/www/antony...', 1416, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/GetPremium.php(98): Kohana_ORM->save(Array)
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_pay()
#3 [internal function]: Kohana_Controller->execute()
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#7 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#8 {main} in /var/www/antony/data/www/audiome.ru/public_html/modules/orm/classes/Kohana/ORM.php:1416
2014-01-25 15:12:26 --- EMERGENCY: ErrorException [ 1 ]: Nesting level too deep - recursive dependency? ~ APPPATH/classes/Controller/GetPremium.php [ 99 ] in file:line
2014-01-25 15:12:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line