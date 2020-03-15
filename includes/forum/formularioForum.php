<?php
	session_start();
	require_once("php/exibirComentario.php");
?>
	
	<div class='conteudoGeral'>
		<div class='conteudo' style="background-color: #eee; color: #555; border-radius: 0.4em;">
			<br /><br /><br />
			<center><p class='textoGrande'>Área de postagens do</p><h1><i style="font-size: 40px;"><b style="color: #ffbf00;">N</b>av<b style="color: #b71c1c;">C</b>ode</i></h1>
			<img style="margin-top: -20px;" class='pure-img' src='imgs/nuvem.png' width='70px;'>
			<hr /><br />
			</center>
			<?php
			$dados = $conexao->getCon()->query($sql, PDO::FETCH_OBJ);
			foreach($dados as $item){
			echo "<div class='post'>
				<div style='padding: 15px; border: solid 1px #aaa; border-radius: 0.3em;'>				
				<div class='pure-g'>
				
					<div class='pure-u-1 pure-u-md-1-8'>
						<img style='width: 50px; height: 50px; border-radius: 50%;' src='php/exibirImgComentario.php?id=$item->idUsuario'/>
					</div>
					<div class='pure-u-1 pure-u-md-7-8'>
						<p style='margin-top: 17px;' class='pTexto'><b>$item->nomeUsuario</b></p>
					</div>
				</div>
				<br /><br />
				<div style='background-color: #ddd; padding: 10px;'>
					<p class='pTexto'>$item->conteudo</p>
				</div>
				<br />";
				
					echo "<div id='divDoLike'>
							<a href='php/like.php?id=$item->idPrimario'/><img class='pure-img' width='25px;' src='imgs/curtido.png' title='Curtir'/></a>
						</div>
					<br />
				<br />
					<span>$item->gostei curtidas</span>
				
				
			</div><br /><hr /></div>";
			
		}
			echo "
			
			<br />
			<br />
			
		   
			    	<div class='postarComentario'>
					<form class='pure-form' id='postando' method='post' action='php/inserirComentario.php?id={$_SESSION['id']}' name='textAreaComentar' style='color: #555;'>
					   	<textarea id='inputComentar' style='width: 100%;' placeholder='Dúvidas?' name='comentario'></textarea>					
						<br /><br />
						<span id='caracteres'></span> caracteres restantes.
					   	<br /><br />
					    	<input type='submit' name='postar' style='width: 100%;' class='pure-button btnCode' value='Comente'>
					</form>
					<br />
			    	</div>
			
		</div>
	</div>";
?>
