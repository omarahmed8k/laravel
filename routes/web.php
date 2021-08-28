<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\userController;

Route::get('/', [userController::class, 'index']);
Route::get('/create', [userController::class, 'create']);
Route::get('/edit/{id}', [userController::class, 'edit']);
Route::get('/show/{id}', [userController::class, 'show']);
Route::get('/delete/{id}', [userController::class, 'delete']);