<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<style>
    /* CONTENEDOR GENERAL */
    .induccion {
        align-items: center;
        background-color: #141414;
        color: white;
        gap: 60px;
        width: 100%;
        margin: 0 auto;
    }

    /* CONTENEDOR DEL TEXTO */
    .induccion .texto {
        max-width: 900px;
        background: #d3d3d3;
        padding: 50px;
        border-radius: 20px;
        box-shadow: 0 20px 50px rgba(0, 0, 0, 0.6);
        text-align: center;
        margin: 0 auto;
        width: 50%;
    }

    /* TITULO */
    .induccion h2 {
        font-size: 42px;
        margin-bottom: 25px;
        font-weight: 800;
        color: black;
    }

    /* PARRAFO */
    .induccion p {
        font-size: 17px;
        line-height: 1.9;
        color: #000000;
        text-align: justify;
    }

    /* VIDEO GRANDE */
    .induccion .video {
        width: 100%;
        display: flex;
        justify-content: center;
    }

    .induccion iframe {
        width: 100%;
        max-width: 1100px;
        height: 600px;
        border-radius: 20px;
        box-shadow: 0 25px 60px rgba(0, 0, 0, 0.7);
        transition: transform 0.3s ease;
    }

    .induccion iframe:hover {
        transform: scale(1.02);
    }

    .tema {
        display: none;
        margin: 10px 0;
        padding: 10px;
        border: 1px solid #ccc;
    }

    .activo {
        display: block;
    }

    button {
        margin-top: 10px;
        padding: 8px 12px;
        cursor: pointer;
    }
</style>

<head>
    <script defer src="https://cdn.jsdelivr.net"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inducción</title>


    <!-- Styles / Scripts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

</head>

<body>

    <x-header />
    <section class="contenedor induccion resumen">

        <h2>2️⃣ ¿Qué pruebas se realizan en la estrategia de prueba?</h2>

        <p>
            En la estrategia de pruebas de software se aplican diferentes tipos de pruebas,
            organizadas por niveles:
        </p>

        <ul>
            <li><strong>Pruebas Unitarias:</strong> Se evalúa cada parte individual del sistema.</li>
            <li><strong>Pruebas de Integración:</strong> Se verifica que los módulos trabajen correctamente juntos.</li>
            <li><strong>Pruebas del Sistema:</strong> Se prueba el sistema completo.</li>
            <li><strong>Pruebas de Aceptación:</strong> Se valida que el sistema cumpla con lo que el cliente necesita.
            </li>
        </ul>

        <p>
            Estas pruebas permiten detectar errores en diferentes etapas del desarrollo
            y asegurar un producto final de mayor calidad.
        </p>
    </section>

    <div class="navegacion-temas">

        {{-- Botón para ir al tema anterior --}}
        <a href="{{ route('Estrategia_Software.tema1') }}">
            <button>← Tema anterior</button>
        </a>

        {{-- Botón para ir al siguiente tema --}}
        <a href="{{ route('Estrategia_Software.tema2') }}">
            <button>Tema siguiente →</button>
        </a>
    </div>


</body>

</html>
