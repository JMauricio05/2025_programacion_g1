<?php

use App\Http\Controllers\PersonController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::controller(PersonController::class)->group(function () {
    Route::get('personas', 'index');
    Route::post('persona', 'store');
    Route::put('persona/{id}', 'update');
    Route::delete('persona/{id}', 'destroy');
});
