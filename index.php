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
    <title>Casamento Bruno e Marcella</title>
</head>
<body style="font-family: fangsong">
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark p-3">
            <a class="navbar-brand" href="index.php">M&B</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Início <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                   <a class="nav-link"  data-toggle="modal" data-target="#modalInfo">Confirmar Presença</a>
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
            <h1 id="titulo" class="mt-5 pt-5 text-center text-dark" style="font-size: 70px; font-weight: light;">Marcella e Bruno</h1>
            <h3 class="mb-4 py-4 text-center text-dark font-weight-bold"> 22/01/2022 </h3>
        </div>
        <h1 class="mt-5 pt-5 text-center text-dark font-weight-bold">Bem-Vindos ao Nosso Site!</h1>
        <h3 class="mt-5 pt-5 text-center text-dark font-weight-bold">Contagem regressiva</h3>
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
        <div style="min-height: 100px"></div>
        <div class="ml-5 mr-5 mt-5 p-5">
            <h2 class="text-center">Um pouco sobre nós</h2>
            <p style="font-size: 1.2rem;">Nós conhecemos em 2016 no grupo de gceu da igreja, logo no começo ele já se declarou mas eu não senti muito interesse não. Nossos melhores amigos, Juju e Natã começaram um plano para nos unir. Toda semana a gente se encontrava nos cultos e nos encontros de jovens, fomos nos conhecendo melhor, viramos amigos. Depois de 3 meses, alguns encontros, abraços pós culto, longas conversas no banco da praça, visitas inesperadas em JF, muita risada, eu conclui que ele era o garoto do meus sonhos, e finalmente no dia 26/02/2017 na praça santa Rita tivemos o primeiro beijo, e dia 12/03/2017 iniciamos o namoro. E se eu for detalhar tudo que aconteceu nesses 4 anos e 8 meses você não vai ficar aqui pra ler até o final, passamos por muitos momentos maravilhosos, eu vi ele passar no vestibular da faculdade, iniciar essa nova fase, eu estava na apresentação do artigo, do TCC, na colocação da grau, na entrevista de primeiro emprego, na carteira de motorista, ele me apoio desde quando não tinha certeza de qual faculdade iria fazer, apoiou quando eu mudei de faculdade, quando eu fiz a primeira entrevista de estágio, foi a primeira pessoa que eu liguei pra contar que tinha sido chamada. Nesse período também tivemos momentos difíceis, mudamos de cidade, ele em JF, eu em Cataguases, depois ele em Cataguases, eu em Limeira, durante quase toda  parte do nosso namoro, namoramos a distância, e isso foi um questão difícil para nós, mas nossa vontade de ficar junto e realizar nossos sonhos sempre, desde o início foi maior que qualquer dificuldade, um sempre estava lá quando o outro precisava. Por isso hoje agrademos nossos amigos por terem nos unido
</p>    
        </div>
        <div class="ml-2 row d-flex justify-content-center" style="max-width:95%;">
            <img class="rounded col-3 pd-0 m-1" style="max-height: 220px; max-width:220px; min-height: 220px; min-width:220px" src="./images/bruno.jpg"/>
            <img class="rounded col-3 pd-0 m-1" style="max-height: 220px; max-width:220px; min-height: 220px; min-width:220px" src="./images/marcella2.jpg"/>
            <img class="rounded col-3 pd-0 m-1" style="max-height: 220px; max-width:220px; min-height: 220px; min-width:220px" src="./images/nos2.jpeg"/>
        </div>
        <div style="min-height: 100px"></div>
        <h3 class="text-center">Em breve fotos do casal.</h3>
        <div style="min-height: 100px"></div>
        <div class="text-center font-italic mt-5 pt-5">
            <h4 class="text-center">Local da cerimônia e recepção</h4>
        </div>
        <div class="d-flex justify-content-center mt-3 pt-3">
            <div class="embed-responsive embed-responsive-21by9" style="width:80%!important;">
                <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3715.734789067706!2d-42.675849485199976!3d-21.360953789907946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xa2d72c8b606515%3A0x56f60a48f5e2408d!2sManto%20Verde!5e0!3m2!1spt-BR!2sbr!4v1636253648476!5m2!1spt-BR!2sbr" style="height: 100%!important;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    <div class="modal fade" id="modalInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Informações importantes</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <input type="hidden" id="presenteID" name="presente" value=""></input>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="list-group-flush">
                        <li class="list-group-item">É indispensável o comprovante de vacinação no momento de confirmação de presença</li>
                        <li class="list-group-item">Caso não tenha em mãos, acesse o site <a href="https://conectesus.saude.gov.br/home">https://conectesus.saude.gov.br/home</a> ou baixe o app conecteSUS para acessar o comprovante de vacinação</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <a href="https://wa.me/553299874948" target="_blank"><button type="submit" value="Confirmar" class="btn btn-primary">Confimar Presença</button></a>
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