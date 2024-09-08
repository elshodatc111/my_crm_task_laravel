<?php

use App\Http\Controllers\TecherController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/techer/index', [TecherController::class, 'index'])->name('techer.index');
    Route::get('/techer/guruhs', [TecherController::class, 'guruhs'])->name('techer.guruhs');
    Route::get('/techer/guruh/{id}', [TecherController::class, 'guruh'])->name('techer.guruh');
    Route::post('/techer/guruh', [TecherController::class, 'davomat'])->name('techer.davomat');
    Route::get('/techer/paymart', [TecherController::class, 'paymart'])->name('techer.paymart');
    Route::get('/techer/profel', [TecherController::class, 'profel'])->name('techer.profel');
    
}); 