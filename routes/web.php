<?php

use App\Http\Controllers\BodegaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [BodegaController::class, 'index'])
    ->name('bodegas.index');
Route::get('{bodega}/show', [BodegaController::class, 'show'])
    ->name('bodegas.show');
Route::get('bodegas/create', [BodegaController::class, 'create'])
    ->name('bodegas.create');
Route::post('bodegas/store', [BodegaController::class, 'store'])
    ->name('bodegas.store');
Route::get('bodegas/{bodega}/edit', [BodegaController::class, 'edit'])
    ->name('bodegas.edit');
Route::put('bodegas/{bodega}/update', [BodegaController::class, 'update'])
    ->name('bodegas.update');
Route::delete('{bodega}/delete', [BodegaController::class, 'destroy'])
    ->name('bodegas.destroy');
