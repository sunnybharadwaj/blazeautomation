<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //

public function eazy() {
    return view('product/eazy');
}
public function edge() {
    return view('product/edge');
}
public function wattsup() {
    return view('product/wattsup');
}
public function a10socket() {
    return view('product/a10socket');
}
public function a16socket() {
    return view('product/a16socket');
}
public function flooddetector() {
    return view('product/flooddetector');
}
public function motionsensor() {
    return view('product/motionsensor');
}
public function smartsensor() {
    return view('product/smartsensor');
}
public function domesiren() {
    return view('product/domesiren');
}
public function dimmer() {
    return view('product/dimmer');
}
public function dualrelay() {
    return view('product/dualrelay');
}
}
