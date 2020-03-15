<?php
	session_start();
		require_once("Conexao.php");
		$conexao = new Conexao();
		
		$comentario = $_POST["comentario"];

		$usrAtual = $_SESSION['usuario'];
		
		$id = $_GET['id'];
	


		$sql = "INSERT INTO comentarios(idUsuario,nomeUsuario,conteudo) VALUES(?,?,?);";
		$comando = $conexao->getCon()->prepare($sql);
		
		$comando->bindParam(1, $id);
		$comando->bindParam(2, $usrAtual);
		$comando->bindParam(3, $comentario);
		// EXECUTA NO PREPARED STATEMENT
		$comando->execute();
		
		header('Location: ../forum.php');

?>
