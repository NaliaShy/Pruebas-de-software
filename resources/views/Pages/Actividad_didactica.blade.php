<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz - Pruebas de Software</title>
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    <link rel="stylesheet" href="{{ asset('css/ruleta.css') }}">
</head>

<body>
    <x-header />
    <div class="main-content">
        <div class="container">
            <h2 id="titulo">Pregunta 1 de 20</h2>
            <p id="pregunta"></p>
            <div id="opciones"></div>
            <button onclick="verificar()">Responder</button>
            <div class="resultado" id="resultado"></div>
        </div>

        <div id="contenedor-ruleta" style="display:none;">
            <x-Ruleta />
        </div>

    </div>


    <script>
        const preguntas = [{
                pregunta: "¿Cuál es el objetivo principal de las pruebas de software?",
                opciones: ["Diseñar interfaces", "Detectar errores y garantizar calidad", "Vender el producto"],
                correcta: 1
            },
            {
                pregunta: "¿Qué prueba evalúa una función individual?",
                opciones: ["Integración", "Sistema", "Unitaria"],
                correcta: 2
            },
            {
                pregunta: "¿Qué prueba verifica módulos juntos?",
                opciones: ["Integración", "Aceptación", "Unitaria"],
                correcta: 0
            },
            {
                pregunta: "¿Quién realiza generalmente pruebas unitarias?",
                opciones: ["Clientes", "Desarrolladores", "Usuarios"],
                correcta: 1
            },
            {
                pregunta: "¿Qué prueba evalúa el sistema completo?",
                opciones: ["Sistema", "Unitaria", "Diseño"],
                correcta: 0
            },
            {
                pregunta: "¿Qué prueba valida que el cliente esté satisfecho?",
                opciones: ["Integración", "Aceptación", "Unitarias"],
                correcta: 1
            },
            {
                pregunta: "Las pruebas unitarias se realizan de forma:",
                opciones: ["Aislada", "Global", "Aleatoria"],
                correcta: 0
            },
            {
                pregunta: "¿Qué se detecta en pruebas de integración?",
                opciones: ["Errores de comunicación", "Errores ortográficos", "Errores físicos"],
                correcta: 0
            },
            {
                pregunta: "Las pruebas ayudan a reducir:",
                opciones: ["Calidad", "Costos futuros", "Clientes"],
                correcta: 1
            },
            {
                pregunta: "Las pruebas no funcionales evalúan:",
                opciones: ["Colores", "Rendimiento y seguridad", "Publicidad"],
                correcta: 1
            },
            {
                pregunta: "Una unidad puede ser:",
                opciones: ["Una función", "Un servidor", "Un usuario"],
                correcta: 0
            },
            {
                pregunta: "Las pruebas se realizan desde:",
                opciones: ["El final", "El inicio del desarrollo", "Después de vender"],
                correcta: 1
            },
            {
                pregunta: "Un bug es:",
                opciones: ["Un error", "Una mejora", "Un diseño"],
                correcta: 0
            },
            {
                pregunta: "Después de corregir un error se debe:",
                opciones: ["Eliminar el sistema", "Re-probar", "Ignorarlo"],
                correcta: 1
            },
            {
                pregunta: "Las pruebas mejoran la:",
                opciones: ["Decoración", "Calidad del software", "Publicidad"],
                correcta: 1
            },
            {
                pregunta: "Pruebas funcionales verifican:",
                opciones: ["Funciones del sistema", "Velocidad internet", "Hardware"],
                correcta: 0
            },
            {
                pregunta: "Pruebas de sistema se hacen después de:",
                opciones: ["Unitarias e integración", "Venta", "Publicidad"],
                correcta: 0
            },
            {
                pregunta: "Automatizar pruebas permite:",
                opciones: ["Más errores", "Rapidez y eficiencia", "Eliminar código"],
                correcta: 1
            },
            {
                pregunta: "El proceso de pruebas termina cuando:",
                opciones: ["El sistema funciona correctamente", "Hay muchos errores", "El cliente no paga"],
                correcta: 0
            },
            {
                pregunta: "Las pruebas garantizan:",
                opciones: ["Desorden", "Confiabilidad", "Más trabajo innecesario"],
                correcta: 1
            }
        ];

        let indice = 0;

        function cargarPregunta() {
            document.getElementById("titulo").innerText = "Pregunta " + (indice + 1) + " de 20";
            document.getElementById("pregunta").innerText = preguntas[indice].pregunta;

            let opcionesHTML = "";
            preguntas[indice].opciones.forEach((opcion, i) => {
                opcionesHTML += `
                <label><input type="radio" name="opcion" value="${i}">${opcion}</label>`;
            });

            document.getElementById("opciones").innerHTML = opcionesHTML;
            document.getElementById("resultado").innerText = "";
        }

        function verificar() {
            const seleccion = document.querySelector('input[name="opcion"]:checked');
            if (!seleccion) {
                document.getElementById("resultado").innerText = "⚠️ Selecciona una opción";
                return;
            }

            if (parseInt(seleccion.value) === preguntas[indice].correcta) {
                indice++;
                if (indice < preguntas.length) {
                    cargarPregunta();
                } else {
                    document.querySelector(".container").innerHTML =
                        "<h2>🏆 ¡FELICITACIONES!</h2><p>Has completado correctamente las 20 preguntas.</p>";
                }
            } else {
                document.getElementById("resultado").innerText = "❌ Incorrecto... gira la ruleta 😈";

                // Mostrar ruleta
                document.getElementById("contenedor-ruleta").style.display = "block";

                // Opcional: ocultar preguntas mientras gira
                document.querySelector(".container").style.opacity = "0.3";

                // Llamar automáticamente a girar
                setTimeout(() => {
                    girar();
                }, 800);
            }
        }

        cargarPregunta();
    </script>

</body>

</html>
