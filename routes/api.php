<?php

use App\Http\Controllers\Auth\NewUserController;
use App\Http\Controllers\ChessController;
use App\Http\Controllers\RoomController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

Route::post('/user/new', [NewUserController::class, 'create']);

Route::get('/chess/pieces', [ChessController::class, 'index']);

// Route::get('/chess/pieces/{piece}/{power_up}', []);

Route::resource('rooms', RoomController::class)->middleware('auth:api');