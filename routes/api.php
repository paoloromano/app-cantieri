<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

use App\Http\Controllers\Pages\TranslationController;
use App\Http\Controllers\Pages\UserController;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('users', [UserController::class, 'all'])->name('users.all');
});

Route::get('/translations', [TranslationController::class, 'getAllTranslations']);
