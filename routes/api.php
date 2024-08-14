<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\User\UserController;
use App\Http\Controllers\Api\User\PaymeController;
use App\Http\Controllers\Api\Techer\TecherController;


Route::post('user/login', [UserController::class, 'login']);

Route::group([
    'middleware'=>['auth:sanctum']
], function(){
    Route::get('user/home', [UserController::class, 'home']);
    Route::get('user/profile', [UserController::class, 'profile']);
    Route::get('user/groups', [UserController::class, 'groups']);
    Route::get('user/groups/show/{id}', [UserController::class, 'groupsShow']);
    Route::get('user/groups/test/{id}', [UserController::class, 'groupTest']);
    Route::post('user/groups/test', [UserController::class, 'groupTestCreate']);
    Route::get('user/logout', [UserController::class, 'logout']);
    Route::get('user/paymarts', [UserController::class, 'paymarts']);
    Route::post('user/paymart', [UserController::class, 'paymartsCreate']);
});

Route::post('techer/login', [TecherController::class, 'login']);

Route::post('payme', [PaymeController::class, 'index']);

Route::group([
    'middleware'=>['auth:sanctum']
], function(){
    Route::get('techer/home', [TecherController::class, 'home']);
    Route::get('techer/profile', [TecherController::class, 'profile']);
    Route::get('techer/groups', [TecherController::class, 'groups']);
    Route::get('techer/groups/show/{id}', [TecherController::class, 'groupsShow']);
    Route::post('techer/groups/davomat', [TecherController::class, 'davomat']);
    Route::get('techer/paymarts', [TecherController::class, 'paymarts']);
    Route::get('techer/logout', [UserController::class, 'logout']);
});