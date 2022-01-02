<?php

use Illuminate\Support\Facades\Route;

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

//route landing page
Route::get('/', function () {
    return view('auth.login');
});

//route login
Auth::routes();

//route home
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//route logout
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

//route page devices
Route::get('devices/data_devices', [App\Http\Controllers\HomeController::class, 'data_devices'])->name('data_devices');
Route::get('devices/data_devices/add', [App\Http\Controllers\Devices::class, 'index'])->name('add_devices');
Route::get('devices/data_devices/addqrcode', [App\Http\Controllers\Devices::class, 'addqrcode'])->name('qrcode');

//route page pesan keluar
Route::get('message/pesan_keluar', [App\Http\Controllers\HomeController::class, 'pesan_keluar'])->name('pesan_keluar');

//route page pesan masuk
Route::get('message/pesan_masuk', [App\Http\Controllers\HomeController::class, 'pesan_masuk'])->name('pesan_masuk');

//route page autoreply
Route::get('message/auto_reply', [App\Http\Controllers\HomeController::class, 'auto_reply'])->name('auto_reply');