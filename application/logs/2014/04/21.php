<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-21 11:55:05 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method DB::escape() ~ APPPATH/classes/Controller/Api.php [ 163 ] in file:line
2014-04-21 11:55:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-21 11:57:55 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 433 ] in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/MySQL.php:433
2014-04-21 11:57:55 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/MySQL.php(433): Kohana_Core::error_handler(8, 'Array to string...', '/Users/HenrySim...', 433, Array)
#1 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(164): Kohana_Database_MySQL->escape(Array)
#2 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(67): Controller_Api->_filters(Array, Array)
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_get_tasks()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/MySQL.php:433
2014-04-21 12:02:36 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 3 for Controller_Api::{closure}() ~ APPPATH/classes/Controller/Api.php [ 165 ] in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php:165
2014-04-21 12:02:36 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(165): Kohana_Core::error_handler(2, 'Missing argumen...', '/Users/HenrySim...', 165, Array)
#1 [internal function]: Controller_Api->{closure}('1', 0)
#2 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(167): array_walk(Array, Object(Closure))
#3 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(67): Controller_Api->_filters(Array, Array)
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_get_tasks()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php:165
2014-04-21 12:02:59 --- EMERGENCY: ErrorException [ 8 ]: Array to string conversion ~ APPPATH/classes/Controller/Api.php [ 169 ] in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php:169
2014-04-21 12:02:59 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(169): Kohana_Core::error_handler(8, 'Array to string...', '/Users/HenrySim...', 169, Array)
#1 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(67): Controller_Api->_filters(Array, Array)
#2 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_get_tasks()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php:169
2014-04-21 12:04:49 --- EMERGENCY: ErrorException [ 2 ]: implode(): Argument must be an array ~ APPPATH/classes/Controller/Api.php [ 84 ] in file:line
2014-04-21 12:04:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Argu...', '/Users/HenrySim...', 84, Array)
#1 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(84): implode(''1','2'')
#2 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_get_tasks()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-04-21 12:20:15 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'user.id' in 'field list' [ 
			SELECT 
				tasks.id,
				tasks.task,
				tasks.date,
				tasks.hours,
				projects.name AS project,
				user.id AS user_id,
				user.name AS user_name
			FROM tasks, projects, users
			WHERE 
				tasks.project_id = projects.id
		 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-21 12:20:15 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, '????SELECT ????...', false, Array)
