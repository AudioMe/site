<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-02-04 01:01:52 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/AddFree.php [ 386 ] in file:line
2014-02-04 01:01:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-04 01:02:26 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH/classes/Controller/AddFree.php [ 386 ] in file:line
2014-02-04 01:02:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-04 01:15:22 --- EMERGENCY: Kohana_Exception [ 0 ]: The id property does not exist in the Model_Region class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /var/www/antony/data/www/audiome.ru/public_html/modules/orm/classes/Kohana/ORM.php:600
2014-02-04 01:15:22 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('id')
#1 /var/www/antony/data/www/audiome.ru/public_html/application/views/elements/right.php(303): Kohana_ORM->__get('id')
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /var/www/antony/data/www/audiome.ru/public_html/application/views/basic/2columns.php(30): Kohana_View->__toString()
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#7 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#8 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#9 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#12 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#14 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#15 {main} in /var/www/antony/data/www/audiome.ru/public_html/modules/orm/classes/Kohana/ORM.php:600
2014-02-04 01:29:12 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING, expecting ',' or ';' ~ APPPATH/views/elements/right.php [ 391 ] in file:line
2014-02-04 01:29:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-04 01:38:07 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE, expecting T_CATCH ~ APPPATH/classes/Controller/Search.php [ 160 ] in file:line
2014-02-04 01:38:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-04 01:38:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: studios_premium ~ APPPATH/views/pages/search.php [ 138 ] in /var/www/antony/data/www/audiome.ru/public_html/application/views/pages/search.php:138
2014-02-04 01:38:41 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/views/pages/search.php(138): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/antony...', 138, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/antony/data/www/audiome.ru/public_html/application/views/basic/2columns.php(26): Kohana_View->__toString()
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#7 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Search))
#11 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/views/pages/search.php:138
2014-02-04 01:40:02 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method ErrorException::geMessage() ~ APPPATH/classes/Controller/Search.php [ 174 ] in file:line
2014-02-04 01:40:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-04 01:47:57 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ APPPATH/classes/Controller/Search.php [ 122 ] in file:line
2014-02-04 01:47:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-04 02:58:13 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH/classes/Controller/AddFree.php [ 439 ] in file:line
2014-02-04 02:58:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-04 03:07:49 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function where() on a non-object ~ APPPATH/classes/Controller/AddFree.php [ 436 ] in file:line
2014-02-04 03:07:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-02-04 17:21:23 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Profile.php [ 10 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php:10
2014-02-04 17:21:23 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php(10): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/antony...', 10, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_Profile->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php:10
2014-02-04 17:21:27 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Profile.php [ 10 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php:10
2014-02-04 17:21:27 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php(10): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/antony...', 10, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_Profile->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php:10
2014-02-04 17:21:55 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Profile.php [ 10 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php:10
2014-02-04 17:21:55 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php(10): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/antony...', 10, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_Profile->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php:10
2014-02-04 17:22:06 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Profile.php [ 10 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php:10
2014-02-04 17:22:06 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php(10): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/antony...', 10, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_Profile->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php:10
2014-02-04 17:39:59 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Profile.php [ 10 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php:10
2014-02-04 17:39:59 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php(10): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/antony...', 10, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_Profile->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php:10
2014-02-04 18:05:04 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Profile.php [ 10 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php:10
2014-02-04 18:05:04 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php(10): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/antony...', 10, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_Profile->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php:10
2014-02-04 18:15:33 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/admin/articles.php [ 13 ] in /var/www/antony/data/www/audiome.ru/public_html/application/views/admin/articles.php:13
2014-02-04 18:15:33 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/views/admin/articles.php(13): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/antony...', 13, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/antony/data/www/audiome.ru/public_html/application/views/basic/admin.php(30): Kohana_View->__toString()
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#7 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#11 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/views/admin/articles.php:13
2014-02-04 18:15:44 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/admin/articles.php [ 13 ] in /var/www/antony/data/www/audiome.ru/public_html/application/views/admin/articles.php:13
2014-02-04 18:15:44 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/views/admin/articles.php(13): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/antony...', 13, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/antony/data/www/audiome.ru/public_html/application/views/basic/admin.php(30): Kohana_View->__toString()
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#7 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#11 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/views/admin/articles.php:13
2014-02-04 18:16:52 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Profile.php [ 10 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php:10
2014-02-04 18:16:52 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php(10): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/antony...', 10, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_Profile->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php:10
2014-02-04 18:17:20 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Profile.php [ 10 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php:10
2014-02-04 18:17:20 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php(10): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/antony...', 10, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_Profile->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php:10
2014-02-04 18:32:17 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Profile.php [ 10 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php:10
2014-02-04 18:32:17 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php(10): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/antony...', 10, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_Profile->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php:10
2014-02-04 18:36:47 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Profile.php [ 10 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php:10
2014-02-04 18:36:47 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php(10): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/antony...', 10, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_Profile->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php:10
2014-02-04 19:55:15 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/Profile.php [ 10 ] in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php:10
2014-02-04 19:55:15 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php(10): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/antony...', 10, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_Profile->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Profile))
#4 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/classes/Controller/Profile.php:10
2014-02-04 23:13:15 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/admin/articles.php [ 13 ] in /var/www/antony/data/www/audiome.ru/public_html/application/views/admin/articles.php:13
2014-02-04 23:13:15 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/views/admin/articles.php(13): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/antony...', 13, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/antony/data/www/audiome.ru/public_html/application/views/basic/admin.php(30): Kohana_View->__toString()
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#7 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#11 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/views/admin/articles.php:13
2014-02-04 23:13:20 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/views/admin/articles.php [ 13 ] in /var/www/antony/data/www/audiome.ru/public_html/application/views/admin/articles.php:13
2014-02-04 23:13:20 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/public_html/application/views/admin/articles.php(13): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/antony...', 13, Array)
#1 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#2 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#3 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /var/www/antony/data/www/audiome.ru/public_html/application/views/basic/admin.php(30): Kohana_View->__toString()
#5 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#6 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#7 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#11 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /var/www/antony/data/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#13 /var/www/antony/data/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#14 {main} in /var/www/antony/data/www/audiome.ru/public_html/application/views/admin/articles.php:13