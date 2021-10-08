<?php
/*
    Route of custom user controller
 */

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CUserController;

Route::get('/profile/{id}', [CUserController::class, 'show']);