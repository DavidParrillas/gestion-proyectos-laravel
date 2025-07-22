<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Proyecto</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-900 text-white min-h-screen py-8">
    
    <nav class="bg-gray-800 py-4">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center">
                <div class="flex items-center space-x-4">
                    <a href="{{ route('proyecto.listaProyectos') }}" class="text-white text-lg font-semibold hover:bg-gray-700 py-2 px-4 rounded-md transition">Lista de Proyectos</a>
                    <a href="{{ route('proyecto.dataProyecto') }}" class="text-white text-lg font-semibold hover:bg-gray-700 py-2 px-4 rounded-md transition">Crear Proyecto</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Tabla de proyectos -->
    <div class="max-w-2xl mx-auto bg-gray-800 rounded-lg shadow-md p-8 mt-8">
        <h2 class="text-2xl font-bold text-gray-100 mb-4">Lista de Proyectos</h2>
        <table class="min-w-full text-left table-auto">
            <thead>
                <tr>
                    <th class="py-2 px-4 text-gray-300">Nombre del Proyecto</th>
                    <th class="py-2 px-4 text-gray-300">Acciones</th>
                </tr>
            </thead>
            
            <tbody>
                @forelse ($proyectos as $proyecto)
                <tr class="bg-gray-700 border-b border-gray-600">
                    <td class="py-2 px-4 text-gray-300">{{ $proyecto->nombre_proyecto }}</td>
                    <td class="py-2 px-4">
                        <button class="bg-yellow-500 text-gray-800 py-1 px-3 rounded-lg hover:bg-yellow-600 focus:ring-2 focus:ring-yellow-400">Editar</button>
                        <button class="bg-red-500 text-white py-1 px-3 rounded-lg hover:bg-red-600 focus:ring-2 focus:ring-red-400 ml-2">Borrar</button>
                        <button class="bg-green-500 text-white py-1 px-3 rounded-lg hover:bg-green-600 focus:ring-2 focus:ring-green-400 ml-2">Generar Informe</button>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="2" class="py-8 px-4 text-center text-gray-400">
                        <div class="text-center">
                            <p class="text-lg">No hay proyectos registrados</p>
                            <p class="text-sm mt-2">Crea tu primer proyecto usando el formulario de arriba</p>
                        </div>
                    </td>
                </tr>
                @endforelse
            </tbody>
            
        </table>
    </div>
</body>

</html>
