<?php

use App\Http\Controllers\PlaceController;
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

Route::get('/user/places/', 'UserareaController@places')->name('user.places');
Route::resource('user', 'UserareaController')->middleware('auth');

Route::resource('news', 'NewsController');

Route::resource('place', 'PlaceController');
Route::post('/place/rate','PlaceController@rate')->name('place.rate');



Route::get('/contact', 'ContactController@index')->name('contact.index');
Route::post('/contact', 'ContactController@create')->middleware('throttle:1,1')->name('contact.create');

Route::get('/forecast', 'WeatherForecastController@index')->name('weatherforecast.index');

Route::post('/rating/{rate?}', 'ratingController@storeOrUpdate')->name('rating.storeorupdate');

Auth::routes();
