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
Route::get('/', 'uses' => 'HomeController@showWelcome', 'as' => 'home');

/*
 * Curly brackets specify a dynamic route parameter.
 * @var name is passed in from the URI to the view.
 */
Route::get('/sayhello/{name}', array('uses' => 'HomeController@sayHello', 'as' => 'sayhello');

Route::get('/resume', array('uses' => 'HomeController@showResume', 'as' => 'resume'));

Route::get('/portfolio', array('uses' => 'HomeController@showPortfolio', 'as' => 'portfolio'));

Route::get('/todo', array('uses' => 'HomeController@showTodo', 'as' => 'todo');
