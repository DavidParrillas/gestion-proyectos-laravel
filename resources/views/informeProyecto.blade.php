
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe del Proyecto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        .content {
            padding: 20px;
        }
        .title {
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .section {
            margin-bottom: 15px;
        }
        .section h3 {
            margin-bottom: 5px;
        }
        .section p {
            margin: 0;
        }
    </style>
</head>
<body>
    <div class="content">
        <div class="title">
            <h1>Gobierno de El Salvador</h1>
            <h2>Universidad de El Salvador</h2>
        </div>

        <div class="section">
            <h3>Fecha:</h3>
            <p>{{ \Carbon\Carbon::now()->format('d/m/Y') }}</p>
        </div>

        <div class="section">
            <h3>Proyecto:</h3>
            <p><strong>Id:</strong> {{ $proyecto->id }}</p>
            <p><strong>Nombre del Proyecto:</strong> {{ $proyecto->nombre }}</p>
            <p><strong>Fuente de Fondos:</strong> {{ $proyecto->fuente_fondos }}</p>
            <p><strong>Monto Planificado:</strong> ${{ number_format($proyecto->monto_planificado, 2) }}</p>
            <p><strong>Monto Patrocinado:</strong> ${{ number_format($proyecto->monto_patrocinado, 2) }}</p>
            <p><strong>Monto Fondos Propios:</strong> ${{ number_format($proyecto->monto_fondos_propios, 2) }}</p>
        </div>
    </div>
    <br><br>
    <p style="text-align: center;">Muchas gracias por los recursos y todo la información dada en este curso, fue de mucha utilidad para mi aprendizaje.</p>
    <p style="text-align: center;">https://github.com/DavidParrillas/proyectos-laravel</p>
</body>
</html>
