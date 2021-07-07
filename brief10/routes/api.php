<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;




/** PUBLIC_ROUTES */
Route::post('/signup', [AuthController::class, 'signup']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/{id}', [AuthController::class, 'logout']);

/** PROTECTED_ROUTEs */
Route::group(['middleware' => ['auth:sanctum']], function () {
    /** __ */
    Route::delete('/post/{id}', [PostController::class, 'delete']);

    Route::get('/post/all', [PostController::class, 'getAll']);
});