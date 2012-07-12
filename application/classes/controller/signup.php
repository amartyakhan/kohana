<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Signup extends Controller {

	public function action_index()
	{
		$user=Auth::instance()->get_user();
		if($user->loaded()){
			$this->response->body(View::factory('templates/signedin'));
		}
		else{
			$body=View::factory('connect');
			$this->response->body(View::factory('templates/default')->set('body',$body));
		}
		
	}

} // End Welcome
