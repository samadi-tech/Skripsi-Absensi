<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\PostingController;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/absensi', [AbsensiController::class, 'read']);
Route::post('/absensi', [AbsensiController::class, 'create']);


Route::get('/posting', [PostingController::class, 'read']);
Route::post('/posting', [PostingController::class, 'create']);

Route::get('/register', [MahasiswaController::class, 'read']);
Route::post('/register', [MahasiswaController::class, 'create']);
