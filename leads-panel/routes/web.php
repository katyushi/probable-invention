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

Route::group(['middleware' => 'web'], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});

Route::get('/leads', [App\Http\Controllers\LeadsController::class, 'index']);
Route::get('/calls', [App\Http\Controllers\CallsController::class, 'index']);
Route::get('/calllogs', [App\Http\Controllers\CallLogController::class, 'index']);
