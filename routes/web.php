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


Route::get('/salarie', function(){
return view('auth.disting_salarie');
});



//etudiant
Route::get('/home', function () {
    return redirect('/profile');
});


Route::get('/', function () {
    return view('welcome');
});

Route::get('/show', 'ProfileController@show_profile');
Route::post('/show', 'ProfileController@change_avatar');
Route::get('/profile/encm/show', 'ProfileController@show_messages');
Route::post('/profile/encm', 'ProfileController@env_message');
Route::get('/profile/encm/', 'ProfileController@env_message_show');
Route::get('/profile/soutenance/', 'ProfileController@demande_soutenance');
Route::post('/profile/soutenance/', 'ProfileController@env_demande_soutenance');



Route::get('/profile/compte_rendu','ProfileController@form_compte_rendu');
Route::post('/profile/compte_rendu','ProfileController@env_compte_rendu');
Route::get('/profile/compte_rendu/show','ProfileController@show_compte_rendu');


Route::get('/profile', function(){
	return view('etudiantV.profile');
});

Auth::routes();


//posts

Route::get('/post/create', 'PostController@create');
Route::post('/post','PostController@store');



//admins


Route::get('/admin/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login','Auth\AdminLoginController@login')->name('admin.login.submit');

Route::get('/admin/theses','AdminController@these')->name('admin.theses');
Route::post('/admin/theses','AdminController@store_these');
Route::get('/admin/doc','AdminController@doctorants');
Route::get('/admin/dir','AdminController@directeurs');
Route::post('/admin/dir','AdminController@store_encadrant');
Route::get('/admin/soutenances','AdminController@soutenances');
Route::get('/admin','AdminController@index')->name('admin.dashboard');






//encadrants

Route::get('/encadrant/login','Auth\EncadrantLoginController@showLoginForm')->name('encadrant.login');
Route::post('/encadrant/login','Auth\EncadrantLoginController@login')->name('encadrant.login.submit');



Route::get('/encadrant','EncadrantController@index')->name('encadrant.dashboard');
Route::get('/encadrant/env_message','EncadrantController@env_message_show');
Route::post('/encadrant/env_message','EncadrantController@env_message');
Route::get('/encadrant/compte_rendu','EncadrantController@show_comptes_rendu');
Route::get('/encadrant/env_message/show','EncadrantController@show_messages');


//forum

Route::get('/forum','ForumController@index');
Route::post('/forum','ForumController@store');

Route::get('/forum/{id}','ForumController@show_question');
Route::post('/forum/{id}','ForumController@store_response');




//Route::get('/home', 'HomeController@index')->name('home');


