<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('plantaciones', function () {
    return view('plantacion_vista');
});

Route::get('plantacion/editar/{id}', function ($id) {
    return view('plantacion_editar_vista', ['idEditar' => $id]);
});
