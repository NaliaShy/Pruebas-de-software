<header>
    <div class="contenedor header">
        <div class="header-left">
            <img src="{{ asset('img/Logo-sena.svg') }}" alt="Logo Sena" style="width: 50px; height: auto;">
            <h1>Pruebas de software</h1>
        </div>

        <div class="header-right">
            @if(request()->routeIs('integrantes.index'))
                {{-- Si estamos en Integrantes --}}
                <a href="{{ route('home') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="margin-right: 5px;">
                        <path d="m12 19-7-7 7-7"></path>
                        <path d="M19 12H5"></path>
                    </svg>
                    Volver al Inicio
                </a>

            @elseif(request()->routeIs('home'))
                {{-- Si estamos en el Inicio (Welcome) --}}
                <a href="{{ route('integrantes.index') }}">
                    Ver integrantes 
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M5 12h14"></path>
                        <path d="m12 5 7 7-7 7"></path>
                    </svg>
                </a>

            @else
                {{-- Si NO estamos ni en inicio ni en integrantes (Menu para Actividad Previa, etc.) --}}
                <nav class="menu-navegacion">
                    <a href="{{ route('home') }}">Inicio</a>
                    <a href="{{ route('integrantes.index') }}">Integrantes</a>
                    <button class="menu-btn" onclick="abrirMenu()">☰</button>
                    <div class="menu-lateral" id="menu">
                        <span class="cerrar" onclick="cerrarMenu()">✖</span>
                        <div class="menu-top">
                            Desarrollo de contenidos
                        </div>
                        <ul>
                            <li><a href="/">Volver al inicio</a></li>
                            <li class="activo">
                                <a href="ActividadPrevia">
                                    <span class="icono">i</span> Actividad de Conocimientos Previos
                                </a>
                            </li>
                            <li class="none">
                                <a href="/Induccion">
                                    <span class="icono">ii</span> Introducción
                                </a>
                            </li>
                                <ul class="submenu">
                                    <li><a href="/Induccion#tema1">Las pruebas de software</a></li>
                                    <li><a href="#">¿Como se realizan las pruebas de software?</a></li>
                                </ul>
                            <li>
                                <span class="icono">iii</span><a href="/Estrategias_Prueba_Software">Estrategias de pruebas de software</a>
                            </li>
                                <ul class="submenu">
                                    <li><a href="#">¿Que son las estrategias de software?</a></li>
                                    <li><a href="#">¿Cuales son las estrategias de software?</a></li>
                                    <li><a href="#">Las mas utilizadas son: </a></li>
                                </ul>
                            <li>
                                <span class="icono">iv</span><a href="/Pruebas_Integracion">Pruebas de Integración</a>
                            </li>
                                <ul class="submenu">
                                    <li><a href="#">¿Qué son las pruebas de Integración?</a></li>
                                    <li><a href="#">¿Cual es el objetivo de las pruebas de integración?</a></li>
                                    <li><a href="#">¿Como identificar cuando usar una prueba de integración?</a></li>
                                    <li><a href="#">Ejemplo</a></li>
                                    <li><a href="#">Todos Juntos</a></li>
                                </ul>
                            <li>
                                <span class="icono">v</span><a href="/Pruebas_Unitarias">Pruebas Unitarias</a>
                            </li>
                                <ul class="submenu">
                                    <li><a href="#">¿Qué son las pruebas Unitarias?</a></li>
                                    <li><a href="#">¿Cual es el objetivo de las pruebas Unitarias?</a></li>
                                    <li><a href="#">¿Como identificar cuando usar una prueba Unitaria?</a></li>
                                    <li><a href="#">Ejemplo</a></li>
                                    <li><a href="#">Todos Juntos</a></li>
                                </ul>
                            <li><a href="#">Síntesis</a></li>
                            <li><a href="/Actividad_Didactica">Actividad didáctica</a></li>
                            <li><a href="#">Glosario</a></li>
                            <li><a href="/Recursos">Material complementario</a></li>
                            <li><a href="#">Referencias bibliográficas</a></li>
                            <li><a href="#">Créditos</a></li>
                        </ul>
                    </div>
                </nav>
            @endif
        </div>
    </div>
</header>
<script>
    function abrirMenu(){
    document.getElementById("menu").classList.add("active");
}
function cerrarMenu(){
    document.getElementById("menu").classList.remove("active");
}
</script>