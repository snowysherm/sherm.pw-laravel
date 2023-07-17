<?php

use App\Http\Controllers\SwtorController;
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

Route::get('/swtor', [SwtorController::class, 'index'])->name('swtor.index');
Route::post('/store', [SwtorController::class, 'store'])->name('swtor.store');
