<header class="miheader">
    <span class="text-black max-w-lg">
        <span class="text-black max-w-lg" id="fecha"></span>
        <span class="text-black max-w-lg " id="hora"></span>
    </span>
    <h1 class="text-4xl text-center text-dark sm:max-w-sm mx-auto ">GymTrainer</h1>
    <script>
        /*Poner hora y fecha completas en local*/
        /*que se actualizan cada segundo*/
        setInterval(function () {
            document.getElementById("fecha").innerHTML = new Date().toLocaleDateString();
            document.getElementById("hora").innerHTML = new Date().toLocaleTimeString();
        }, 1000);
    </script>

</header>
