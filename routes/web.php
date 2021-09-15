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

Route::get('/',     'TopPageController@index');
Route::get('user',  'UserController@index');
Route::match(['get', 'post'],'user/show', 'UserController@show');
Route::get('login', function () {
    return view('login.login');
});
Route::get('login/signup', function () {
    return view('login.signup');
});
Route::get('login/{id}',  'UserController@create');
Route::get('order', 'OrderController@index');
Route::get('goods', 'GoodsController@index');
