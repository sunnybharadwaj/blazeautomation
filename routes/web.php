<?php


use GeoIp2\Database\Reader;
use App\Message;


Route::get('/', 'PagesController@landing');
Route::get('/f-and-b', 'PagesController@fnb');
Route::get('/about-us', 'PagesController@about');
Route::get('/retail', 'PagesController@retail');
Route::get('/real-estate-developers', 'PagesController@realestate');
Route::get('/news', 'PagesController@news');
Route::get('/office', 'PagesController@offices');
Route::get('/contact-us', 'PagesController@contact');
Route::get('/copyright-dispute-policy', 'PagesController@copyright');
Route::get('/terms-of-use', 'PagesController@terms');
Route::get('/privacy-policy', 'PagesController@privacy');

Route::group(array('prefix' => 'product'), function () {
   Route::get('/eazy', 'ProductsController@eazy');
   Route::get('/edge', 'ProductsController@edge');
   Route::get('/wattsup', 'ProductsController@wattsup');
   Route::get('/a10socket', 'ProductsController@a10socket');
   Route::get('/a16socket', 'ProductsController@a16socket');
   Route::get('/flooddetector', 'ProductsController@flooddetector');
   Route::get('/motionsensor', 'ProductsController@motionsensor');
   Route::get('/smartsensor', 'ProductsController@smartsensor');
   Route::get('/domesiren', 'ProductsController@domesiren');
   Route::get('/dimmer', 'ProductsController@dimmer');
   Route::get('/dualrelay', 'ProductsController@dualrelay');
});

//todo:remove this code
Route::get('/message', 'MessageController@index');


Route::post('/message', 'MessageController@store');
Route::get('/api/message', function() {
    return Message::all();
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


