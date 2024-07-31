<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\User\UserController;
/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
*/

Route::post('user/login', [UserController::class, 'login']);
Route::group([
    'middleware'=>['auth:sanctum']
], function(){
    Route::get('user/home', [UserController::class, 'home']);
    Route::get('user/profile', [UserController::class, 'profile']);
    Route::get('user/groups', [UserController::class, 'groups']);
    Route::get('user/groups/show/{id}', [UserController::class, 'groupsShow']);
    Route::get('user/groups/test/{id}', [UserController::class, 'groupTest']);
    Route::get('user/logout', [UserController::class, 'logout']);
    Route::get('user/paymarts', [UserController::class, 'paymarts']);
    Route::post('user/paymart', [UserController::class, 'paymartsCreate']);
    

});
