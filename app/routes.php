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

Route::get('/geo', function() {
    return View::make('geo');
});

Route::get('/resume', array('uses' => 'HomeController@showResume', 'as' => 'resume'));

Route::get('/portfolio', array('uses' => 'HomeController@showPortfolio', 'as' => 'portfolio'));

Route::resource('posts', 'PostsController');

Route::resource('users', 'UsersController');

Route::resource('locations', 'LocationsController');

Route::resource('events', 'HappeningsController');

Route::resource('organizations', 'OrganizationsController');

Route::resource('tags', 'TagsController');

Route::resource('pages', 'GatheringsController');

Route::resource('profiles', 'ProfilesController');

Route::resource('images', 'ImagesController');
