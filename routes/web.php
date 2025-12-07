<?php

use App\Http\Controllers\UserController;

Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');

Route::resource('users', UserController::class);
