<?php

use App\Http\Controllers\Buyer\BuyerController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Vendor\VendorController;
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

    Route::resource('dashboard', DashboardController::class);
});