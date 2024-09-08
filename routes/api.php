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
    Route::get('user/balans', [UserController::class, 'balans']);
    Route::get('user/profile', [UserController::class, 'profile']);
    Route::get('user/logout', [UserController::class, 'logout']);
    Route::get('user/groups', [UserController::class, 'groups']);
    Route::get('user/groups/show/{id}', [UserController::class, 'groupsShow']);
    Route::get('user/paymarts', [UserController::class, 'paymarts']);
    Route::get('user/test', [UserController::class, 'test']);
    Route::get('user/testshow/{cours_id}/{guruh_id}', [UserController::class, 'testshow']);
    Route::post('user/test/post', [UserController::class, 'TestPost']);
    Route::post('user/update/password', [UserController::class, 'UpdatePassword']);
});

Route::post('techer/login', [TecherController::class, 'login']); 
Route::group([
    'middleware'=>['auth:sanctum']
], function(){
    Route::get('techer/profile', [TecherController::class, 'profile']);
    Route::get('techer/groups', [TecherController::class, 'groups']);
    Route::get('techer/paymart', [TecherController::class, 'paymarts']);
    Route::get('techer/groups/show/{id}', [TecherController::class, 'groupsShow']);
    Route::post('techer/davomats', [TecherController::class, 'davomats']);
});