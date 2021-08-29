<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

Route::get('/', [userController::class, 'index']);
Route::get('/create', [userController::class, 'create']);
Route::get('/edit', [userController::class, 'edit']);
Route::get('/show', [userController::class, 'show']);
