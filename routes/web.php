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

Route::get('/', 'PagesController@landing');
Route::get('/real-estate-developers', 'PagesController@realestate');
Route::get('/f-and-b', 'PagesController@fnb');
Route::get('/retail', 'PagesController@retail');
Route::get('/contact', 'PagesController@contact');
Route::get('/office', 'PagesController@offices');
Route::get('/about', 'PagesController@about');
