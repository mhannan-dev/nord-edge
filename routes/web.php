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


Route::get('/', 'Frontend\HomeController@getIndex')->name('home');
Route::get('/about', 'Frontend\AboutUsController@getIndex')->name('about');
Route::get('/services', 'Frontend\ServicesController@services')->name('service');

Route::group(['prefix' => 'frontend'], function () {


});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
