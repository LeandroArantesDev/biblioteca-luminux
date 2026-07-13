<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

// rotas publicas do site
Route::get('/', [SiteController::class, 'index'])->name('site.home');

// rotas de login e autenticação
Route::get('/login', [LoginController::class, 'index'])->name('site.login');
Route::post('login', [LoginController::class, 'authenticate'])->name('auth.login');

// rotas privadas, protegidas por autenticação
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [SiteController::class, 'dashboard'])->name('site.dashboard');
    Route::post('/logout', [LoginController::class, 'logout'])->name('auth.logout');
});
