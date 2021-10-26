<?php
    include("./database/conexao.php");
    $conexao = new Conexao();
    $pdo = $conexao->conectar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./dist/css/bootstrap.min.css"></link>
    <link rel="stylesheet" href="./index.css"></link>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Casamento Bruno e Marcella</title>
</head>
<body>
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">B&M</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/listaDePresente.php">Lista de Presente</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/confirmarPresenca.php">Confirmar Presença</a>
                </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="row">
            <!-- <img class="img-fluid col-6 pd-0" src="./images/bruno.jpg"/>
            <img class="img-fluid col-6 pd-0" src="./images/marcella.jpg"/> -->
        </div> 
        <h2 class="text-center">Quanto tempo para o grande dia</h2>
        <div class="d-flex justify-content-center">
            <div id="countdown_dashboard">
            <div class="dashp">
                <span class="dashtitle">Dias</span>
                <p id="days"></p>
            </div>
            <div class="dashp">
                <span class="dashtitle">Horas</span>
                <p id="hours"></p>
            </div>
            <div class="dashp">
                <span class="dashtitle">Minutos</span>
                <p id="minutes"></p>
            </div>
            <div class="dashp">
                <span class="dashtitle">Segundos</span>
                <p id="seconds"></p>
            </div>
            </div>
        </div> 
    </div>
    <footer class="text-center text-white" style="background-color: #f1f1f1;">
        <!-- Grid container -->
        <div class="container pt-4">
            <!-- Section: Social media -->
            <section class="mb-4">

            <!-- Instagram -->
            <a
                class="btn btn-link btn-floating btn-lg text-dark m-1"
                href="https://www.instagram.com/guedes6209/"
                target="_blank"
                role="button"
                data-mdb-ripple-color="dark"
                ><i class="fa fa-instagram"></i
            ></a>

            <!-- Linkedin -->
            <a
                class="btn btn-link btn-floating btn-lg text-dark m-1"
                href="https://www.linkedin.com/in/bruno-rocha-guedes-72a73720b/"
                target="_blank"
                role="button"
                data-mdb-ripple-color="dark"
                ><i class="fa fa-linkedin"></i
            ></a>
            <!-- Github -->
            <a
                class="btn btn-link btn-floating btn-lg text-dark m-1"
                href="https://github.com/guedes209"
                target="_blank"
                role="button"
                data-mdb-ripple-color="dark"
                ><i class="fa fa-github"></i
            ></a>
            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center text-dark p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2020 Copyright:
            <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
        </footer>
    <script type="text/javascript" src="./dist/js/jquery.js"></script>
    <script type="text/javascript" src="./dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        function countdown(){
        var now = new Date();
        var eventDate = new Date("Jan 22, 2022 16:00:00");
        var currentTiime = now.getTime();
        var eventTime = eventDate.getTime();
        var remTime = eventTime - currentTiime;
        // calculando o dia, hora, minuto e segundo
        var d = Math.floor(remTime / (1000 * 60 * 60 * 24));
        var h = Math.floor((remTime % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var m = Math.floor((remTime % (1000 * 60 * 60)) / (1000 * 60));
        var s = Math.floor((remTime % (1000 * 60)) / 1000);
        if(d < 10) d = "0" + d;
        if(h < 10) h = "0" + h;
        if(m < 10) m = "0" + m;
        if(s < 10) s = "0" + s;
        document.getElementById("days").textContent = d;
        document.getElementById("days").innerText = d;
        document.getElementById("hours").textContent = h;
        document.getElementById("minutes").textContent = m;
        document.getElementById("seconds").textContent = s;
        setTimeout(countdown, 1000);
        
        // Verifica se acabou o período do evento
    }
    countdown();
</script>
</body>
</html>