<?php
	require_once("../Conexao.php");
	$conexao = new Conexao();
	$tmp = $_FILES["fotoNot1"]["tmp_name"];
	if($tmp != ""){
		
		$sql = "UPDATE conteudo SET img=? WHERE id=1;";

		$caminho = fopen($tmp, "rb");

		$comando = $conexao->getCon()->prepare($sql);	

		$comando->bindParam(1, $caminho, PDO::PARAM_LOB);
		$comando->execute();
		header('Location: ../../edicaoAdmin.php');
	}
		echo "<script>window.history.back();</script>";
?>
