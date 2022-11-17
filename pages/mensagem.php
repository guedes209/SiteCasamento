<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/css/bootstrap.css"></link>
    <link rel="stylesheet" href="./css/listaDePresente.css"></link>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Lista de Presente</title>
</head>
<body style="background-color:white; font-family: fangsong">
    <div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top  p-3">
            <a class="navbar-brand" href="../index.php">M&B</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Início <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="https://wa.me/553299854740" target="blank">Confirmar Presença</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="listaDePresente.php">Lista de Presente</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Mensagem</a>
                </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container" style="margin-top: 70px;">
        <div class="pt-5">
            <h3 class="text-center">Deixe sua mensagem para nós!</h3>
            <h5 class="text-center">Obrigado pelo carinho. Vamos lembrar para sempre desde momento tão especial</h5>
        </div>
        <div style="min-height: 50px"></div>
        <div class="mb-5">
            <form id="confirmPresente" action="./envioMensagem.php" method="POST">
                <div class="form-group">
                    <label for="exampleFormControlInput1">Nome</label>
                    <input name="email" class="form-control" id="exampleFormControlInput1" placeholder="Juscelino Kubitschek ">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email</label>
                    <input name="nome" type="email" class="form-control" id="exampleFormControlInput1" placeholder="nome@exemplo.com">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Mensagem</label>
                    <textarea name="mensagem" class="form-control" id="exampleFormControlTextarea1" style="resize:none;" rows="3"></textarea>
                </div>
                <button type="submit" id="enviar" class="btn btn-primary">Enviar</button>
            </form>
        </div>
    </div>
    <div style="min-height: 98px"></div>
    <footer class="text-center text-white mt-5" style="background-color: #f1f1f1;">
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
    <script type="text/javascript" src="../dist/js/jquery.js"></script>
    <script type="text/javascript" src="../dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">
        $('#enviar').click(function(){
	        alert("Sua mensagem foi recebida com sucesso!");
        })
    </script>   
</body>
</html>