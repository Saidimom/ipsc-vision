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

Route::group(['prefix' => '/', 'middleware' => 'auth'], function (){
    Route::get('/', 'IndexController@index')->name('index');
    Route::resource('users', 'UsersController');
    Route::resource('incidents', 'IncidentsController');
    Route::resource('inquiries', 'InquiriesController');
    Route::get('profile', 'UsersController@profile')->name('profile');
    Route::get('permissions','UsersController@permissions')->name('permissions');


    Route::post('permissions', 'UsersController@updatePermissions')->name('admin.updatePermissions');

    Route::group(['prefix' => 'settings', 'middleware' => ['role:super-admin']], function () {
        Route::get('/', 'SettingsController@index')->name('settings.index');


    });

    //Route::get('test','UsersController@permissions')->name('test');
});




Route::get('login', 'Auth\LoginController@showLoginForm')->name('showLogin');
Route::post('login', ['uses' => 'Auth\LoginController@login', 'as' => 'login']);
Route::get('logout', ['uses' => 'Auth\LoginController@logout', 'as' => 'logout']);
