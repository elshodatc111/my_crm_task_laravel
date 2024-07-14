<?php

use App\Http\Controllers\TecherController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/techer', [TecherController::class, 'index'])->name('techer.index');
    
});