<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Directory\UserController;
use App\Http\Controllers\Admin\Directory\ToChucController;
use App\Http\Controllers\Admin\Directory\TuKhoaController;
use App\Http\Controllers\Admin\Directory\CongViecController;
use App\Http\Controllers\HomeController;

Route::resource('cong-viec', CongViecController::class);
Route::resource('to-chuc', ToChucController::class);
Route::resource('tu-khoa', TuKhoaController::class);
Route::resource('user', UserController::class);

Route::get('/', [HomeController::class, 'index']);

Route::get('/dashboard', function () {
    return view('default.dashboard');
});
