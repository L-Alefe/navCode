<?php
	require_once("php/Conexao.php");
	$conexao = new Conexao();
	
	$sql = "SELECT * FROM usuario WHERE id=?";
	$consultar = $conexao->getCon()->prepare($sql);
	$consultar->bindParam(1, $_SESSION["id"]);
	$consultar->execute();

	$dados = $consultar->fetch(PDO::FETCH_OBJ);	

	if(!$dados->img){
	echo "
				<nav id='navPerfil' class='animated shake'>
				<br />
					<ul>
						<div class='pure-menu pure-menu-horizontal'>
      							<ul class='pure-menu-list'>
        							<li class='pure-menu-item pure-menu-has-children pure-menu-allow-hover'>
          								<a href='#' id='menuLink1' class='pure-menu-link' style='padding: 0;'><img style='width: 45px; height: 45px; border-radius: 50%;' src='imgs/usuarioPerfil3.png']}'></a>
		  							<ul class='pure-menu-children'>
					    					<div id='divConfigPerfil'>
											<p style='color: #555;'>User: $dados->nomeUsuario</p>
											<br />
											<a href='perfil.php' class='linkNav'>Config. <img src='imgs/config.png' width='20px;'></a>
											<br />
											<br />
											<a href='php/sair.php' class='linkNav'>Sair</a>
											
										</div>

									</ul>
								</li>
							</ul>
						</div>
					</ul>
  				</nav>
			";
	}else  if($dados->id == 10){
		echo "<nav id='navPerfil' class='animated shake'>
				<br />
					<ul>
						<div class='pure-menu pure-menu-horizontal'>
      							<ul class='pure-menu-list'>
        							<li class='pure-menu-item pure-menu-has-children pure-menu-allow-hover'>
          								<a href='#' id='menuLink1' class='pure-menu-link' style='padding: 0;'><img style='width: 45px; height: 45px; border-radius: 50%;' src='php/exibirImg.php?id=$dados->id'></a>
		  							<ul class='pure-menu-children'>
					    					<div id='divConfigPerfil'>
											<p style='color: #555;'>User: $dados->nomeUsuario</p>
											<br />
											<a href='perfil.php' class='linkNav'>Config. <img src='imgs/config.png' width='20px;'></a>
											<br />
											<br />
											<a href='edicaoAdmin.php' class='linkNav'>Edição</a>
											<br />
											<br />
											<a href='php/sair.php' class='linkNav'>Sair</a>
										</div>

									</ul>
								</li>
							</ul>
						</div>
					</ul>
  				</nav>";
	}else{
		echo "
				<nav id='navPerfil' class='animated shake'>
				<br />
					<ul>
						<div class='pure-menu pure-menu-horizontal'>
      							<ul class='pure-menu-list'>
        							<li class='pure-menu-item pure-menu-has-children pure-menu-allow-hover'>
          								<a href='#' id='menuLink1' class='pure-menu-link' style='padding: 0;'><img style='width: 45px; height: 45px; border-radius: 50%;' src='php/exibirImg.php?id=$dados->id'></a>
		  							<ul class='pure-menu-children'>
					    					<div id='divConfigPerfil'>
											<p style='color: #555;'>User: $dados->nomeUsuario</p>
											<br />
											<a href='perfil.php' class='linkNav'>Config. <img src='imgs/config.png' width='20px;'></a>
											<br />
											<br />
											<a href='php/sair.php' class='linkNav'>Sair</a>
											
										</div>

									</ul>
								</li>
							</ul>
						</div>
					</ul>
  				</nav>
			
			";
	}
?>
