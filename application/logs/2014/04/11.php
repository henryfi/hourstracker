<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-11 01:15:18 --- EMERGENCY: View_Exception [ 0 ]: The requested view Login could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/HenrySimonen/Sites/hours/system/classes/Kohana/View.php:137
2014-04-11 01:15:18 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/View.php(137): Kohana_View->set_filename('Login')
#1 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/View.php(30): Kohana_View->__construct('Login', NULL)
#2 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Auth.php(7): Kohana_View::factory('Login')
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Auth->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#6 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/HenrySimonen/Sites/hours/system/classes/Kohana/View.php:137
2014-04-11 01:36:34 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Model_User::logged_in() ~ APPPATH/classes/Controller/Home.php [ 25 ] in file:line
2014-04-11 01:36:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-11 01:36:43 --- EMERGENCY: ErrorException [ 1 ]: Class 'App' not found ~ APPPATH/classes/Controller/Home.php [ 31 ] in file:line
2014-04-11 01:36:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-11 08:28:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: resp ~ APPPATH/classes/Controller/Api.php [ 23 ] in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php:23
2014-04-11 08:28:45 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/HenrySim...', 23, Array)
#1 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_get_currentuser()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php:23
2014-04-11 08:30:40 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Api.php [ 30 ] in file:line
2014-04-11 08:30:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-11 08:42:38 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method URL::base_url() ~ APPPATH/views/Home.php [ 43 ] in file:line
2014-04-11 08:42:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-11 08:45:07 --- EMERGENCY: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:603
2014-04-11 08:45:07 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('role')
#1 /Users/HenrySimonen/Sites/hours/application/views/Home.php(57): Kohana_ORM->__get('role')
#2 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/View.php(61): include('/Users/HenrySim...')
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/HenrySim...', Array)
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#6 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Home.php(27): Kohana_Response->body(Object(View))
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#10 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#13 {main} in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:603
2014-04-11 08:45:07 --- EMERGENCY: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:603
2014-04-11 08:45:07 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('role')
#1 /Users/HenrySimonen/Sites/hours/application/views/Home.php(57): Kohana_ORM->__get('role')
#2 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/View.php(61): include('/Users/HenrySim...')
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/HenrySim...', Array)
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#6 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Home.php(27): Kohana_Response->body(Object(View))
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#10 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#13 {main} in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:603
2014-04-11 08:46:03 --- EMERGENCY: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:603
2014-04-11 08:46:03 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('role')
#1 /Users/HenrySimonen/Sites/hours/application/views/Home.php(57): Kohana_ORM->__get('role')
#2 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/View.php(61): include('/Users/HenrySim...')
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/HenrySim...', Array)
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#6 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Home.php(27): Kohana_Response->body(Object(View))
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#10 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#13 {main} in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:603
2014-04-11 08:46:04 --- EMERGENCY: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:603
2014-04-11 08:46:04 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('role')
#1 /Users/HenrySimonen/Sites/hours/application/views/Home.php(57): Kohana_ORM->__get('role')
#2 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/View.php(61): include('/Users/HenrySim...')
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/HenrySim...', Array)
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#6 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Home.php(27): Kohana_Response->body(Object(View))
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#10 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#13 {main} in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:603
2014-04-11 08:46:04 --- EMERGENCY: Kohana_Exception [ 0 ]: The role property does not exist in the Model_User class ~ MODPATH/orm/classes/Kohana/ORM.php [ 687 ] in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:603
2014-04-11 08:46:04 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(603): Kohana_ORM->get('role')
#1 /Users/HenrySimonen/Sites/hours/application/views/Home.php(57): Kohana_ORM->__get('role')
#2 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/View.php(61): include('/Users/HenrySim...')
#3 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/HenrySim...', Array)
#4 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/View.php(228): Kohana_View->render()
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#6 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Home.php(27): Kohana_Response->body(Object(View))
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#10 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#13 {main} in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:603