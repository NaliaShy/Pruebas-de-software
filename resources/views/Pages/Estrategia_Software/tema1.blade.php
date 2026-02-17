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
        <div class="texto">
        <h1>Estrategias de Software</h1>
        <p> Las estrategias de software son enfoques, metodologías y prácticas que se aplican para planificar,
            desarrollar, implementar y mantener sistemas de software de manera eficiente y competitiva. </p>
        <h2>Principales Estrategias</h2>
        <ul>
            <li><strong>Metodologías ágiles:</strong> Scrum, Kanban; ciclos cortos y adaptación rápida.</li>
            <li><strong>Definición clara de requisitos:</strong> comprender y documentar necesidades del cliente.</li>
            <li><strong>Integración y entrega continua (CI/CD):</strong> automatizar procesos de integración y
                despliegue.</li>
            <li><strong>Automatización de pruebas:</strong> pruebas unitarias, de integración y funcionales.</li>
            <li><strong>Seguridad desde el diseño:</strong> medidas de protección en cada fase del desarrollo.</li>
            <li><strong>Uso de tecnologías modernas:</strong> contenedores, virtualización y servicios en la nube.</li>
            <li><strong>Revisiones de código y mejora continua:</strong> fomentar colaboración y aprendizaje constante.
            </li>
            <li><strong>Innovación y análisis de datos:</strong> aprovechar IA y big data para decisiones informadas.
            </li>
        </ul>
        <p> En resumen, las estrategias de software son el “plan maestro” que guía cómo se construye y evoluciona un
            sistema, asegurando que cumpla con las expectativas del usuario y se mantenga vigente en un mercado
            tecnológico cambiante. </p>
        </div>
    </section>

    <div class="navegacion-temas">

        {{-- Botón para ir al tema anterior --}}
        <a href="{{ route('Estrategias_Prueba_Software.index') }}">
            <button>← Tema anterior</button>
        </a>

        {{-- Botón para ir al siguiente tema --}}
        <a href="{{ route('Estrategia_Software.tema2') }}">
            <button>Tema siguiente →</button>
        </a>
    </div>


</body>

</html>
