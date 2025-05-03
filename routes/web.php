<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AnakController;
use App\Http\Controllers\Admin\BennerController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\KegiatanController;
use App\Http\Controllers\Admin\KeseluruhanDataController;
use App\Http\Controllers\Admin\KunjunganController;
use App\Http\Controllers\User\UserController;

Route::prefix ('admin')->name('admin')->group(function(){
    //route dashboard
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    //route keseluruhan data
    Route::get('/keseluruhandata', [KeseluruhanDataController::class, 'index'])->name('keseluruhandata');
    // route anak
    Route::get('/dataanak', [AnakController::class, 'index'])->name('dataanak');
    Route::get('/tambahanak', [AnakController::class, 'create'])->name('tambahanak');
    //route kunjungan
    Route::get('/kunjungan', [KunjunganController::class, 'index'])->name('kunjungan');
    //route kegiatan
    Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan');
    //route berita
    Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
    Route::get('/tambahberita', [BeritaController::class, 'create'])->name('tambahberita');
    //route Benner
    Route::get('/benner', [BennerController::class, 'index'])->name('benner');
    Route::get('/tambahbenner', [BennerController::class, 'create'])->name('tambahbenner');
});

Route::prefix ('user')->name('user')->group(function(){
    Route::get('/home', [UserController::class, 'index'])->name('home');
});
