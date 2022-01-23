<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/',     'TopPageController@index')->middleware('auth'); // トップページ
Route::get('goods', 'GoodsController@index')->middleware('auth'); // 商品一覧
Route::get('goods/{id}', 'GoodsController@show')->middleware('auth'); // 商品詳細
Route::post('order/{id}', 'OrderController@buy')->middleware('auth'); // 商品購入
Route::get('order/complete/{goods_id}', 'OrderController@complete')->middleware('auth'); // 購入完了

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
// Route::get('user',  'UserController@index')->middleware('auth');
// Route::get('user/{id}',  'UserController@show')->middleware('auth');
// Route::get('logout',  'UserController@logout')->middleware('auth');