<?php

use App\Http\Controllers\PlantacionController;
use Illuminate\Support\Facades\Route;

Route::get('/plantaciones', [PlantacionController::class, 'index'])->name('plantacion_vista');
Route::get('/plantaciones/{id}/edit', [PlantacionController::class, 'edit'])->name('plantacion_editar');

Route::put('/plantaciones/{id}', [PlantacionController::class, 'update'])->name('plantaciones.update');
Route::delete('/plantaciones/{id}', [PlantacionController::class, 'destroy'])->name('plantaciones.destroy');

Route::get('/plantaciones/create', [PlantacionController::class, 'create'])->name('plantacion.create');
Route::post('/plantaciones', [PlantacionController::class, 'store'])->name('plantaciones.store');
