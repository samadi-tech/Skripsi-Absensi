<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PostingController;
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

Route::get('/', [PostingController::class, 'index']);
Route::get('/absensi', [AbsensiController::class, 'index']);
Route::post('/absensi', [AbsensiController::class, 'absensiPost']);
Route::get('/history', [AbsensiController::class, 'history']);


Route::get('/login', [MahasiswaController::class, 'index']);
Route::get('/register', [MahasiswaController::class, 'register']);
Route::post('/register', [MahasiswaController::class, 'postRegister']);
