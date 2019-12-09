<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    function landing() {
        return view('pages/landing');
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
}
