<?php
    include("../database/conexao.php");
    $conexao = new Conexao();
    $pdo = $conexao->conectar();
    $sql = "SELECT presenteID, presenteNome, FORMAT(valor, 2,'de_DE') as valor, link, caminhoimg, comprado FROM presente ORDER BY presenteNome";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
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
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top p-3">
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
                    <a class="nav-link" href="#">Confirmar Presença</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="listaDePresente.php">Lista de Presente</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mensagem.php">Mensagem</a>
                </li>
                </ul>
            </div>
        </nav>
    </div>
    <div class="container" style="margin-top: 70px;">
        <h1 class="text-center">Pix</h1>
        <div class="display-flex list-group-horizontal">
            <ul class="list-group list-group-horizontal">
                <div class="row">
                    <li class="bg-light list-group-item col-lg-4 col-md-6 col-sm-12 col-12 list-group-item" style="border: 7px white solid;">
                        <div>
                            <img style="max-height: 270px; max-width:270px" src="../images/pix.png" class="rounded mx-auto d-block">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="float-left">Valor: R$100</span>
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" id="dropdownMenuButton1" data-toggle="dropdown" type="button" aria-expanded="false">Enviar
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <a class="dropdown-item" onclick="window.open('https://nubank.com.br/pagar/9hsaw/o4RbGfY3d0');">Bruno</a>
                                        <a class="dropdown-item" onclick="window.open('https://nubank.com.br/pagar/1kzh07/u6mXlFN0up');">Marcella</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class=" bg-light list-group-item col-lg-4 col-md-6 col-sm-12 col-12 list-group-item" style="border: 7px white solid;">
                        <div>
                            <img style="max-height: 270px; max-width:270px" src="../images/pix.png" class="rounded mx-auto d-block">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="float-left">Valor: R$150</span>
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" id="dropdownMenuButton1" data-toggle="dropdown" type="button" aria-expanded="false">Enviar
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <a class="dropdown-item" onclick="window.open('https://nubank.com.br/pagar/9hsaw/o4RbGfY3d0');">Bruno</a>
                                        <a class="dropdown-item" onclick="window.open('https://nubank.com.br/pagar/1kzh07/u6mXlFN0up');">Marcella</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="bg-light list-group-item col-lg-4 col-md-6 col-sm-12 col-12 list-group-item" style="border: 7px white solid;">
                        <div>
                            <img style="max-height: 270px; max-width:270px" src="../images/pix.png" class="rounded mx-auto d-block">
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="float-left">Valor: R$200</span>
                                <div class="dropdown">
                                    <button class="btn btn-primary dropdown-toggle" id="dropdownMenuButton1" data-toggle="dropdown" type="button" aria-expanded="false">Enviar
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                        <a class="dropdown-item" onclick="window.open('https://nubank.com.br/pagar/9hsaw/o4RbGfY3d0');">Bruno</a>
                                        <a class="dropdown-item" onclick="window.open('https://nubank.com.br/pagar/1kzh07/u6mXlFN0up');">Marcella</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </div>
            </ul>
        </div>
        <hr>
        <h1 class="text-center mb-3">Presentes</h1>
        <div class="bg-light pt-2 mb-5">
            <h5 class="text-center">Informações importantes</h5>
            <div class="row">
                <p class="ml-5 col-7" style="font-bold: none;">Endereço: Avenida Aladia de Abreu. <br>Bairro: Marote/ Número: 330/ CEP: 36774-666</p><br>
                <p class="ml-4 col-4">Caso escolha geladeira, fogão ou cama, <br>entrar em contato com os noivos.</p>
            </div>
        </div>
        <div class="display-flex">
            <ul class="list-group list-group-horizontal">	
                <div class="row">
                <?php
                    foreach($rows as $value){
                        $enable = $value['comprado'] == 'S' ? 'disabled' : '';
                        $cor = $value['comprado'] == 'S' ? 'btn-secondary' : 'btn-primary';
                        $texto = $value['comprado'] == 'S' ? 'Comprado' : 'Comprar';
                        ?>
                        <li id="<?= $value['presenteID']?>" class="bg-light list-group-item col-lg-4 col-md-6 col-sm-12 col-12" style="border: white solid; border-width:10px;">
                            <img src=<?= $value['caminhoimg']?> class="rounded mx-auto d-block" style="max-height: 270px; max-width:270px">
                            <div class="h5" style="margin-top:5px;">
                                <?= $value['presenteNome'] ?>
                            </div>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="float-left">Valor: R$<?= $value['valor'] ?></span>
                                <a onclick="window.open('<?= $value['link']?>');" target="_self">
                                    <button <?= $enable ?> onclick="atribuir(<?= $value['presenteID']?>)" class="btn <?= $cor ?>" data-toggle="modal" data-target="#exampleModal">
                                    <?= $texto ?>
                                    </button>
                                </a>
                            </div>
                        </li>
                    <?php } ?>
                </div>
            </ul>
        </div>
    </div> 
    <form id="confirmPresente" action="./confirmarCompra.php" method="POST">
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Obrigado por nos comprar um presente!!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    <input type="hidden" id="presenteID" name="presente" value=""></input>
                    </button>
                </div>
                <div class="modal-body">
                    Para nosso controle e que não haja nenhum tipo de mal-entendido, peçamos que confirme a compra do Presente
                    por gentileza. Caso ainda não decidiu o que nos dar, só clicar em fechar e continuar procurando. Estamos
                    super ansiosos!!!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <input type="submit" value="Confirmar" class="btn btn-primary"></input>
                </div>
                </div>
            </div>
        </div> 
    </form>
    <footer class="text-center text-white" style="background-color: #f1f1f1; ">
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
    <script>
        function atribuir(id){
            document.getElementById("presenteID").value = id;
        }
    </script>
</body>
</html>