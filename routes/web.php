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
    Route::get('/form/user/{markaz_id}/{smm}', [AlertController::class, 'formShowUser'])->name('form_show_user');
    Route::get('/form/techer/{markaz_id}/{smm}', [AlertController::class, 'formShowTecher'])->name('form_show_techer');
    Route::post('/form/form/post', [AlertController::class, 'formPost'])->name('form_post');
/* End Form Show */


Route::middleware('auth')->group(function () {
    Route::get('/', [AuthController::class, 'dashboard'])->name('dashboard');
    Route::get('/note', [AlertController::class, 'eslatma'])->name('eslatma');
    Route::post('/note', [AlertController::class, 'eslatmaDelete'])->name('eslatma_delete');
    Route::get('/birthday', [AlertController::class, 'tkun'])->name('tkun');
    Route::get('/appeals', [AlertController::class, 'murojat'])->name('murojat');


    
    Route::get('/advertising', [AlertController::class, 'form'])->name('form');
    Route::get('/advertising/statistik', [AlertController::class, 'formTecher'])->name('form_techer');
    Route::get('/advertising/arxiv', [AlertController::class, 'formArxiv'])->name('form_arxiv');
    Route::get('/advertising/url', [AlertController::class, 'formLink'])->name('form_url');
    Route::post('/advertising/Murojat', [AlertController::class, 'formMurojatShow'])->name('form_murojat_typing');
    Route::get('/advertising/murojat/show/{id}', [AlertController::class, 'formShow'])->name('form_murojat_show');

});






require __DIR__.'/auth.php';
require __DIR__.'/admin_routes.php';
require __DIR__.'/meneger_route.php';
require __DIR__.'/techer_route.php';
require __DIR__.'/user_route.php';
