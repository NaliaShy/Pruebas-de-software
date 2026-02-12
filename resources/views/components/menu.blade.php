<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family: Arial, Helvetica, sans-serif;
}

/* ENCABEZADO */
header{
    display:flex;
    align-items:center;
    padding:15px;
    background:#f5f5f5;
    gap:15px;
}

/* BOTÓN MENÚ */
.btn-menu{
    font-size:26px;
    cursor:pointer;
}

/* LOGO SENA */
.logo{
    width:50px;
}

/* TÍTULO */
.titulo{
    font-size:20px;
    font-weight:bold;
}

/* MENÚ LATERAL DESDE LA DERECHA */
.menu-lateral{
    position:fixed;
    top:0;
    right:-320px;
    width:320px;
    height:100%;
    background:#e6eef7;
    box-shadow:-3px 0 10px rgba(0,0,0,0.3);
    transition:right 0.4s ease;
    overflow-y:auto;
    z-index:1000;
}

.menu-lateral.active{
    right:0;
}

/* CABECERA DEL MENÚ */
.menu-header{
    padding:15px;
    background:#c9d9ec;
    font-weight:bold;
    display:flex;
    justify-content:space-between;
    align-items:center;
}

/* LISTA */
.menu-contenido{
    padding:15px;
}

.menu-contenido h4{
    margin-bottom:10px;
}

.menu-contenido ul{
    list-style:none;
}

.menu-contenido li{
    padding:8px 0;
    border-bottom:1px solid #ccc;
    cursor:pointer;
    font-size:14px;
}

.menu-contenido li:hover{
    color:#0077cc;
}

/* CONTENIDO PRINCIPAL */
main{
    padding:30px;
}
</style>
<div class="menu-lateral" id="menu">
    <span onclick="cerrarMenu()" style="cursor:pointer;">✖</span>
    <h3>Desarrollo de contenidos</h3>
    <ul>
        <li><a href="/">Volver al inicio</a></li>
        <li><a href="ActividadPrevia">Actividad de conocimientos previos</a></li>
        <li><a href="Induccion">Inducción</a></li>
        <li><a href="Estrategias_Prueba_Software">Estrategias de prueba</a></li>
        <li><a href="Pruebas_Integracion">Pruebas de integración</a></li>
        <li><a href="Pruebas_Unitarias">Pruebas unitarias</a></li>
        <li><a href="Recursos">Recursos</a></li>
        <li><a href="Actividad_Didactica">Actividad didáctica</a></li>
    </ul>
</div>