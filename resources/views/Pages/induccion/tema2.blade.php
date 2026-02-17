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
    <section class="contenedor induccion tema">
        <h2>¿Como se realizan las pruebas de software?</h2>
        <div class="texto">
            <p>Las pruebas de software se realizan mediante un proceso estructurado que permite verificar que el sistema
                funcione correctamente y cumpla con los requisitos establecidos. Este proceso inicia desde las primeras
                etapas del desarrollo y continúa hasta la entrega final del producto.
                Primero se analizan los requisitos del software, luego se planifican las pruebas definiendo objetivos,
                alcance, recursos y herramientas. Después se diseñan los casos de prueba, donde se establecen datos de
                entrada, acciones a realizar y resultados esperados. Posteriormente se ejecutan las pruebas y se
                registran
                los errores encontrados. Una vez corregidos, se realizan re-pruebas para confirmar que el fallo fue
                solucionado. Finalmente, se valida el sistema y se cierra el proceso de pruebas.</p>
        </div>
    </section>
    <div class="navegacion-temas">

        {{-- Botón para ir al tema anterior --}}
        <a href="{{ route('induccion.tema1') }}">
            <button>← Tema anterior</button>
        </a>

        {{-- Botón para ir al siguiente tema --}}
        <a href="{{ route('induccion.tema3') }}">
            <button>Tema siguiente →</button>
        </a>
    </div>


</body>

</html>
