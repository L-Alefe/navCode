<?php
	require_once("Conexao.php");  
	$conexao = new Conexao();
	$sql = "SELECT nomeUsuario,email,senha,id FROM usuario;"; 
	$dadosUsuario = $conexao->getCon()->query($sql, PDO::FETCH_OBJ);

	
	$conexao = new Conexao();
	$sql = "SELECT * FROM conteudo WHERE id=1;";
	$puxarConteudo = $conexao->getCon()->prepare($sql);
	$puxarConteudo->execute();
	$conteudo = $puxarConteudo->fetch(PDO::FETCH_OBJ);

	echo "
		<br /><br />
			<div class='conteudoGeral' style='margin-top: 13px;'>
				<div class='conteudo' style='background-color: #eee; border-radius: 0.4em; color: #444;'>
				<p class='pTexto divNav negrito'>Configuração dos usuários.</p><br /><br />
				
		<pre style='width: 100%; height: 250px; border: 1px solid #999;'><table border='1' class='pure-table' style='width: 100%;'>
			<thead><tr><th>Id</th><th>Usuário</th>
					<th>Email</th>
					<th>Senha</th>
					<th>Editar</th></tr>	
			</thead>		
			";
		foreach($dadosUsuario as $item){
			echo "<tr><td>$item->id</td><td>$item->nomeUsuario</td><td>$item->email</td><td>$item->senha</td><td><a href='perfilAdmin.php?id={$item->id}'><button style='background-color: #fbc02d;' class='pure-button'>Editar</button></a></td></tr>";
		}	
		echo "</table></pre>";

		echo "<br /><br />
			<p class='pTexto divNav negrito'>Atualize os assuntos.</p><br />
			<div style='padding: 10px; border: 1px solid #aaa; border-radius: 0.3em;'>
				<br /><p class='textoGrande'>Notícia 1</p><br />


				<form action='php/conteudo/atualizarImg1.php?id=1' method='post' enctype='multipart/form-data'>
					<p>Foto principal:</p><br />
					<label for='fotoNot1'><img src='php/conteudo/exibirImg1.php' class='pure-img' style='cursor: pointer; border: 1px solid #aaa; width: 200px; height: 200px;'></label>
					<input type='file' name='fotoNot1' id='fotoNot1' style='display: none;'>
					<br /><br />
					<input type='submit' class='pure-button btnCode' value='Atualizar Foto'>
				</form>
				

				<br /><hr /><br />
				<form method='post' action='php/conteudo/atualizarConteudo1.php' class='pure-form'>
					<label for='titulo'>Título:</label><br /><br />
					<input type='text' name='titulo' class='pure-u-1' value='$conteudo->titulo'><br /><br />				

					<label for='texto1'>Texto 1:</label><br /><br />
					<textarea type='text' style='width: 100%; height: 100px; padding: 10px;' name='texto1'>$conteudo->texto</textarea><br /><br />
					<label for='texto2'>Texto 2:</label><br /><br />
					<textarea type='text' style='width: 100%; height: 100px; padding: 10px;' name='texto2'>$conteudo->texto1</textarea><br /><br />
					
					<input type='submit' class='pure-button btnCode' value='Atualizar'>
				</form>	
			</div>	
		</div></div>
			";
?>
