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

//Frontend routers
Route::get('/', 'FrontendController@index');
Route::get('/my/account/{userId}', 'FrontendController@myAccount');

//Authentication routers
Auth::routes();

//Update profile
Route::post('/user/profile/update/{profileId}', 'ProfileController@profileUpdate')->name('updateProfile');

//Backend routers
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/profile/{profileId}', 'HomeController@adminProfile')->name('profile');
