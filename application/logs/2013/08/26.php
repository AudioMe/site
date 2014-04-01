<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-26 15:14:43 --- CRITICAL: View_Exception [ 0 ]: The requested view admin/edit_discount could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in Z:\home\site.ru\www\system\classes\Kohana\View.php:137
2013-08-26 15:14:43 --- DEBUG: #0 Z:\home\site.ru\www\system\classes\Kohana\View.php(137): Kohana_View->set_filename('admin/edit_disc...')
#1 Z:\home\site.ru\www\system\classes\Kohana\View.php(30): Kohana_View->__construct('admin/edit_disc...', Array)
#2 Z:\home\site.ru\www\application\classes\Controller\Edit.php(240): Kohana_View::factory('admin/edit_disc...', Array)
#3 Z:\home\site.ru\www\system\classes\Kohana\Controller.php(84): Controller_Edit->action_coupon()
#4 [internal function]: Kohana_Controller->execute()
#5 Z:\home\site.ru\www\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Edit))
#6 Z:\home\site.ru\www\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 Z:\home\site.ru\www\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 Z:\home\site.ru\www\index.php(118): Kohana_Request->execute()
#9 {main} in Z:\home\site.ru\www\system\classes\Kohana\View.php:137