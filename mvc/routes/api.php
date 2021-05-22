<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\CarroController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'v1'], function () {
    Route::get('/funcionarios', [FuncionarioController::class, 'index']);
    Route::post('/funcionarios', [FuncionarioController::class, 'store']);
    Route::delete('/funcionarios/{id}', [FuncionarioController::class, 'destroy']);
    Route::get('/funcionarios/{id}', [FuncionarioController::class, 'show']);
    Route::put('/funcionarios/{id}', [FuncionarioController::class, 'update']);
});

Route::group(['prefix' => 'v2'], function(){
    Route::get('/carros', [CarroController::class, 'index']);
    Route::post('/carros', [CarroController::class, 'store']);
    Route::get('/carros/{id}', [CarroController::class, 'show']);
    Route::delete('/carros/{id}', [CarroController::class, 'destroy']);
    Route::put('/carros/{id}', [CarroController::class, 'update']);
});
