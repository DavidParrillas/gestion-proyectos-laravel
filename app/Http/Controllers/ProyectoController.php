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

    public function listaProyectos()
    {
        // Recupera todos los proyectos de la base de datos
        $proyectos = Proyecto::all(); 

        // Pasa los proyectos a la vista
        return view('listaProyectos', compact('proyectos'));  // Se pasa 'proyectos' a la vista
    }

    public function dataProyecto(Request $request)
    {
        // Validar los datos del proyecto
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

    public function borrar($id)
    {
        // Encuentra el proyecto y lo elimina
        $proyecto = Proyecto::findOrFail($id);
        $proyecto->delete();

        return redirect()->route('listaProyectos')->with('success', 'Proyecto eliminado correctamente');
    }

    // app/Http/Controllers/ProyectoController.php

    public function generarInforme($id)
    {
        // Encuentra el proyecto
        $proyecto = Proyecto::findOrFail($id);

        // Generar el PDF del informe
        $pdf = \PDF::loadView('informeProyecto', compact('proyecto'));

        // Retorna el PDF como descarga
        return $pdf->download('informe_proyecto_'.$proyecto->id.'.pdf');
    }
}
