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

use GeoIp2\Database\Reader;


Route::get('/', 'PagesController@landing');
Route::get('/f-and-b', 'PagesController@fnb');
Route::get('/about-us', 'PagesController@about');
Route::get('/retail', 'PagesController@retail');
Route::get('/real-estate-developers', 'PagesController@realestate');
Route::get('/news', 'PagesController@news');
Route::get('/office', 'PagesController@offices');
Route::get('/contact-us', 'PagesController@cotact');
Route::get('/copyright-dispute-policy', 'PagesController@copyright');
Route::get('/terms-of-use', 'PagesController@terms');
Route::get('/privacy-policy', 'PagesController@privacy');





Route::post('/message', 'MessageController@store');
Route::get('/api/message', function() {
    return \App\Message::all();
});
Route::get('/api/press', function() {
    return \App\PressPost::all();
});

Route::resource('/admin/press', 'PressController');

Route::get('/api/location', function() {
//
    $ip = (Request::ip());
    $arr_ip = geoip()->getLocation($ip);
    $data = [
        "iso" => $arr_ip->iso_code,
        "location" => $arr_ip->country
    ];

    return $data;
});

//Route::get('/{catchall?}', function () {
//
//    return view('layout');
//})->where('catchall', '[\/\w\.-]*');


