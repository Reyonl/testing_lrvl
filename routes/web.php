<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BelanjaController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\MasterController;
use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Route;


Route::resource('/belanja', BelanjaController::class);


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::resource('/belanja', BelanjaController::class);
Route::resource('/service', ServiceController::class);
Route::resource('/master', MasterController::class);
Route::resource('/laporan', LaporanController::class);

require __DIR__.'/auth.php';
