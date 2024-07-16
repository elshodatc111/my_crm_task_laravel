<?php

use App\Http\Controllers\MenegerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Meneger\SettingController;
Route::middleware('auth')->group(function () {
    Route::get('/meneger', [MenegerController::class, 'index'])->name('meneger.index');
    
    //Settings
    Route::get('/meneger', [SettingController::class, 'rooms'])->name('meneger.rooms');



}); 