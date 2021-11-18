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
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./pages/listaDePresente.php">Lista de Presente</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Confirmar Presença</a>
                </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container-fluid">
        <div class="row">
            <!-- <img class="img-fluid col-6 pd-0" src="./images/bruno.jpg"/>
            <img class="img-fluid col-6 pd-0" src="./images/marcella.jpg"/> -->
        </div> 
        <div class="paisagem pt-5">
            <h1 class="text-center text-dark font-weight-bold" style="font-size: 70px;">Marcella e Bruno</h1>
            <h1 class="text-center text-dark font-weight-bold">Bem-Vindos ao nosso site</h1>
            <!-- <h3 class="mt-4 text-center text-dark font-weight-bold">Contagem regressiva</h3> -->
            <div class="mt-4 pt-4 d-flex justify-content-center">
                <div id="countdown_dashboard">
                <div class="dashp">
                    <span class="dashtitle text-dark">Dias</span>
                    <p id="days"></p>
                </div>
                <div class="dashp">
                    <span class="dashtitle text-dark">Horas</span>
                    <p id="hours"></p>
                </div>
                <div class="dashp">
                    <span class="dashtitle text-dark">Minutos</span>
                    <p id="minutes"></p>
                </div>
                <div class="dashp">
                    <span class="dashtitle text-dark">Segundos</span>
                    <p id="seconds"></p>
                </div>
                </div>
            </div> 
            <h3 class="mb-4 py-4 text-center text-dark font-weight-bold">- 22/01/2022 -</h3>
        </div>
        <div class="text-center font-italic my-4">
            <h2 class="text-center">Local e horário da festa</h2>
            <div class="font-italic" style="font-size=26px;">
                <h3>Nossa grande comemoração será feita no dia 22 de Janeiro de 2022 as 16:00 horas em ponto!!</h3>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="embed-responsive embed-responsive-21by9" style="width:100%!important;">
                <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3715.734789067706!2d-42.675849485199976!3d-21.360953789907946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa2d72c8b606515%3A0x56f60a48f5e2408d!2sManto%20Verde!5e0!3m2!1spt-BR!2sbr!4v1636253648476!5m2!1spt-BR!2sbr" style="height: 80%!important;" allowfullscreen="" loading="lazy"></iframe>
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