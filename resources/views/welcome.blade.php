<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Pruebas de software')}}</title>

    <script defer src="https://cdn.jsdelivr.net"></script>
    <!-- Styles / Scripts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

</head>

<body>
    
    <x-header />

    <main>
        <div class="contenedor main">
            <div class="main-left">
                <h2>Pruebas de software</h2>
                <p>En este módulo aprenderán qué son las pruebas de software, por qué son esenciales y cómo se planifican dentro de una estrategia de calidad. Analizaremos los distintos tipos de pruebas existentes, haciendo un enfoque práctico en las pruebas unitarias para validar el código a nivel de componentes.</p>
            </div>
            <div id="main-right">
                <img src="{{ asset('img/pruebas-software-index.png') }}" alt="Imagen de pruebas de software" style="width: 100%; height: auto;">
            </div>
        </div>
    </main>

    <section>
        <div class="contenidos contenedor">
            <h2>Contenidos</h2>
            <nav>
                <ul>
                    <li><a href="ActividadPrevia">Actividad de conocimientos previos</a><a href="ActividadPrevia"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </a></li>
                    <li><a href="Induccion">Inducción</a><a href="Induccion"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </a></li>
                    <li><a href="Estrategias_Prueba_Software>">Estrategias de prueba de software</a><a href="Estrategias_Prueba_Software"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </a></li>
                    <li><a href="Pruebas_Unitarias">Pruebas unitarias</a><a href="Pruebas_Unitarias"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </a></li>
                    <li><a href="Pruebas_Integracion">Pruebas de integración</a><a href="Pruebas_Integracion"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </a></li>
                    <li><a href="Recursos">Recursos</a><a href="Recursos"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </a></li>
                    <li><a href="Actividad_Didactica">Actividad didactica</a><a href="Actividad_Didactica"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M5 12h14"></path>
                                <path d="m12 5 7 7-7 7"></path>
                            </svg>
                        </a></li>
                </ul>
            </nav>
    </section>
    <footer>
        <div class="contenedor footer">
                <div class="footer-info">
                    <img src="{{ asset('img/Logo-sena.svg') }}" alt="Logo Sena" class="footer-logo" style="width: 50px; height: auto;">
                    <p>&copy; {{ date('Y') }} - {{ config('app.name') }}. Todos los derechos reservados.</p>
                </div>
                <div class="footer-links">
                    <p>Grupo ADSO 10</p>
                    <div class="redes">
                        <span>SENA - Colombia</span>
                    </div>
                </div>
        </div>
    </footer>
</body>

</html>
