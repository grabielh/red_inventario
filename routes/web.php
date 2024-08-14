<?php

use App\Http\Controllers\dispositivos\AllInOneController;
use App\Http\Controllers\dispositivos\DesktopPcController;
use App\Http\Controllers\dispositivos\LaptopController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

    Route::resource('dispositivo/laptops', LaptopController::class)->parameters(['laptop' => 'idlaptop']);
    Route::resource('dispositivo/desktop-pcs', DesktopPcController::class)->parameters(['desktop_pc' => 'iddesktop_pc']);
    Route::resource('dispositivo/all-in-ones', AllInOneController::class)->parameters(['all_in_one' => 'idall_in_one']);



});


require __DIR__.'/auth.php';
