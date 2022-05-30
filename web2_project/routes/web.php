<?php

/* importações */
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\PrestadoreController;

/* ROTAS DO CLIENTE */
Route::get('/cliente', [ClienteController::class, 'cliente']); /* pagina do cliente */
/* Create */
Route::get('/cliente_create', [ClienteController::class, 'cliente_create']);
Route::post('/clientestore', [ClienteController::class, 'cliente_store']);
/* Read */
Route::get('/cliente/{$id}', [ClienteController::class, 'cliente_show']);
/* Update */
Route::get('/cliente_edit/{id}', [ClienteController::class, 'cliente_edit']);
Route::put('/cliente_update/{id}', [ClienteController::class, 'cliente_update']);
/* Delete */
Route::delete('/clientedelete/{id}', [ClienteController::class, 'cliente_destroy']);



/* ROTAS DO PRESTADOR */
Route::get('/prestador', [PrestadoreController::class, 'prestador']); /* pagina do prestador */
/* Create */
Route::get('/prestador_create', [PrestadoreController::class, 'prestador_create']);
Route::post('/prestadorstore', [PrestadoreController::class, 'prestador_store']);
/* Read */
Route::get('/prestador/{$id}', [PrestadoreController::class, 'prestador_show']);
/* Update */
Route::get('/prestador_edit/{$id}', [PrestadoreController::class, 'prestador_edit']);
Route::put('/prestador_update/{$id}', [PrestadoreController::class, 'prestador_update']);
/* Delete */
Route::delete('/prestadordelete/{$id}', [PrestadoreController::class, 'prestador_destroy']);
