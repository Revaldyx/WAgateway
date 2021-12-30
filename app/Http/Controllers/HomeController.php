<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function data_devices()
    {
        return view('devices.datadevices');
    }

    public function pesan_keluar()
    {
        return view('message.message_out');
    }

    public function pesan_masuk()
    {
        return view('message.message_in');
    }

    public function auto_reply()
    {
        return view('message.autoreply');
    }
}
