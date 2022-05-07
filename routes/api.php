<?php

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('compras',App\Http\Controllers\ComprasController::class);

Route::apiResource('productos',App\Http\Controllers\ProductosController::class);

Route::apiResource('proveedores',App\Http\Controllers\ProveedoresController::class);

Route::apiResource('ventas',App\Http\Controllers\VentasController::class);

Route::apiResource('usuarios',App\Http\Controllers\UsuariosController::class);

Route::apiResource('metodo_pagos',App\Http\Controllers\MetodoPagosController::class);