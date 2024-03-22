<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\Admin\VendorController;
use App\Http\Controllers\Admin\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('frontend.home');
})->name('home');

Route::get('/testimoni', function () {
    return view('frontend.testimoni');
})->name('testimoni');


Route::get('/why-us', function () {
    return view('frontend.whyus');
})->name('why-us');


// Rute untuk memproses data formulir yang disubmit
Route::get('home', [DataController::class, 'index']);
Route::post('/frontend/store', [DataController::class, 'store'])->name('store');
Route::get('form', [DataController::class, 'index'])->name('form');
// Route::get('/frontend/store', [DataController::class, 'store'])->name('store');


// ADmin
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/vendor_profile/{id}', [VendorController::class, 'showProfile'])->name('admin.vendor');

});

Route::get('/admin/search', [DashboardController::class, 'search'])->name('admin.search');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
