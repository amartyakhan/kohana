<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
	'default' => array(
        CURLOPT_HEADER => FALSE,
        CURLOPT_SSL_VERIFYPEER=> FALSE,
        //CURLOPT_RETURNTRANSFER=> TRUE,
		//CURLOPT_PROXYTYPE=> CURLPROXY_SOCKS5,
		//CURLOPT_PROXY=> '10.3.100.211:8080',
        ),    
);
