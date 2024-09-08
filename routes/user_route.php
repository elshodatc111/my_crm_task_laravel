<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function () {
    Route::get('/user', [UserController::class, 'index'])->name('user.index');
    Route::get('/groups', [UserController::class, 'groups'])->name('user.groups');
    Route::get('/group/{id}', [UserController::class, 'groupsShow'])->name('user.groups_show');
    Route::get('/group/test/{id}', [UserController::class, 'groupsTest'])->name('user.groups_test');
    Route::post('/group/test', [UserController::class, 'groupsTestStory'])->name('user.groups_test_story');
    Route::get('/paymart', [UserController::class, 'paymart'])->name('user.paymart');
    Route::get('/profel', [UserController::class, 'profel'])->name('user.profel');
    Route::post('/profel/updatePasword', [UserController::class, 'updatePasword'])->name('user.updatePasword');

    
    Route::get('/paymart/show', [UserController::class, 'paymartShow'])->name('user.paymart_show');
    Route::post('/paymart/show', [UserController::class, 'paymartShowPost'])->name('user.paymart_show_post');
    Route::get('/paymart/show/{id}', [UserController::class, 'paymartShowTwo'])->name('user.paymart_show_two');
    
});