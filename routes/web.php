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

Route::get('/', 'ListController@get_home_web');

Route::get('/saved', 'ListController@get_home_web')->middleware('auth');

Route::get('/listing/{listing}', 'ListController@get_listing_web');

Auth::routes();
