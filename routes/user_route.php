<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/groups', [UserController::class, 'groups'])->name('user.groups');
    Route::get('/group/{id}', [UserController::class, 'groupsShow'])->name('user.groups_show');
    Route::get('/paymart', [UserController::class, 'paymart'])->name('user.paymart');
    Route::get('/profel', [UserController::class, 'profel'])->name('user.profel');
    Route::post('/profel/updatePasword', [UserController::class, 'updatePasword'])->name('user.updatePasword');
    
});