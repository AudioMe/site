<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-09 01:40:34 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\pages\studio.php [ 611 ] in :
2013-09-09 01:40:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-09 01:40:35 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected $end ~ APPPATH\views\pages\studio.php [ 611 ] in :
2013-09-09 01:40:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-09 01:44:44 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function child_comments() ~ APPPATH\views\pages\studio.php [ 286 ] in :
2013-09-09 01:44:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-09 23:33:22 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\pages\view_articles.php [ 36 ] in Z:\home\site.ru\www\application\views\pages\view_articles.php:36
2013-09-09 23:33:22 --- DEBUG: #0 Z:\home\site.ru\www\application\views\pages\view_articles.php(36): Kohana_Core::error_handler(8, 'Trying to get p...', 'Z:\home\site.ru...', 36, Array)
#1 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\site.ru\www\application\views\basic\3columns.php(19): Kohana_View->__toString()
#5 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#7 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Articles))
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\site.ru\www\application\views\pages\view_articles.php:36