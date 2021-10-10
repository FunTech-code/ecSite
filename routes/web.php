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
Route::get('/',     'TopPageController@index'); // トップページ
Route::get('goods', 'GoodsController@index'); // 商品一覧
Route::get('goods/{id}', 'GoodsController@show'); // 商品詳細
Route::post('order/{id}', 'OrderController@buy'); // 商品購入
Route::get('order/complete/{goods_id}', 'OrderController@complete'); // 購入完了

Route::get('/home', 'HomeController@index')->name('home');
Route::get('user',  'UserController@index');
Route::get('user/show',  'UserController@show');
Route::get('logout',  'UserController@logout');