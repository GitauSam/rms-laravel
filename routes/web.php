<?php

use App\Http\Controllers\Buyer\BuyerController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Payments\PaymentController;
use App\Http\Controllers\Vendor\VendorController;
use App\Http\Integrations\LipaNaMpesa;
use App\Models\Buyer\Buyer;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
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

Route::get('/beta', function () {
    return view('landing-page-v3');
    
    // $orders = Buyer::all();
    // $dishStatistics = array();
    // $labels = "";
    // $stats = "";

    // foreach($orders as $order) {
    //     if ($order->dish->vendor->id == auth()->user()->id) {
    //         if (array_key_exists($order->dish->name, $dishStatistics)) {
    //             $dishStatistics[$order->dish->name] = $dishStatistics[$order->dish->name]++;
    //         } else {
    //             $dishStatistics[$order->dish->name] = 1;
    //         }
    //     }
    // }

    // foreach($dishStatistics as $ds) {
    //     $labels .= key($dishStatistics) . ',';
    //     $stats .= $dishStatistics[key($dishStatistics)] . ',';
    // }

    // Log::debug("Labels: " . $labels);
    // Log::debug("Values: " . $stats);

    // dump($labels);
    // dump($stats);
    // dd(array_keys($dishStatistics));
    // dd(array_values($dishStatistics));
});

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// Email Verification Routes
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');


Route::middleware(['auth:sanctum', 'verified'])->group(function() {
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
    Route::get('/dish/delete/{id}', [VendorController::class, 'deactivateDish'])
        ->name('dish.delete');
    Route::get('/orders/unconfirmed', [VendorController::class, 'getOrders'])
        ->name('index-unpurchased-orders');
    Route::get('/orders/confirmed', [VendorController::class, 'getSales'])
        ->name('index-purchased-orders');

    Route::resource('dashboard', DashboardController::class);
});