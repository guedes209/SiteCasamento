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
    <link rel="stylesheet" href="./dist/css/bootstrap.css"></link>
    <link rel="stylesheet" href="./index.css"></link>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Casamento Júlia e Igor</title>
</head>
<body style="font-family: fangsong">
    <div >
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3" style="background-color: black!important">
            <a class="navbar-brand" href="index.php">J&I</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Início <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://wa.me/553299854740" target="blank">Confirmar Presença</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./pages/listaDePresente.php">Lista de Presente</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./pages/mensagem.php">Mensagem</a>
                </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container-fluid bg-light">
        <div class="paisagem pt-5">
        <div style="min-height: 100px"></div>
            <h1 id="titulo" class="mt-5 pt-5 text-center text-dark display-4" style="font-weight: light; color: black!important">Júlia e Igor</h1>
        </div>
        <h1 class="mt-5 pt-5 text-center text-dark" style="color: black!important">Bem-Vindos ao nosso Site!</h1>
        <div class="d-flex justify-content-center">
            <div class="m-5" id="countdown_dashboard">
                <div class="dashp">
                    <span class="dashtitle text-dark">Dias</span>
                    <p id="days"></p>
                </div>
                <div class="dashp ">
                    <span class="dashtitle text-dark">Horas</span>
                    <p id="hours"></p>
                </div>
                <div class="dashp ">
                    <span class="dashtitle text-dark">Minutos</span>
                <p id="minutes"></p>
                </div>
                <div class="dashp ">
                    <span class="dashtitle text-dark">Segundos</span>
                    <p id="seconds"></p>
                </div>
            </div>
        </div> 
        <div class="text-center mt-5 pt-5">
            <h4 class="text-center font-weight-bold" style="color: black!important">Local da cerimônia e recepção</h4>
        </div>
        <div class="d-flex justify-content-center mt-3 pt-3">
            <div class="embed-responsive embed-responsive-21by9" style="width:80%!important;">
                <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3706.940603456615!2d-43.354631600000005!3d-21.705031099999992!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x989d13557ac217%3A0xc4220f97e7026dde!2sR.%20Dr.%20Jos%C3%A9%20Carlos%20Lery%20Guimar%C3%A3es%2C%20211%20-%20Recanto%20dos%20Lagos%2C%20Juiz%20de%20Fora%20-%20MG!5e0!3m2!1spt-BR!2sbr!4v1668654354618!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
        <div style="min-height: 100px"></div>
        
        <div style="min-height: 100px"></div>
        <div class="ml-2 row d-flex justify-content-center" style="max-width:95%;">
            <?php 
                for($i = 1; $i <= 36; $i++){
                    $img = "./images/ensaio/".$i.".jpeg";
                ?>
                    <img class="img-responsive col-3 p-1 m-1" src=<?= $img?>>

                <?php } ?>
        </div>
        <div style="min-height: 100px"></div>
        
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
            © 2022 Copyright:
            <a class="text-dark" href="https://mdbootstrap.com/">MDBootstrap.com</a>
        </div>
        <!-- Copyright -->
        </footer>
    <script type="text/javascript" src="./dist/js/jquery.js"></script>
    <script type="text/javascript" src="./dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        function countdown(){
        var now = new Date();
        var eventDate = new Date("Dec 16, 2022 16:00:00");
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