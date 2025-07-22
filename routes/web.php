<?php

use Illuminate\Support\Facades\Route;

Route::get('/proyecto', function () {
    return view('proyecto');
});

Route::get('/listaProyectos', function () {
    return view('listaProyecto');
});

Route::post('/proyecto/dataProyecto', [App\Http\Controllers\ProyectoController::class, 'dataProyecto'])->name('proyecto.dataProyecto');


