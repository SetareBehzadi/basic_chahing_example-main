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

Route::get('/', 'App\HomeController@home')->name('home');

Auth::routes();

/*____________________________ Admin panel __________________________________________*/

Route::group(['prefix' => '/panel','middleware'=>'admin' ,'namespace' => 'Admin'], function () {

    Route::get('/','PageController@index')->name('dashboard');
    Route::get('/logout', 'PageController@logout')->name('Logout');
    Route::get('/change-password',  'UserController@changePassword')->name('change_password');
    Route::post('/change-password', 'USerController@storeNewPassword')->name('store_password');
    Route::post('/update-user-profile', 'USerController@updateUserInfo')->name('update_user_profile');




});


/*_______________________________ Application ________________________________________*/






