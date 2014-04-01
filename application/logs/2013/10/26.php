<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-26 00:02:12 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: curent_package ~ APPPATH/views/pages/premiumPay.php [ 14 ] in /var/www/audiome.ax.lt/public_html/application/views/pages/premiumPay.php:14
2013-10-26 00:02:12 --- DEBUG: #0 /var/www/audiome.ax.lt/public_html/application/views/pages/premiumPay.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/audiom...', 14, Array)
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
#12 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/audiome.ax.lt/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/audiome.ax.lt/public_html/application/views/pages/premiumPay.php:14
2013-10-26 00:31:03 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/views/pages/premiumPay.php [ 2 ] in file:line
2013-10-26 00:31:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-26 00:46:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: is_ok ~ APPPATH/classes/Controller/GetPremium.php [ 92 ] in /var/www/audiome.ax.lt/public_html/application/classes/Controller/GetPremium.php:92
2013-10-26 00:46:53 --- DEBUG: #0 /var/www/audiome.ax.lt/public_html/application/classes/Controller/GetPremium.php(92): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/audiom...', 92, Array)
#1 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_pay()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#4 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/audiome.ax.lt/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/audiome.ax.lt/public_html/application/classes/Controller/GetPremium.php:92
2013-10-26 00:58:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: code ~ APPPATH/classes/Controller/GetPremium.php [ 76 ] in /var/www/audiome.ax.lt/public_html/application/classes/Controller/GetPremium.php:76
2013-10-26 00:58:16 --- DEBUG: #0 /var/www/audiome.ax.lt/public_html/application/classes/Controller/GetPremium.php(76): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/audiom...', 76, Array)
#1 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_pay()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#4 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/audiome.ax.lt/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/audiome.ax.lt/public_html/application/classes/Controller/GetPremium.php:76
2013-10-26 01:01:30 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: uid ~ APPPATH/classes/Controller/GetPremium.php [ 94 ] in /var/www/audiome.ax.lt/public_html/application/classes/Controller/GetPremium.php:94
2013-10-26 01:01:30 --- DEBUG: #0 /var/www/audiome.ax.lt/public_html/application/classes/Controller/GetPremium.php(94): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/audiom...', 94, Array)
#1 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_pay()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#4 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/audiome.ax.lt/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/audiome.ax.lt/public_html/application/classes/Controller/GetPremium.php:94
2013-10-26 10:25:21 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_PremiumQueue::getUserQueues() ~ APPPATH/views/elements/right.php [ 44 ] in file:line
2013-10-26 10:25:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-26 10:25:22 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_PremiumQueue::getUserQueues() ~ APPPATH/views/elements/right.php [ 44 ] in file:line
2013-10-26 10:25:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-26 10:25:22 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_PremiumQueue::getUserQueues() ~ APPPATH/views/elements/right.php [ 44 ] in file:line
2013-10-26 10:25:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-26 10:25:22 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_PremiumQueue::getUserQueues() ~ APPPATH/views/elements/right.php [ 44 ] in file:line
2013-10-26 10:25:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-26 10:25:22 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_PremiumQueue::getUserQueues() ~ APPPATH/views/elements/right.php [ 44 ] in file:line
2013-10-26 10:25:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-26 10:25:22 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_PremiumQueue::getUserQueues() ~ APPPATH/views/elements/right.php [ 44 ] in file:line
2013-10-26 10:25:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-26 10:25:22 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_PremiumQueue::getUserQueues() ~ APPPATH/views/elements/right.php [ 44 ] in file:line
2013-10-26 10:25:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-26 10:25:22 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_PremiumQueue::getUserQueues() ~ APPPATH/views/elements/right.php [ 44 ] in file:line
2013-10-26 10:25:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-26 10:25:22 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_PremiumQueue::getUserQueues() ~ APPPATH/views/elements/right.php [ 44 ] in file:line
2013-10-26 10:25:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-26 10:25:22 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_PremiumQueue::getUserQueues() ~ APPPATH/views/elements/right.php [ 44 ] in file:line
2013-10-26 10:25:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-26 10:25:23 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_PremiumQueue::getUserQueues() ~ APPPATH/views/elements/right.php [ 44 ] in file:line
2013-10-26 10:25:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-26 10:25:23 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_PremiumQueue::getUserQueues() ~ APPPATH/views/elements/right.php [ 44 ] in file:line
2013-10-26 10:25:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-26 10:25:23 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_PremiumQueue::getUserQueues() ~ APPPATH/views/elements/right.php [ 44 ] in file:line
2013-10-26 10:25:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-26 10:25:23 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_PremiumQueue::getUserQueues() ~ APPPATH/views/elements/right.php [ 44 ] in file:line
2013-10-26 10:25:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-26 10:25:23 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_PremiumQueue::getUserQueues() ~ APPPATH/views/elements/right.php [ 44 ] in file:line
2013-10-26 10:25:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-26 10:25:23 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_PremiumQueue::getUserQueues() ~ APPPATH/views/elements/right.php [ 44 ] in file:line
2013-10-26 10:25:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-26 11:17:24 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH/classes/Controller/GetPremium.php [ 236 ] in /var/www/audiome.ax.lt/public_html/application/classes/Controller/GetPremium.php:236
2013-10-26 11:17:24 --- DEBUG: #0 /var/www/audiome.ax.lt/public_html/application/classes/Controller/GetPremium.php(236): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/audiom...', 236, Array)
#1 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_pay()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#4 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/audiome.ax.lt/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/audiome.ax.lt/public_html/application/classes/Controller/GetPremium.php:236
2013-10-26 11:18:05 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH/classes/Controller/GetPremium.php [ 236 ] in /var/www/audiome.ax.lt/public_html/application/classes/Controller/GetPremium.php:236
2013-10-26 11:18:05 --- DEBUG: #0 /var/www/audiome.ax.lt/public_html/application/classes/Controller/GetPremium.php(236): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/audiom...', 236, Array)
#1 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_pay()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#4 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/audiome.ax.lt/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/audiome.ax.lt/public_html/application/classes/Controller/GetPremium.php:236
2013-10-26 14:56:56 --- EMERGENCY: ErrorException [ 1 ]: Class 'HTTP_Exception_200' not found ~ SYSPATH/classes/Kohana/HTTP/Exception.php [ 17 ] in file:line
2013-10-26 14:56:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-26 15:12:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_id ~ APPPATH/classes/Controller/GetPremium.php [ 103 ] in /var/www/audiome.ax.lt/public_html/application/classes/Controller/GetPremium.php:103
2013-10-26 15:12:09 --- DEBUG: #0 /var/www/audiome.ax.lt/public_html/application/classes/Controller/GetPremium.php(103): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/audiom...', 103, Array)
#1 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_pay()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#4 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/audiome.ax.lt/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/audiome.ax.lt/public_html/application/classes/Controller/GetPremium.php:103
2013-10-26 19:12:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH/views/pages/buy.php [ 10 ] in file:line
2013-10-26 19:12:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-26 20:30:07 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data_right ~ APPPATH/classes/Controller/Catalog.php [ 22 ] in /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/Catalog.php:22
2013-10-26 20:30:07 --- DEBUG: #0 /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/Catalog.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/php/au...', 22, Array)
#1 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/audiome.ax.lt/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/Catalog.php:22
2013-10-26 21:12:57 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::as_assoc() ~ APPPATH/classes/Controller/Catalog.php [ 39 ] in file:line
2013-10-26 21:12:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-26 21:38:57 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: offset ~ APPPATH/classes/Controller/Catalog.php [ 28 ] in /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/Catalog.php:28
2013-10-26 21:38:57 --- DEBUG: #0 /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/Catalog.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/php/au...', 28, Array)
#1 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#4 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/audiome.ax.lt/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/Catalog.php:28
2013-10-26 22:11:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: exptra ~ APPPATH/views/pages/catalog.php [ 26 ] in /var/www/php/audiome.ax.lt/public_html/application/views/pages/catalog.php:26
2013-10-26 22:11:14 --- DEBUG: #0 /var/www/php/audiome.ax.lt/public_html/application/views/pages/catalog.php(26): Kohana_Core::error_handler(8, 'Undefined index...', '/var/www/php/au...', 26, Array)
#1 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/View.php(61): include('/var/www/php/au...')
#2 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/php/au...', Array)
#3 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/audiome.ax.lt/public_html/application/views/basic/3columns.php(23): Kohana_View->__toString()
#5 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/View.php(61): include('/var/www/audiom...')
#6 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/php/au...', Array)
#7 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#11 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/audiome.ax.lt/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/audiome.ax.lt/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/php/audiome.ax.lt/public_html/application/views/pages/catalog.php:26