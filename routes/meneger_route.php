<?php

use App\Http\Controllers\MenegerController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/meneger', [MenegerController::class, 'index'])->name('meneger.index');
    
});