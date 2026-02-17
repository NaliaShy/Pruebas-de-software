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
        <h2>📌 Resumen – Estrategias de Prueba de Software</h2>
        <p>
            Las estrategias de prueba de software son planes organizados que permiten asegurar la calidad de un sistema
            en cada etapa de su desarrollo.
            Definen <strong>qué pruebas aplicar, cuándo ejecutarlas y con qué objetivos</strong>, garantizando que el
            producto final cumpla con los requisitos del cliente y funcione de manera confiable.
        </p>

        <ul>
            <li><strong>Pruebas Unitarias:</strong> Validan el correcto funcionamiento de cada componente individual.
            </li>
            <li><strong>Pruebas de Integración:</strong> Comprueban que los módulos trabajen juntos sin errores.</li>
            <li><strong>Pruebas de Sistema:</strong> Evalúan el comportamiento del software completo en condiciones
                reales.</li>
            <li><strong>Pruebas de Aceptación:</strong> Confirman que el producto satisface las necesidades del usuario
                final.</li>
        </ul>

        <p>
            En conjunto, estas estrategias permiten <strong>detectar errores tempranos, reducir costos de corrección y
                aumentar la confianza en el software entregado</strong>.
            Una buena estrategia de pruebas no solo busca encontrar fallos, sino también demostrar que el sistema es
            robusto, seguro y eficiente.
        </p>
    </section>

    <div class="navegacion-temas">

        {{-- Botón para ir al tema anterior --}}
        <a href="{{ route('induccion.tema2') }}">
            <button>← Tema anterior</button>
        </a>

        {{-- Botón para ir al siguiente tema --}}
        <a href="{{ route('Estrategia_Software.tema1') }}">
            <button>Tema siguiente →</button>
        </a>
    </div>


</body>

</html>
