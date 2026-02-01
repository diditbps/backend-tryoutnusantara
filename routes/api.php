<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SoalApiController;
use App\Http\Controllers\Api\JenistryoutController;
use App\Http\Controllers\Api\PakettryoutController;
use App\Http\Controllers\Api\PaketsoalController;
use App\Http\Controllers\Api\AuthController;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/jenis_tryout', [JenistryoutController::class, 'index']);
Route::get('/paket_tryout', [PakettryoutController::class, 'index']);
Route::get('/paket_tryout/{nama_paket_tryout}', [PakettryoutController::class, 'filterID']);
Route::get('/paket_tryout/premium/{premium}', [PakettryoutController::class, 'isPremium']);
Route::get('/paket_tryout/event/{event}', [PakettryoutController::class, 'isEvent']);

Route::get('/soals', [SoalApiController::class, 'index']);
Route::get('/soals/{id}', [SoalApiController::class, 'show']);
Route::get('/soals/paket/{paket}', [SoalApiController::class, 'filterpaketdanqc']);
Route::get('/paket_soal', [PaketsoalController::class, 'index']);
Route::get('/paket_soal/{nama_paket_soal}', [PaketsoalController::class, 'filterNamapaketsoal']);


Route::post('/register', [AuthController::class, 'register']);