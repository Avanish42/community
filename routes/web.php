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

Route::get('/test',function(){
    return view('test');
});

Route::group(['prefix'=>"User", 'namespace'=>'User'],function(){

    Route::get('/','RegistrationController@index');
    Route::get('/login','RegistrationController@login');
    Route::post('/store','RegistrationController@store');

});

Route::group(['prefix'=>'Forum','namespace'=>'Admin'],function(){

    Route::get('/','ForumController@index');
    Route::get('/create','ForumController@create');

});

Route::group(['prefix'=>'Poll','namespace'=>'Admin'],function(){

    Route::get('/','PollController@index');
    Route::get('/create','PollController@create');
    Route::post('/store','PollController@store');

});


Route::group(['prefix'=>'Fourm','namespace'=>'Admin'],function(){

    Route::get('/','ForumController@index');
    Route::post('/store','ForumController@store');
    Route::get('/create','ForumController@create');


});



