<?php
	session_start();
	require_once("Conexao.php");
	$conexao = new Conexao();
	
	$id = $_GET['id'];
	$novoUsuario = $_POST['nome'];
	$novoEmail = $_POST['email'];
	$novaSenha = $_POST['senha'];

	$comando = "UPDATE usuario SET nomeUsuario=?, email=?, senha=? WHERE id=?;";
	$execucao = $conexao->getCon()->prepare($comando);
	$execucao->bindParam(1, $novoUsuario);
	$execucao->bindParam(2, $novoEmail);
	$execucao->bindParam(3, $novaSenha);
	$execucao->bindParam(4, $id);
	$execucao->execute();
	$_SESSION['dadosAlterados'] = "ok";
	header('Location: ../index.php');

	
?>
