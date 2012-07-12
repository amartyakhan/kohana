<?php defined('SYSPATH') or die('No direct script access.'); ?>

2012-07-11 17:20:44 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-11 17:20:44 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-11 17:21:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 17:21:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 17:21:58 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-11 17:21:58 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-11 17:28:11 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-11 17:28:11 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-11 17:31:14 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-11 17:31:14 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-11 18:22:22 --- ERROR: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\controller\signup.php [ 8 ]
2012-07-11 18:22:22 --- STRACE: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\controller\signup.php [ 8 ]
--
#0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main}
2012-07-11 18:26:35 --- ERROR: View_Exception [ 0 ]: The requested view templates/default could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
2012-07-11 18:26:35 --- STRACE: View_Exception [ 0 ]: The requested view templates/default could not be found ~ SYSPATH\classes\kohana\view.php [ 252 ]
--
#0 C:\wamp\www\kohana\system\classes\kohana\view.php(137): Kohana_View->set_filename('templates/defau...')
#1 C:\wamp\www\kohana\system\classes\kohana\view.php(30): Kohana_View->__construct('templates/defau...', NULL)
#2 C:\wamp\www\kohana\application\classes\controller\signup.php(7): Kohana_View::factory('templates/defau...')
#3 [internal function]: Controller_Signup->action_index()
#4 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_Signup))
#5 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-11 18:35:39 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL signu[ was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-11 18:35:39 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL signu[ was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-11 18:36:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/static/images/bg_flower.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 18:36:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/static/images/bg_flower.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 18:36:58 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/static/images/bg_flower.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 18:36:58 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/static/images/bg_flower.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 18:36:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/static/images/bg_flower.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 18:36:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/static/images/bg_flower.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 18:37:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/static/images/bg_flower.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 18:37:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/static/images/bg_flower.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 18:37:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/static/images/bg_flower.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 18:37:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/static/images/bg_flower.jpg ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 18:41:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-11 18:41:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-11 18:41:29 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-11 18:41:29 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-11 18:46:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-11 18:46:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-11 18:47:15 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-11 18:47:15 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-11 18:47:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 18:47:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 18:47:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 18:47:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 18:47:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 18:47:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 18:47:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 18:47:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 18:47:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 18:47:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 18:47:21 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 18:47:21 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 18:48:52 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-11 18:48:52 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL kohana was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-11 18:48:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 18:48:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 18:48:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 18:48:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 18:48:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 18:48:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 18:48:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 18:48:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 18:48:56 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 18:48:56 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 18:49:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 18:49:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: kohana/index.php ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 19:17:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 19:17:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 19:17:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 19:17:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 19:17:02 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 19:17:02 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 19:17:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 19:17:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 19:17:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 19:17:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 19:17:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 19:17:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 19:17:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 19:17:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 19:17:08 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 19:17:08 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 19:24:16 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 19:24:16 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 19:24:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 19:24:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 19:30:36 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 19:30:36 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 19:41:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 19:41:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 19:43:46 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 19:43:46 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 19:48:23 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 19:48:23 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 19:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/styles/default.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 19:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/styles/default.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 19:57:50 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 19:57:50 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 19:58:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/styles/default.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 19:58:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/styles/default.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 19:58:04 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 19:58:04 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 19:58:11 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/styles/default.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 19:58:11 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/styles/default.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 19:58:12 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 19:58:12 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 19:58:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/styles/default.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 19:58:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/styles/default.css ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 19:58:28 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 19:58:28 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 19:58:44 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 19:58:44 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 19:58:55 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 19:58:55 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 20:00:06 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 20:00:06 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 20:00:24 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 20:00:24 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 20:02:20 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 20:02:20 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 20:02:51 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 20:02:51 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 20:02:57 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 20:02:57 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 20:03:18 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 20:03:18 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 20:03:39 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 20:03:39 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 20:06:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 20:06:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 20:06:17 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 20:06:17 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 20:06:25 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 20:06:25 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 20:06:42 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 20:06:42 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 20:07:03 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 20:07:03 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 20:08:47 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 20:08:47 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 20:11:27 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 20:11:27 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 20:11:54 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 20:11:54 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 20:14:07 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 20:14:07 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 20:14:30 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 20:14:30 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 20:14:53 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 20:14:53 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 20:25:59 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 20:25:59 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 20:26:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 20:26:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 20:26:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 20:26:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 20:26:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 20:26:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 20:26:00 --- ERROR: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
2012-07-11 20:26:00 --- STRACE: HTTP_Exception_404 [ 404 ]: Unable to find a route to match the URI: static/images/favicon.ico ~ SYSPATH\classes\kohana\request.php [ 1126 ]
--
#0 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#1 {main}
2012-07-11 21:37:13 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/fbsignup was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-11 21:37:13 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/fbsignup was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-11 21:39:33 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL user/fbsignup was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
2012-07-11 21:39:33 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL user/fbsignup was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 113 ]
--
#0 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-11 22:08:09 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-07-11 22:08:09 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\wamp\www\kohana\application\classes\controller\user.php(19): Kohana_ORM->save()
#3 [internal function]: Controller_User->action_signup()
#4 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-11 22:11:27 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-07-11 22:11:27 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\wamp\www\kohana\application\classes\controller\user.php(19): Kohana_ORM->save()
#3 [internal function]: Controller_User->action_signup()
#4 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-11 22:14:37 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-07-11 22:14:37 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\wamp\www\kohana\application\classes\controller\user.php(19): Kohana_ORM->save()
#3 [internal function]: Controller_User->action_signup()
#4 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-11 22:15:00 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-07-11 22:15:00 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\wamp\www\kohana\application\classes\controller\user.php(19): Kohana_ORM->save()
#3 [internal function]: Controller_User->action_signup()
#4 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-11 22:22:13 --- ERROR: Database_Exception [ 1146 ]: Table 'showme.users' doesn't exist [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-11 22:22:13 --- STRACE: Database_Exception [ 1146 ]: Table 'showme.users' doesn't exist [ SHOW FULL COLUMNS FROM `users` ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\kohana\modules\database\classes\kohana\database\mysql.php(360): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(1504): Kohana_Database_MySQL->list_columns('users')
#2 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(392): Kohana_ORM->list_columns(true)
#3 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(337): Kohana_ORM->reload_columns()
#4 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(246): Kohana_ORM->_initialize()
#5 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(37): Kohana_ORM->__construct(NULL)
#6 C:\wamp\www\kohana\application\classes\controller\user.php(9): Kohana_ORM::factory('user')
#7 [internal function]: Controller_User->action_signup()
#8 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#9 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#10 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#11 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#12 {main}
2012-07-11 22:25:13 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-07-11 22:25:13 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\wamp\www\kohana\application\classes\controller\user.php(19): Kohana_ORM->save()
#3 [internal function]: Controller_User->action_signup()
#4 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-11 22:25:37 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-07-11 22:25:37 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\wamp\www\kohana\application\classes\controller\user.php(19): Kohana_ORM->save()
#3 [internal function]: Controller_User->action_signup()
#4 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-11 22:30:33 --- ERROR: Database_Exception [ 1054 ]: Unknown column 'fb_id' in 'where clause' [ SELECT `user`.* FROM `users` AS `user` WHERE `fb_id` = '819729644' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
2012-07-11 22:30:33 --- STRACE: Database_Exception [ 1054 ]: Unknown column 'fb_id' in 'where clause' [ SELECT `user`.* FROM `users` AS `user` WHERE `fb_id` = '819729644' LIMIT 1 ] ~ MODPATH\database\classes\kohana\database\mysql.php [ 194 ]
--
#0 C:\wamp\www\kohana\modules\database\classes\kohana\database\query.php(245): Kohana_Database_MySQL->query(1, 'SELECT `user`.*...', false, Array)
#1 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(972): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(898): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\kohana\application\classes\controller\user.php(9): Kohana_ORM->find()
#4 [internal function]: Controller_User->action_signup()
#5 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#6 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#7 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#9 {main}
2012-07-11 22:31:40 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-07-11 22:31:40 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\wamp\www\kohana\application\classes\controller\user.php(19): Kohana_ORM->save()
#3 [internal function]: Controller_User->action_signup()
#4 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-11 22:32:02 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-07-11 22:32:02 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\wamp\www\kohana\application\classes\controller\user.php(19): Kohana_ORM->save()
#3 [internal function]: Controller_User->action_signup()
#4 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-11 22:33:25 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-07-11 22:33:25 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\wamp\www\kohana\application\classes\controller\user.php(19): Kohana_ORM->save()
#3 [internal function]: Controller_User->action_signup()
#4 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-11 22:49:54 --- ERROR: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 153 ]
2012-07-11 22:49:54 --- STRACE: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\kohana\auth.php [ 153 ]
--
#0 [internal function]: Kohana_Auth->hash('819729644')
#1 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(1110): call_user_func_array(Array, Array)
#2 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(655): Kohana_ORM->run_filter('password', '819729644')
#3 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(634): Kohana_ORM->set('password', '819729644')
#4 C:\wamp\www\kohana\application\classes\controller\user.php(20): Kohana_ORM->__set('password', '819729644')
#5 [internal function]: Controller_User->action_signup()
#6 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#7 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#8 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#10 {main}
2012-07-11 22:50:40 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-07-11 22:50:40 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\wamp\www\kohana\application\classes\controller\user.php(21): Kohana_ORM->save()
#3 [internal function]: Controller_User->action_signup()
#4 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-11 22:51:30 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-07-11 22:51:30 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\wamp\www\kohana\application\classes\controller\user.php(21): Kohana_ORM->save()
#3 [internal function]: Controller_User->action_signup()
#4 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-11 23:01:09 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-07-11 23:01:09 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\wamp\www\kohana\application\classes\controller\user.php(22): Kohana_ORM->save()
#3 [internal function]: Controller_User->action_signup()
#4 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-11 23:02:20 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-07-11 23:02:20 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\wamp\www\kohana\application\classes\controller\user.php(22): Kohana_ORM->save()
#3 [internal function]: Controller_User->action_signup()
#4 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-11 23:02:20 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-07-11 23:02:20 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\wamp\www\kohana\application\classes\controller\user.php(22): Kohana_ORM->save()
#3 [internal function]: Controller_User->action_signup()
#4 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-11 23:02:44 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-07-11 23:02:44 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\wamp\www\kohana\application\classes\controller\user.php(22): Kohana_ORM->save()
#3 [internal function]: Controller_User->action_signup()
#4 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-11 23:04:22 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-07-11 23:04:22 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\wamp\www\kohana\application\classes\controller\user.php(22): Kohana_ORM->save()
#3 [internal function]: Controller_User->action_signup()
#4 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-11 23:04:56 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-07-11 23:04:56 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\wamp\www\kohana\application\classes\controller\user.php(22): Kohana_ORM->save()
#3 [internal function]: Controller_User->action_signup()
#4 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-11 23:05:23 --- ERROR: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
2012-07-11 23:05:23 --- STRACE: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\kohana\orm.php [ 1174 ]
--
#0 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(1200): Kohana_ORM->check(NULL)
#1 C:\wamp\www\kohana\modules\orm\classes\kohana\orm.php(1314): Kohana_ORM->create(NULL)
#2 C:\wamp\www\kohana\application\classes\controller\user.php(22): Kohana_ORM->save()
#3 [internal function]: Controller_User->action_signup()
#4 C:\wamp\www\kohana\system\classes\kohana\request\client\internal.php(118): ReflectionMethod->invoke(Object(Controller_User))
#5 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#6 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#8 {main}
2012-07-11 23:33:26 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL view was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-11 23:33:26 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL view was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-11 23:39:30 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL view was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-11 23:39:30 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL view was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#3 {main}
2012-07-11 23:39:40 --- ERROR: HTTP_Exception_404 [ 404 ]: The requested URL view was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
2012-07-11 23:39:40 --- STRACE: HTTP_Exception_404 [ 404 ]: The requested URL view was not found on this server. ~ SYSPATH\classes\kohana\request\client\internal.php [ 87 ]
--
#0 C:\wamp\www\kohana\system\classes\kohana\request\client.php(64): Kohana_Request_Client_Internal->execute_request(Object(Request))
#1 C:\wamp\www\kohana\system\classes\kohana\request.php(1138): Kohana_Request_Client->execute(Object(Request))
#2 C:\wamp\www\kohana\index.php(109): Kohana_Request->execute()
#3 {main}