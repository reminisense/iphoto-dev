<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		require_once ("facebook.php");
		
		$config = array (
				'app-id' => '249334975245504',
				'secret' => '169eabdd0b3efe4e297562c8b40ccb84' 
		);
		
		$facebook = new Facebook($config);
		
		$uid = $facebook->getUser();
		
		return View::make('hello');
	}

}