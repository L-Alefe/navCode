<?php
	session_start();
	require_once("Conexao.php");
	$conexao = new Conexao();
	
	$tmp = $_FILES["perfil"]["tmp_name"];
	if($tmp != ""){
		$sql = "UPDATE usuario SET img=? WHERE id=?;";

		$caminho = fopen($tmp, "rb");

		$comando = $conexao->getCon()->prepare($sql);	

		$comando->bindParam(1, $caminho, PDO::PARAM_LOB);

		$comando->bindParam(2, $_GET['id']);
		$comando->execute();
		header('Location: ../perfil.php');
	}else{
		header('Location: ../index.php');
	}	
?>
