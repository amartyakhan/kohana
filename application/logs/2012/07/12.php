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