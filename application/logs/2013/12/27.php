<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-27 13:54:48 --- EMERGENCY: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'audiome2' ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 108 ] in /home/tim/www/audiome.ru/public_html/modules/database/classes/Kohana/Database/MySQL.php:75
2013-12-27 13:54:48 --- DEBUG: #0 /home/tim/www/audiome.ru/public_html/modules/database/classes/Kohana/Database/MySQL.php(75): Kohana_Database_MySQL->_select_db('audiome2')
#1 /home/tim/www/audiome.ru/public_html/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#2 /home/tim/www/audiome.ru/public_html/modules/database/classes/Kohana/Database/MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /home/tim/www/audiome.ru/public_html/modules/orm/classes/Kohana/ORM.php(1665): Kohana_Database_MySQL->list_columns('users')
#4 /home/tim/www/audiome.ru/public_html/modules/orm/classes/Kohana/ORM.php(441): Kohana_ORM->list_columns()
#5 /home/tim/www/audiome.ru/public_html/modules/orm/classes/Kohana/ORM.php(386): Kohana_ORM->reload_columns()
#6 /home/tim/www/audiome.ru/public_html/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /home/tim/www/audiome.ru/public_html/application/views/elements/header.php(41): Kohana_ORM->__construct()
#8 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/home/tim/www/a...')
#9 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/tim/www/a...', Array)
#10 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#11 /home/tim/www/audiome.ru/public_html/application/views/basic/3columns.php(13): Kohana_View->__toString()
#12 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/home/tim/www/a...')
#13 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/tim/www/a...', Array)
#14 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#15 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#16 [internal function]: Kohana_Controller->execute()
#17 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#18 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#19 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#20 /home/tim/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#21 {main} in /home/tim/www/audiome.ru/public_html/modules/database/classes/Kohana/Database/MySQL.php:75
2013-12-27 13:54:48 --- EMERGENCY: Database_Exception [ 1046 ]: No database selected [ SHOW FULL COLUMNS FROM `work` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/tim/www/audiome.ru/public_html/modules/database/classes/Kohana/Database/MySQL.php:358
2013-12-27 13:54:48 --- DEBUG: #0 /home/tim/www/audiome.ru/public_html/modules/database/classes/Kohana/Database/MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /home/tim/www/audiome.ru/public_html/modules/orm/classes/Kohana/ORM.php(1665): Kohana_Database_MySQL->list_columns('work')
#2 /home/tim/www/audiome.ru/public_html/modules/orm/classes/Kohana/ORM.php(441): Kohana_ORM->list_columns()
#3 /home/tim/www/audiome.ru/public_html/modules/orm/classes/Kohana/ORM.php(386): Kohana_ORM->reload_columns()
#4 /home/tim/www/audiome.ru/public_html/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /home/tim/www/audiome.ru/public_html/application/classes/Model/Work.php(7): Kohana_ORM->__construct(NULL)
#6 /home/tim/www/audiome.ru/public_html/application/views/pages/indexTop.php(2): Model_Work->__construct()
#7 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/home/tim/www/a...')
#8 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/tim/www/a...', Array)
#9 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#10 /home/tim/www/audiome.ru/public_html/application/views/basic/3columns.php(18): Kohana_View->__toString()
#11 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/home/tim/www/a...')
#12 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/tim/www/a...', Array)
#13 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#14 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#15 [internal function]: Kohana_Controller->execute()
#16 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#17 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#19 /home/tim/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#20 {main} in /home/tim/www/audiome.ru/public_html/modules/database/classes/Kohana/Database/MySQL.php:358
2013-12-27 13:54:48 --- EMERGENCY: Database_Exception [ 1046 ]: No database selected [ SHOW FULL COLUMNS FROM `work` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/tim/www/audiome.ru/public_html/modules/database/classes/Kohana/Database/MySQL.php:358
2013-12-27 13:54:48 --- DEBUG: #0 /home/tim/www/audiome.ru/public_html/modules/database/classes/Kohana/Database/MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /home/tim/www/audiome.ru/public_html/modules/orm/classes/Kohana/ORM.php(1665): Kohana_Database_MySQL->list_columns('work')
#2 /home/tim/www/audiome.ru/public_html/modules/orm/classes/Kohana/ORM.php(441): Kohana_ORM->list_columns()
#3 /home/tim/www/audiome.ru/public_html/modules/orm/classes/Kohana/ORM.php(386): Kohana_ORM->reload_columns()
#4 /home/tim/www/audiome.ru/public_html/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /home/tim/www/audiome.ru/public_html/application/classes/Model/Work.php(7): Kohana_ORM->__construct(NULL)
#6 /home/tim/www/audiome.ru/public_html/application/views/elements/right.php(172): Model_Work->__construct()
#7 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/home/tim/www/a...')
#8 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/tim/www/a...', Array)
#9 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(228): Kohana_View->render()
#10 /home/tim/www/audiome.ru/public_html/application/views/basic/3columns.php(32): Kohana_View->__toString()
#11 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(61): include('/home/tim/www/a...')
#12 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/View.php(348): Kohana_View::capture('/home/tim/www/a...', Array)
#13 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#14 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#15 [internal function]: Kohana_Controller->execute()
#16 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#17 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#19 /home/tim/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#20 {main} in /home/tim/www/audiome.ru/public_html/modules/database/classes/Kohana/Database/MySQL.php:358
2013-12-27 13:57:22 --- EMERGENCY: Database_Exception [ 2 ]: mysql_connect(): Access denied for user 'user-audiome'@'localhost' (using password: YES) ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /home/tim/www/audiome.ru/public_html/modules/database/classes/Kohana/Database/MySQL.php:171
2013-12-27 13:57:22 --- DEBUG: #0 /home/tim/www/audiome.ru/public_html/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /home/tim/www/audiome.ru/public_html/modules/database/classes/Kohana/Database/MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /home/tim/www/audiome.ru/public_html/modules/orm/classes/Kohana/ORM.php(1665): Kohana_Database_MySQL->list_columns('metro')
#3 /home/tim/www/audiome.ru/public_html/modules/orm/classes/Kohana/ORM.php(441): Kohana_ORM->list_columns()
#4 /home/tim/www/audiome.ru/public_html/modules/orm/classes/Kohana/ORM.php(386): Kohana_ORM->reload_columns()
#5 /home/tim/www/audiome.ru/public_html/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /home/tim/www/audiome.ru/public_html/application/classes/Controller/Register.php(8): Kohana_ORM->__construct()
#7 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Controller.php(84): Controller_Register->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Register))
#10 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /home/tim/www/audiome.ru/public_html/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#12 /home/tim/www/audiome.ru/public_html/index.php(118): Kohana_Request->execute()
#13 {main} in /home/tim/www/audiome.ru/public_html/modules/database/classes/Kohana/Database/MySQL.php:171
2013-12-27 21:24:00 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH/views/basic/3columns.php [ 22 ] in file:line
2013-12-27 21:24:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-27 21:34:49 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH/views/elements/header.php [ 24 ] in file:line
2013-12-27 21:34:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-27 21:34:54 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH/views/elements/header.php [ 24 ] in file:line
2013-12-27 21:34:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-27 21:34:54 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH/views/elements/header.php [ 24 ] in file:line
2013-12-27 21:34:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-12-27 21:34:54 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'else' (T_ELSE) ~ APPPATH/views/elements/header.php [ 24 ] in file:line
2013-12-27 21:34:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line