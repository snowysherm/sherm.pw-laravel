<?php

use App\Http\Controllers\ClockController;use App\Http\Controllers\SwtorController;
use Illuminate\Support\Facades\Route;

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
    return view('index');
});

Route::prefix('swtor')->group(function() {
    Route::get('/', [SwtorController::class, 'index'])->name('swtor.index');
    Route::post('/store', [SwtorController::class, 'store'])->name('swtor.store');
    Route::post('/update/{id}', [SwtorController::class, 'storePrestige'])->name('swtor.char.update');
    Route::get('/character/{id}', [SwtorController::class, 'show'])->name('swtor.show');
});

Route::prefix('clock')->group(function() {
    Route::get('/', [ClockController::class, 'index'])->name('clock.index');
    Route::post('/store', [ClockController::class, 'store'])->name('clock.store');
});
