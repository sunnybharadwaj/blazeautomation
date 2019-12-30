<?php

namespace App\Http\Controllers;

use App\PressPost;
use Illuminate\Http\Request;
use GeoIp2\Database\Reader;


class PagesController extends Controller
{
    function landing() {
        $ip = (request()->ip());
        $arr_ip = geoip()->getLocation($ip);
        $data = (object)[
            "iso" => $arr_ip->iso_code,
            "location" => $arr_ip->country
        ];

        return view('pages/landing', compact('data'));
    }

    function about() {
        return view('pages/about');
    }

    function fnb() {
        return view('pages/fnb');
    }

    function retail() {
        return view('pages/retail');
    }

    function realestate() {
        return view('pages/realestate');
    }

    function offices() {
        return view('pages/offices');
    }

    function contact() {
        return view('pages/contact');
    }

    function news() {
        $data = PressPost::all();
        return view('pages/news', compact('data'));
    }

    function copyright() {
        return view('pages/copyright');
    }

    function terms() {
        return view('pages/terms');
    }

    function privacy() {
        return view('pages/privacy');
    }
}
