<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MessageController;

// Маршруты для аутентификации
Route::controller(AuthController::class)->group(function () {
    Route::get('/register', 'showRegisterForm')->name('register');
    Route::post('/register', 'register');
    Route::get('/login', 'showLoginForm')->name('login');
    Route::post('/login', 'login');
    Route::post('/logout', 'destroy')->name('logout');
});

// Защищенные маршруты
Route::middleware(['auth'])->group(function () {
    Route::controller(MessageController::class)->group(function () {
        Route::get('/messages', 'index')->name('messages.index');
        Route::post('/messages', 'store')->name('messages.store');
        Route::post('/messages/{message}/mark-as-offensive', 'markAsOffensive')->name('messages.markAsOffensive');
    });
});
