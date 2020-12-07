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


Route::get('/', 'Frontend\HomePageController@getIndex')->name('home');
Route::get('/about', 'Frontend\HomePageController@getAbout')->name('about');
Route::get('/services', 'Frontend\HomePageController@getService')->name('service');
Route::get('/projects', 'Frontend\HomePageController@getProject')->name('project');
Route::get('/contact', 'Frontend\HomePageController@getContact')->name('contact');




Auth::routes();


Route::group(array('middleware' => 'auth'), function () {
    
    Route::get('/dashboard', 'Backend\DashboardController@index')->name('dashboard');
    Route::resource('slider', 'Backend\SlidersController');

});
