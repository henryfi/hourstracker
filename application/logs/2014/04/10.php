<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-10 05:39:15 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_Api::action_delete_task(), called in /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/Api.php [ 36 ] in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php:36
2014-04-10 05:39:15 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(36): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/HenrySim...', 36, Array)
#1 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_delete_task()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php:36
2014-04-10 05:40:37 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::params() ~ APPPATH/classes/Controller/Api.php [ 27 ] in file:line
2014-04-10 05:40:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-10 05:45:04 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete task model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1434 ] in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php:45
2014-04-10 05:45:04 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(45): Kohana_ORM->delete()
#1 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_delete_task()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php:45
2014-04-10 06:43:34 --- EMERGENCY: Database_Exception [ 1366 ]: Incorrect integer value: 'Test' for column 'project_id' at row 1 [ INSERT INTO `tasks` (`date`, `task`, `hours`, `project_id`) VALUES ('2014-04-10', 'assaf', 1, 'Test') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-10 06:43:34 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ta...', false, Array)
#1 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /Users/HenrySimonen/Sites/hours/application/classes/ORM.php(7): Kohana_ORM->save(NULL)
#4 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(52): ORM->save()
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_post_task()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#8 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-10 06:44:19 --- EMERGENCY: Database_Exception [ 1366 ]: Incorrect integer value: 'Test' for column 'project_id' at row 1 [ INSERT INTO `tasks` (`date`, `project_id`, `task`, `hours`) VALUES ('2014-04-10', 'Test', '124412', 1) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-10 06:44:19 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ta...', false, Array)
#1 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /Users/HenrySimonen/Sites/hours/application/classes/ORM.php(7): Kohana_ORM->save(NULL)
#4 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(52): ORM->save()
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_post_task()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#8 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-10 06:45:27 --- EMERGENCY: Database_Exception [ 1366 ]: Incorrect integer value: 'Test' for column 'project_id' at row 1 [ INSERT INTO `tasks` (`date`, `project_id`, `task`, `hours`) VALUES ('2014-04-10', 'Test', 'afsf', 1) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-10 06:45:27 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ta...', false, Array)
#1 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /Users/HenrySimonen/Sites/hours/application/classes/ORM.php(7): Kohana_ORM->save(NULL)
#4 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(52): ORM->save()
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_post_task()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#8 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-10 06:49:59 --- EMERGENCY: Database_Exception [ 1366 ]: Incorrect integer value: 'OP' for column 'project_id' at row 1 [ INSERT INTO `tasks` (`date`, `project_id`, `task`, `hours`) VALUES ('2014-04-10', 'OP', 'Test', 1) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-10 06:49:59 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ta...', false, Array)
#1 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /Users/HenrySimonen/Sites/hours/application/classes/ORM.php(7): Kohana_ORM->save(NULL)
#4 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(56): ORM->save()
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_post_task()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#8 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-10 06:50:07 --- EMERGENCY: Database_Exception [ 1366 ]: Incorrect integer value: 'General' for column 'project_id' at row 1 [ INSERT INTO `tasks` (`date`, `project_id`, `task`, `hours`) VALUES ('2014-04-10', 'General', 'Something general', 3) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-10 06:50:07 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ta...', false, Array)
#1 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#3 /Users/HenrySimonen/Sites/hours/application/classes/ORM.php(7): Kohana_ORM->save(NULL)
#4 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(56): ORM->save()
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_post_task()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#8 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-10 07:42:48 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete project model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1434 ] in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php:81
2014-04-10 07:42:48 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(81): Kohana_ORM->delete()
#1 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_delete_project()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php:81
2014-04-10 07:43:53 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete project model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1434 ] in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php:81
2014-04-10 07:43:53 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(81): Kohana_ORM->delete()
#1 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_delete_project()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php:81
2014-04-10 07:46:53 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'tasks.project_id' in 'on clause' [ SELECT `task`.`id` AS `id`, `task`.`project_id` AS `project_id`, `task`.`created_at` AS `created_at`, `task`.`date` AS `date`, `task`.`task` AS `task`, `task`.`hours` AS `hours` FROM `tasks` AS `task` JOIN `projects` ON (`tasks`.`project_id` = `projects`.`id`) ORDER BY `created_at` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-10 07:46:53 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `task`.`...', 'Model_Task', Array)
#1 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(33): Kohana_ORM->find_all()
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_get_tasks()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-10 07:49:14 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'tasks.*, projects.name' in 'field list' [ SELECT `tasks`.`*, projects`.`name`, `task`.`id` AS `id`, `task`.`project_id` AS `project_id`, `task`.`created_at` AS `created_at`, `task`.`date` AS `date`, `task`.`task` AS `task`, `task`.`hours` AS `hours` FROM `tasks`, `tasks` AS `task` JOIN `projects` ON (`tasks`.`project_id` = `projects`.`id`) ORDER BY `created_at` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-10 07:49:14 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `tasks`....', 'Model_Task', Array)
#1 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(35): Kohana_ORM->find_all()
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_get_tasks()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-10 07:49:50 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'created_at' in order clause is ambiguous [ SELECT `tasks`.*, `task`.`id` AS `id`, `task`.`project_id` AS `project_id`, `task`.`created_at` AS `created_at`, `task`.`date` AS `date`, `task`.`task` AS `task`, `task`.`hours` AS `hours` FROM `tasks`, `tasks` AS `task` ORDER BY `created_at` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-10 07:49:50 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `tasks`....', 'Model_Task', Array)
#1 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(33): Kohana_ORM->find_all()
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_get_tasks()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-10 07:49:51 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'created_at' in order clause is ambiguous [ SELECT `tasks`.*, `task`.`id` AS `id`, `task`.`project_id` AS `project_id`, `task`.`created_at` AS `created_at`, `task`.`date` AS `date`, `task`.`task` AS `task`, `task`.`hours` AS `hours` FROM `tasks`, `tasks` AS `task` ORDER BY `created_at` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-10 07:49:51 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `tasks`....', 'Model_Task', Array)
#1 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(33): Kohana_ORM->find_all()
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_get_tasks()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-10 07:50:12 --- EMERGENCY: Database_Exception [ 1052 ]: Column 'created_at' in order clause is ambiguous [ SELECT *, `task`.`id` AS `id`, `task`.`project_id` AS `project_id`, `task`.`created_at` AS `created_at`, `task`.`date` AS `date`, `task`.`task` AS `task`, `task`.`hours` AS `hours` FROM `tasks`, `tasks` AS `task` ORDER BY `created_at` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-10 07:50:12 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT *, `task...', 'Model_Task', Array)
#1 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(33): Kohana_ORM->find_all()
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_get_tasks()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-10 07:50:49 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'tasks.project_id' in 'on clause' [ SELECT `tasks`.*, `task`.`id` AS `id`, `task`.`project_id` AS `project_id`, `task`.`created_at` AS `created_at`, `task`.`date` AS `date`, `task`.`task` AS `task`, `task`.`hours` AS `hours` FROM `tasks`, `tasks` AS `task` JOIN `projects` ON (`tasks`.`project_id` = `projects`.`id`) ORDER BY `tasks`.`created_at` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-10 07:50:49 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `tasks`....', 'Model_Task', Array)
#1 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(35): Kohana_ORM->find_all()
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_get_tasks()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-10 07:51:08 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'tasks.project_id' in 'on clause' [ SELECT `tasks`.*, `task`.`id` AS `id`, `task`.`project_id` AS `project_id`, `task`.`created_at` AS `created_at`, `task`.`date` AS `date`, `task`.`task` AS `task`, `task`.`hours` AS `hours` FROM `tasks`, `tasks` AS `task` JOIN `projects` ON (`tasks`.`project_id` = `projects`.`id`) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-10 07:51:08 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `tasks`....', 'Model_Task', Array)
#1 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(35): Kohana_ORM->find_all()
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_get_tasks()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-10 07:51:09 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'tasks.project_id' in 'on clause' [ SELECT `tasks`.*, `task`.`id` AS `id`, `task`.`project_id` AS `project_id`, `task`.`created_at` AS `created_at`, `task`.`date` AS `date`, `task`.`task` AS `task`, `task`.`hours` AS `hours` FROM `tasks`, `tasks` AS `task` JOIN `projects` ON (`tasks`.`project_id` = `projects`.`id`) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-10 07:51:09 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `tasks`....', 'Model_Task', Array)
#1 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(35): Kohana_ORM->find_all()
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_get_tasks()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-10 08:01:14 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'tasks.project_id' in 'on clause' [ SELECT `tasks`.*, `task`.`id` AS `id`, `task`.`project_id` AS `project_id`, `task`.`created_at` AS `created_at`, `task`.`date` AS `date`, `task`.`task` AS `task`, `task`.`hours` AS `hours` FROM `tasks`, `tasks` AS `task` JOIN `projects` ON (`tasks`.`project_id` = `projects`.`id`) ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-10 08:01:14 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `tasks`....', 'Model_Task', Array)
#1 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(35): Kohana_ORM->find_all()
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_get_tasks()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-10 08:09:30 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'project.name' in 'field list' [ 
			SELECT 
				tasks.task,
				tasks.date,
				tasks.hours,
				project.name AS project
			FROM tasks, projects
			WHERE 
				tasks.project_id = project.id
		 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-10 08:09:30 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, '????SELECT ????...', false, Array)
#1 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(39): Kohana_Database_Query->execute()
#2 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_get_tasks()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-10 08:09:37 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'project.id' in 'where clause' [ 
			SELECT 
				tasks.task,
				tasks.date,
				tasks.hours,
				projects.name AS project
			FROM tasks, projects
			WHERE 
				tasks.project_id = project.id
		 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-10 08:09:37 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, '????SELECT ????...', false, Array)
#1 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(39): Kohana_Database_Query->execute()
#2 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_get_tasks()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-10 08:20:33 --- EMERGENCY: Kohana_Exception [ 0 ]: The deleted_at property does not exist in the Model_Task class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:702
2014-04-10 08:20:33 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('deleted_at', '2014-04-10 08:2...')
#1 /Users/HenrySimonen/Sites/hours/application/classes/ORM.php(12): Kohana_ORM->__set('deleted_at', '2014-04-10 08:2...')
#2 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(76): ORM->hide()
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_delete_task()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:702
2014-04-10 08:20:39 --- EMERGENCY: Kohana_Exception [ 0 ]: The deleted_at property does not exist in the Model_Task class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:702
2014-04-10 08:20:39 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('deleted_at', '2014-04-10 08:2...')
#1 /Users/HenrySimonen/Sites/hours/application/classes/ORM.php(12): Kohana_ORM->__set('deleted_at', '2014-04-10 08:2...')
#2 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(76): ORM->hide()
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_delete_task()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:702
2014-04-10 08:20:49 --- EMERGENCY: Kohana_Exception [ 0 ]: The deleted_at property does not exist in the Model_Task class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:702
2014-04-10 08:20:49 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('deleted_at', '2014-04-10 08:2...')
#1 /Users/HenrySimonen/Sites/hours/application/classes/ORM.php(12): Kohana_ORM->__set('deleted_at', '2014-04-10 08:2...')
#2 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(76): ORM->hide()
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_delete_task()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:702
2014-04-10 08:21:18 --- EMERGENCY: Kohana_Exception [ 0 ]: The deleted_at property does not exist in the Model_Task class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:702
2014-04-10 08:21:18 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('deleted_at', '2014-04-10 08:2...')
#1 /Users/HenrySimonen/Sites/hours/application/classes/ORM.php(12): Kohana_ORM->__set('deleted_at', '2014-04-10 08:2...')
#2 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(76): ORM->hide()
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_delete_task()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:702
2014-04-10 08:21:27 --- EMERGENCY: Kohana_Exception [ 0 ]: The deleted_at property does not exist in the Model_Task class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:702
2014-04-10 08:21:27 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('deleted_at', '2014-04-10 08:2...')
#1 /Users/HenrySimonen/Sites/hours/application/classes/ORM.php(12): Kohana_ORM->__set('deleted_at', '2014-04-10 08:2...')
#2 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(76): ORM->hide()
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_delete_task()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:702
2014-04-10 08:21:28 --- EMERGENCY: Kohana_Exception [ 0 ]: The deleted_at property does not exist in the Model_Task class ~ MODPATH/orm/classes/Kohana/ORM.php [ 760 ] in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:702
2014-04-10 08:21:28 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('deleted_at', '2014-04-10 08:2...')
#1 /Users/HenrySimonen/Sites/hours/application/classes/ORM.php(12): Kohana_ORM->__set('deleted_at', '2014-04-10 08:2...')
#2 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(76): ORM->hide()
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_delete_task()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:702
2014-04-10 08:22:33 --- EMERGENCY: Kohana_Exception [ 0 ]: Cannot delete task model because it is not loaded. ~ MODPATH/orm/classes/Kohana/ORM.php [ 1434 ] in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php:76
2014-04-10 08:22:33 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(76): Kohana_ORM->delete()
#1 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_delete_task()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php:76
2014-04-10 08:24:18 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Api.php [ 15 ] in file:line
2014-04-10 08:24:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-10 08:24:20 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Api.php [ 15 ] in file:line
2014-04-10 08:24:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-10 08:25:09 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Api.php [ 15 ] in file:line
2014-04-10 08:25:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-10 08:25:16 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Api.php [ 15 ] in file:line
2014-04-10 08:25:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-10 08:26:51 --- EMERGENCY: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near ''NULL' ORDER BY `name` DESC' at line 1 [ SELECT `project`.`id` AS `id`, `project`.`name` AS `name`, `project`.`created_at` AS `created_at`, `project`.`deleted_at` AS `deleted_at` FROM `projects` AS `project` WHERE `deleted_at` IS 'NULL' ORDER BY `name` DESC ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-10 08:26:51 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `project...', 'Model_Project', Array)
#1 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1004): Kohana_ORM->_load_result(true)
#3 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(17): Kohana_ORM->find_all()
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_get_projects()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-10 09:04:17 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::create_user() ~ APPPATH/classes/Controller/Home.php [ 13 ] in file:line
2014-04-10 09:04:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-10 09:04:45 --- EMERGENCY: Database_Exception [ 1146 ]: Table 'hours.auth_users' doesn't exist [ SHOW FULL COLUMNS FROM `auth_users` ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/MySQL.php:359
2014-04-10 09:04:45 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1668): Kohana_Database_MySQL->list_columns('auth_users')
#2 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(444): Kohana_ORM->list_columns()
#3 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(389): Kohana_ORM->reload_columns()
#4 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#5 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#6 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Home.php(13): Kohana_ORM::factory('Auth_User')
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#10 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#13 {main} in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/MySQL.php:359
2014-04-10 09:05:35 --- EMERGENCY: ErrorException [ 1 ]: Class 'Auth' not found ~ MODPATH/orm/classes/Model/Auth/User.php [ 59 ] in file:line
2014-04-10 09:05:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-10 09:05:43 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/Kohana/Auth.php [ 155 ] in file:line
2014-04-10 09:05:43 --- DEBUG: #0 [internal function]: Kohana_Auth->hash('foobar')
#1 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1210): call_user_func_array(Array, Array)
#2 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(732): Kohana_ORM->run_filter('password', 'foobar')
#3 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('password', 'foobar')
#4 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(804): Kohana_ORM->__set('password', 'foobar')
#5 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Model/Auth/User.php(167): Kohana_ORM->values(Array, Array)
#6 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Home.php(17): Model_Auth_User->create_user(Array, Array)
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#10 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-04-10 09:05:54 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/Kohana/Auth.php [ 155 ] in file:line
2014-04-10 09:05:54 --- DEBUG: #0 [internal function]: Kohana_Auth->hash('foobar')
#1 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1210): call_user_func_array(Array, Array)
#2 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(732): Kohana_ORM->run_filter('password', 'foobar')
#3 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('password', 'foobar')
#4 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(804): Kohana_ORM->__set('password', 'foobar')
#5 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Model/Auth/User.php(167): Kohana_ORM->values(Array, Array)
#6 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Home.php(17): Model_Auth_User->create_user(Array, Array)
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#10 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-04-10 09:05:55 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH/auth/classes/Kohana/Auth.php [ 155 ] in file:line
2014-04-10 09:05:55 --- DEBUG: #0 [internal function]: Kohana_Auth->hash('foobar')
#1 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1210): call_user_func_array(Array, Array)
#2 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(732): Kohana_ORM->run_filter('password', 'foobar')
#3 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(702): Kohana_ORM->set('password', 'foobar')
#4 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(804): Kohana_ORM->__set('password', 'foobar')
#5 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Model/Auth/User.php(167): Kohana_ORM->values(Array, Array)
#6 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Home.php(17): Model_Auth_User->create_user(Array, Array)
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#10 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#13 {main} in file:line
2014-04-10 09:06:17 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:1302
2014-04-10 09:06:17 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Model/Auth/User.php(167): Kohana_ORM->create(Object(Validation))
#2 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Home.php(17): Model_Auth_User->create_user(Array, Array)
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:1302
2014-04-10 09:06:35 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:1302
2014-04-10 09:06:35 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Model/Auth/User.php(167): Kohana_ORM->create(Object(Validation))
#2 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Home.php(17): Model_Auth_User->create_user(Array, Array)
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:1302
2014-04-10 09:06:36 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:1302
2014-04-10 09:06:36 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Model/Auth/User.php(167): Kohana_ORM->create(Object(Validation))
#2 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Home.php(17): Model_Auth_User->create_user(Array, Array)
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:1302
2014-04-10 09:08:31 --- EMERGENCY: ErrorException [ 1 ]: Call to a member function add() on a non-object ~ APPPATH/classes/Controller/Home.php [ 26 ] in file:line
2014-04-10 09:08:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-10 09:09:22 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/classes/Controller/Home.php [ 8 ] in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Home.php:8
2014-04-10 09:09:22 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Home.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/HenrySim...', 8, Array)
#1 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Home.php:8
2014-04-10 09:09:33 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:1302
2014-04-10 09:09:33 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Model/Auth/User.php(167): Kohana_ORM->create(Object(Validation))
#2 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Home.php(17): Model_Auth_User->create_user(Array, Array)
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:1302
2014-04-10 09:10:20 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:1302
2014-04-10 09:10:20 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Model/Auth/User.php(167): Kohana_ORM->create(Object(Validation))
#2 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Home.php(16): Model_Auth_User->create_user(Array, Array)
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:1302
2014-04-10 09:10:35 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 2 for Model_Auth_User::create_user(), called in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Home.php on line 12 and defined ~ MODPATH/orm/classes/Model/Auth/User.php [ 161 ] in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Model/Auth/User.php:161
2014-04-10 09:10:35 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Model/Auth/User.php(161): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/HenrySim...', 161, Array)
#1 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Home.php(12): Model_Auth_User->create_user(Array)
#2 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Model/Auth/User.php:161
2014-04-10 09:12:02 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:1302
2014-04-10 09:12:02 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Model/Auth/User.php(167): Kohana_ORM->create(Object(Validation))
#2 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Home.php(18): Model_Auth_User->create_user(Array, Array)
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:1302
2014-04-10 09:12:48 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:1302
2014-04-10 09:12:48 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Model/Auth/User.php(167): Kohana_ORM->create(Object(Validation))
#2 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Home.php(18): Model_Auth_User->create_user(Array, Array)
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:1302
2014-04-10 09:12:53 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '1-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (1, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-10 09:12:53 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Home.php(21): Kohana_ORM->add('roles', Object(Model_Role))
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-10 09:13:10 --- EMERGENCY: Database_Exception [ 1062 ]: Duplicate entry '1-1' for key 'PRIMARY' [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (1, '1') ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-10 09:13:10 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Home.php(21): Kohana_ORM->add('roles', Object(Model_Role))
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251