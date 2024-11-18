<?php

// importacion de java
use App\Http\Controllers\SubirControlador;
use Illuminate\Support\Facades\Route;

// frontController
Route::get('/', [SubirControlador::class, 'index'])->name('subir.index');
Route::post('subir', [SubirControlador::class, 'subir'])->name('subir.subir');

Route::get('view', [SubirControlador::class, 'view'])->name('subir.view');
Route::get('img/{file}', [SubirControlador::class, 'img'])->name('subir.img');
