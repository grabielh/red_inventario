<?php

use App\Http\Controllers\Areas\ConnectionController;
use App\Http\Controllers\Areas\DeviceTypeController;
use App\Http\Controllers\Areas\ResponsibleController;
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

    Route::resource('areas/responsibles', ResponsibleController::class)->parameters(['responsible' => 'idresponsible']);
    Route::resource('areas/connections', ConnectionController::class)->parameters(['connection' => 'idconnection']);

    Route::resource('areas/device-types', DeviceTypeController::class)->parameters(['deviceType' => 'iddeviceType']);


    Route::get('/dashboard', [Homecontroller::class, 'index'])->name('dashboard');
    Route::get('/dashboard/search', [Homecontroller::class, 'search'])->name('dashboard.search');

    



    Route::post('/abrir-terminal', function () {
        if (app()->environment('local')) {
            if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
                // Ejecutar cmd como administrador y cambiar el directorio a C:\Windows\System32
                pclose(popen('powershell -Command "Start-Process cmd -Verb RunAs -ArgumentList \'/K cd C:\Windows\System32\'"', 'r'));
            } else {
                // Para Linux/Mac
                pclose(popen('x-terminal-emulator -e /bin/bash', 'r'));
            }

            return response()->json(['status' => 'success']);
        } else {
            return response()->json(['status' => 'forbidden', 'message' => 'Acción no permitida en producción.'], 403);
        }
    });
});
require __DIR__ . '/auth.php';
