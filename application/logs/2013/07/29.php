<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-29 15:23:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: head ~ APPPATH\views\basic\3columns.php [ 4 ] in Z:\home\site.ru\www\application\views\basic\3columns.php:4
2013-07-29 15:23:39 --- DEBUG: #0 Z:\home\site.ru\www\application\views\basic\3columns.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 4, Array)
#1 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_AdminEdit))
#7 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#10 {main} in Z:\home\site.ru\www\application\views\basic\3columns.php:4