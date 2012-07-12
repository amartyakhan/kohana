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
				$movie_likes=$php_data->data;
				foreach($movie_likes as $data){
					$item=ORM::factory('item',$data->id);
					if(!$item->loaded()){
						$item->id=$data->id;
						$item->name=$data->name;
						$item->category=$data->category;
						$item->save();	
					}
					$useritem=ORM::factory('useritem');
					$useritem->user_id=$fb_id;
					$useritem->item_id=$data->id;
					$useritem->created_time=$data->created_time;
					$useritem->save();
					
				}
				$this->response->body($json_data);
			}
		}
	}

} 