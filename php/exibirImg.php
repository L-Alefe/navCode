<?php
	require_once("Conexao.php");
	$conexao = new Conexao();
	if(isset($_GET["id"])){
		$sql = "SELECT img FROM usuario WHERE id=?;";
		$comando = $conexao->getCon()->prepare($sql);
		$comando->bindParam(1, $_GET["id"]);
		$comando->execute();
		$comando->bindColumn(1,$retorno,PDO::PARAM_LOB);
		$executar = $comando->fetch(PDO::FETCH_BOUND);
		header("Content-type: image");
		echo "$retorno";	
	}
?>
