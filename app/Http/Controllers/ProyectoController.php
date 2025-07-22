<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proyecto; 

class ProyectoController extends Controller
{


    public function index()
    {
        return view('proyecto');
    }

    public function dataProyecto(Request $request)
    {
        $validated = $request->validate([
            'nombre' => 'required|string|max:255',
            'fuente_fondos' => 'required|string|max:255',
            'monto_planificado' => 'required|numeric',
            'monto_patrocinado' => 'required|numeric',
            'monto_fondos_propios' => 'required|numeric',
        ]);

        // Guardar el proyecto
        Proyecto::create($validated);

        // Redireccionar o retornar respuesta
        return redirect()->back()->with('success', 'Proyecto guardado correctamente.');
    }
}
