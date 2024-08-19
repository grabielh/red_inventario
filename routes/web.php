<?php

use App\Http\Controllers\dispositivos\AllInOneController;
use App\Http\Controllers\dispositivos\DesktopPcController;
use App\Http\Controllers\dispositivos\LaptopController;
use App\Http\Controllers\Homecontroller;
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
    Route::patch('/profile', [ProfileController::class, 'upda   te'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // web.
    Route::resource('dispositivo/laptops', LaptopController::class)->parameters(['laptop' => 'idlaptop']);
    Route::get('laptops/search', [LaptopController::class, 'search'])->name('laptops.search');

    Route::resource('dispositivo/desktop-pcs', DesktopPcController::class)->parameters(['desktop_pc' => 'iddesktop_pc']);
    Route::get('desktop-pcs/search', [DesktopPcController::class, 'search'])->name('desktop-pcs.search');

    Route::resource('dispositivo/all-in-ones', AllInOneController::class)->parameters(['all_in_one' => 'idall_in_one']);
    Route::get('all-in-ones/search', [AllInOneController::class, 'search'])->name('all-in-ones.search');

    // Route::get('/containnerdashboard/all', [Homecontroller::class, 'index'])->name('containnerdashboard');
    // Route::get('/containnerdashboard/search', [Homecontroller::class, 'search'])->name('containnerdashboard.search');

    Route::get('/dashboard', [Homecontroller::class, 'index'])->name('dashboard');
    Route::get('/dashboard/search', [Homecontroller::class, 'search'])->name('dashboard.search');


    
});
require __DIR__ . '/auth.php';
