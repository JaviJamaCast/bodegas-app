<?php

use App\Http\Controllers\BodegaController;
use App\Http\Controllers\VinoController;
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
//Bodegas
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
//Vinos
Route::get('{vino}/vino/{bodega}/show', [VinoController::class, 'show'])
    ->name('vinos.show');
Route::get('{bodega}/vinos/create', [VinoController::class, 'create'])
    ->name('vinos.create');
Route::post('{bodega}/vinos/store', [VinoController::class, 'store'])
    ->name('vinos.store');
Route::get('{vino}/vinos/{bodega}/edit', [VinoController::class, 'edit'])
    ->name('vinos.edit');
Route::put('{bodega}/vinos/{vino}/update', [VinoController::class, 'update'])
    ->name('vinos.update');
Route::delete('{vino}/vinos/{bodega}/delete', [VinoController::class, 'destroy'])
    ->name('vinos.destroy');
