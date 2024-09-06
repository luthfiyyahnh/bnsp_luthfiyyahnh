<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create', [App\Http\Controllers\pegawaiController::class, 'index'])->name('pegawai.create');
Route::get('/update/{id}', [App\Http\Controllers\pegawaiController::class, 'update'])->name('pegawai.update');
Route::post('/update', [App\Http\Controllers\pegawaiController::class, 'update_save'])->name('pegawai.update.store');
Route::delete('/delete/{id}', [App\Http\Controllers\pegawaiController::class, 'delete'])->name('pegawai.destroy');
Route::post('/store', [App\Http\Controllers\pegawaiController::class, 'store'])->name('pegawai.store');
