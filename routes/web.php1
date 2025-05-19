<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PublisherController;
use App\Http\Controllers\AdvertiserController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

// Authentication routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin panel
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/users', [AdminController::class, 'manageUsers']);
    Route::post('/admin/ban-user/{id}', [AdminController::class, 'banUser']);
});

// Publisher panel
Route::middleware(['auth', 'publisher'])->group(function () {
    Route::get('/publisher/dashboard', [PublisherController::class, 'dashboard'])->name('publisher.dashboard');
    Route::get('/publisher/reports', [PublisherController::class, 'reports']);
    Route::get('/publisher/smartlink', [PublisherController::class, 'smartlink']);
});

// Advertiser panel
Route::middleware(['auth', 'advertiser'])->group(function () {
    Route::get('/advertiser/dashboard', [AdvertiserController::class, 'dashboard'])->name('advertiser.dashboard');
    Route::get('/advertiser/ads', [AdvertiserController::class, 'ads']);
});
