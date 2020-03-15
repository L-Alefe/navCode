<?php
	session_start();
	if(isset($_SESSION['usuario'])){
		header('Location: taLogado.html');
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Acesso à conta</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<!-- menuLocal css -->
  	<link rel="stylesheet" type="text/css" href="css/styleMenu.css">
  	<!-- login css -->
  	<link rel="stylesheet" type="text/css" href="css/styleLogin.css">
  	<!-- pure css -->
  	<link rel="stylesheet" type="text/css" href="pure/pure-min.css">
  	<!-- gridPure css -->
  	<link rel="stylesheet" type="text/css" href="pure/grids-responsive-min.css">
  	<!-- Geral css -->
  	<link rel="stylesheet" type="text/css" href="css/styleGeral.css">
  	<!-- icon -->
	<link rel="icon" href="imgs/vdc.png" type="image/x-icon" />
	<!-- animate.css -->
    	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<!-- php.css -->
    <link rel="stylesheet" type="text/css" href="css/stylephp.css">
	<!-- NOTIE.JS	 -->
	<link rel="stylesheet" type="text/css" href="plugin/notie.css">
</head>
<body style="color: white;">
	<?php
		include "includes/login/menuLogin.php";
		include "includes/login/formularioLogin.php";
		echo "<br /><br /><br /><br /><br /><br />";
		include "includes/geral/rodape.php";
	?>
</body>
<script type="text/javascript" src="js/geral.js"></script>
<script src="plugin/notie.js"></script>
<?php
	if(isset($_SESSION['inexistente'])){
		echo "<script>
				window.onload = function () {
        notie.alert({ type: 1, text: 'Usuário ou senha inválidos!', time: 3 })
      	}
			</script>";
		session_destroy();
	}
?>
</html>