#1 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(90): Kohana_Database_Query->execute()
#2 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_get_tasks()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/HenrySimonen/Sites/hours/modules/database/classes/Kohana/Database/Query.php:251
2014-04-21 12:27:01 --- EMERGENCY: ErrorException [ 2 ]: file_get_contents(/hours/api/tasks?startDate=2014-04-21&amp;endDate=2014-04-21&amp;project=0&amp;users%5B0%5D=1&amp;users%5B1%5D=2): failed to open stream: No such file or directory ~ APPPATH/classes/Controller/Report.php [ 14 ] in file:line
2014-04-21 12:27:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'file_get_conten...', '/Users/HenrySim...', 14, Array)
#1 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Report.php(14): file_get_contents('/hours/api/task...')
#2 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Report->action_download()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2014-04-21 12:40:41 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Role as array ~ APPPATH/classes/Controller/Home.php [ 27 ] in file:line
2014-04-21 12:40:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-21 12:42:56 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::find_one() ~ APPPATH/classes/User.php [ 29 ] in file:line
2014-04-21 12:42:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-21 13:09:43 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Auth::params() ~ APPPATH/classes/Controller/Auth.php [ 30 ] in file:line
2014-04-21 13:09:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-21 13:09:48 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Controller_Auth::param() ~ APPPATH/classes/Controller/Auth.php [ 30 ] in file:line
2014-04-21 13:09:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-21 13:57:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: title ~ APPPATH/views/Excelreport.php [ 57 ] in /Users/HenrySimonen/Sites/hours/application/views/Excelreport.php:57
2014-04-21 13:57:47 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/application/views/Excelreport.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/HenrySim...', 57, Array)
#1 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/View.php(61): include('/Users/HenrySim...')
#2 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/HenrySim...', Array)
#3 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Report.php(18): Kohana_View->render()
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Report->action_download()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/HenrySimonen/Sites/hours/application/views/Excelreport.php:57
2014-04-21 13:59:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: strFile ~ APPPATH/classes/Controller/Report.php [ 36 ] in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Report.php:36
2014-04-21 13:59:42 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Report.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/HenrySim...', 36, Array)
#1 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Report->action_download()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Report.php:36
2014-04-21 13:59:43 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: strFile ~ APPPATH/classes/Controller/Report.php [ 36 ] in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Report.php:36
2014-04-21 13:59:43 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Report.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/HenrySim...', 36, Array)
#1 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Report->action_download()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Report.php:36
2014-04-21 13:59:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: strFile ~ APPPATH/classes/Controller/Report.php [ 36 ] in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Report.php:36
2014-04-21 13:59:47 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Report.php(36): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/HenrySim...', 36, Array)
#1 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Report->action_download()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Report.php:36
2014-04-21 14:00:46 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: strFile ~ APPPATH/classes/Controller/Report.php [ 35 ] in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Report.php:35
2014-04-21 14:00:46 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Report.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/HenrySim...', 35, Array)
#1 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Report->action_download()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Report.php:35
2014-04-21 14:00:47 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: strFile ~ APPPATH/classes/Controller/Report.php [ 35 ] in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Report.php:35
2014-04-21 14:00:47 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Report.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/HenrySim...', 35, Array)
#1 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Report->action_download()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Report.php:35
2014-04-21 14:00:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: strFile ~ APPPATH/classes/Controller/Report.php [ 35 ] in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Report.php:35
2014-04-21 14:00:48 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Report.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/HenrySim...', 35, Array)
#1 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Report->action_download()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Report.php:35
2014-04-21 14:00:48 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: strFile ~ APPPATH/classes/Controller/Report.php [ 35 ] in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Report.php:35
2014-04-21 14:00:48 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Report.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/HenrySim...', 35, Array)
#1 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Report->action_download()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Report.php:35
2014-04-21 14:00:53 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: strFile ~ APPPATH/classes/Controller/Report.php [ 35 ] in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Report.php:35
2014-04-21 14:00:53 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Report.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/HenrySim...', 35, Array)
#1 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Report->action_download()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Report.php:35
2014-04-21 14:01:15 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: strFile ~ APPPATH/classes/Controller/Report.php [ 35 ] in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Report.php:35
2014-04-21 14:01:15 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Report.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/HenrySim...', 35, Array)
#1 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Report->action_download()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Report.php:35
2014-04-21 14:01:16 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: strFile ~ APPPATH/classes/Controller/Report.php [ 35 ] in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Report.php:35
2014-04-21 14:01:16 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Report.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/HenrySim...', 35, Array)
#1 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Report->action_download()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Report.php:35
2014-04-21 14:01:23 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: strFile ~ APPPATH/classes/Controller/Report.php [ 35 ] in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Report.php:35
2014-04-21 14:01:23 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Report.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/HenrySim...', 35, Array)
#1 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Report->action_download()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Report.php:35
2014-04-21 14:11:19 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH/classes/Controller/Report.php [ 12 ] in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Report.php:12
2014-04-21 14:11:19 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Report.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/HenrySim...', 12, Array)
#1 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Report->action_download()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Report.php:12
2014-04-21 14:11:37 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$task_by_name ~ APPPATH/classes/Controller/Report.php [ 21 ] in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Report.php:21
2014-04-21 14:11:37 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Report.php(21): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/HenrySim...', 21, Array)
#1 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Report->action_download()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Report))
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Report.php:21
2014-04-21 14:13:01 --- EMERGENCY: ErrorException [ 4 ]: parse error, expecting `')'' ~ APPPATH/classes/Controller/Report.php [ 21 ] in file:line
2014-04-21 14:13:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line