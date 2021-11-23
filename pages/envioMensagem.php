<?php

	include("../database/conexao.php");
	$conexao = new Conexao();
	$pdo = $conexao->conectar();

	$email = $_POST['email'];
    $nome = $_POST['nome'];
    $mensagem = $_POST['mensagem'];

    $sql = "INSERT INTO mensagens (mensagem, nome, email) VALUES ('$mensagem', '$nome', '$email')";
	$stmt = $pdo->prepare($sql);
    $stmt->execute();
	header("Location: mensagem.php");
?>