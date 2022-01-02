<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Devices extends Controller
{
    public function index()
    {
        return view('devices.add');
    }

    public function addqrcode()
    {
        return view('devices.qrcode');
    }
}
