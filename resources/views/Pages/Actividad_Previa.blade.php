<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Actividad de conocimientos previos</title>


    <!-- Styles / Scripts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

</head>

<body>

    <x-header />

    <main class="main">
        <div class="container">
            <h1 class="main-title">Actividad de conocimientos previos</h1>
            <p class="main-description">Antes de comenzar con el curso, es importante evaluar tus conocimientos previos
                sobre el tema. Esta actividad te ayudará a identificar tus fortalezas y áreas de mejora, para que puedas
                aprovechar al máximo el contenido del curso.</p>
            <p class="main-description">A continuación, encontrarás una serie de preguntas relacionadas con los temas
                que se abordarán en el curso. Responde cada pregunta de manera honesta y reflexiva. No te preocupes por
                obtener respuestas correctas o incorrectas, lo importante es que puedas identificar tus conocimientos
                actuales.</p>

        </div>
    </main>
    <div class="botones">
        <a href="Induccion" class="btn-main">Continuar a la Inducción</a>
    </div>

</body>

</html>
