<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/login', [AuthController::class, 'login']);
// Route::post('/register', [RegisterController::class, 'register']);
Route::get('/register/edit/{id}', [RegisterController::class, 'getRegister']);
Route::post('/register/edit', [RegisterController::class, 'updateDataUser']);

