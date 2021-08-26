<?php

use App\Http\Controllers\Buyer\BuyerController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Payments\PaymentController;
use App\Http\Controllers\Vendor\VendorController;
use App\Http\Integrations\LipaNaMpesa;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;

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
    return view('landing-page-v3');
});

Route::middleware(['auth:sanctum'])->group(function() {
    Route::get('/dashboard/add-vendor', [DashboardController::class, 'createVendor'])
        ->name('dashboard.add-vendor');
    Route::post('/dashboard/add-vendor', [DashboardController::class, 'storeVendor'])
        ->name('dashboard.add-vendor');
    Route::get('/dashboard/vendors', [DashboardController::class, 'indexVendors'])
        ->name('dashboard.index-vendors');
    Route::get('/dashboard/vendor/{id}', [DashboardController::class, 'showVendor'])
        ->name('dashboard.show-vendor');
    Route::get('/dashboard/vendor/deactivate/{id}', [DashboardController::class, 'deactivateVendor'])
        ->name('dashboard.deactivate-vendor');

    Route::get('/vendor/add-dish', [VendorController::class, 'createDish'])
        ->name('vendor.add-dish');

    Route::post('/vendor/add-dish', [VendorController::class, 'storeDish'])
        ->name('vendor.add-dish');

    Route::get('/vendor/dishes', [VendorController::class, 'indexDishes'])
        ->name('vendor.index-dishes');

    Route::get('/vendor/dish/{id}', [VendorController::class, 'showDish'])
        ->name('vendor.show-dish');

    Route::get('/vendor/dish/edit/{id}', [VendorController::class, 'editDish'])
        ->name('vendor.edit-dish');

    Route::post('/vendor/dish/edit/{id}', [VendorController::class, 'updateDish'])
        ->name('vendor.update-dish');

    // Dishes & orders routes
    Route::get('/dishes', [BuyerController::class, 'index'])
        ->name('dishes');
    Route::get('/dish/store/{id}', [BuyerController::class, 'storeOrder'])
        ->name('dishes.order');
    Route::get('dishes/orders', [BuyerController::class, 'indexOrders'])
        ->name('dishes.orders');
    Route::get('/dish/order/{id}', [BuyerController::class, 'showOrder'])
        ->name('order.show');
    Route::post('/dish/pay', [PaymentController::class, 'payDish'])
        ->name('dish.pay');

    Route::resource('dashboard', DashboardController::class);
});

// {
//     "BusinessShortCode": 174379,
//     "Password": "MTc0Mzc5YmZiMjc5ZjlhYTliZGJjZjE1OGU5N2RkNzFhNDY3Y2QyZTBjODkzMDU5YjEwZjc4ZTZiNzJhZGExZWQyYzkxOTIwMjEwMTI0MTAxMDMy",
//     "Timestamp": "20210124101032",
//     "TransactionType": "CustomerPayBillOnline",
//     "Amount": 1,
//     "PartyA": 254746820652,
//     "PartyB": 174379,
//     "PhoneNumber": 254746820652,
//     "CallBackURL": "https://949af1871944.ngrok.io",
//     "AccountReference": "495632184",
//     "TransactionDesc": "test_2"
// }