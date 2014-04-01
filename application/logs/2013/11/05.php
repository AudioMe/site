<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-05 12:30:59 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-1' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = '1' AND `premium` = '0' LIMIT 3 OFFSET -1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 12:30:59 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(69): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 8)
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 12:31:06 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH/classes/Controller/GetPremium.php [ 131 ] in file:line
2013-11-05 12:31:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-05 12:33:25 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-1' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = '1' AND `premium` = '0' LIMIT 3 OFFSET -1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 12:33:25 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(69): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 8)
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 12:33:31 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-1' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = '1' AND `premium` = '0' LIMIT 3 OFFSET -1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 12:33:31 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(69): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 8)
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 12:34:33 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_CONSTANT_ENCAPSED_STRING ~ APPPATH/classes/Controller/GetPremium.php [ 131 ] in file:line
2013-11-05 12:34:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-05 12:35:39 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-1' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = '1' AND `premium` = '0' LIMIT 3 OFFSET -1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 12:35:39 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(69): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 8)
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 12:36:17 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-2' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = '1' AND `premium` = '0' LIMIT 2 OFFSET -2 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 12:36:17 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(69): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 8)
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 12:37:45 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_ENCAPSED_AND_WHITESPACE, expecting T_STRING or T_VARIABLE or T_NUM_STRING ~ APPPATH/classes/Controller/GetPremium.php [ 133 ] in file:line
2013-11-05 12:37:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-05 12:38:01 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-2' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = '1' AND `premium` = '0' LIMIT 2 OFFSET -2 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 12:38:01 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(69): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 8)
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 12:38:10 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-2' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = '1' AND `premium` = '0' LIMIT 2 OFFSET -2 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 12:38:10 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(69): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 8)
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 12:39:06 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-2' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = '1' AND `premium` = '0' LIMIT 2 OFFSET -2 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 12:39:06 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(69): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 8)
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 12:40:01 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-2' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = '1' AND `premium` = '0' LIMIT 2 OFFSET -2 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 12:40:01 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(69): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 8)
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 12:41:08 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-2' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = '1' AND `premium` = '0' LIMIT 2 OFFSET -2 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 12:41:08 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(69): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 8)
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:16:36 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-2' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = '1' AND `premium` = '0' LIMIT 2 OFFSET -2 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:16:36 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(69): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 8)
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:17:52 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-2' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = '1' AND `premium` = '0' LIMIT 2 OFFSET -2 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:17:52 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(69): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 8)
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:26:44 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-2' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = '1' AND `premium` = '0' LIMIT 2 OFFSET -2 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:26:44 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(69): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 8)
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:27:35 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-2' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = '1' AND `premium` = '0' LIMIT 2 OFFSET -2 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:27:35 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(69): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 8)
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:28:03 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-2' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = '1' AND `premium` = '0' LIMIT 2 OFFSET -2 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:28:03 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(69): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 8)
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:28:25 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-2' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = '1' AND `premium` = '0' LIMIT 2 OFFSET -2 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:28:25 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(69): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 8)
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:30:36 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-2' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = '1' AND `premium` = '0' LIMIT 2 OFFSET -2 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:30:36 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(69): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 8, false, '2')
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:32:57 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-2' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = '1' AND `premium` = '0' LIMIT 2 OFFSET -2 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:32:57 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(69): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 8, false, '2')
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:33:53 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-2' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = '1' AND `premium` = '0' LIMIT 2 OFFSET -2 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:33:53 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(69): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 8, false, '2')
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:35:34 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH/classes/Controller/Catalog.php [ 50 ] in file:line
2013-11-05 13:35:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-05 13:35:50 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-2' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = '1' AND `premium` = '0' LIMIT 2 OFFSET -2 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:35:50 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(69): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 8, false, '2')
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:44:16 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-2 OFFSET 0' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = '1' AND `premium` = '0' LIMIT -2 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:44:16 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(68): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 0, false, '0')
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:44:22 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-2' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = 1 AND `premium` = 1 LIMIT 10 OFFSET -2 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:44:22 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(52): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 0, false, '0')
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:44:26 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-2' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = 1 AND `premium` = 1 LIMIT 10 OFFSET -2 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:44:26 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(52): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 0, false, '0')
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:44:31 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-2' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = 1 AND `premium` = 1 LIMIT 10 OFFSET -2 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:44:31 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(52): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 0, false, '0')
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:44:34 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-2' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = 1 AND `premium` = 1 LIMIT 10 OFFSET -2 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:44:34 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(52): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 0, false, '0')
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:44:58 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-2' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = 1 AND `premium` = 1 LIMIT 10 OFFSET -2 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:44:58 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(52): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 0, false, '0')
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:45:01 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-2' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = 1 AND `premium` = 1 LIMIT 10 OFFSET -2 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:45:01 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(52): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 0, false, '0')
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:45:03 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-2' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = 1 AND `premium` = 1 LIMIT 10 OFFSET -2 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:45:03 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(52): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 0, false, '0')
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:45:07 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-2' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = 1 AND `premium` = 1 LIMIT 10 OFFSET -2 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:45:07 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(52): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 0, false, '0')
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:45:32 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-2' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = 1 AND `premium` = 1 LIMIT 10 OFFSET -2 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:45:32 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(52): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 0, false, '0')
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:45:32 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-2' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = 1 AND `premium` = 1 LIMIT 10 OFFSET -2 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:45:32 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(52): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 0, false, '0')
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:48:26 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-2' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = 1 AND `premium` = 1 LIMIT 10 OFFSET -2 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:48:26 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(52): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 0, false, '0')
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:54:32 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-1 OFFSET 0' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = '1' AND `premium` = '0' LIMIT -1 OFFSET 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:54:32 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(69): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 0, false, '0')
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:56:00 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-1' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = 1 AND `premium` = 1 LIMIT 9 OFFSET -1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:56:00 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(53): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 0, false, '0')
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:56:01 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-1' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = 1 AND `premium` = 1 LIMIT 9 OFFSET -1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 13:56:01 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(53): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 0, false, '0')
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-05 14:38:15 --- DEBUG: '31' in /var/www/antony/data/www/audiome.ru/application/classes/Controller/UpdateTask.php:80
2013-11-05 14:47:19 --- DEBUG: '32' in /var/www/antony/data/www/audiome.ru/application/classes/Controller/UpdateTask.php:69
2013-11-05 14:50:00 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected T_VARIABLE ~ APPPATH/classes/Controller/GetPremium.php [ 129 ] in file:line
2013-11-05 14:50:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-11-05 15:04:58 --- DEBUG: '33' in /var/www/antony/data/www/audiome.ru/application/classes/Controller/UpdateTask.php:80
2013-11-05 15:08:22 --- DEBUG: '33' in /var/www/antony/data/www/audiome.ru/application/classes/Controller/UpdateTask.php:69