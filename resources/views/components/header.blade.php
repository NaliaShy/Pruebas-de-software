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
            <a href="Induccion">
                <span class="icono">i</span> Introducción
            </a>
        </li>

        <li>
            <a href="#">1 Realización de pruebas de software</a>
        </li>

        <ul class="submenu">
            <li><a href="#">1.1 Tipos de pruebas</a></li>
            <li><a href="#">1.2 Agile testing</a></li>
        </ul>

        <li>
            <a href="#">2 Elaboración del plan de mejora</a>
        </li>

        <ul class="submenu">
            <li><a href="#">2.1 Identificar el área de mejora</a></li>
            <li><a href="#">2.2 Detectar las causas del problema</a></li>
            <li><a href="#">2.3 Formular el objetivo</a></li>
            <li><a href="#">2.4 Seleccionar las acciones de mejora</a></li>
            <li><a href="#">2.5 Realizar una planeación</a></li>
            <li><a href="#">2.6 Seguimiento del plan</a></li>
        </ul>

        <li><a href="#">Síntesis</a></li>
        <li><a href="#">Actividad didáctica</a></li>
        <li><a href="#">Glosario</a></li>
        <li><a href="#">Material complementario</a></li>
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