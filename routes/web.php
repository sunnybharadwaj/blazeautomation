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

Route::post('/message', 'MessageController@store');
Route::get('/api/press', function() {
    return \App\PressPost::all();
});

Route::resource('/admin/press', 'PressController');

Route::get('/api/location', function() {
//
    $arr_ip = geoip()->getLocation(Request::ip());
    $data = [
        "iso" => $arr_ip->iso_code,
        "location" => $arr_ip->country
    ];

    return $data;
});

Route::get('/{catchall?}', function () {

    return view('layout');
})->where('catchall', '[\/\w\.-]*');


