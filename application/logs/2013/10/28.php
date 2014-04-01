<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-28 12:44:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: resp ~ APPPATH/libYM/YandexMoney/ApiRequestor.php [ 59 ] in /var/www/php/audiome.ax.lt/public_html/application/libYM/YandexMoney/ApiRequestor.php:59
2013-10-28 12:44:14 --- DEBUG: #0 /var/www/php/audiome.ax.lt/public_html/application/libYM/YandexMoney/ApiRequestor.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/php/au...', 59, Array)
#1 /var/www/php/audiome.ax.lt/public_html/application/libYM/YandexMoney/ApiRequestor.php(17): YM_ApiRequestor->_interpretResponse('', 403, true)
#2 /var/www/php/audiome.ax.lt/public_html/application/libYM/YandexMoney.php(110): YM_ApiRequestor->request('https://money.y...', 'pattern_id=p2p&...')
#3 /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/GetPremium.php(150): YandexMoney->requestPaymentP2P('410011976618023...', '410012024468006', '0.05')
#4 /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_pay()
#5 [internal function]: Kohana_Controller->execute()
#6 /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#7 /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#9 /var/www/php/audiome.ax.lt/public_html/index.php(118): Kohana_Request->execute()
#10 {main} in /var/www/php/audiome.ax.lt/public_html/application/libYM/YandexMoney/ApiRequestor.php:59
2013-10-28 18:23:35 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_AdminSave::action_putAvatar(), called in /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/AdminSave.php [ 25 ] in /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/AdminSave.php:25
2013-10-28 18:23:35 --- DEBUG: #0 /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/AdminSave.php(25): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/php/au...', 25, Array)
#1 /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Controller.php(84): Controller_AdminSave->action_putAvatar()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_AdminSave))
#4 /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/php/audiome.ax.lt/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/AdminSave.php:25
2013-10-28 18:24:28 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_AdminSave::action_putAvatar(), called in /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/AdminSave.php [ 25 ] in /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/AdminSave.php:25
2013-10-28 18:24:28 --- DEBUG: #0 /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/AdminSave.php(25): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/php/au...', 25, Array)
#1 /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Controller.php(84): Controller_AdminSave->action_putAvatar()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_AdminSave))
#4 /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/php/audiome.ax.lt/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/AdminSave.php:25
2013-10-28 18:24:29 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_AdminSave::action_putAvatar(), called in /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/AdminSave.php [ 25 ] in /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/AdminSave.php:25
2013-10-28 18:24:29 --- DEBUG: #0 /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/AdminSave.php(25): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/php/au...', 25, Array)
#1 /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Controller.php(84): Controller_AdminSave->action_putAvatar()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_AdminSave))
#4 /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/php/audiome.ax.lt/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/AdminSave.php:25
2013-10-28 18:24:43 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_AdminSave::action_putAvatar(), called in /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/AdminSave.php [ 25 ] in /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/AdminSave.php:25
2013-10-28 18:24:43 --- DEBUG: #0 /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/AdminSave.php(25): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/php/au...', 25, Array)
#1 /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Controller.php(84): Controller_AdminSave->action_putAvatar()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_AdminSave))
#4 /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/php/audiome.ax.lt/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/AdminSave.php:25
2013-10-28 18:35:10 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: user_temp ~ APPPATH/classes/Controller/AdminSave.php [ 29 ] in /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/AdminSave.php:29
2013-10-28 18:35:10 --- DEBUG: #0 /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/AdminSave.php(29): Kohana_Core::error_handler(8, 'Undefined varia...', '/var/www/php/au...', 29, Array)
#1 /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Controller.php(84): Controller_AdminSave->action_avatar()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_AdminSave))
#4 /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/php/audiome.ax.lt/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/AdminSave.php:29
2013-10-28 18:40:21 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_AdminSave::action_avatar(), called in /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/AdminSave.php [ 25 ] in /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/AdminSave.php:25
2013-10-28 18:40:21 --- DEBUG: #0 /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/AdminSave.php(25): Kohana_Core::error_handler(2, 'Missing argumen...', '/var/www/php/au...', 25, Array)
#1 /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Controller.php(84): Controller_AdminSave->action_avatar()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_AdminSave))
#4 /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/php/audiome.ax.lt/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/AdminSave.php:25
2013-10-28 21:28:13 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/GetPremium.php [ 100 ] in /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/GetPremium.php:100
2013-10-28 21:28:13 --- DEBUG: #0 /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/GetPremium.php(100): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/php/au...', 100, Array)
#1 /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_pay()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#4 /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/php/audiome.ax.lt/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/GetPremium.php:100
2013-10-28 21:30:16 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/GetPremium.php [ 100 ] in /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/GetPremium.php:100
2013-10-28 21:30:16 --- DEBUG: #0 /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/GetPremium.php(100): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/php/au...', 100, Array)
#1 /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_pay()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#4 /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/php/audiome.ax.lt/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/GetPremium.php:100
2013-10-28 21:31:49 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/GetPremium.php [ 100 ] in /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/GetPremium.php:100
2013-10-28 21:31:49 --- DEBUG: #0 /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/GetPremium.php(100): Kohana_Core::error_handler(8, 'Trying to get p...', '/var/www/php/au...', 100, Array)
#1 /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Controller.php(84): Controller_GetPremium->action_pay()
#2 [internal function]: Kohana_Controller->execute()
#3 /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_GetPremium))
#4 /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /var/www/php/audiome.ax.lt/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#6 /var/www/php/audiome.ax.lt/public_html/index.php(118): Kohana_Request->execute()
#7 {main} in /var/www/php/audiome.ax.lt/public_html/application/classes/Controller/GetPremium.php:100