<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DatapetaController;
use App\Http\Controllers\LaporController;
use App\Http\Controllers\WalhiController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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
Route::get('/admin/dashboard', [DashboardController::class, 'index']);
Route::get('/admin/artikel', [ArtikelController::class, 'index']);
Route::get('/admin/datapeta', [DatapetaController::class, 'index']);
Route::get('/admin/lapor', [LaporController::class, 'index']);
