<?php
/*
    Route of custom user controller
 */

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomUserController;

Route::get('/profile/{id}', [CustomUserController::class, 'show']);
Route::get('/profile/item/{id}', [CustomUserController::class, 'item']);
