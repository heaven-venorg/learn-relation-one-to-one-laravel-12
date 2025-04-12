<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'index'])->name('index.view');
Route::get('/form-input', [UserController::class, 'create'])->name('index.create');
Route::post('form-input', [UserController::class, 'store'])->name('index.create.store');
