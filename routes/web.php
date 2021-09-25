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

Route::get('/',     'TopPageController@index'); // トップページ
Route::get('user',  'UserController@index');
Route::match(['get', 'post'],'user/show', 'UserController@show'); // ユーザー登録
Route::get('login', function () {
    return view('login.login');
});
Route::get('login/signup', function () {
    return view('login.signup');
});
Route::get('login/{id}',  'UserController@create');
Route::get('goods', 'GoodsController@index'); // 商品一覧
Route::get('goods/{id}', 'GoodsController@show'); // 商品詳細
Route::post('order/{id}', 'OrderController@buy'); // 商品購入
Route::get('order/complete/{goods_id}', 'OrderController@complete'); // 購入完了
