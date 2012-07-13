<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-13 00:02:38 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\signup.php [ 17 ]
2012-07-13 00:02:38 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\signup.php [ 17 ]
--
#0 C:\wamp\www\kohana\application\classes\controller\signup.php(17): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\wamp\www\koh...', 17, Array)
#1 [internal function]: Controller_Signup->action_index()
#2 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Signup))
#3 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-13 00:05:00 --- ERROR: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Useritem class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-07-13 00:05:00 --- STRACE: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Useritem class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\wamp\www\kohana\application\classes\controller\signup.php(13): Kohana_ORM->__get('name')
#1 [internal function]: Controller_Signup->action_index()
#2 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Signup))
#3 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-13 00:05:31 --- ERROR: ErrorException [ 8 ]: Undefined variable: item ~ APPPATH\classes\controller\signup.php [ 13 ]
2012-07-13 00:05:31 --- STRACE: ErrorException [ 8 ]: Undefined variable: item ~ APPPATH\classes\controller\signup.php [ 13 ]
--
#0 C:\wamp\www\kohana\application\classes\controller\signup.php(13): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 13, Array)
#1 [internal function]: Controller_Signup->action_index()
#2 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Signup))
#3 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-13 00:08:11 --- ERROR: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::order_by() ~ APPPATH\classes\controller\signup.php [ 10 ]
2012-07-13 00:08:11 --- STRACE: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::order_by() ~ APPPATH\classes\controller\signup.php [ 10 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-13 00:08:38 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\signup.php [ 11 ]
2012-07-13 00:08:38 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\signup.php [ 11 ]
--
#0 C:\wamp\www\kohana\application\classes\controller\signup.php(11): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\wamp\www\koh...', 11, Array)
#1 [internal function]: Controller_Signup->action_index()
#2 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Signup))
#3 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-13 00:09:04 --- ERROR: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$item_id ~ APPPATH\classes\controller\signup.php [ 11 ]
2012-07-13 00:09:04 --- STRACE: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$item_id ~ APPPATH\classes\controller\signup.php [ 11 ]
--
#0 C:\wamp\www\kohana\application\classes\controller\signup.php(11): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\koh...', 11, Array)
#1 [internal function]: Controller_Signup->action_index()
#2 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Signup))
#3 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-13 00:19:02 --- ERROR: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
2012-07-13 00:19:02 --- STRACE: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\kohana\orm.php [ 885 ]
--
#0 C:\wamp\www\kohana\application\classes\controller\signup.php(11): Kohana_ORM->find()
#1 [internal function]: Controller_Signup->action_index()
#2 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Signup))
#3 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-13 00:19:27 --- ERROR: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\signup.php [ 19 ]
2012-07-13 00:19:27 --- STRACE: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\controller\signup.php [ 19 ]
--
#0 C:\wamp\www\kohana\application\classes\controller\signup.php(19): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\wamp\www\koh...', 19, Array)
#1 [internal function]: Controller_Signup->action_index()
#2 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Signup))
#3 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-13 00:39:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-13 00:39:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-13 00:40:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-13 00:40:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-13 00:40:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-13 00:40:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-13 00:40:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-13 00:40:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-13 00:40:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-13 00:40:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-13 00:40:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-13 00:40:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-13 00:40:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-13 00:40:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-13 00:40:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-13 00:40:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-13 00:40:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-13 00:40:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-13 00:42:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-13 00:42:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-13 00:42:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-13 00:42:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-13 00:50:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-13 00:50:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-13 00:51:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-13 00:51:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-13 01:21:19 --- ERROR: ErrorException [ 8 ]: Use of undefined constant id - assumed 'id' ~ APPPATH\views\viewer.php [ 2 ]
2012-07-13 01:21:19 --- STRACE: ErrorException [ 8 ]: Use of undefined constant id - assumed 'id' ~ APPPATH\views\viewer.php [ 2 ]
--
#0 C:\wamp\www\kohana\application\views\viewer.php(2): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\wamp\www\koh...', 2, Array)
#1 C:\wamp\www\kohana\system\classes\kohana\view.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana\application\views\templates\signedin.php(19): Kohana_View->__toString()
#5 C:\wamp\www\kohana\system\classes\kohana\view.php(61): include('C:\wamp\www\koh...')
#6 C:\wamp\www\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\koh...', Array)
#7 C:\wamp\www\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#8 C:\wamp\www\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString()
#9 C:\wamp\www\kohana\application\classes\controller\signup.php(22): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Signup->action_index()
#11 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Signup))
#12 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#15 {main}
2012-07-13 01:21:31 --- ERROR: ErrorException [ 4096 ]: Object of class stdClass could not be converted to string ~ APPPATH\views\viewer.php [ 3 ]
2012-07-13 01:21:31 --- STRACE: ErrorException [ 4096 ]: Object of class stdClass could not be converted to string ~ APPPATH\views\viewer.php [ 3 ]
--
#0 C:\wamp\www\kohana\application\views\viewer.php(3): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\wamp\www\koh...', 3, Array)
#1 C:\wamp\www\kohana\system\classes\kohana\view.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana\application\views\templates\signedin.php(19): Kohana_View->__toString()
#5 C:\wamp\www\kohana\system\classes\kohana\view.php(61): include('C:\wamp\www\koh...')
#6 C:\wamp\www\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\koh...', Array)
#7 C:\wamp\www\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#8 C:\wamp\www\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString()
#9 C:\wamp\www\kohana\application\classes\controller\signup.php(22): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Signup->action_index()
#11 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Signup))
#12 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#15 {main}
2012-07-13 01:21:52 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$video ~ APPPATH\views\viewer.php [ 3 ]
2012-07-13 01:21:52 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$video ~ APPPATH\views\viewer.php [ 3 ]
--
#0 C:\wamp\www\kohana\application\views\viewer.php(3): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\koh...', 3, Array)
#1 C:\wamp\www\kohana\system\classes\kohana\view.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana\application\views\templates\signedin.php(19): Kohana_View->__toString()
#5 C:\wamp\www\kohana\system\classes\kohana\view.php(61): include('C:\wamp\www\koh...')
#6 C:\wamp\www\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\koh...', Array)
#7 C:\wamp\www\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#8 C:\wamp\www\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString()
#9 C:\wamp\www\kohana\application\classes\controller\signup.php(22): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Signup->action_index()
#11 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Signup))
#12 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#15 {main}
2012-07-13 01:22:25 --- ERROR: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH\views\viewer.php [ 3 ]
2012-07-13 01:22:25 --- STRACE: ErrorException [ 1 ]: Cannot use object of type stdClass as array ~ APPPATH\views\viewer.php [ 3 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-13 01:22:53 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$t ~ APPPATH\views\viewer.php [ 3 ]
2012-07-13 01:22:53 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$t ~ APPPATH\views\viewer.php [ 3 ]
--
#0 C:\wamp\www\kohana\application\views\viewer.php(3): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\koh...', 3, Array)
#1 C:\wamp\www\kohana\system\classes\kohana\view.php(61): include('C:\wamp\www\koh...')
#2 C:\wamp\www\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\koh...', Array)
#3 C:\wamp\www\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#4 C:\wamp\www\kohana\application\views\templates\signedin.php(19): Kohana_View->__toString()
#5 C:\wamp\www\kohana\system\classes\kohana\view.php(61): include('C:\wamp\www\koh...')
#6 C:\wamp\www\kohana\system\classes\kohana\view.php(343): Kohana_View::capture('C:\wamp\www\koh...', Array)
#7 C:\wamp\www\kohana\system\classes\kohana\view.php(228): Kohana_View->render()
#8 C:\wamp\www\kohana\system\classes\kohana\response.php(160): Kohana_View->__toString()
#9 C:\wamp\www\kohana\application\classes\controller\signup.php(22): Kohana_Response->body(Object(View))
#10 [internal function]: Controller_Signup->action_index()
#11 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Signup))
#12 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#13 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#15 {main}
2012-07-13 01:32:46 --- ERROR: ErrorException [ 4096 ]: Object of class stdClass could not be converted to string ~ APPPATH\classes\controller\signup.php [ 21 ]
2012-07-13 01:32:46 --- STRACE: ErrorException [ 4096 ]: Object of class stdClass could not be converted to string ~ APPPATH\classes\controller\signup.php [ 21 ]
--
#0 C:\wamp\www\kohana\application\classes\controller\signup.php(21): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\wamp\www\koh...', 21, Array)
#1 [internal function]: Controller_Signup->action_index()
#2 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Signup))
#3 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-13 02:13:48 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$href ~ APPPATH\classes\controller\signup.php [ 20 ]
2012-07-13 02:13:48 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$href ~ APPPATH\classes\controller\signup.php [ 20 ]
--
#0 C:\wamp\www\kohana\application\classes\controller\signup.php(20): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\koh...', 20, Array)
#1 [internal function]: Controller_Signup->action_index()
#2 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Signup))
#3 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-13 02:23:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-13 02:23:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-13 02:24:19 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-13 02:24:19 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-13 02:24:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-13 02:24:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-13 02:24:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-13 02:24:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-13 02:24:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-13 02:24:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-13 02:24:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-13 02:24:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-13 02:25:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-13 02:25:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-13 02:25:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-13 02:25:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-13 02:25:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-13 02:25:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-13 02:25:10 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-13 02:25:10 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-13 02:25:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-13 02:25:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-13 02:25:23 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$created_time ~ APPPATH\classes\controller\user.php [ 43 ]
2012-07-13 02:25:23 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$created_time ~ APPPATH\classes\controller\user.php [ 43 ]
--
#0 C:\wamp\www\kohana\application\classes\controller\user.php(43): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\koh...', 43, Array)
#1 [internal function]: Controller_User->action_signup()
#2 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-13 02:25:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-13 02:25:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-13 02:25:49 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-13 02:25:49 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-13 02:26:05 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-13 02:26:05 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-13 02:26:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-13 02:26:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-13 02:26:26 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-13 02:26:26 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-13 02:26:31 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-13 02:26:31 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-13 02:26:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-13 02:26:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-13 02:26:52 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-13 02:26:52 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-13 21:02:14 --- ERROR: Kohana_Exception [ 0 ]: Curl error: Couldn't connect to host ~ MODPATH\curl\classes\kohana\curl.php [ 115 ]
2012-07-13 21:02:14 --- STRACE: Kohana_Exception [ 0 ]: Curl error: Couldn't connect to host ~ MODPATH\curl\classes\kohana\curl.php [ 115 ]
--
#0 C:\wamp\www\kohana\modules\curl\classes\kohana\curl.php(167): Kohana_Curl->execute()
#1 C:\wamp\www\kohana\application\classes\controller\signup.php(17): Kohana_Curl::get('http://gdata.yo...')
#2 [internal function]: Controller_Signup->action_index()
#3 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Signup))
#4 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#7 {main}