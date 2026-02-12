<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Integrantes</title>


    <!-- Styles / Scripts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/integrantes.css') }}">

</head>

<body>
    
    <x-header />

    <section>
        <div class="contenedor">
            <h2 class="titulo-pagina">Equipo de Trabajo</h2>
            
            <div class="tabla-container">
                <table class="tabla-integrantes">
                    <thead>
                        <tr>
                            <th>Nombre Completo</th>
                            <th>Rol</th>
                            <th>Contenido</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="td-imagen">
                                <img src="{{ asset('img/Klevarson.png') }}" alt="Kleverson">
                            </td>
                            <td>Kleverson Escudero</td>
                            <td>Desarrollador Full-Stack</td>
                            <td>#</td>
                        </tr>
                        <tr>
                            <td class="td-imagen">
                                <img src="{{ asset('img/Moises.png') }}" alt="Moises">
                            </td>
                            <td>Moises Saavedra</td>
                            <td>Desarrollador Frond-End</td>
                            <td>#</td>
                        </tr>
                        <tr>
                            <td class="td-imagen">
                                <img src="{{ asset('img/Edgar.png') }}" alt="Edgar">
                            </td>
                            <td>Edgar Castellanos</td>
                            <td>Proyect Manager</td>
                            <td>#</td>
                        </tr>
                        <tr>
                            <td class="td-imagen">
                                <img src="{{ asset('img/Juan.png') }}" alt="Juan">
                            </td>
                            <td>Juan Mora</td>
                            <td>Desarrollador Flojo</td>
                            <td>#</td>
                        </tr>
                        <tr>
                            <td class="td-imagen">
                                <img src="{{ asset('img/Nat.png') }}" alt="Natalia">
                            </td>
                            <td>Natalia Lizarazo</td>
                            <td>Desarrol Back-end _ Lider</td>
                            <td>#</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

</body>


</html>