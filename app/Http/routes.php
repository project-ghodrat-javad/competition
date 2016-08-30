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
Route::get('/showpost/{url}/script','HomeController@script');
Route::get('/script/{url}/show','HomeController@show');
// Route::resource('/script/newscript','scriptcntroller');
Route::get('/script/{url}/showscripts','HomeController@showscript');
Route::post('search/topic','HomeController@searchtopic');
Route::auth();
Route::get('mosabeghe/member/{id}','HomeController@member');
Route::get('/showpost/{id}/add','HomeController@emtyazadd');
Route::get('/showscript/{url}/add/like','HomeController@like');
  

Route::get('/admin','adminController@index');
Route::resource('/admin/language','LanguageController');
Route::get('/admin/mosabeghe/nook','mosabegheController@nook');
Route::resource('/admin/mosabeghe','mosabegheController');
Route::resource('/admin/mosabegheoff','mosabegheControlleroff');
Route::resource('/admin/prize','Prizes'); 
Route::post('/admin/add/file','mosabegheController@addfile');
Route::get('/admin/delete/file/{id}','mosabegheController@deletefile');
Route::get('admin/forum/topic/active','AdminForumControler@active');
Route::get('admin/forum/topic/unactive','AdminForumControler@unactive');
Route::resource('admin/forum/topic','AdminForumControler');
Route::resource('admin/forum/chat','AdminAnsewerController');
Route::resource('admin/script','AdminScriptController');
Route::post('admin/script/datascript/add','AdminScriptController@datascript');
Route::get('admin/delete/data/script/{id}','AdminScriptController@deletedatascript');
Route::get('admin/users/admin','AdminUsersController@adminshow');
Route::resource('admin/users','AdminUsersController');




Route::get('users/panel' , 'UsersPanelController@index');
Route::get('users/panel/edit/profile','UsersPanelController@editprofile');
Route::post('users/panel/update/profile','UsersPanelController@updateprofile');
Route::resource('users/panel/forum','UsersForumController');
Route::resource('users/panel/topic','UserTopicController');
Route::post('users/panel/add/file','UserMosabegheController@addfile');
Route::get('users/panel/delete/file/{id}','UserMosabegheController@deletefile');
Route::resource('users/panel/mosabeghe','UserMosabegheController');
Route::resource('users/panel/prize','UserPrizeController');
Route::post('users/panel/datascript/add','UserScriptController@addfile');
Route::get('users/panel/datascript/delete/{id}','UserScriptController@deletefile');
Route::resource('users/panel/script','UserScriptController');
Route::resource('users/panel/member','UserMemberController');
Route::get('users/panel/member/datascript/delete/{id}','UserMemberScriptController@deletefile');
Route::post('users/panel/member/datascript/add','UserMemberScriptController@addfile');
Route::resource('users/panel/member/script','UserMemberScriptController');