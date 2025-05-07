<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', fn () => response()->view('home'));
Route::get('/api/auth-check', [AuthController::class, 'authCheck']);
Route::get('/login', fn () => response()->view('login'))->middleware('guest');
Route::post('/login', [AuthController::class, 'login']);


Route::middleware('auth')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/perfil', fn () => response()->view('perfil'));
});