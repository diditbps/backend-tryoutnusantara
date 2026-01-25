<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SoalApiController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/soals', [SoalApiController::class, 'index']);
Route::get('/soals/{id}', [SoalApiController::class, 'show']);
Route::get('/soals/paket/{paket}', [SoalApiController::class, 'filterpaketdanqc']);