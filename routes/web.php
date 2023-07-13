<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/paket', [App\Http\Controllers\paketController::class, 'index']);
Route::get('/paket/create', [App\Http\Controllers\paketController::class, 'create']);
Route::post('/paket', [App\Http\Controllers\paketController::class, 'store']);
Route::get('/paket/{id}/edit', [App\Http\Controllers\paketController::class, 'edit']);
Route::patch('/paket/{id}', [App\Http\Controllers\paketController::class, 'update']);
Route::delete('/paket/{id}', [App\Http\Controllers\paketController::class, 'destroy']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/konsumen', [App\Http\Controllers\konsumenController::class, 'index']);
Route::get('/konsumen/create', [App\Http\Controllers\konsumenController::class, 'create']);
Route::post('/konsumen', [App\Http\Controllers\konsumenController::class, 'store']);
Route::get('/konsumen/{id}/edit', [App\Http\Controllers\konsumenController::class, 'edit']);
Route::patch('/konsumen/{id}', [App\Http\Controllers\konsumenController::class, 'update']);
Route::delete('/konsumen/{id}', [App\Http\Controllers\konsumenController::class, 'destroy']);

Route::get('/transaksi', [App\Http\Controllers\transaksiController::class, 'index']);
Route::get('/transaksi/create', [App\Http\Controllers\transaksiController::class, 'create']);
Route::post('/transaksi', [App\Http\Controllers\transaksiController::class, 'store']);
Route::get('/transaksi/{id}/edit', [App\Http\Controllers\transaksiController::class, 'edit']);
Route::patch('/transaksi/{id}', [App\Http\Controllers\transaksiController::class, 'update']);
Route::delete('/transaksi/{id}', [App\Http\Controllers\transaksiController::class, 'destroy']);