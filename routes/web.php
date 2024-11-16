<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PenggunaController;

Route::get('/', [PenggunaController::class, 'index'])->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [AuthController::class, 'prosesLogin']);
Route::get('/signup', function () {
    return view('signup');
})->name('signup');

Route::post('/signup', [AuthController::class, 'prosesSignUp']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard-admin', [AuthController::class, 'dashboardAdmin'])->name('dashboard_admin');
});