<?php

use App\Http\Controllers\CursosController;
use App\Http\Controllers\PersonController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::controller(PersonController::class)->group(function () {
    Route::get('personas', 'index');
    Route::post('persona', 'store');
    Route::put('persona/{id}', 'update');
    Route::delete('persona/{id}', 'destroy');
});

Route::controller(CursosController::class)->group(function(){
    Route::get('lista_cursos', 'index');
    Route::get('curso_detalle/{codigo}', 'show');
    Route::post('crear_curso', 'store');
    Route::put('modificar_curso/{codigo}', 'update');
    Route::delete('borrar_curso/{codigo}', 'destroy');
});
