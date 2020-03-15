<?php
	require_once("../Conexao.php");
	$conexao = new Conexao();
		$sql = "SELECT img FROM conteudo WHERE id=1;";
		$comando = $conexao->getCon()->prepare($sql);
		$comando->execute();
		$comando->bindColumn(1,$retorno,PDO::PARAM_LOB);
		$executar = $comando->fetch(PDO::FETCH_BOUND);
		header("Content-type: image");
		echo "$retorno";
?>
