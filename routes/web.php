<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaporController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WalhiController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DatapetaController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;

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

// controller walhi
Route::get('/', [WalhiController::class, 'index']);
Route::get('/plingkungan', [WalhiController::class, 'PLingkungan']);
Route::get('/dashboard', [WalhiController::class, 'Dashboard']);
Route::get('/artikel', [WalhiController::class, 'Artikel']);
Route::get('/home/artikel', [WalhiController::class, 'DetailArtikel']);
Route::get('/lapor', [WalhiController::class, 'Lapor']);
Route::get('/faq', [WalhiController::class, 'Faq']);



Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/admin/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::get('/admin/artikel', [ArtikelController::class, 'index'])->middleware('auth');
Route::get('/admin/datapeta', [DatapetaController::class, 'index'])->middleware('auth');
Route::get('/admin/lapor', [LaporController::class, 'index'])->middleware('auth');
