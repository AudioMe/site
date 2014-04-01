<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-26 10:20:06 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(https://api.vkontakte.ru/oauth/access_token?client_id=3785121&amp;client_secret=X5TMJ90xnsHTFP4PoXuH&amp;code=) [function.file-get-contents]: failed to open stream: HTTP request failed! HTTP/1.1 400 Bad Request
 ~ APPPATH\classes\Controller\Callback.php [ 14 ] in :
2013-07-26 10:20:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'Z:\home\site.ru...', 14, Array)
#1 Z:\home\site.ru\www\application\classes\Controller\Callback.php(14): file_get_contents('https://api.vko...')
#2 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Callback->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Callback))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-07-26 10:21:51 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(https://api.vkontakte.ru/oauth/access_token?client_id=3785121&amp;client_secret=X5TMJ90xnsHTFP4PoXuH&amp;code=cce0df44d8bca9fee9) [function.file-get-contents]: failed to open stream: HTTP request failed! HTTP/1.1 400 Bad Request
 ~ APPPATH\classes\Controller\Callback.php [ 15 ] in :
2013-07-26 10:21:51 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'Z:\home\site.ru...', 15, Array)
#1 Z:\home\site.ru\www\application\classes\Controller\Callback.php(15): file_get_contents('https://api.vko...')
#2 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Callback->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Callback))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-07-26 10:22:59 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(https://api.vkontakte.ru/oauth/access_token?client_id=3785121&amp;client_secret=X5TMJ90xnsHTFP4PoXuH&amp;code=cce0df44d8bca9fee9) [function.file-get-contents]: failed to open stream: HTTP request failed! HTTP/1.1 400 Bad Request
 ~ APPPATH\classes\Controller\Callback.php [ 16 ] in :
2013-07-26 10:22:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'Z:\home\site.ru...', 16, Array)
#1 Z:\home\site.ru\www\application\classes\Controller\Callback.php(16): file_get_contents('https://api.vko...')
#2 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Callback->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Callback))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-07-26 10:23:44 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(http://api.vkontakte.ru/oauth/access_token?client_id=3785121&amp;client_secret=X5TMJ90xnsHTFP4PoXuH&amp;code=cce0df44d8bca9fee9) [function.file-get-contents]: failed to open stream: HTTP request failed! HTTP/1.1 400 Bad Request
 ~ APPPATH\classes\Controller\Callback.php [ 16 ] in :
2013-07-26 10:23:44 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'Z:\home\site.ru...', 16, Array)
#1 Z:\home\site.ru\www\application\classes\Controller\Callback.php(16): file_get_contents('http://api.vkon...')
#2 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Callback->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Callback))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-07-26 10:24:01 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(https://api.vkontakte.ru/oauth/access_token?client_id=3785121&amp;client_secret=X5TMJ90xnsHTFP4PoXuH&amp;code=cce0df44d8bca9fee9) [function.file-get-contents]: failed to open stream: HTTP request failed! HTTP/1.1 400 Bad Request
 ~ APPPATH\classes\Controller\Callback.php [ 16 ] in :
2013-07-26 10:24:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'Z:\home\site.ru...', 16, Array)
#1 Z:\home\site.ru\www\application\classes\Controller\Callback.php(16): file_get_contents('https://api.vko...')
#2 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Callback->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Callback))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-07-26 10:24:29 --- CRITICAL: ErrorException [ 2 ]: file_get_contents(https://api.vkontakte.ru/oauth/access_token?client_id=3785121&amp;client_secret=X5TMJ90xnsHTFP4PoXuH&amp;code=cce0df44d8bca9fee9) [function.file-get-contents]: failed to open stream: HTTP request failed! HTTP/1.1 400 Bad Request
 ~ APPPATH\classes\Controller\Callback.php [ 13 ] in :
2013-07-26 10:24:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', 'Z:\home\site.ru...', 13, Array)
#1 Z:\home\site.ru\www\application\classes\Controller\Callback.php(13): file_get_contents('https://api.vko...')
#2 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Callback->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Callback))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-07-26 10:54:36 --- CRITICAL: Database_Exception [ 1452 ]: Cannot add or update a child row: a foreign key constraint fails (`music`.`studios`, CONSTRAINT `studios_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE) [ INSERT INTO `studios` (`view`) VALUES (1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in Z:\home\site.ru\www\modules\database\classes\Kohana\Database\Query.php:251
2013-07-26 10:54:36 --- DEBUG: #0 Z:\home\site.ru\www\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `st...', false, Array)
#1 Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php(1321): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#3 Z:\home\site.ru\www\application\classes\Controller\Studio.php(30): Kohana_ORM->save()
#4 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Studio->action_view()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Studio))
#7 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\site.ru\www\modules\database\classes\Kohana\Database\Query.php:251