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


//后台管理
Route::group(['namespace'=>'Admin', 'prefix'=>'admin/'], function(){
    Route::resource('users', 'UsersController');
    Route::resource('labels', 'LabelsController');
    Route::resource('passages', 'PassagesController');
});
