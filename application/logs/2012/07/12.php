<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-12 00:28:57 --- ERROR: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH\classes\controller\signup.php [ 9 ]
2012-07-12 00:28:57 --- STRACE: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH\classes\controller\signup.php [ 9 ]
--
#0 C:\wamp\www\kohana\application\classes\controller\signup.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 9, Array)
#1 [internal function]: Controller_Signup->action_index()
#2 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Signup))
#3 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-12 00:29:21 --- ERROR: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH\classes\controller\signup.php [ 9 ]
2012-07-12 00:29:21 --- STRACE: ErrorException [ 8 ]: Undefined variable: body ~ APPPATH\classes\controller\signup.php [ 9 ]
--
#0 C:\wamp\www\kohana\application\classes\controller\signup.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\koh...', 9, Array)
#1 [internal function]: Controller_Signup->action_index()
#2 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Signup))
#3 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-12 00:47:11 --- ERROR: ErrorException [ 1 ]: Class 'Curl' not found ~ APPPATH\classes\controller\user.php [ 28 ]
2012-07-12 00:47:11 --- STRACE: ErrorException [ 1 ]: Class 'Curl' not found ~ APPPATH\classes\controller\user.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-12 00:52:21 --- ERROR: ErrorException [ 1 ]: Class 'Curl' not found ~ APPPATH\classes\controller\user.php [ 28 ]
2012-07-12 00:52:21 --- STRACE: ErrorException [ 1 ]: Class 'Curl' not found ~ APPPATH\classes\controller\user.php [ 28 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-12 00:56:57 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\curl\classes\kohana\curl.php [ 65 ]
2012-07-12 00:56:57 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\curl\classes\kohana\curl.php [ 65 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-12 00:58:40 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\curl\classes\kohana\curl.php [ 65 ]
2012-07-12 00:58:40 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\curl\classes\kohana\curl.php [ 65 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-12 01:00:34 --- ERROR: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\curl\classes\kohana\curl.php [ 65 ]
2012-07-12 01:00:34 --- STRACE: ErrorException [ 1 ]: Call to undefined method Kohana::config() ~ MODPATH\curl\classes\kohana\curl.php [ 65 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-12 01:08:51 --- ERROR: Kohana_Exception [ 0 ]: Curl error: SSL certificate problem, verify that the CA cert is OK. Details:
error:14090086:SSL routines:SSL3_GET_SERVER_CERTIFICATE:certificate verify failed ~ MODPATH\curl\classes\kohana\curl.php [ 115 ]
2012-07-12 01:08:51 --- STRACE: Kohana_Exception [ 0 ]: Curl error: SSL certificate problem, verify that the CA cert is OK. Details:
error:14090086:SSL routines:SSL3_GET_SERVER_CERTIFICATE:certificate verify failed ~ MODPATH\curl\classes\kohana\curl.php [ 115 ]
--
#0 C:\wamp\www\kohana\modules\curl\classes\kohana\curl.php(167): Kohana_Curl->execute()
#1 C:\wamp\www\kohana\application\classes\controller\user.php(28): Kohana_Curl::get('https://graph.f...')
#2 [internal function]: Controller_User->action_signup()
#3 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-12 09:51:17 --- ERROR: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH\classes\controller\signup.php [ 8 ]
2012-07-12 09:51:17 --- STRACE: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH\classes\controller\signup.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-12 09:51:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-12 09:51:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-12 09:51:49 --- ERROR: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH\classes\controller\signup.php [ 8 ]
2012-07-12 09:51:49 --- STRACE: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH\classes\controller\signup.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-12 09:51:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-12 09:51:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-12 09:51:52 --- ERROR: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH\classes\controller\signup.php [ 8 ]
2012-07-12 09:51:52 --- STRACE: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH\classes\controller\signup.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-12 09:51:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-12 09:51:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-12 09:51:56 --- ERROR: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH\classes\controller\signup.php [ 8 ]
2012-07-12 09:51:56 --- STRACE: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH\classes\controller\signup.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-12 09:51:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-12 09:51:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-12 09:51:57 --- ERROR: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH\classes\controller\signup.php [ 8 ]
2012-07-12 09:51:57 --- STRACE: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH\classes\controller\signup.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-12 09:51:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-12 09:51:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-12 09:52:08 --- ERROR: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH\classes\controller\signup.php [ 8 ]
2012-07-12 09:52:08 --- STRACE: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH\classes\controller\signup.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-12 09:52:09 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-12 09:52:09 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-12 09:58:26 --- ERROR: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH\classes\controller\signup.php [ 8 ]
2012-07-12 09:58:26 --- STRACE: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH\classes\controller\signup.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-12 09:58:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-12 09:58:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-12 09:58:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-12 09:58:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-12 09:58:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-12 09:58:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-12 09:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-12 09:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-12 09:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-12 09:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-12 09:59:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-12 09:59:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-12 10:14:39 --- ERROR: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH\classes\controller\signup.php [ 8 ]
2012-07-12 10:14:39 --- STRACE: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH\classes\controller\signup.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-12 18:19:55 --- ERROR: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH\classes\controller\signup.php [ 8 ]
2012-07-12 18:19:55 --- STRACE: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH\classes\controller\signup.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-12 18:20:12 --- ERROR: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH\classes\controller\signup.php [ 8 ]
2012-07-12 18:20:12 --- STRACE: ErrorException [ 1 ]: Call to a member function loaded() on a non-object ~ APPPATH\classes\controller\signup.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-12 18:23:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-12 18:23:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-12 18:23:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-12 18:23:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-12 18:23:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-12 18:23:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-12 18:23:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-12 18:23:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-12 18:23:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-12 18:23:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-12 18:24:24 --- ERROR: Kohana_Exception [ 0 ]: Curl error: Couldn't connect to host ~ MODPATH\curl\classes\kohana\curl.php [ 115 ]
2012-07-12 18:24:24 --- STRACE: Kohana_Exception [ 0 ]: Curl error: Couldn't connect to host ~ MODPATH\curl\classes\kohana\curl.php [ 115 ]
--
#0 C:\wamp\www\kohana\modules\curl\classes\kohana\curl.php(167): Kohana_Curl->execute()
#1 C:\wamp\www\kohana\application\classes\controller\user.php(29): Kohana_Curl::get('https://graph.f...')
#2 [internal function]: Controller_User->action_signup()
#3 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#4 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#5 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#7 {main}
2012-07-12 18:36:28 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\curl\classes\kohana\curl.php [ 110 ]
2012-07-12 18:36:28 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\curl\classes\kohana\curl.php [ 110 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-12 18:39:26 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\curl\classes\kohana\curl.php [ 110 ]
2012-07-12 18:39:26 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\curl\classes\kohana\curl.php [ 110 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-12 20:45:27 --- ERROR: ErrorException [ 1 ]: Class 'Model_Items' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-12 20:45:27 --- STRACE: ErrorException [ 1 ]: Class 'Model_Items' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-12 20:55:08 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\curl\classes\kohana\curl.php [ 110 ]
2012-07-12 20:55:08 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\curl\classes\kohana\curl.php [ 110 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-12 20:57:09 --- ERROR: ErrorException [ 1 ]: Class 'Model_Items' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-12 20:57:09 --- STRACE: ErrorException [ 1 ]: Class 'Model_Items' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-12 21:01:51 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\curl\classes\kohana\curl.php [ 110 ]
2012-07-12 21:01:51 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\curl\classes\kohana\curl.php [ 110 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-12 21:02:16 --- ERROR: ErrorException [ 1 ]: Class 'Model_Items' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-12 21:02:16 --- STRACE: ErrorException [ 1 ]: Class 'Model_Items' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-12 21:05:09 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\curl\classes\kohana\curl.php [ 110 ]
2012-07-12 21:05:09 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\curl\classes\kohana\curl.php [ 110 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-12 21:05:52 --- ERROR: ErrorException [ 1 ]: Class 'Model_Items' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
2012-07-12 21:05:52 --- STRACE: ErrorException [ 1 ]: Class 'Model_Items' not found ~ MODPATH\orm\classes\kohana\orm.php [ 37 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-12 21:07:27 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\curl\classes\kohana\curl.php [ 110 ]
2012-07-12 21:07:27 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\curl\classes\kohana\curl.php [ 110 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-12 21:09:08 --- ERROR: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\controller\user.php [ 33 ]
2012-07-12 21:09:08 --- STRACE: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\controller\user.php [ 33 ]
--
#0 C:\wamp\www\kohana\application\classes\controller\user.php(33): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\koh...', 33, Array)
#1 [internal function]: Controller_User->action_signup()
#2 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-12 21:13:53 --- ERROR: ErrorException [ 8 ]: Undefined property: stdClass::$created_at ~ APPPATH\classes\controller\user.php [ 37 ]
2012-07-12 21:13:53 --- STRACE: ErrorException [ 8 ]: Undefined property: stdClass::$created_at ~ APPPATH\classes\controller\user.php [ 37 ]
--
#0 C:\wamp\www\kohana\application\classes\controller\user.php(37): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\koh...', 37, Array)
#1 [internal function]: Controller_User->action_signup()
#2 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-12 21:15:14 --- ERROR: Kohana_Exception [ 0 ]: The save property does not exist in the Model_Item class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
2012-07-12 21:15:14 --- STRACE: Kohana_Exception [ 0 ]: The save property does not exist in the Model_Item class ~ MODPATH\orm\classes\kohana\orm.php [ 612 ]
--
#0 C:\wamp\www\kohana\application\classes\controller\user.php(38): Kohana_ORM->__get('save')
#1 [internal function]: Controller_User->action_signup()
#2 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#3 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#4 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#5 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#6 {main}
2012-07-12 21:32:24 --- ERROR: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `user_items` (`user_id`, `item_id`, `created_time`) VALUES ('819729644', '133203416752244', '2012-02-15T21:27:30+0000') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-12 21:32:24 --- STRACE: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `user_items` (`user_id`, `item_id`, `created_time`) VALUES ('819729644', '133203416752244', '2012-02-15T21:27:30+0000') ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(2, 'INSERT INTO `us...', false, Array)
#1 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(1222): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#3 C:\wamp\www\kohana\application\classes\controller\user.php(44): Kohana_ORM->save()
#4 [internal function]: Controller_User->action_signup()
#5 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-12 21:35:33 --- ERROR: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\curl\classes\kohana\curl.php [ 110 ]
2012-07-12 21:35:33 --- STRACE: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\curl\classes\kohana\curl.php [ 110 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}