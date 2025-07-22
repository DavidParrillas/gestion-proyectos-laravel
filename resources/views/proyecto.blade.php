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

    <!-- Formulariio para agregar Proyectos -->
    <div class="max-w-2xl mx-auto bg-gray-800 rounded-lg shadow-md p-8">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-gray-100 mb-2">Crear Nuevo Proyecto</h1>
            <p class="text-gray-400">Complete el formulario para registrar un nuevo proyecto</p>
        </div>

        <form class="space-y-6" action="{{ route('proyecto.dataProyecto') }}" method="POST">
            @csrf
            <!-- Nombre del Proyecto -->
            <div>
                <label for="nombre" class="block text-sm font-medium text-gray-300 mb-2">
                    Nombre del Proyecto
                </label>
                <input type="text" id="nombre" name="nombre" required
                    class="w-full px-4 py-2 border border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 bg-gray-700 text-white"
                    placeholder="Ingrese el nombre del proyecto">
            </div>

            <!-- Fuente de Fondos -->
            <div>
                <label for="fuente_fondos" class="block text-sm font-medium text-gray-300 mb-2">
                    Fuente de Fondos
                </label>
                <select id="fuente_fondos" name="fuente_fondos" required
                    class="w-full px-4 py-2 border border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 bg-gray-700 text-white">
                    <option value="">Seleccione una fuente de fondos</option>
                    <option value="gobierno">Gobierno</option>
                    <option value="privado">Privado</option>
                    <option value="ong">ONG</option>
                    <option value="internacional">Internacional</option>
                    <option value="mixto">Mixto</option>
                </select>
            </div>

            <!-- Monto Planificado -->
            <div>
                <label for="monto_planificado" class="block text-sm font-medium text-gray-300 mb-2">
                    Monto Planificado
                </label>
                <div class="relative">
                    <span class="absolute left-3 top-2 text-gray-500">$</span>
                    <input type="number" id="monto_planificado" name="monto_planificado" step="0.01" min="0" required
                        class="w-full pl-8 pr-4 py-2 border border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 bg-gray-700 text-white"
                        placeholder="0.00">
                </div>
            </div>

            <!-- Monto Patrocinado -->
            <div>
                <label for="monto_patrocinado" class="block text-sm font-medium text-gray-300 mb-2">
                    Monto Patrocinado
                </label>
                <div class="relative">
                    <span class="absolute left-3 top-2 text-gray-500">$</span>
                    <input type="number" id="monto_patrocinado" name="monto_patrocinado" step="0.01" min="0" required
                        class="w-full pl-8 pr-4 py-2 border border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 bg-gray-700 text-white"
                        placeholder="0.00">
                </div>
            </div>

            <!-- Monto Fondos Propios -->
            <div>
                <label for="monto_fondos_propios" class="block text-sm font-medium text-gray-300 mb-2">
                    Monto Fondos Propios
                </label>
                <div class="relative">
                    <span class="absolute left-3 top-2 text-gray-500">$</span>
                    <input type="number" id="monto_fondos_propios" name="monto_fondos_propios" step="0.01" min="0" required
                        class="w-full pl-8 pr-4 py-2 border border-gray-600 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition duration-200 bg-gray-700 text-white"
                        placeholder="0.00">
                </div>
            </div>

            <!-- Botones -->
            <div class="flex flex-col sm:flex-row gap-4 pt-6">
                <button type="submit"
                    class="flex-1 bg-blue-600 text-white py-2 px-6 rounded-lg hover:bg-blue-700 focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition duration-200 font-medium">
                    Crear Proyecto
                </button>
                <button type="reset"
                    class="flex-1 bg-gray-600 text-gray-300 py-2 px-6 rounded-lg hover:bg-gray-500 focus:ring-2 focus:ring-gray-500 focus:ring-offset-2 transition duration-200 font-medium">
                    Limpiar Formulario
                </button>
            </div>
        </form>

    </div>
</body>

</html>
