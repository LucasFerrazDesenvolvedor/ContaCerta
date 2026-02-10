<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MesaController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ComandaController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::middleware(['auth'])->group(function () {
    Route::resource('mesas', MesaController::class);
});

Route::resource('mesas', MesaController::class)
    ->except(['show']);


Route::resource('produtos', ProdutoController::class);
Route::resource('comandas', ComandaController::class);

Route::post(
    '/comandas/adicionar-item',
    [ComandaController::class, 'adicionarItem']
)
    ->name('comandas.addItem');

Route::get(
    '/comandas/fechar/{id}',
    [ComandaController::class, 'fechar']
)
    ->name('comandas.fechar');

Route::get(
    '/comandas/imprimir/{id}',
    [ComandaController::class, 'imprimir']
)
    ->name('comandas.imprimir');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
