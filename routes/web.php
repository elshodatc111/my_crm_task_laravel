<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MenegerController;
use App\Http\Controllers\TecherController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Meneger\AlertController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::get('/eslatma', [AlertController::class, 'eslatma'])->name('eslatma');
    Route::get('/tkun', [AlertController::class, 'tkun'])->name('tkun');
    Route::get('/form', [AlertController::class, 'form'])->name('form');
    Route::get('/murojat', [AlertController::class, 'murojat'])->name('murojat');
});






require __DIR__.'/auth.php';
require __DIR__.'/admin_routes.php';
require __DIR__.'/meneger_route.php';
require __DIR__.'/techer_route.php';
require __DIR__.'/user_route.php';
