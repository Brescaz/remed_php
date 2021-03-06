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

/*Route::get('test', function () {
    return view('pages.someText')->with('txt', 'about');
});*/

Route::get('about', function () {
    return view('pages.about')->with('title2', 'About my website');
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('blade', function () {
    return view('child');
});

Route::get('users', 'UserController@index')->name('allUsers');
Route::get('users/{id}', 'UserController@show')->name('oneUser');


Route::get('news', 'NewsController@index');
Route::get('news/{id}', 'NewsController@show');


Route::get('testEloquent', 'TestController@testMethod');


/* TEST */

Route::get('hello', function () {
	return view('hello');
});

Route::get('form', function (){
	return view('form');
});

Route::get('users', function (){
	return view('users');
});

Route::get('login', function (){
	return view('login');
});

Route::get('projets', 'ProjetController@index');

