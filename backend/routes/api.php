<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JWTAuthController;
use App\Http\Middleware\JwtMiddleware;
use App\Http\Controllers\QuestionController;

Route::post('register', [JWTAuthController::class, 'register'])->middleware('throttle:5,1');
Route::post('login', [JWTAuthController::class, 'login'])->middleware('throttle:5,1');

Route::middleware([JwtMiddleware::class])->group(function () {
    Route::get('user', [JWTAuthController::class, 'getUser']);
    Route::post('logout', [JWTAuthController::class, 'logout']);
    Route::post('questions', [QuestionController::class, 'store']);
    Route::put('questions/{id}', [QuestionController::class, 'update']);
    Route::delete('questions/{id}', [QuestionController::class, 'destroy']);
});

Route::get('questions', [QuestionController::class, 'index']);
Route::get('questions/{id}', [QuestionController::class, 'show']);
Route::post('questions/{id}/answer', [QuestionController::class, 'checkAnswer']);
Route::post('questions/{id}/hint', [QuestionController::class, 'hint']);