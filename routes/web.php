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


Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');

Route::get('signup', 'UsersController@create')->name('signup');

Route::resource('users', 'UsersController');

// 显示登录页面
Route::get('login', 'SessionsController@create')->name('login');

// 登录验证，保存登录状态
Route::post('login', 'SessionsController@store')->name('login');

// 销毁登录状态，退出
Route::delete('logout', 'SessionsController@destroy')->name('logout');

// 发送账户激活邮件
Route::get('signup/confirm/{token}', 'UsersController@confirmEmail')->name('confirm_email');

// 展示发送密码重置邮件表单页面
Route::get('password/reset', 'PasswordController@showLinkRequestForm')->name('password.request');
// 发送密码重置邮件
Route::post('password/email', 'PasswordController@sendResetLinkEmail')->name('password.email');

// 展示密码重置表单
Route::get('password/reset/{token}', 'PasswordController@showRestForm')->name('password.reset');
// 提交密码重置
Route::post('password/reset', 'PasswordController@reset')->name('password.update');

Route::resource('statuses', 'StatusesController', [
    'only' => ['store', 'destroy']
]);
