<?php

use App\Http\Controllers\API\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'json.response'], function () {
    Route::group(['prefix' => 'users'], function() {
        Route::post('/', [UserController::class, 'create']);
        Route::get('/', [UserController::class, 'fetchAll']);
        Route::get('/{id}', [UserController::class, 'fetchById']);
    });
});
