<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../dist/css/bootstrap.min.css"></link>    
    <link rel="stylesheet" href="css/confirmarpresenca.css"></link>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Lista de Presença</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="../index.php">B&M</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="listaDePresente.php">Lista de Presente</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="confirmarPresenca.php">Confirmar Presença</a>
                </li>
                </ul>
            </div>
        </nav>
    </header>
    <div class="container">
        <div>
            <div class="col-12">    
                <label for="exampleDataList" class="form-label h2">Nome</label>
            </div>
            <form action="./confirmaPrese.php" method="POST">
                <div class="row">
                    <div class="col-md-10 col-sm-12 col-12">
                            <input id="convidadeNome" class="form-control" name="convidado" list="datalistOptions" id="exampleDataList" placeholder="Escreva para pesquisar seu nome">
                    </div>
                    <div class="col-md-2 col-sm-12 col-12">
                        <input onclick="buscar()" id="btnConfirm" type="submit" value="Confirmar Presença" class="btn btn-primary"></input>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <footer class="text-center text-white" style="background-color: #f1f1f1; position: absolute; bottom: 0; width: 100%;">
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
</body>
</html>