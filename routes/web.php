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


Route::get('/', 'IndexController@index');

Route::group(['middleware'=>'logincheck'], function(){
    Route::resource('labels', 'LabelsController');
    Route::resource('passages', 'PassagesController');
    Route::post('/passages/{id}/favor', 'FavorsController@store');
});


//以下操作需要管理员权限 到时候添加一个管理员中间件

Route::post('/passages/{id}/check', 'PassagesController@check');
Route::post('/labels/{id}/check', 'LabelsController@check');
Route::resource('users', 'UsersController');

