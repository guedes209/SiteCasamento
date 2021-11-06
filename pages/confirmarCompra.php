<?php
    include("../database/conexao.php");
    $conexao = new Conexao();
    $pdo = $conexao->conectar();
    $id = $_POST['presente'];
    $sql = "UPDATE presente SET comprado = 'S' WHERE presenteID = '{$id}'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    header("Location: ./listaDePresente.php");
?>