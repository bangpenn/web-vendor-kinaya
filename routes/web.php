<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;

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
Route::post('/frontend/store', [DataController::class, 'store'])->name('store');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
