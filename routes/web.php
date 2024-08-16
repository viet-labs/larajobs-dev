<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ToChucController;
use App\Http\Controllers\Admin\TuKhoaController;
use App\Http\Controllers\Admin\CongViecController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginAdminController;

Route::prefix('admin')->middleware('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.dashboard');
    Route::resource('cong-viec', CongViecController::class);
    Route::resource('to-chuc', ToChucController::class);
    Route::resource('tu-khoa', TuKhoaController::class);
    Route::resource('user', UserController::class);
});

Route::get('/', [HomeController::class, 'index']);

Route::middleware('guest:admin')->group(function () {
    Route::get('/admin/login', [LoginAdminController::class, 'show'])->name('admin.login');
    Route::post('/admin/login', [LoginAdminController::class, 'login'])->name('admin.postLogin');
});
