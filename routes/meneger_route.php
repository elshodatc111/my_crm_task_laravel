<?php

use App\Http\Controllers\MenegerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Meneger\SettingController;
Route::middleware('auth')->group(function () {
    Route::get('/meneger', [MenegerController::class, 'index'])->name('meneger.home');
    
    //Settings Room
    Route::get('/meneger/setting/room', [SettingController::class, 'rooms'])->name('meneger.rooms');
    Route::POST('/meneger/setting/room/create', [SettingController::class, 'roomsCreate'])->name('meneger.rooms_create');
    Route::POST('/meneger/setting/room/block', [SettingController::class, 'roomsBlock'])->name('meneger.rooms_Block');

    //Settings Paymart
    Route::get('/meneger/setting/paymart', [SettingController::class, 'paymart'])->name('meneger.paymart');
    Route::POST('/meneger/setting/paymart/create', [SettingController::class, 'paymartCreate'])->name('meneger.paymart_reate');
    Route::POST('/meneger/setting/paymart/delete', [SettingController::class, 'paymartDelete'])->name('meneger.paymart_delete');
    // Strring Message(SMS)
    Route::get('/meneger/setting/message', [SettingController::class, 'message'])->name('meneger.message');
    Route::post('/meneger/setting/update', [SettingController::class, 'messageUpdate'])->name('meneger.message_update');
 
}); 