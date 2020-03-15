<?php
	require_once("Conexao.php");
	$conexao = new Conexao();
	require_once("exibirComentario.php");
	$id = $_GET['id'];
	$sql2 = "SELECT img FROM usuario WHERE id=?;";
	$comando = $conexao->getCon()->prepare($sql2);
	$comando->bindParam(1, $id);
	$comando->execute();
	$comando->bindColumn(1,$retorno,PDO::PARAM_LOB);
	$executar = $comando->fetch(PDO::FETCH_BOUND);
	header("Content-type: image");
	echo "$retorno";
	
?>
