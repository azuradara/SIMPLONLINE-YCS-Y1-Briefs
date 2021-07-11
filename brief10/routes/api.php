<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;


/** PUBLIC_ROUTES */
Route::post('/signup', [AuthController::class, 'signup']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);

Route::get('/post/all', [PostController::class, 'getAll']);

/** PROTECTED_ROUTEs */
Route::group(['middleware' => ['auth:sanctum']], function () {
    /** POSTS */
    Route::get('/post/user/{id}', [PostController::class, 'getUserPosts']);
    Route::post('/post', [PostController::class, 'create']);
    Route::put('/post/{id}', [PostController::class, 'update']);
    Route::delete('/post/{id}', [PostController::class, 'delete']);

    /** COMMENTS */
    Route::get('/comment/user/{id}', [CommentController::class, 'getUserComments']);
    Route::get('/comment/post/{id}', [CommentController::class, 'getPostComments']);
    Route::post('/comment/', [CommentController::class, 'create']);
    Route::put('/comment/{id}', [CommentController::class, 'update']);
    Route::delete('/comment/{id}', [CommentController::class, 'delete']);


    /** AUTH CHECK ROUTE */
    Route::get('/user', [AuthController::class, 'user']);
    Route::post('/logout', [AuthController::class, 'logout']);
});
