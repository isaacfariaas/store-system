<?php

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
require __DIR__ . '/auth.php';

Route::get('/dashboard', function () {
    return view('main.dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('sells', [SellsController::class]);
Route::get('sell_list', [SellsController::class, 'getSell'])->name('sell_list');


