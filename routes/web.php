<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', [UserController::class, 'index'])->name('users.index');
Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/user/create', [UserController::class, 'create'])->name('users.create');
Route::get('/users/{users}', [UserController::class, 'show'])->name('users.show');
Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');

Route::post('/users', [UserController::class, 'store'])->name('users.store');

Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');

Route::delete('/users/{users}', [UserController::class, 'destroy'])->name('users.destroy');
