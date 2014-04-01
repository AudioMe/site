<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-03 01:32:47 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-1' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = '1' AND `premium` = '0' LIMIT 3 OFFSET -1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-03 01:32:47 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(69): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 8)
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-03 02:05:16 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-1' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = '1' AND `premium` = '0' LIMIT 3 OFFSET -1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-03 02:05:16 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(69): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 8)
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-03 02:09:53 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-1' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = '1' AND `premium` = '0' LIMIT 3 OFFSET -1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-03 02:09:53 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(69): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 8)
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-03 02:31:03 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-1' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = '1' AND `premium` = '0' LIMIT 3 OFFSET -1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-03 02:31:03 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(69): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 8)
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-03 13:48:07 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-1' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = '1' AND `premium` = '0' LIMIT 3 OFFSET -1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-03 13:48:07 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(69): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 8)
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-03 13:49:45 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-1' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = '1' AND `premium` = '0' LIMIT 3 OFFSET -1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-03 13:49:45 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(69): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 8)
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-03 13:50:28 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '-1' at line 1 [ SELECT * FROM `studios` AS `s` WHERE `public` = '1' AND `premium` = '0' LIMIT 3 OFFSET -1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251
2013-11-03 13:50:28 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#1 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(69): Kohana_Database_Query->execute()
#2 /var/www/antony/data/www/audiome.ru/application/classes/Controller/Catalog.php(32): Controller_Catalog->_getStudios(4, 8)
#3 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(84): Controller_Catalog->action_next()
#4 [internal function]: Kohana_Controller->execute()
#5 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Catalog))
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#8 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#9 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/Query.php:251