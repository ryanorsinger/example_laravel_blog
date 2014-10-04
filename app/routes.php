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
Route::get('/', 'HomeController@showWelcome');

/*
 * Curly brackets specify a dynamic route parameter.
 * @var name is passed in from the URI to the view.
 */
Route::get('/sayhello/{name}', 'HomeController@sayHello');

Route::get('/resume', 'HomeController@showResume');

Route::get('/portfolio', 'HomeController@showPortfolio');

Route::get('/todo', 'HomeController@showTodo');
