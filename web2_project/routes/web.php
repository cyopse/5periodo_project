<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\ServiceController;

Route::get('/', [ServiceController::class, 'index']);
Route::get('/services/cadastro', [ServiceController::class, 'cadastro']);
Route::get('/services/{$id}', [ServiceController::class, 'show']);
Route::post('/services', [ServiceController::class, 'store']);
Route::get('/services/edit/{id}', [ServiceController::class, 'edit']);
Route::put('/services/update/{id}', [ServiceController::class, 'update']);
Route::delete('/services/{id}', [ServiceController::class, 'destroy']);


Route::get('/home', function () {
    return view('home');
});

Route::get('/cadastro', function () {
    return view('cadastro');
});
