<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-15 10:11:41 --- CRITICAL: Kohana_Exception [ 0 ]: The user_id property does not exist in the Model_ConferenceComments class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-09-15 10:11:41 --- DEBUG: #0 Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('user_id')
#1 Z:\home\site.ru\www\application\views\admin\comments_conference.php(7): Kohana_ORM->__get('user_id')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#4 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\site.ru\www\application\views\basic\admin.php(30): Kohana_View->__toString()
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#7 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-09-15 10:11:52 --- CRITICAL: Kohana_Exception [ 0 ]: The user_id property does not exist in the Model_ConferenceComments class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-09-15 10:11:52 --- DEBUG: #0 Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('user_id')
#1 Z:\home\site.ru\www\application\views\admin\comments_conference.php(7): Kohana_ORM->__get('user_id')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#4 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 Z:\home\site.ru\www\application\views\basic\admin.php(30): Kohana_View->__toString()
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#7 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Admin))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#15 {main} in Z:\home\site.ru\www\modules\orm\classes\Kohana\ORM.php:600
2013-09-15 10:39:31 --- CRITICAL: ErrorException [ 8 ]: Undefined index: SIZE ~ APPPATH\classes\Controller\AdminSave.php [ 244 ] in Z:\home\site.ru\www\application\classes\Controller\AdminSave.php:244
2013-09-15 10:39:31 --- DEBUG: #0 Z:\home\site.ru\www\application\classes\Controller\AdminSave.php(244): Kohana_Core::error_handler(8, 'Undefined index...', 'Z:\home\site.ru...', 244, Array)
#1 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_AdminSave->action_news()
#2 [internal function]: Kohana_Controller->execute()
#3 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_AdminSave))
#4 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#7 {main} in Z:\home\site.ru\www\application\classes\Controller\AdminSave.php:244
2013-09-15 11:33:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: studio ~ APPPATH\views\pages\register.php [ 14 ] in Z:\home\site.ru\www\application\views\pages\register.php:14
2013-09-15 11:33:11 --- DEBUG: #0 Z:\home\site.ru\www\application\views\pages\register.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 14, Array)
#1 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\site.ru\www\application\views\basic\3columns.php(20): Kohana_View->__toString()
#5 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#7 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\site.ru\www\application\views\pages\register.php:14
2013-09-15 11:33:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: studio ~ APPPATH\views\pages\register.php [ 14 ] in Z:\home\site.ru\www\application\views\pages\register.php:14
2013-09-15 11:33:11 --- DEBUG: #0 Z:\home\site.ru\www\application\views\pages\register.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'Z:\home\site.ru...', 14, Array)
#1 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#2 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#3 Z:\home\site.ru\www\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 Z:\home\site.ru\www\application\views\basic\3columns.php(20): Kohana_View->__toString()
#5 Z:\home\site.ru\www\system\classes\Kohana\View.php(61): include('Z:\home\site.ru...')
#6 Z:\home\site.ru\www\system\classes\Kohana\View.php(348): Kohana_View::capture('Z:\home\site.ru...', Array)
#7 Z:\home\site.ru\www\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#11 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#14 {main} in Z:\home\site.ru\www\application\views\pages\register.php:14