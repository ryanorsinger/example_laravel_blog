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
Route::get('/', array('uses' => 'HomeController@showWelcome', 'as' => 'home'));

/*
 * Curly brackets specify a dynamic route parameter.
 * @var name is passed in from the URI to the view.
 */
Route::get('/sayhello/{name}', array('uses' => 'HomeController@sayHello', 'as' => 'sayhello'));

Route::get('/resume', array('uses' => 'HomeController@showResume', 'as' => 'resume'));

Route::get('/portfolio', array('uses' => 'HomeController@showPortfolio', 'as' => 'portfolio'));

Route::get('/todo', array('uses' => 'HomeController@showTodo', 'as' => 'todo'));

Route::get('orm-test', function ()
{
    $post1 = new Post();
    $post1->title = 'Eloquent is awesome!';
    $post1->body  = 'It is super easy to create a new post.';
    $post1->save();
});

Route::resource('posts', 'PostsController');
