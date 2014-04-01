<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-02 22:47:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: email ~ APPPATH\views\admin\studio.php [ 22 ] in Z:\home\site.ru\www\application\views\admin\studio.php:22
2013-08-02 22:47:14 --- DEBUG: #0 Z:\home\site.ru\www\application\views\admin\studio.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 22, Array)
#1 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\site.ru\www\application\views\basic\admin.php(27): Kohana_View->__toString()
#5 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#7 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\site.ru\www\application\views\admin\studio.php:22
2013-08-02 22:49:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: metro ~ APPPATH\views\admin\studio.php [ 35 ] in Z:\home\site.ru\www\application\views\admin\studio.php:35
2013-08-02 22:49:08 --- DEBUG: #0 Z:\home\site.ru\www\application\views\admin\studio.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 35, Array)
#1 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\site.ru\www\application\views\basic\admin.php(27): Kohana_View->__toString()
#5 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#7 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\site.ru\www\application\views\admin\studio.php:35
2013-08-02 23:09:25 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 963 ] in Z:\home\site.ru\www\application\classes\Controller\Admin.php:124
2013-08-02 23:09:25 --- DEBUG: #0 Z:\home\site.ru\www\application\classes\Controller\Admin.php(124): Kohana_ORM->find()
#1 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Admin->action_studio()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\site.ru\www\application\classes\Controller\Admin.php:124