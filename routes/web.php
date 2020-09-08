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


Auth::routes();

/* Guest Routes */
Route::get('/', 'GuestController@index')->name('guest.upload');
Route::post('upload-data', 'GuestController@upload_data')->name('guest.uploads');
Route::post('upload-photo', 'GuestController@upload_photo')->name('guest.uploads');
/* End Guest Routes */