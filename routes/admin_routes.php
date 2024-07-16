<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {

    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');

    Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
    Route::post('/admin/create/store', [AdminController::class, 'create_story'])->name('admin.create_story');
    
    Route::get('/admin/show/setting/{id}', [AdminController::class, 'show_setting'])->name('admin.show_setting');
    Route::put('/admin/show/setting/update/{id}', [AdminController::class, 'show_update'])->name('admin.show_update');
    Route::post('/admin/show/setting/lock', [AdminController::class, 'show_update_lock'])->name('admin.show_update_lock');
    Route::post('/admin/show/setting/block', [AdminController::class, 'show_update_lock_block'])->name('admin.show_update_lock_block');
    Route::post('/admin/show/setting/generator', [AdminController::class, 'generator'])->name('admin.generator');
    Route::post('/admin/show/setting/kassa/update', [AdminController::class, 'kassaUpdate'])->name('admin.kassaUpdate');
    Route::post('/admin/show/setting/balans/update', [AdminController::class, 'balansUpdate'])->name('admin.balansUpdate');

    Route::get('/admin/show/sms/set/{id}', [AdminController::class, 'show_sms'])->name('admin.show_sms');
    Route::post('/admin/show/sms/set/add', [AdminController::class, 'addSmsPaket'])->name('admin.addSmsPaket');

    Route::get('/admin/show/statistik/set/sta{id}', [AdminController::class, 'show_statistik'])->name('admin.show_statistik');

    Route::get('/admin/show/{id}', [AdminController::class, 'show'])->name('admin.show');
    Route::post('/admin/show/update/image', [AdminController::class, 'updatelogo'])->name('admin.updatelogo');
    Route::post('/admin/show/create', [AdminController::class, 'postogoh'])->name('admin.postogoh');
    Route::delete('/admin/show/delete/{id}', [AdminController::class, 'postogohdelete'])->name('admin.postogohdelete');

    Route::get('/admin/person', [AdminController::class, 'adminPerson'])->name('admin.adminPerson');
    Route::post('/admin/person/block', [AdminController::class, 'adminPersonBlok'])->name('admin.adminPersonBlocks');
    Route::post('/admin/person/open', [AdminController::class, 'adminPersonOpen'])->name('admin.adminPersonOpen');
    Route::post('/admin/person/create', [AdminController::class, 'adminPersonCreate'])->name('admin.adminPersonCreate');
    
});