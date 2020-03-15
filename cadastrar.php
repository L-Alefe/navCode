<?php
	session_start();
	if(isset($_SESSION['usuario'])){
		header('Location: taLogado.html');
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Fazendo cadastro</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- menuLocal css -->
    <link rel="stylesheet" type="text/css" href="css/styleMenu.css">
    <!-- css Local -->
    <link rel="stylesheet" type="text/css" href="css/styleCadastrar.css">
    <!-- pure css -->
    <link rel="stylesheet" type="text/css" href="pure/pure-min.css">
    <!-- gridPure css -->
    <link rel="stylesheet" type="text/css" href="pure/grids-responsive-min.css">
    <!-- Geral css -->
    <link rel="stylesheet" type="text/css" href="css/styleGeral.css">
    <!-- icon -->
    <link rel="icon" href="imgs/vdc.png" type="image/x-icon" />
    <!-- Animated css -->
    <link rel="stylesheet" type="text/css" href="css/animate.css">
	<!-- php.css -->
    <link rel="stylesheet" type="text/css" href="css/stylephp.css">
	<!-- NOTIE.JS	 -->
	<link rel="stylesheet" type="text/css" href="plugin/notie.css">
</head>
<body style="color: white;">
  <!-- menu -->
	<?php
		require_once("includes/cadastro/menuCadastro.php");
		
		require_once("includes/cadastro/formularioCadastro.php");
		echo "<br /><br /><br /><br />";
		require_once("includes/geral/rodape.php");
	?>

</body>
<script src="plugin/notie.js"></script>
<script type="text/javascript" src="js/cadastrarJs.js"></script>
<script type="text/javascript" src="js/geral.js"></script>
</html>
