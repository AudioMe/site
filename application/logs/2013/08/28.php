<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-28 22:42:44 --- EMERGENCY: YM_InsufficientScopeError [ 0 ]: The token does not have permissions for the requested operation. ~ APPPATH/libYM/YandexMoney/ApiRequestor.php [ 106 ] in /www/prosou01/users/prosou01-audiome/www/htdocs/application/libYM/YandexMoney/ApiRequestor.php:59
2013-08-28 22:42:44 --- DEBUG: #0 /www/prosou01/users/prosou01-audiome/www/htdocs/application/libYM/YandexMoney/ApiRequestor.php(59): YM_ApiRequestor->_handleApiError('', 403, NULL)
#1 /www/prosou01/users/prosou01-audiome/www/htdocs/application/libYM/YandexMoney/ApiRequestor.php(17): YM_ApiRequestor->_interpretResponse('', 403, true)
#2 /www/prosou01/users/prosou01-audiome/www/htdocs/application/libYM/YandexMoney.php(97): YM_ApiRequestor->request('https://money.y...', 'operation_id=43...')
#3 /www/prosou01/users/prosou01-audiome/www/htdocs/application/views/pages/premiumPay.php(87): YandexMoney->operationDetail('410011484714904...', '430385021375030...')
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
2013-08-28 22:56:17 --- EMERGENCY: YM_InsufficientScopeError [ 0 ]: The token does not have permissions for the requested operation. ~ APPPATH/libYM/YandexMoney/ApiRequestor.php [ 106 ] in /www/prosou01/users/prosou01-audiome/www/htdocs/application/libYM/YandexMoney/ApiRequestor.php:59
2013-08-28 22:56:17 --- DEBUG: #0 /www/prosou01/users/prosou01-audiome/www/htdocs/application/libYM/YandexMoney/ApiRequestor.php(59): YM_ApiRequestor->_handleApiError('', 403, NULL)
#1 /www/prosou01/users/prosou01-audiome/www/htdocs/application/libYM/YandexMoney/ApiRequestor.php(17): YM_ApiRequestor->_interpretResponse('', 403, true)
#2 /www/prosou01/users/prosou01-audiome/www/htdocs/application/libYM/YandexMoney.php(88): YM_ApiRequestor->request('https://money.y...', 'start_record=0&...')
#3 /www/prosou01/users/prosou01-audiome/www/htdocs/application/views/pages/premiumPay.php(64): YandexMoney->operationHistory('410011484714904...', 0, 3)
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
2013-08-28 23:23:07 --- EMERGENCY: YM_ApiError [ 0 ]: Invalid request error ~ APPPATH/libYM/YandexMoney/ApiRequestor.php [ 102 ] in /www/prosou01/users/prosou01-audiome/www/htdocs/application/libYM/YandexMoney/ApiRequestor.php:59
2013-08-28 23:23:07 --- DEBUG: #0 /www/prosou01/users/prosou01-audiome/www/htdocs/application/libYM/YandexMoney/ApiRequestor.php(59): YM_ApiRequestor->_handleApiError('', 400, NULL)
#1 /www/prosou01/users/prosou01-audiome/www/htdocs/application/libYM/YandexMoney/ApiRequestor.php(17): YM_ApiRequestor->_interpretResponse('', 400, true)
#2 /www/prosou01/users/prosou01-audiome/www/htdocs/application/libYM/YandexMoney.php(110): YM_ApiRequestor->request('https://money.y...', 'pattern_id=p2p&...')
#3 /www/prosou01/users/prosou01-audiome/www/htdocs/application/views/pages/premiumPay.php(49): YandexMoney->requestPaymentP2P(NULL, '410011484714904', '3')
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