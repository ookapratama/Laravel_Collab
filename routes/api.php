<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// 2 route : create dan read
Route::get('/', [UserController::class, 'index']);
Route::post('/create', [UserController::class, 'create']);
// put, patch, delete
