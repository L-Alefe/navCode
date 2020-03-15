<?php	
	session_start();
	require_once("Conexao.php");
	$conexao = new Conexao();
	if(!isset($_SESSION['usuario'])){
		$nomeUsuario = $_POST['usuario'];
		$emailUsuario = $_POST['email'];
		$senhaUsuario = $_POST['senha'];
		$_SESSION['usuario'] = $nomeUsuario;
		$sql = "INSERT INTO usuario(nomeUsuario,email,senha) VALUES(?,?,?);";
		// PREPARA A STRING PARA MODIFICAR USANDO VALORES
		$comando = $conexao->getCon()->prepare($sql);
		// DELIMITAR O CAMPO DA STRING PARA MODIFICAR
		$comando->bindParam(1, $nomeUsuario);
		$comando->bindParam(2, $emailUsuario);
		$comando->bindParam(3, $senhaUsuario);
		// EXECUTA NO PREPARED STATEMENT		
		$_SESSION['img'] = "ok";
		$comando->execute();
		
		$sql2 = "SELECT * FROM usuario WHERE nomeUsuario=?;";
		$puxarId = $conexao->getCon()->prepare($sql2);
		$puxarId->bindParam(1, $nomeUsuario);
		$puxarId->execute();
		$selecionado = $puxarId->fetch(PDO::FETCH_OBJ);
		$_SESSION['id'] = $selecionado->id;
		
		header('Location: ../index.php');
	}else{
		header('Location: ../index.php');
	}
?>
