<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MenegerController;
use App\Http\Controllers\TecherController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Meneger\AlertController;
use Illuminate\Support\Facades\Route;


/* Start Form Show */
    Route::get('/form/user/{id}', [AlertController::class, 'formShowUser'])->name('form_show_user');
    Route::get('/form/techer/{id}', [AlertController::class, 'formShowTecher'])->name('form_show_techer');
/* End Form Show */


Route::middleware('auth')->group(function () {
    Route::get('/', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::get('/note', [AlertController::class, 'eslatma'])->name('eslatma');
    Route::post('/note', [AlertController::class, 'eslatmaDelete'])->name('eslatma_delete');
    Route::get('/birthday', [AlertController::class, 'tkun'])->name('tkun');
    Route::get('/advertising', [AlertController::class, 'form'])->name('form');
    Route::get('/appeals', [AlertController::class, 'murojat'])->name('murojat');

});






require __DIR__.'/auth.php';
require __DIR__.'/admin_routes.php';
require __DIR__.'/meneger_route.php';
require __DIR__.'/techer_route.php';
require __DIR__.'/user_route.php';
