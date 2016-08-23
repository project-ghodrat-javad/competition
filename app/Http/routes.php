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



Route::get('/home', 'HomeController@competition');
Route::get('/','HomeController@competition');
Route::get('/competitions','HomeController@competition');
Route::get('/details/{url}','HomeController@details');
Route::get('/details/{url}/data','HomeController@data');
Route::get('/prize/{url}','HomeController@prize');
Route::get('/rules/{url}','HomeController@rules');
Route::resource('/forum','forumcntroller');
Route::get('/newtopic','HomeController@newtopic');
Route::get('/showpost/{url}','HomeController@post');
Route::auth();


Route::get('/admin','adminController@index');
Route::resource('/admin/language','LanguageController');
Route::resource('/admin/mosabeghe','mosabegheController');
Route::resource('/admin/mosabegheoff','mosabegheControlleroff');
Route::resource('/admin/prize','Prizes');
Route::post('/admin/add/file','mosabegheController@addfile');
