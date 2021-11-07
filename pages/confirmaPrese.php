<?php
    include("../database/conexao.php");
    $conexao = new Conexao();
    $pdo = $conexao->conectar();
    $id = $_POST['convidado'];
    $sql = "UPDATE convidado SET confirmado = 'S' WHERE nome = '{$id}'";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();
    header("Location: ./confirmarPresenca.php");
?>