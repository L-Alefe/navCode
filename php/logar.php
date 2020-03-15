<?php
	session_start();
	require_once("Conexao.php");
	$conexao = new Conexao();
	$usuario = $_POST["usuario"];
	$password = $_POST["password"];

	$sql = "SELECT * FROM usuario WHERE nomeUsuario=?;";

	$verificar = $conexao->getCon()->prepare($sql);
	$verificar->bindParam(1,$usuario);
	$verificar->execute();
	
	if($verificar->rowCount() > 0){
		$sql1 = "SELECT senha FROM usuario WHERE nomeUsuario=?;";
		$verificar1 = $conexao->getCon()->prepare($sql1);
		$verificar1->bindParam(1,$usuario);
		$verificar1->execute();
		$array = $verificar1->fetch(PDO::FETCH_ASSOC);
		$StringSenha = implode($array);
		if($password == $StringSenha){
			$dados = $verificar->fetch(PDO::FETCH_OBJ);
			$_SESSION["id"] = $dados->id;
			$_SESSION['usuario'] = $dados->nomeUsuario;
			$_SESSION['senha'] = $password;
			header('Location: ../index.php');
		}else{
			$inexistente = "inexistente";
		$_SESSION['inexistente'] = $inexistente;
		header('Location: ../login.php');
		}
	}else{
		$inexistente = "inexistente";
		$_SESSION['inexistente'] = $inexistente;
		header('Location: ../login.php');
	}
?>

