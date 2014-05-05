<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-04-28 02:36:31 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Auth.php [ 38 ] in file:line
2014-04-28 02:36:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-28 02:53:54 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Role as array ~ APPPATH/classes/Controller/Page.php [ 8 ] in file:line
2014-04-28 02:53:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-28 02:53:58 --- EMERGENCY: ErrorException [ 1 ]: Cannot use object of type Model_Role as array ~ APPPATH/classes/Controller/Page.php [ 8 ] in file:line
2014-04-28 02:53:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-28 02:54:46 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Page.php [ 8 ] in file:line
2014-04-28 02:54:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-28 02:54:50 --- EMERGENCY: ErrorException [ 4 ]: parse error ~ APPPATH/classes/Controller/Page.php [ 8 ] in file:line
2014-04-28 02:54:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-04-28 03:14:06 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:1302
2014-04-28 03:14:06 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/HenrySimonen/Sites/hours/application/classes/ORM.php(7): Kohana_ORM->save(NULL)
#3 /Users/HenrySimonen/Sites/hours/application/classes/ORM.php(13): ORM->save()
#4 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(137): ORM->hide()
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_delete_task()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#8 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:1302
2014-04-28 03:14:08 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:1302
2014-04-28 03:14:08 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/HenrySimonen/Sites/hours/application/classes/ORM.php(7): Kohana_ORM->save(NULL)
#3 /Users/HenrySimonen/Sites/hours/application/classes/ORM.php(13): ORM->save()
#4 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(137): ORM->hide()
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_delete_task()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#8 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:1302
2014-04-28 03:14:15 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:1302
2014-04-28 03:14:15 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/HenrySimonen/Sites/hours/application/classes/ORM.php(7): Kohana_ORM->save(NULL)
#3 /Users/HenrySimonen/Sites/hours/application/classes/ORM.php(13): ORM->save()
#4 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(137): ORM->hide()
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_delete_task()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#8 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:1302
2014-04-28 03:19:01 --- EMERGENCY: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH/orm/classes/Kohana/ORM.php [ 1275 ] in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:1302
2014-04-28 03:19:01 --- DEBUG: #0 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1302): Kohana_ORM->check(NULL)
#1 /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php(1421): Kohana_ORM->create(NULL)
#2 /Users/HenrySimonen/Sites/hours/application/classes/ORM.php(7): Kohana_ORM->save(NULL)
#3 /Users/HenrySimonen/Sites/hours/application/classes/ORM.php(13): ORM->save()
#4 /Users/HenrySimonen/Sites/hours/application/classes/Controller/Api.php(140): ORM->hide()
#5 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Controller.php(84): Controller_Api->action_delete_task()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Api))
#8 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/HenrySimonen/Sites/hours/system/classes/Kohana/Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 /Users/HenrySimonen/Sites/hours/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/HenrySimonen/Sites/hours/modules/orm/classes/Kohana/ORM.php:1302