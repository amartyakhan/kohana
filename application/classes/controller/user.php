<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller {

	public function action_signup()
	{
		if($_POST){
			$fb_id=$_POST['fbID'];
			$user = ORM::factory('user')->where('fb_id','=',$fb_id)->find();
			if($user->loaded()){		//user exists for that campus
				//sign in the user
				Auth::instance()->force_login($user);
				$this->response->body('Signed In');
			}
			else{
				//create a new user
				$newuser = ORM::factory('user');
				$newuser->username=$fb_id;
				$newuser->email=$fb_id.'@example.com';
				$newuser->fb_id=$fb_id;
				$newuser->password='abcdefgh';
				$newuser->save();
				Auth::instance()->force_login($newuser);
				
				//pull the facebook interests of the user
				$access_token=$_POST['accessToken'];
				$url='https://graph.facebook.com/'.$fb_id.'?access_token='.$access_token;
				$movies_url='https://graph.facebook.com/'.$fb_id.'/movies?access_token='.$access_token;
				$json_data=Curl::get($movies_url);
				$php_data=json_decode($json_data);
				
				$this->response->body($json_data);
			}
		}
	}

} 