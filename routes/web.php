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


Auth::routes();
// Route::get('/home', 'HomeController@index');


Route::get('/welcome', function () {
    return view('pages/welcome');
});



Route::get('/profile', 'PagesController@displayProfile');
Route::post('/profile', 'PagesController@editJobDescription');
Route::get('contact', 'PagesController@getContact');
Route::get('about', 'PagesController@getAbout');
Route::get('/', 'HomeController@index');		
Route::get('profileform', 'PagesController@getProfileform');
Route::post('profileform', 'PagesController@postProfileform');

Route::post('avatar','PagesController@editAvatar');	







