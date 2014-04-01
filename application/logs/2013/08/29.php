<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-29 00:42:43 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/pages/premiumPay.php [ 110 ] in :
2013-08-29 00:42:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-29 00:44:39 --- EMERGENCY: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH/views/pages/premiumPay.php [ 113 ] in :
2013-08-29 00:44:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-08-29 00:56:16 --- EMERGENCY: YM_ApiError [ 0 ]: Invalid request error ~ APPPATH/libYM/YandexMoney/ApiRequestor.php [ 102 ] in /www/prosou01/users/prosou01-audiome/www/htdocs/application/libYM/YandexMoney/ApiRequestor.php:59
2013-08-29 00:56:16 --- DEBUG: #0 /www/prosou01/users/prosou01-audiome/www/htdocs/application/libYM/YandexMoney/ApiRequestor.php(59): YM_ApiRequestor->_handleApiError('', 400, NULL)
#1 /www/prosou01/users/prosou01-audiome/www/htdocs/application/libYM/YandexMoney/ApiRequestor.php(17): YM_ApiRequestor->_interpretResponse('', 400, true)
#2 /www/prosou01/users/prosou01-audiome/www/htdocs/application/libYM/YandexMoney.php(110): YM_ApiRequestor->request('https://money.y...', 'pattern_id=p2p&...')
#3 /www/prosou01/users/prosou01-audiome/www/htdocs/application/views/pages/premiumPay.php(44): YandexMoney->requestPaymentP2P(NULL, '41001978969550', '0.05')
#4 /www/prosou01/users/prosou01-audiome/www/htdocs/system/classes/Kohana/View.php(61): include('/www/prosou01/u...')
#5 /www/prosou01/users/prosou01-audiome/www/htdocs/system/classes/Kohana/View.php(348): Kohana_View::capture('/www/prosou01/u...', Array)
#6 /www/prosou01/users/prosou01-audiome/www/htdocs/system/classes/Kohana/View.php(228): Kohana_View->render()
#7 /www/prosou01/users/prosou01-audiome/www/htdocs/application/views/basic/3columns.php(15): Kohana_View->__toString()
#8 /www/prosou01/users/prosou01-audiome/www/htdocs/system/classes/Kohana/View.php(61): include('/www/prosou01/u...')
#9 /www/prosou01/users/prosou01-audiome/www/htdocs/system/classes/Kohana/View.php(348): Kohana_View::capture('/www/prosou01/u...', Array)
#10 /www/prosou01/users/prosou01-audiome/www/htdocs/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#11 /www/prosou01/users/prosou01-audiome/www/htdocs/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /www/prosou01/users/prosou01-audiome/www/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#14 /www/prosou01/users/prosou01-audiome/www/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /www/prosou01/users/prosou01-audiome/www/htdocs/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 /www/prosou01/users/prosou01-audiome/www/htdocs/index.php(118): Kohana_Request->execute()
#17 {main} in /www/prosou01/users/prosou01-audiome/www/htdocs/application/libYM/YandexMoney/ApiRequestor.php:59
2013-08-29 00:56:29 --- EMERGENCY: YM_ApiError [ 0 ]: Invalid request error ~ APPPATH/libYM/YandexMoney/ApiRequestor.php [ 102 ] in /www/prosou01/users/prosou01-audiome/www/htdocs/application/libYM/YandexMoney/ApiRequestor.php:59
2013-08-29 00:56:29 --- DEBUG: #0 /www/prosou01/users/prosou01-audiome/www/htdocs/application/libYM/YandexMoney/ApiRequestor.php(59): YM_ApiRequestor->_handleApiError('', 400, NULL)
#1 /www/prosou01/users/prosou01-audiome/www/htdocs/application/libYM/YandexMoney/ApiRequestor.php(17): YM_ApiRequestor->_interpretResponse('', 400, true)
#2 /www/prosou01/users/prosou01-audiome/www/htdocs/application/libYM/YandexMoney.php(110): YM_ApiRequestor->request('https://money.y...', 'pattern_id=p2p&...')
#3 /www/prosou01/users/prosou01-audiome/www/htdocs/application/views/pages/premiumPay.php(44): YandexMoney->requestPaymentP2P(NULL, '41001978969550', '0.05')
#4 /www/prosou01/users/prosou01-audiome/www/htdocs/system/classes/Kohana/View.php(61): include('/www/prosou01/u...')
#5 /www/prosou01/users/prosou01-audiome/www/htdocs/system/classes/Kohana/View.php(348): Kohana_View::capture('/www/prosou01/u...', Array)
#6 /www/prosou01/users/prosou01-audiome/www/htdocs/system/classes/Kohana/View.php(228): Kohana_View->render()
#7 /www/prosou01/users/prosou01-audiome/www/htdocs/application/views/basic/3columns.php(15): Kohana_View->__toString()
#8 /www/prosou01/users/prosou01-audiome/www/htdocs/system/classes/Kohana/View.php(61): include('/www/prosou01/u...')
#9 /www/prosou01/users/prosou01-audiome/www/htdocs/system/classes/Kohana/View.php(348): Kohana_View::capture('/www/prosou01/u...', Array)
#10 /www/prosou01/users/prosou01-audiome/www/htdocs/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#11 /www/prosou01/users/prosou01-audiome/www/htdocs/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 /www/prosou01/users/prosou01-audiome/www/htdocs/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#14 /www/prosou01/users/prosou01-audiome/www/htdocs/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 /www/prosou01/users/prosou01-audiome/www/htdocs/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#16 /www/prosou01/users/prosou01-audiome/www/htdocs/index.php(118): Kohana_Request->execute()
#17 {main} in /www/prosou01/users/prosou01-audiome/www/htdocs/application/libYM/YandexMoney/ApiRequestor.php:59
2013-08-29 00:59:49 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function getError() on a non-object ~ APPPATH/views/pages/premiumPay.php [ 122 ] in :
2013-08-29 00:59:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :