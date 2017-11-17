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
Route::get('/', 'Backstage@index');

Route::get('/menu_list', 'Backstage@menu_list')->name('allData');//菜單列表
Route::get('/add_menu', 'Backstage@add_menu');//新增菜單
Route::post('/edit_menu', 'Backstage@edit_menu');//修改菜單
Route::post('/input', 'Backstage@input');//菜單資料匯入資料庫
Route::post('/delete', 'Backstage@delete');//刪除菜單
Route::post('/update', 'Backstage@update');//更新菜單

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/location', 'MenuController@location');
Route::get('/header', 'MenuController@header');
Route::get('/author', 'MenuController@author');
Route::get('/menu', 'MenuController@menu');

Route::get('/dish1', 'MenuController@dish1');
Route::get('/dish2', 'MenuController@dish2');

Route::get('/index','MenuController@index');
Route::get('/activity','MenuController@activity');

