<?php

use App\Http\Controllers\Auth\NewUserController;
use App\Http\Controllers\ChessController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::post('/user/new', [NewUserController::class, 'create']);

Route::get('/chess/pieces', [ChessController::class, 'index']);