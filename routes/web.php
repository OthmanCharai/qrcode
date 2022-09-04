<?php

use App\Http\Controllers\QrCodeController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/qrcode', [QrCodeController::class, 'index'])->name('code');
Route::get('/bitconcode', [QrCodeController::class, 'bitcoincode'])->name('bitcoin');
Route::get('/wificode', [QrCodeController::class, 'wificode'])->name('wifi');
Route::get('/smscode', [QrCodeController::class, 'smscode'])->name('sms');
Route::get('/emailcode', [QrCodeController::class, 'emailcode'])->name('email');
Route::get('/geocode', [QrCodeController::class, 'geocode'])->name('geo');


