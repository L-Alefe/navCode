<?php
session_start();
	require_once("php/Conexao.php");
	$conexao = new Conexao();	
	$id = $_GET['id'];



	$dadosPessoais = "SELECT nomeUsuario, email, senha FROM usuario WHERE id=?;";
	$comando = $conexao->getCon()->prepare($dadosPessoais);
	$comando->bindParam(1, $id);
	$comando->execute();
	$executar = $comando->fetch(PDO::FETCH_OBJ);
	
	
echo "
	<br /><br />
			<div class='conteudoGeral' style='margin-top: 13px;'>
				<div class='conteudo' style='background-color: #eee; border-radius: 0.4em;'>
					<p class='negrito'>Suas informações estão aqui {$executar->nomeUsuario}.</p>
					<br />
					<p class='negrito'>Clique no espaço e selecione sua foto. Após aperte o botão.</p>
					<br /><br />
					<center>
							<form action='php/inserirImg.php?id={$id}' method='post' enctype='multipart/form-data'>
								<label for='perfil'><img src='php/exibirImg.php?id={$id}' class='pure-img' style='cursor: pointer; width:200px; height:200px; border-radius: 50%; border: 1px solid #aaa;'></label>
								<input type='file' name='perfil' id='perfil' style='display: none;'>
								<br />
								<input type='submit' class='pure-button btnCode' value='Alterar foto'>
							</form>
							<br />
							
						</center>
						<hr />
						<br /><br />
						<p class='negrito'>Altere seus dados.</p>
						<br />
								<form class='pure-form pure-form-stacked' method='post' action='php/alterarDados.php?id={$id}'>
								<br />      
								    <label for='nome'>Usuário</label>
								    <input class='pure-input-1' name='nome' type='text' value='{$executar->nomeUsuario}' required>
								    <br />

								    <label for='email'>Email</label>
								    <input class='pure-input-1' name='email' type='text' value='{$executar->email}' required>
								    <br />

								    <label for='senha'>Senha</label>
								    <input class='pure-input-1' name='senha' type='password' value='{$executar->senha}' required>
								    <br />
	
								    <input style='float: left; margin-right: 6px; margin-bottom: 6px;' type='submit' class='pure-button btnCode' value='Alterar dados'>
							    </form>	
							<button class='pure-button negrito' style='background-color: #f44336; color: white;' id='btnRemover'>Deletar conta</button>
						</div>	
									
				</div>
			</div>
";
?>
