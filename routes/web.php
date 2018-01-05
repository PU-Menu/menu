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


//連接到Home.php中的index
Route::get('/test', 'MenuController@test');//菜單列表

//後台:管理員
Route::get('back_login', 'Backstage@index');//管理員登入
Route::get('back_logout', 'Backstage@logout');//管理員登出
Route::post('back_login', 'Backstage@session');//判斷是否有此管理員
Route::get('/back_memberlist', 'Backstage@member_list');//管理員列表
Route::get('/add_member', 'Backstage@add_member');//新增管理員
Route::post('/edit_member', 'Backstage@edit_member');//修改密碼
Route::post('/input_member', 'Backstage@input_member');//管理員資料匯入資料庫
Route::post('/delete_member', 'Backstage@delete_member');//刪除管理員
Route::post('/update_member', 'Backstage@update_member');//更新管理員
//後台:菜單
Route::get('/back_menulist', 'Backstage@menu_list');//菜單列表
Route::get('/add_menu', 'Backstage@add_menu');//新增菜單
Route::post('/edit_menu', 'Backstage@edit_menu');//修改菜單
Route::post('/input_menu', 'Backstage@input_menu');//菜單資料匯入資料庫
Route::post('/delete_menu', 'Backstage@delete_menu');//刪除菜單
Route::post('/update_menu', 'Backstage@update_menu');//更新菜單

//後台:活動
Route::get('/back_activitylist', 'Backstage@activity_list');//活動列表
Route::get('/add_activity', 'Backstage@add_activity');//新增活動
Route::post('/edit_activity', 'Backstage@edit_activity');//修改活動
Route::post('/input_activity', 'Backstage@input_activity');//活動資料匯入資料庫
Route::post('/delete_activity', 'Backstage@delete_activity');//刪除活動
Route::post('/update_activity', 'Backstage@update_activity');//更新菜單

//後台:作者
Route::get('/back_authorlist', 'Backstage@author_list');//活動列表
Route::get('/add_author', 'Backstage@add_author');//新增活動
Route::post('/edit_author', 'Backstage@edit_author');//修改活動
Route::post('/input_author', 'Backstage@input_author');//活動資料匯入資料庫
Route::post('/delete_author', 'Backstage@delete_author');//刪除活動
Route::post('/update_author', 'Backstage@update_author');//更新菜單

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/location', 'MenuController@location');
Route::get('/header', 'MenuController@header');
Route::get('/author', 'MenuController@author');
Route::get('/menu', 'MenuController@menu');
Route::get('/all', 'MenuController@all');
Route::get('/orderSeat', 'MenuController@orderSeat');


Route::get('/dish1', 'MenuController@dish1');
Route::get('/dish2', 'MenuController@dish2');

Route::get('/','MenuController@index');
Route::get('/activity','MenuController@activity');

