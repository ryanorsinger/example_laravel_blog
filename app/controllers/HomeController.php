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
		return View::make('home');
	}

	public function showResume()
	{
    	return View::make('resume');
	}

	public function showPortfolio()
	{
    	return View::make('portfolio');
	}

}

$mentors = DB::table('mentors')->join('users', function($join) {
	            $join->on('users.id', '=', 'mentors.user_id');
	        })
	        ->get();
