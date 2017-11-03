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

Route::group(['middleware' => 'logincheck'], function () {
    Route::resource('labels', 'LabelsController');
    Route::resource('passages', 'PassagesController');
    Route::post('/passages/{id}/comment', 'CommentsController@store')->name('commentStore');  //添加评论
    Route::post('/passages/{id}/favor', 'FavorsController@store'); //点赞
});


//以下操作需要管理员权限 到时候添加一个管理员中间件
Route::group(['middleware' => 'adminCheck'], function () {
    Route::get('/admin', 'Admin\UsersController@index');
    Route::resource('users', 'Admin\UsersController');
    Route::post('/passages/{id}/check', 'PassagesController@check');
    Route::post('/labels/{id}/check', 'LabelsController@check');
});



//后台登录
Route::get('/admin/login', 'Admin\LoginController@index')->name('loginView');
Route::get('/admin/logout', 'Admin\LoginController@logout')->name('logout');
Route::post('/admin/login', 'Admin\LoginController@login')->name('loginPro');