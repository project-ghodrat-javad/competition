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

Route::get('/','Competitions@index');

Route::auth();

Route::get('/home', 'Competitions@index');
Route::get('Admin', 'HomeController@admin');
Route::get('User', 'UserController@index');
Route::get('test','Competitions@test');

Route::get('Competitions', 'Competitions@index');
Route::get('ComDetails' , 'ComDetails@index');
Route::get('Timeline' , 'Timeline@index');
Route::get('Rules' , 'Rules@index');
Route::get('Prizes' , 'Prizes@index');
Route::get('Data' , 'Data@index');
Route::get('Evaluation' , 'Evaluation@index');

//Route::get('Profile', 'Profile@index');
Route::get('Result_user' , 'Result_user@index');
Route::get('Script_user' , 'Script_user@index');
Route::get('Forum_user' , 'Forum_user@index');
Route::get('Acaunt_user' , 'Acaunt_user@index');



