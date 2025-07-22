<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;

// Ruta para la página principal del proyecto
Route::get('/proyecto', [ProyectoController::class, 'index'])->name('proyecto');

// Ruta para la lista de proyectos que usará el controlador
Route::get('/listaProyectos', [ProyectoController::class, 'listaProyectos'])->name('listaProyectos');

// Ruta para el formulario de creación de proyecto
Route::post('/proyecto/dataProyecto', [ProyectoController::class, 'dataProyecto'])->name('proyecto.dataProyecto');

// Borrar el proyecto
Route::delete('/proyecto/borrar/{id}', [ProyectoController::class, 'borrar'])->name('proyecto.borrar'); 

// Generar informe
Route::get('/proyecto/generarInforme/{id}', [ProyectoController::class, 'generarInforme'])->name('proyecto.generarInforme'); 


