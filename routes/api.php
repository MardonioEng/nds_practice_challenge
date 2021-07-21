<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::prefix('/usuarios')->group(function() {
    Route::get('/', [UsuarioController::class, 'buscar']);
    Route::post('/', [UsuarioController::class, 'inserir']);
    Route::get('{id:int}', [UsuarioController::class, 'visualizar']);
    Route::put('/{id:int}', [ UsuarioController::class, 'editar' ]);
    Route::patch('/alterar-senha/{id:int}', [ UsuarioController::class, 'alterarSenha' ]);
});