<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/create', [AdminController::class, 'create'])->name('admin.create');
    
    Route::get('/admin/show/setting/{id}', [AdminController::class, 'show_setting'])->name('admin.show_setting');
    Route::get('/admin/show/sms/set/{id}', [AdminController::class, 'show_sms'])->name('admin.show_sms');
    Route::get('/admin/show/statistik/set/sta{id}', [AdminController::class, 'show_statistik'])->name('admin.show_statistik');
    Route::get('/admin/show/{id}', [AdminController::class, 'show'])->name('admin.show');
    
});