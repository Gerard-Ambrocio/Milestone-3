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

Route::get('/home', 'HomeController@index');		


Route::get('/', function () {
    return view('pages/welcome');
});

Route::get('/welcome', function () {
    return view('pages/welcome');
});



Route::get('profile', 'PagesController@displayProfile');
Route::post('profile', 'PagesController@editJobDescription');
Route::get('contact', 'PagesController@getContact');




Route::get('about', 'PagesController@getAbout');
Route::get('profileform', 'PagesController@getProfileform');
Route::post('profileform', 'PagesController@postProfileform');
Route::post('avatar','PagesController@editAvatar');	

Route::post('profile-hirer','PagesController@postJob');

//Route::get('profile-hirer','PagesController@displayJob');


Route::get('market', 'PagesController@displayMarket');


Route::get('message', 'PagesController@displayMessage');

Route::get('delete-job/{id}','PagesController@deleteJob');
Route::get('delete-user/{id}','PagesController@deleteUser');

Route::get('apply-job/{id}','PagesController@applyJob');



Route::get('hire-applicant/{user_id}/{job_id}','PagesController@hireApplicant');




