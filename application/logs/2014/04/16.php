<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-16 10:47:42 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 151 ] in /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Cookie.php:67
2014-04-16 10:47:42 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('PHPSESSID', NULL)
#1 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('PHPSESSID')
#2 /Users/HenrySimonen/Sites/hours/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Cookie.php:67
2014-04-16 13:37:54 --- EMERGENCY: Database_Exception [ 1044 ]: Access denied for user ''@'localhost' to database 'hours' ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 108 ] in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/MySQL.php:75
2014-04-16 13:37:54 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/MySQL.php(75): Kohana_Database_MySQL->_select_db('hours')
#1 /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#2 /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#3 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#4 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#5 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#6 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#7 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#8 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Home.php(10): Kohana_ORM::factory('User')
#9 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#12 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#15 {main} in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/MySQL.php:75
2014-04-16 13:38:08 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'hours.users' doesn't exist [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/MySQL.php:359
2014-04-16 13:38:08 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#2 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Home.php(10): Kohana_ORM::factory('User')
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#10 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#13 {main} in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/MySQL.php:359
2014-04-16 13:45:26 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'hours.tasks' doesn't exist [ SHOW FULL COLUMNS FROM `tasks` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/MySQL.php:359
2014-04-16 13:45:26 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('tasks')
#2 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(13): Kohana_ORM::factory('Task')
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_post_task()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#10 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#13 {main} in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/MySQL.php:359
2014-04-16 13:46:33 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: date ~ APPPATH/classes/Controller/Api.php [ 14 ] in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php:14
2014-04-16 13:46:33 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(14): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/HenrySim...', 14, Array)
#1 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_post_task()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php:14
2014-04-16 13:53:36 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:1302
2014-04-16 13:53:36 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(18): Kohana_ORM->save()
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_post_task()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:1302
2014-04-16 13:55:22 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:1302
2014-04-16 13:55:22 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/HenrySimonen/Sites/hours/application/classes/ORM.php(6): Kohana_ORM->save(NULL)
#3 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(18): ORM->save()
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_post_task()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:1302
2014-04-16 13:55:45 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:1302
2014-04-16 13:55:45 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/HenrySimonen/Sites/hours/application/classes/ORM.php(6): Kohana_ORM->save(NULL)
#3 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(18): ORM->save()
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_post_task()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:1302
2014-04-16 05:05:31 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function order_by() on a non-object ~ APPPATH/classes/Controller/Api.php [ 37 ] in file:line
2014-04-16 05:05:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-16 05:05:36 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function where() on a non-object ~ APPPATH/classes/Controller/Api.php [ 36 ] in file:line
2014-04-16 05:05:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-16 05:05:43 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'deleted_at' in 'where clause' [ SELECT `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login` FROM `users` AS `user` WHERE `deleted_at` IS NULL ORDER BY `name` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-16 05:05:43 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', 'Model_User', Array)
#1 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(37): Kohana_ORM->find_all()
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_get_users()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-16 05:05:49 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'name' in 'order clause' [ SELECT `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login` FROM `users` AS `user` ORDER BY `name` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-16 05:05:49 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `user`.`...', 'Model_User', Array)
#1 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(37): Kohana_ORM->find_all()
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_get_users()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-16 05:53:35 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: strFileName ~ APPPATH/classes/Controller/Page.php [ 39 ] in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Page.php:39
2014-04-16 05:53:35 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Page.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/HenrySim...', 39, Array)
#1 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Page->action_download()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Page))
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Page.php:39
2014-04-16 06:26:43 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Report::_respond() ~ APPPATH/classes/Controller/Report.php [ 34 ] in file:line
2014-04-16 06:26:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-16 06:49:30 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Api.php [ 153 ] in file:line
2014-04-16 06:49:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-16 06:49:30 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Api.php [ 153 ] in file:line
2014-04-16 06:49:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-16 06:49:31 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Api.php [ 153 ] in file:line
2014-04-16 06:49:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-16 06:49:31 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Api.php [ 153 ] in file:line
2014-04-16 06:49:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-16 06:49:31 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Api.php [ 153 ] in file:line
2014-04-16 06:49:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-16 06:49:31 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Api.php [ 153 ] in file:line
2014-04-16 06:49:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-16 06:49:32 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Api.php [ 153 ] in file:line
2014-04-16 06:49:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-16 06:49:32 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Api.php [ 153 ] in file:line
2014-04-16 06:49:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-16 06:49:32 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Api.php [ 153 ] in file:line
2014-04-16 06:49:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-16 06:49:33 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Api.php [ 153 ] in file:line
2014-04-16 06:49:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-16 06:49:34 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Api.php [ 153 ] in file:line
2014-04-16 06:49:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-16 06:49:34 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Api.php [ 153 ] in file:line
2014-04-16 06:49:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-16 06:49:37 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Api.php [ 153 ] in file:line
2014-04-16 06:49:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-16 06:51:09 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: startDate ~ APPPATH/classes/Controller/Api.php [ 81 ] in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php:81
2014-04-16 06:51:09 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(81): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/HenrySim...', 81, Array)
#1 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_get_tasks()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php:81
2014-04-16 06:51:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: startDate ~ APPPATH/classes/Controller/Api.php [ 81 ] in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php:81
2014-04-16 06:51:43 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(81): Kohana_Core::error_handler(8, 'Undefined index...', '/Users/HenrySim...', 81, Array)
#1 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_get_tasks()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php:81
2014-04-16 06:52:03 --- EMERGENCY: Database_Exception [ 1065 ]: Query was empty [  ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-16 06:52:03 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, '', false, Array)
#1 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(85): Kohana_Database_Query->execute()
#2 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_get_tasks()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-16 06:53:13 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'task.project_id' in 'where clause' [ 
			SELECT 
				tasks.id,
				tasks.task,
				tasks.date,
				tasks.hours,
				projects.name AS project
			FROM tasks, projects
			WHERE 
				tasks.project_id = projects.id
		 AND task.project_id = 1 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-16 06:53:13 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, '????SELECT ????...', false, Array)
#1 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(86): Kohana_Database_Query->execute()
#2 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_get_tasks()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-16 06:57:18 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Api.php [ 84 ] in file:line
2014-04-16 06:57:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-16 06:57:18 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Api.php [ 84 ] in file:line
2014-04-16 06:57:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line