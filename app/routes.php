<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

/* Example GET route */
Route::get('/sayhello', function()
{
    return "Hello, Codeup!";
});

/*
 * Curly brackets specify a dynamic route parameter.
 * @var name is passed in from the URI to the route.
 */
Route::get('/sayhello/{name}', function($name)
{
    return "Hello, $name!";
});


Route::get('/portfolio'), function()
{
    return "This is my portfolio";
}

Route::get('/resume'), function()
{
    return "This is my resume";
}
