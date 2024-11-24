<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\KegiatanController;
use App\Http\Controllers\Api\KegiatanTambahanController;
use App\Http\Controllers\Api\FasilitasController;
use App\Http\Controllers\Api\GaleriController;
use App\Http\Controllers\PengurusController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/kegiatan', [KegiatanController::class, 'index']);
Route::get('/kegiatan/{id}', [KegiatanController::class, 'show']);
Route::get('/kegiatan-tambahan', [KegiatanTambahanController::class, 'index']);
Route::get('/kegiatan-tambahan/{id}', [KegiatanTambahanController::class, 'show']);
Route::get('fasilitas', [FasilitasController::class, 'index']);
Route::get('fasilitas/{id}', [FasilitasController::class, 'show']);
Route::get('/pengurus', [PengurusController::class, 'index']);
Route::get('/pengurus/{id}', [PengurusController::class, 'show']);
Route::get('/galeri', [GaleriController::class, 'index']);
Route::get('/galeri/{id}', [GaleriController::class, 'show']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
