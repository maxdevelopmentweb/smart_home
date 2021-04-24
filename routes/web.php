<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;

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



Route::get('/', function () {
    return view('dashboard.index');
})->middleware('auth');

Route::get('devices', [DeviceController::class, 'getIndex'])->name('getIndex')->middleware('auth');

Route::get('devices/add', function () {
    return view('device.add');
})->middleware('auth');

Route::get('devices/add', [DeviceController::class, 'getAdd'])->name('getAdd')->middleware('auth');

Route::post('devices/add', [DeviceController::class, 'postDevice'])
    ->name('postDevice')->middleware('auth');

