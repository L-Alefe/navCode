<?php
	require_once("Conexao.php");
	$conexao = new Conexao();
	
		
		$sql = "SELECT idUsuario,nomeUsuario,conteudo,gostei,idPrimario FROM comentarios ORDER BY idPrimario desc;";
		
		$comando = $conexao->getCon()->prepare($sql);
		$comando->execute();
			
		
?>
