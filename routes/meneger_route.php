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
    // Cours Setting
    
    Route::get('/meneger/setting/cours', [SettingController::class, 'cours'])->name('meneger.cours');
    Route::get('/meneger/setting/cours/show/{id}', [SettingController::class, 'coursShow'])->name('meneger.cours_show');
    Route::post('/meneger/setting/cours/create', [SettingController::class, 'courscreate'])->name('meneger.cours_create');
    Route::post('/meneger/setting/cours/delete', [SettingController::class, 'coursdelete'])->name('meneger.cours_delete');
    Route::post('/meneger/setting/cours/create/video', [SettingController::class, 'courscreatevideo'])->name('meneger.cours_create_video');
    Route::post('/meneger/setting/cours/delete/video', [SettingController::class, 'courscreatevideodelete'])->name('meneger.cours_create_video_delete');
    Route::post('/meneger/setting/cours/create/test', [SettingController::class, 'courscreatetest'])->name('meneger.cours_create_test');
    Route::post('/meneger/setting/cours/delete/test', [SettingController::class, 'courscreatetestdelete'])->name('meneger.cours_create_test_delete');
 
}); 