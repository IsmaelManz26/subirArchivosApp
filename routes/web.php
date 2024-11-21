<?php
use App\Http\Controllers\SubirControlador;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImageController;

Route::get('/', [SubirControlador::class, 'index'])->name('subir.index');
Route::get('viewall', [SubirControlador::class, 'viewAll'])->name('subir.viewAll');
Route::get('viewone/{id}', [SubirControlador::class, 'viewOne'])->name('subir.viewOne');

Route::get('upload', [SubirControlador::class, 'create'])->name('subir.create');
Route::post('upload', [SubirControlador::class, 'store'])->name('subir.store');

Route::get('manage', [SubirControlador::class, 'manage'])->name('subir.manage');
Route::delete('delete/{id}', [SubirControlador::class, 'destroy'])->name('subir.destroy');

Route::get('image/{id}', [ImageController::class, 'image'])->name('image');
Route::get('imageDB/{id}', [ImageController::class, 'imageDB'])->name('imageDB');