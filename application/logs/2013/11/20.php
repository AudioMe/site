<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-11-20 01:49:23 --- EMERGENCY: Database_Exception [ 126 ]: Incorrect key file for table '/tmp/#sql_630_0.MYI'; try to repair it [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/MySQL.php:358
2013-11-20 01:49:23 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/antony/data/www/audiome.ru/modules/orm/classes/Kohana/ORM.php(1665): Kohana_Database_MySQL->list_columns('users')
#2 /var/www/antony/data/www/audiome.ru/modules/orm/classes/Kohana/ORM.php(441): Kohana_ORM->list_columns()
#3 /var/www/antony/data/www/audiome.ru/modules/orm/classes/Kohana/ORM.php(386): Kohana_ORM->reload_columns()
#4 /var/www/antony/data/www/audiome.ru/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/antony/data/www/audiome.ru/application/views/elements/header.php(33): Kohana_ORM->__construct()
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#8 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(228): Kohana_View->render()
#9 /var/www/antony/data/www/audiome.ru/application/views/basic/3columns.php(13): Kohana_View->__toString()
#10 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#11 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#12 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#13 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#14 [internal function]: Kohana_Controller->execute()
#15 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#16 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#18 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#19 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/MySQL.php:358
2013-11-20 01:49:23 --- EMERGENCY: Database_Exception [ 126 ]: Incorrect key file for table '/tmp/#sql_630_0.MYI'; try to repair it [ SHOW FULL COLUMNS FROM `work` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/MySQL.php:358
2013-11-20 01:49:23 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/antony/data/www/audiome.ru/modules/orm/classes/Kohana/ORM.php(1665): Kohana_Database_MySQL->list_columns('work')
#2 /var/www/antony/data/www/audiome.ru/modules/orm/classes/Kohana/ORM.php(441): Kohana_ORM->list_columns()
#3 /var/www/antony/data/www/audiome.ru/modules/orm/classes/Kohana/ORM.php(386): Kohana_ORM->reload_columns()
#4 /var/www/antony/data/www/audiome.ru/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/antony/data/www/audiome.ru/application/classes/Model/Work.php(7): Kohana_ORM->__construct(NULL)
#6 /var/www/antony/data/www/audiome.ru/application/views/pages/indexTop.php(2): Model_Work->__construct()
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#8 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#9 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(228): Kohana_View->render()
#10 /var/www/antony/data/www/audiome.ru/application/views/basic/3columns.php(18): Kohana_View->__toString()
#11 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#12 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#13 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#14 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#15 [internal function]: Kohana_Controller->execute()
#16 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#17 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#19 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#20 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/MySQL.php:358
2013-11-20 01:49:23 --- EMERGENCY: Database_Exception [ 126 ]: Incorrect key file for table '/tmp/#sql_630_0.MYI'; try to repair it [ SHOW FULL COLUMNS FROM `work` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/MySQL.php:358
2013-11-20 01:49:23 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/antony/data/www/audiome.ru/modules/orm/classes/Kohana/ORM.php(1665): Kohana_Database_MySQL->list_columns('work')
#2 /var/www/antony/data/www/audiome.ru/modules/orm/classes/Kohana/ORM.php(441): Kohana_ORM->list_columns()
#3 /var/www/antony/data/www/audiome.ru/modules/orm/classes/Kohana/ORM.php(386): Kohana_ORM->reload_columns()
#4 /var/www/antony/data/www/audiome.ru/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/antony/data/www/audiome.ru/application/classes/Model/Work.php(7): Kohana_ORM->__construct(NULL)
#6 /var/www/antony/data/www/audiome.ru/application/views/elements/right.php(172): Model_Work->__construct()
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#8 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#9 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(228): Kohana_View->render()
#10 /var/www/antony/data/www/audiome.ru/application/views/basic/3columns.php(32): Kohana_View->__toString()
#11 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#12 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#13 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#14 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#15 [internal function]: Kohana_Controller->execute()
#16 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#17 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#19 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#20 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/MySQL.php:358
2013-11-20 01:49:23 --- ERROR: ErrorException [ 2 ]: session_write_close(): write failed: На устройстве кончилось место (28) ~ SYSPATH/classes/Kohana/Session/Native.php [ 68 ] in file:line
2013-11-20 03:38:21 --- EMERGENCY: Database_Exception [ 126 ]: Incorrect key file for table '/tmp/#sql_630_0.MYI'; try to repair it [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/MySQL.php:358
2013-11-20 03:38:21 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/antony/data/www/audiome.ru/modules/orm/classes/Kohana/ORM.php(1665): Kohana_Database_MySQL->list_columns('users')
#2 /var/www/antony/data/www/audiome.ru/modules/orm/classes/Kohana/ORM.php(441): Kohana_ORM->list_columns()
#3 /var/www/antony/data/www/audiome.ru/modules/orm/classes/Kohana/ORM.php(386): Kohana_ORM->reload_columns()
#4 /var/www/antony/data/www/audiome.ru/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/antony/data/www/audiome.ru/application/views/elements/header.php(33): Kohana_ORM->__construct()
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#8 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(228): Kohana_View->render()
#9 /var/www/antony/data/www/audiome.ru/application/views/basic/3columns.php(13): Kohana_View->__toString()
#10 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#11 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#12 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#13 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#14 [internal function]: Kohana_Controller->execute()
#15 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#16 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#18 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#19 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/MySQL.php:358
2013-11-20 03:38:21 --- EMERGENCY: Database_Exception [ 126 ]: Incorrect key file for table '/tmp/#sql_630_0.MYI'; try to repair it [ SHOW FULL COLUMNS FROM `work` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/MySQL.php:358
2013-11-20 03:38:21 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/antony/data/www/audiome.ru/modules/orm/classes/Kohana/ORM.php(1665): Kohana_Database_MySQL->list_columns('work')
#2 /var/www/antony/data/www/audiome.ru/modules/orm/classes/Kohana/ORM.php(441): Kohana_ORM->list_columns()
#3 /var/www/antony/data/www/audiome.ru/modules/orm/classes/Kohana/ORM.php(386): Kohana_ORM->reload_columns()
#4 /var/www/antony/data/www/audiome.ru/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/antony/data/www/audiome.ru/application/classes/Model/Work.php(7): Kohana_ORM->__construct(NULL)
#6 /var/www/antony/data/www/audiome.ru/application/views/pages/indexTop.php(2): Model_Work->__construct()
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#8 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#9 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(228): Kohana_View->render()
#10 /var/www/antony/data/www/audiome.ru/application/views/basic/3columns.php(18): Kohana_View->__toString()
#11 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#12 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#13 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#14 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#15 [internal function]: Kohana_Controller->execute()
#16 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#17 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#19 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#20 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/MySQL.php:358
2013-11-20 03:38:21 --- EMERGENCY: Database_Exception [ 126 ]: Incorrect key file for table '/tmp/#sql_630_0.MYI'; try to repair it [ SHOW FULL COLUMNS FROM `work` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/MySQL.php:358
2013-11-20 03:38:21 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/antony/data/www/audiome.ru/modules/orm/classes/Kohana/ORM.php(1665): Kohana_Database_MySQL->list_columns('work')
#2 /var/www/antony/data/www/audiome.ru/modules/orm/classes/Kohana/ORM.php(441): Kohana_ORM->list_columns()
#3 /var/www/antony/data/www/audiome.ru/modules/orm/classes/Kohana/ORM.php(386): Kohana_ORM->reload_columns()
#4 /var/www/antony/data/www/audiome.ru/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/antony/data/www/audiome.ru/application/classes/Model/Work.php(7): Kohana_ORM->__construct(NULL)
#6 /var/www/antony/data/www/audiome.ru/application/views/elements/right.php(172): Model_Work->__construct()
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#8 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#9 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(228): Kohana_View->render()
#10 /var/www/antony/data/www/audiome.ru/application/views/basic/3columns.php(32): Kohana_View->__toString()
#11 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#12 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#13 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#14 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#15 [internal function]: Kohana_Controller->execute()
#16 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#17 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#18 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#19 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#20 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/MySQL.php:358
2013-11-20 03:38:21 --- ERROR: ErrorException [ 2 ]: session_write_close(): write failed: На устройстве кончилось место (28) ~ SYSPATH/classes/Kohana/Session/Native.php [ 68 ] in file:line
2013-11-20 04:58:06 --- EMERGENCY: Database_Exception [ 1030 ]: Got error 28 from storage engine [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/MySQL.php:358
2013-11-20 04:58:06 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/antony/data/www/audiome.ru/modules/orm/classes/Kohana/ORM.php(1665): Kohana_Database_MySQL->list_columns('users')
#2 /var/www/antony/data/www/audiome.ru/modules/orm/classes/Kohana/ORM.php(441): Kohana_ORM->list_columns()
#3 /var/www/antony/data/www/audiome.ru/modules/orm/classes/Kohana/ORM.php(386): Kohana_ORM->reload_columns()
#4 /var/www/antony/data/www/audiome.ru/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/antony/data/www/audiome.ru/application/views/elements/header.php(33): Kohana_ORM->__construct()
#6 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#7 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#8 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(228): Kohana_View->render()
#9 /var/www/antony/data/www/audiome.ru/application/views/basic/3columns.php(13): Kohana_View->__toString()
#10 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(61): include('/var/www/antony...')
#11 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/View.php(348): Kohana_View::capture('/var/www/antony...', Array)
#12 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#13 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#14 [internal function]: Kohana_Controller->execute()
#15 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#16 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#17 /var/www/antony/data/www/audiome.ru/system/classes/Kohana/Request.php(991): Kohana_Request_Client->execute(Object(Request))
#18 /var/www/antony/data/www/audiome.ru/index.php(118): Kohana_Request->execute()
#19 {main} in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/MySQL.php:358
2013-11-20 04:58:06 --- EMERGENCY: Database_Exception [ 1030 ]: Got error 28 from storage engine [ SHOW FULL COLUMNS FROM `work` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/MySQL.php:358
2013-11-20 04:58:06 --- DEBUG: #0 /var/www/antony/data/www/audiome.ru/modules/database/classes/Kohana/Database/MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /var/www/antony/data/www/audiome.ru/modules/orm/classes/Kohana/ORM.php(1665): Kohana_Database_MySQL->list_columns('work')
#2 /var/www/antony/data/www/audiome.ru/modules/orm/classes/Kohana/ORM.php(441): Kohana_ORM->list_columns()
#3 /var/www/antony/data/www/audiome.ru/modules/orm/classes/Kohana/ORM.php(386): Kohana_ORM->reload_columns()
#4 /var/www/antony/data/www/audiome.ru/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /var/www/antony/data/www/audiome.ru/application/classes/Model/Work.php(7): Kohana_ORM->__construct(NU