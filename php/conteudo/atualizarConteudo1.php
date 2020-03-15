<?php	
	session_start();
	require_once("../Conexao.php");
	$conexao = new Conexao();
	$titulo = $_POST['titulo'];
	$texto1 = $_POST['texto1'];
	$texto2 = $_POST['texto2'];
	
	$comando = "UPDATE conteudo SET titulo=?, texto=?, texto1=? WHERE id=1;";
	$execucao = $conexao->getCon()->prepare($comando);
	$execucao->bindParam(1, $titulo);
	$execucao->bindParam(2, $texto1);
	$execucao->bindParam(3, $texto2);
	$execucao->execute();

	echo "<script>window.history.back();</script>";
?>
