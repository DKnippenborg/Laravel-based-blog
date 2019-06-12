<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Post Routes
Route::get('/posts/index', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::post('/posts/store', 'PostsController@store');

// Comment Routes
Route::get('/comments/index', 'CommentsController@index')->middleware('auth');
Route::get('/comments/create', 'CommentsController@create')->middleware('auth');
Route::post('/comments/store', 'CommentsController@store')->middleware('auth');