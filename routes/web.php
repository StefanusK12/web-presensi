<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RecordController;
use App\Http\Controllers\SalaryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashbardController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\MonthReportController;

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashbardController::class, 'index'])->middleware('auth');

Route::get('/dashboard/presensi/masuk', [DashbardController::class, 'checkin'])->middleware('auth');
Route::post('/dashboard/presensi/masuk', [PresensiController::class,'checkin'])->middleware('auth');

Route::get('/dashboard/presensi/keluar', [DashbardController::class, 'checkout'])->middleware('auth');
Route::post('/dashboard/presensi/keluar', [PresensiController::class, 'checkout'])->middleware('auth');

Route::resource('/dashboard/profile', ProfileController::class)->middleware('auth');

Route::resource('/dashboard/records', RecordController::class)->middleware('auth');


Route::resource('/dashboard/gaji', SalaryController::class)->middleware('auth');

Route::get('/dashboard/admin/searchpresensi', [AdminController::class, 'searchPresensi'])->middleware('admin');
Route::get('/dashboard/admin/searchpresensi/list', [AdminController::class, 'listPresensi'])->middleware('admin');

Route::get('/dashboard/admin/listgaji', [AdminController::class, 'listGaji'])->middleware('admin');
Route::get('/dashboard/admin/tambahgaji', [AdminController::class, 'tambahGaji'])->middleware('admin');
Route::post('/dashboard/admin/simpangaji', [AdminController::class, 'simpanGaji'])->name('simpangaji')->middleware('admin');
Route::get('/dashboard/admin/editgaji/{id}', [AdminController::class, 'editGaji'])->middleware('admin');
Route::post('/dashboard/admin/updategaji', [AdminController::class, 'updateGaji'])->name('updategaji')->middleware('admin');
Route::get('/dashboard/admin/setjabatan', [AdminController::class, 'setJabatan'])->middleware('admin');