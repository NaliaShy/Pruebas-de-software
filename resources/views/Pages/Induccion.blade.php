<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<style>
/* CONTENEDOR GENERAL */
.induccion {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 100px 8%;
    background-color: #141414;
    color: white;
    gap: 60px;
}

/* CONTENEDOR DEL TEXTO */
.induccion .texto {
    max-width: 900px;
    background: #d3d3d3;
    padding: 50px;
    border-radius: 20px;
    box-shadow: 0 20px 50px rgba(0, 0, 0, 0.6);
    text-align: center;
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
    box-shadow: 0 25px 60px rgba(0,0,0,0.7);
    transition: transform 0.3s ease;
}

.induccion iframe:hover {
    transform: scale(1.02);
}
</style>

<head>
    <script defer src="https://cdn.jsdelivr.net"></script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Inducción</title>


    <!-- Styles / Scripts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

</head>

<body>
    
    <x-header />

    <section class="contenedor induccion">
    
    <div class="texto">
        <h2>Inducción</h2>
        <p>
            Las pruebas de software son un proceso fundamental dentro del desarrollo de sistemas informáticos, ya que permiten verificar y validar que una aplicación funcione correctamente antes de ser entregada al usuario final. A través de diferentes tipos de pruebas, es posible identificar errores, fallas o inconsistencias que puedan afectar el rendimiento, la seguridad o la funcionalidad del sistema.

            En la actualidad, la calidad del software es un aspecto esencial, debido a que muchas actividades cotidianas dependen de sistemas tecnológicos. Por esta razón, aplicar una adecuada estrategia de pruebas garantiza confiabilidad, eficiencia y cumplimiento de los requisitos establecidos.

            En el presente trabajo se explican los principales tipos de pruebas de software, su importancia y la manera en que se aplican dentro del proceso de desarrollo, con el fin de comprender su impacto en la calidad del producto final.
        </p>
    </div>

    <div class="video">
        <iframe 
            src="https://www.youtube.com/embed/SDhB2Yzva-w"
            title="YouTube video player"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
            allowfullscreen>
        </iframe>
    </div>

</section>

</body>

</html>