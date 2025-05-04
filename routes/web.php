<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AnakController;
use App\Http\Controllers\Admin\BennerController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\KegiatanController;
use App\Http\Controllers\Admin\KeseluruhanDataController;
use App\Http\Controllers\Admin\KunjunganController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\User\UserKegiatanController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\UserMiddleware;

// Login routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login');


// Register routes
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

// Logout route
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/home', [UserController::class, 'index'])->name('home');
// Group routes yang memerlukan autentikasi
Route::middleware(['auth'])->group(function () {

    // Admin routes dengan FQCN (tanpa alias)
    Route::prefix('admin')
        ->name('admin.')
        ->middleware([AdminMiddleware::class])
        ->group(function () {
            Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
            Route::get('/keseluruhandata', [KeseluruhanDataController::class, 'index'])->name('keseluruhandata');
            Route::get('/dataanak', [AnakController::class, 'index'])->name('dataanak');
            Route::get('/tambahanak', [AnakController::class, 'create'])->name('tambahanak');
            Route::get('/kunjungan', [KunjunganController::class, 'index'])->name('kunjungan');
            Route::get('/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan');
            Route::get('/berita', [BeritaController::class, 'index'])->name('berita');
            Route::get('/tambahberita', [BeritaController::class, 'create'])->name('tambahberita');
            Route::get('/benner', [BennerController::class, 'index'])->name('benner');
            Route::get('/tambahbenner', [BennerController::class, 'create'])->name('tambahbenner');
        });

    // User routes dengan FQCN juga (jika middleware UserMiddleware tidak didaftarkan)
    Route::prefix('user')
        ->name('user.')
        ->middleware([UserMiddleware::class])
        ->group(function () {
            Route::get('/userkegiatan', [UserKegiatanController::class, 'index'])->name('userkegiatan');
           
        });
});
