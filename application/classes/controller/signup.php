<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Signup extends Controller {

	public function action_index()
	{
		$user=Auth::instance()->get_user();
		if($user){
			//get a random interest item of the user
			$useritem=ORM::factory('useritem')->where('user_id','=',$user->fb_id)->order_by(DB::expr('RAND()'))->find();
			$item=ORM::factory('item',$useritem->item_id);
			//echo $item->name;
			echo '<br />';
			
			//search youtube video for that item using curl
			$url='http://gdata.youtube.com/feeds/api/videos?q='.urlencode($item->name).'&max-results=1&v=2&alt=json';
			$json_data=Curl::get($url);
			$php_data=json_decode($json_data);
			//echo $json_data;
			$video_link=$php_data->feed->entry[0]->link[0]->href;
			parse_str( parse_url( $video_link, PHP_URL_QUERY ), $my_array_of_vars );
			$video_id=$my_array_of_vars['v'];	
			$otherbody=View::factory('viewer')->set('video_id',$video_id);
			$this->response->body(View::factory('templates/signedin')->set('body',$otherbody));
		}
		else{
			$body=View::factory('connect');
			$this->response->body(View::factory('templates/default')->set('body',$body));
		}
		
	}

} // End Welcome
