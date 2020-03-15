<?php
	require_once("Conexao.php");
	$conexao = new Conexao();
	$id = $_GET['id'];

	$consultaLikes = "SELECT * FROM comentarios WHERE idPrimario=?;";
	$consultando = $conexao->getCon()->prepare($consultaLikes);
	$consultando->bindParam(1, $id);
	$consultando->execute();
	$dadosComentarios = $consultando->fetch(PDO::FETCH_OBJ);

	$resultado = $dadosComentarios->gostei;
	$curtidas = $resultado + 1;

	$comandoCurtir = "UPDATE comentarios SET gostei=? WHERE idPrimario=?;";
	$curtindo = $conexao->getCon()->prepare($comandoCurtir);
	$curtindo->bindParam(1, $curtidas);
	$curtindo->bindParam(2, $id);
	$curtindo->execute();
	header("Location: ../forum.php");
?>
