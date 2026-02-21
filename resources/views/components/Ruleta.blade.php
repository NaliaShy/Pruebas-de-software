
<div class="ruleta-wrapper">

    <div class="puntero"></div>

    <div id="ruleta" class="ruleta">
    </div>

    <div class="ruleta-centro"></div>

</div>

<button onclick="girar()">¡Suerte!</button>

<script>
    function girar() {

    fetch('/ruleta/girar')
        .then(res => res.json())
        .then(data => {

            const ruleta = document.getElementById("ruleta");

            ruleta.style.transform = `rotate(${data.angulo}deg)`;

            setTimeout(() => {
                alert("🎭 Te toca: " + data.penitencia);

                document.getElementById("contenedor-ruleta").style.display = "none";
                document.querySelector(".container").style.opacity = "1";

            }, 4000);
        });
}
</script>
