<?php

use App\Http\Controllers\MenegerController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Meneger\SettingController;
use App\Http\Controllers\Meneger\HodimController;
use App\Http\Controllers\Meneger\TashrifController;
Route::middleware('auth')->group(function () {
    Route::get('/meneger', [MenegerController::class, 'index'])->name('meneger.home');
    /*  Start Setting  */
        Route::get('/meneger/setting/room', [SettingController::class, 'rooms'])->name('meneger.rooms');
        Route::POST('/meneger/setting/room/create', [SettingController::class, 'roomsCreate'])->name('meneger.rooms_create');
        Route::POST('/meneger/setting/room/block', [SettingController::class, 'roomsBlock'])->name('meneger.rooms_Block');
        Route::get('/meneger/setting/paymart', [SettingController::class, 'paymart'])->name('meneger.paymart');
        Route::POST('/meneger/setting/paymart/create', [SettingController::class, 'paymartCreate'])->name('meneger.paymart_reate');
        Route::POST('/meneger/setting/paymart/delete', [SettingController::class, 'paymartDelete'])->name('meneger.paymart_delete');
        Route::get('/meneger/setting/message', [SettingController::class, 'message'])->name('meneger.message');
        Route::post('/meneger/setting/update', [SettingController::class, 'messageUpdate'])->name('meneger.message_update');
        Route::get('/meneger/setting/cours', [SettingController::class, 'cours'])->name('meneger.cours');
        Route::get('/meneger/setting/cours/show/{id}', [SettingController::class, 'coursShow'])->name('meneger.cours_show');
        Route::post('/meneger/setting/cours/create', [SettingController::class, 'courscreate'])->name('meneger.cours_create');
        Route::post('/meneger/setting/cours/delete', [SettingController::class, 'coursdelete'])->name('meneger.cours_delete');
        Route::post('/meneger/setting/cours/create/video', [SettingController::class, 'courscreatevideo'])->name('meneger.cours_create_video');
        Route::post('/meneger/setting/cours/delete/video', [SettingController::class, 'courscreatevideodelete'])->name('meneger.cours_create_video_delete');
        Route::post('/meneger/setting/cours/create/test', [SettingController::class, 'courscreatetest'])->name('meneger.cours_create_test');
        Route::post('/meneger/setting/cours/delete/test', [SettingController::class, 'courscreatetestdelete'])->name('meneger.cours_create_test_delete');
    /*  End Setting  */

    /*  Start Hodimlar */
        Route::get('/meneger/employee', [HodimController::class, 'hodim'])->name('meneger.hodim');
        Route::post('/meneger/employee/unlock', [HodimController::class, 'hodimUnlock'])->name('meneger.hodim_unlock');
        Route::get('/meneger/employee/create', [HodimController::class, 'hodimCreate'])->name('meneger.hodim_create');
        Route::post('/meneger/employee/create', [HodimController::class, 'hodimCreateStore'])->name('meneger.hodim_create_store');
        Route::post('/meneger/employee/update', [HodimController::class, 'hodimUpdateStore'])->name('meneger.hodim_update_store');
        Route::post('/meneger/employee/statistik/clear', [HodimController::class, 'hodimStatistikClear'])->name('meneger.hodim_statistik_clear');
        Route::get('/meneger/employee/show/{id}', [HodimController::class, 'hodimShow'])->name('meneger.hodim_show');
        Route::post('/meneger/employee/update/password', [HodimController::class, 'hodimUpdatePassword'])->name('meneger.hodim_update_password');
        Route::get('/meneger/techer', [HodimController::class, 'techer'])->name('meneger.techer');
        Route::get('/meneger/techer/create', [HodimController::class, 'techerCreate'])->name('meneger.techer_create');
        Route::post('/meneger/techer/create', [HodimController::class, 'techerCreateStore'])->name('meneger.techer_create_store');
        Route::get('/meneger/techer/show/{id}', [HodimController::class, 'techerShow'])->name('meneger.techer_show');
        Route::post('/meneger/techer/update/password', [HodimController::class, 'techerUpdatePassword'])->name('meneger.techer_update_password');
        Route::post('/meneger/techer/update', [HodimController::class, 'techerUpdateStore'])->name('meneger.techer_update_store');
    /*  End Hodimlar */

    /* Start Tashriflar */
        Route::get('/meneger/student/all', [TashrifController::class, 'allTashrif'])->name('meneger.all_tashrif');
        Route::get('/meneger/student/search', [TashrifController::class, 'TashrifSearch'])->name('meneger.all_search');
        Route::get('/meneger/student/debit', [TashrifController::class, 'allDebet'])->name('meneger.all_debet');
        Route::get('/meneger/student/debit/search', [TashrifController::class, 'TashrifDebitSearch'])->name('meneger.all_debet_search');
        Route::get('/meneger/student/create', [TashrifController::class, 'allCreate'])->name('meneger.all_create');
        Route::post('/meneger/student/create', [TashrifController::class, 'allCreateStory'])->name('meneger.all_create_story');
        Route::get('/meneger/student/show/{id}', [TashrifController::class, 'allShow'])->name('meneger.all_show');
    /* End Tashriflar */
}); 