<?php
	require_once("Conexao.php");
	$conexao = new Conexao();
	$id = $_GET['id'];
	$comando = "DELETE FROM usuario WHERE id=?";
	$execucao = $conexao->getCon()->prepare($comando);
	$execucao->bindParam(1, $id);
	$execucao->execute();

	$comando1 = "DELETE FROM comentarios WHERE idUsuario=?";
	$execucao1 = $conexao->getCon()->prepare($comando1);
	$execucao1->bindParam(1, $id);
	$execucao1->execute();	
	header('Location: sair.php');
?>
