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
 * @var name is passed in from the URI to the view.
 */
Route::get('/sayhello/{name?}/', function($name = NULL)
{
    $data = array('name' => $name);
    return View::make('my-first-view')->with($data);
});

Route::get('/portfolio', function()
{
    return "This is my portfolio";
});

Route::get('/resume', function()
{
    return "This is my resume";
});

/* Guess is an optional route parameter. If no guess is passed, it defualts to NULL */
Route::get('/rolldice/{guess?}', function($guess = null)
{
    /* Generate a random dice roll between 1 and 20 */
    $roll = rand(1,20);

    /* Prepare the data to send to the view */
    $data_sent_to_view = array(
        'roll' => $roll,
        'guess' => $guess
        );

    /* Return the view */
    return View::make('roll-dice')->with($data_sent_to_view);
});
