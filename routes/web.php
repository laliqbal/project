<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BeritaUserController;
use App\Http\Controllers\LaporController;
use App\Http\Controllers\TitikController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KelolaUserController;
use Illuminate\Support\Facades\Route;

Route::get('/admin', function () {
    return view('pages.admin.dashboard');
});

Route::get('/home', function () {
    return view('pages.user.index');
});

Route::get('/beritauser', function () {
    return view('pages.user.berita');
})->name('beritauser');

Route::get('/users', function () {
    return view('pages.admin.kelolauser');
})->name('users');

Route::get('/berita', function () {
    return view('pages.kepaladesa.berita.index');
})->name('berita');

Route::get('/laporw', function () {
    return view('pages.user.lapor');
})->name('lapor');

Route::get('/peta', function () {
    return view('pages.user.peta');
})->name('peta');

Route::get('/petas', function () {
    return view('pages.kepaladesa.peta.index');
})->name('petas');

Route::get('/', [TitikController::class, 'titik']);
Route::get('titik/json', [TitikController::class, 'titik']);

Route::prefix('auth')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [AuthController::class, 'credentials'])->name('credentials');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.index');
});

Route::prefix('user')->group(function () {
    Route::get('/index', [KelolaUserController::class, 'index'])->name('user.index');
});
Route::prefix('home')->group(function () {
    Route::get('/index', [UserController::class, 'index'])->name('home.index');
});

Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/create', [BeritaController::class, 'create'])->name('create');
Route::post('/berita/store', [BeritaController::class, 'store'])->name('store');
Route::get('/berita/{id}/edit', [BeritaController::class, 'edit'])->name('edit');
Route::put('/berita/update/{id}', [BeritaController::class, 'update'])->name('update');
Route::delete('/berita/delete/{id}', [BeritaController::class, 'destroy'])->name('destroy');

Route::get('/beritauser', [BeritaUserController::class, 'index'])->name('beritauser');
Route::get('/beritauser/search', [BeritaUserController::class, 'search'])->name('beritauser.search');

Route::get('/lapor', [LaporController::class, 'index'])->name('lapor');
Route::post('/lapor/store', [LaporController::class, 'store']);
Route::get('/lapor/laporw', [LaporController::class, 'laporw'])->name('laporw');

Route::get('/user', [UserController::class, 'index'])->name('user');
Route::get('/user/{id}/edit', [UserController::class, 'edit'])->name('edituser');
Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');

Route::get('/users', [KelolaUserController::class, 'index'])->name('users.index');
Route::get('/users/{id}/edit', [KelolaUserController::class, 'edit'])->name('users.edit');
