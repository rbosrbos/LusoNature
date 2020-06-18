<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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


Route::get('/', 'MainpageController@index')->name('mainpage');

Route::post('/user/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::prefix('admin')->group(function(){
  Route::get('/', 'AdminController@index')->name('admin.mainpage');
  Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
  Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');

  //Password reset routes
  Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
  Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
  Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
  Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
});

Route::resource('home', 'HomeController')->middleware('auth');

Route::resource('news', 'NewsController')->middleware('auth',['except' => ['index','show']]);
Route::get('/place/index/', 'PlaceController@main')->name('place.main');
Route::resource('place', 'PlaceController')->middleware('auth',['except' => ['index','show']]);

Auth::routes();
