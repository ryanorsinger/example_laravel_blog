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
		Session::put('Merle Haggard', 'is my favorite Okie from Muskogee');
		Session::put('Truly,', 'George Straight has nothing on Conway Twitty!');
		Session::put('Willie is nice.', 'But he aint no Ernest Tubb...');

		return View::make('home');
	}

	public function sayHello($name)
	{
	    $data = array('name' => $name);
	    return View::make('my-first-view')->with($data);
	}

	public function showResume()
	{
    	return View::make('resume');
	}

	public function showPortfolio()
	{
    	return View::make('portfolio');
	}

	public function showTodo()
	{
		return View::make('todo');
	}
}
