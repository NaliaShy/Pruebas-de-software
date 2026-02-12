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