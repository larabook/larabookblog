<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/post/all', 'BlogPostController@all');

Route::get('/post/create', ['as' => 'blogpost.create', 'uses' => 'BlogPostController@create']);
Route::post('/post/create', ['as' => 'blogpost.store', 'uses' => 'BlogPostController@store']);

Route::get('/post/edit/{post}', ['as' => 'blogpost.update', 'uses' => 'BlogpostController@edit']);
