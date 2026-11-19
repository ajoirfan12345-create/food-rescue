<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ProdukController;
use App\Http\Controllers\Api\KategoriController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Endpoint API Food Rescue untuk Mobile
Route::apiResource('/produks', ProdukController::class);
Route::get('/kategoris', [KategoriController::class, 'index']);
Route::get('/kategoris/{id}', [KategoriController::class, 'show']);