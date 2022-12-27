<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\WalhiController;
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

// controller walhi
Route::get('/', [WalhiController::class, 'Home']);
Route::get('/plingkungan', [WalhiController::class, 'PLingkungan']);
Route::get('/dashboard', [WalhiController::class, 'Dashboard']);
Route::get('/artikel', [WalhiController::class, 'Artikel']);
Route::get('/home/artikel', [WalhiController::class, 'DetailArtikel']);
Route::get('/lapor', [WalhiController::class, 'Lapor']);
Route::get('/faq', [WalhiController::class, 'Faq']);
Route::get('/login', [WalhiController::class, 'login']);
Route::get('/register', [WalhiController::class, 'register']);

// controller admin
Route::get('/admin/dashboard', [AdminController::class, 'dashboard']);
Route::get('/admin/artikel', [AdminController::class, 'artikel']);
Route::get('/admin/datapeta', [AdminController::class, 'datapeta']);
Route::get('/admin/lapor', [AdminController::class, 'lapor']);
