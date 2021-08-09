<?php

use App\Http\Controllers\Utility\Payment\MpesaController;
use App\Http\Controllers\Utility\UserUtilityController;
use App\Http\Controllers\Utility\UtilityController;
use App\Http\Controllers\Utility\UtilityPaymentController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    // return view('landing-page-v3');
    return view('dashboard');
})->name('dashboard');