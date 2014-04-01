<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-24 23:07:03 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\classes\Controller\Add.php [ 205 ] in Z:\home\site.ru\www\application\classes\Controller\Add.php:205
2013-08-24 23:07:03 --- DEBUG: #0 Z:\home\site.ru\www\application\classes\Controller\Add.php(205): Kohana_Core::error_handler(2, 'Invalid argumen...', 'Z:\home\site.ru...', 205, Array)
#1 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Add->action_news()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Add))
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\site.ru\www\application\classes\Controller\Add.php:205
2013-08-24 23:08:58 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::save() must be an array, string given, called in Z:\home\site.ru\www\application\classes\Controller\Add.php on line 213 and defined ~ SYSPATH\classes\Kohana\Upload.php [ 52 ] in Z:\home\site.ru\www\system\classes\Kohana\Upload.php:52
2013-08-24 23:08:58 --- DEBUG: #0 Z:\home\site.ru\www\system\classes\Kohana\Upload.php(52): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'Z:\home\site.ru...', 52, Array)
#1 Z:\home\site.ru\www\application\classes\Controller\Add.php(213): Kohana_Upload::save('art.jpg', '.png', './tmp', 511)
#2 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Add->action_news()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Add))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\site.ru\www\system\classes\Kohana\Upload.php:52
2013-08-24 23:14:23 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::save() must be an array, string given, called in Z:\home\site.ru\www\application\classes\Controller\Add.php on line 214 and defined ~ SYSPATH\classes\Kohana\Upload.php [ 52 ] in Z:\home\site.ru\www\system\classes\Kohana\Upload.php:52
2013-08-24 23:14:23 --- DEBUG: #0 Z:\home\site.ru\www\system\classes\Kohana\Upload.php(52): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'Z:\home\site.ru...', 52, Array)
#1 Z:\home\site.ru\www\application\classes\Controller\Add.php(214): Kohana_Upload::save('epam.jpg', '.png', './tmp', 511)
#2 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Add->action_news()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Add))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\site.ru\www\system\classes\Kohana\Upload.php:52
2013-08-24 23:15:28 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::save() must be an array, string given, called in Z:\home\site.ru\www\application\classes\Controller\Add.php on line 214 and defined ~ SYSPATH\classes\Kohana\Upload.php [ 52 ] in Z:\home\site.ru\www\system\classes\Kohana\Upload.php:52
2013-08-24 23:15:28 --- DEBUG: #0 Z:\home\site.ru\www\system\classes\Kohana\Upload.php(52): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'Z:\home\site.ru...', 52, Array)
#1 Z:\home\site.ru\www\application\classes\Controller\Add.php(214): Kohana_Upload::save('epam.jpg', '.png', './tmp', 511)
#2 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Add->action_news()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Add))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\site.ru\www\system\classes\Kohana\Upload.php:52
2013-08-24 23:23:18 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::save() must be an array, string given, called in Z:\home\site.ru\www\application\classes\Controller\Add.php on line 214 and defined ~ SYSPATH\classes\Kohana\Upload.php [ 52 ] in Z:\home\site.ru\www\system\classes\Kohana\Upload.php:52
2013-08-24 23:23:18 --- DEBUG: #0 Z:\home\site.ru\www\system\classes\Kohana\Upload.php(52): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'Z:\home\site.ru...', 52, Array)
#1 Z:\home\site.ru\www\application\classes\Controller\Add.php(214): Kohana_Upload::save('elec.jpg', '3.png', './tmp', 511)
#2 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Add->action_news()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Add))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\site.ru\www\system\classes\Kohana\Upload.php:52
2013-08-24 23:35:25 --- CRITICAL: ErrorException [ 2 ]: is_uploaded_file() expects parameter 1 to be string, array given ~ SYSPATH\classes\Kohana\Upload.php [ 54 ] in :
2013-08-24 23:35:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'is_uploaded_fil...', 'Z:\home\site.ru...', 54, Array)
#1 Z:\home\site.ru\www\system\classes\Kohana\Upload.php(54): is_uploaded_file(Array)
#2 Z:\home\site.ru\www\application\classes\Controller\Add.php(214): Kohana_Upload::save(Array, '6.png', './tmp', 511)
#3 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Add->action_news()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Add))
#6 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-08-24 23:37:52 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::save() must be an array, integer given, called in Z:\home\site.ru\www\application\classes\Controller\Add.php on line 214 and defined ~ SYSPATH\classes\Kohana\Upload.php [ 52 ] in Z:\home\site.ru\www\system\classes\Kohana\Upload.php:52
2013-08-24 23:37:52 --- DEBUG: #0 Z:\home\site.ru\www\system\classes\Kohana\Upload.php(52): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'Z:\home\site.ru...', 52, Array)
#1 Z:\home\site.ru\www\application\classes\Controller\Add.php(214): Kohana_Upload::save(0, '7.png', './tmp', 511)
#2 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Add->action_news()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Add))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\site.ru\www\system\classes\Kohana\Upload.php:52
2013-08-24 23:42:15 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Upload::save() must be an array, integer given, called in Z:\home\site.ru\www\application\classes\Controller\Add.php on line 214 and defined ~ SYSPATH\classes\Kohana\Upload.php [ 52 ] in Z:\home\site.ru\www\system\classes\Kohana\Upload.php:52
2013-08-24 23:42:15 --- DEBUG: #0 Z:\home\site.ru\www\system\classes\Kohana\Upload.php(52): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'Z:\home\site.ru...', 52, Array)
#1 Z:\home\site.ru\www\application\classes\Controller\Add.php(214): Kohana_Upload::save(0, '8.png', './tmp', 511)
#2 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Add->action_news()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Add))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in Z:\home\site.ru\www\system\classes\Kohana\Upload.php:52
2013-08-24 23:46:55 --- CRITICAL: ErrorException [ 8 ]: Undefined index: tmp_name ~ APPPATH\classes\Controller\Add.php [ 208 ] in Z:\home\site.ru\www\application\classes\Controller\Add.php:208
2013-08-24 23:46:55 --- DEBUG: #0 Z:\home\site.ru\www\application\classes\Controller\Add.php(208): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\site.ru...', 208, Array)
#1 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Add->action_news()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Add))
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\site.ru\www\application\classes\Controller\Add.php:208
2013-08-24 23:58:34 --- CRITICAL: ErrorException [ 8 ]: Undefined index: HTTP_REFERER ~ APPPATH\classes\Controller\Add.php [ 237 ] in Z:\home\site.ru\www\application\classes\Controller\Add.php:237
2013-08-24 23:58:34 --- DEBUG: #0 Z:\home\site.ru\www\application\classes\Controller\Add.php(237): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\site.ru...', 237, Array)
#1 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Add->action_news()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Add))
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\site.ru\www\application\classes\Controller\Add.php:237
2013-08-24 23:58:41 --- CRITICAL: ErrorException [ 8 ]: Undefined index: HTTP_REFERER ~ APPPATH\classes\Controller\Add.php [ 237 ] in Z:\home\site.ru\www\application\classes\Controller\Add.php:237
2013-08-24 23:58:41 --- DEBUG: #0 Z:\home\site.ru\www\application\classes\Controller\Add.php(237): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\site.ru...', 237, Array)
#1 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Add->action_news()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Add))
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\site.ru\www\application\classes\Controller\Add.php:237