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

Route::get('/nativeapp/first-time-setup', function(){
    return View::make('pages.first-time-setup');
});

Route::get('/maps', function(){
    return View::make('pages.google_maps_api');
});

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
