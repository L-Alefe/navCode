<?php
	session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>NavCode</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- menuLocal css -->
    <link rel="stylesheet" type="text/css" href="css/styleMenu.css">
    <!-- css Local -->
    <link rel="stylesheet" type="text/css" href="css/styleIndex.css">
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
<body style="background-color: #555; color: white;">
  <!-- menu -->
 	<?php 
		require_once("includes/cadastro/menuCadastro.php");
		require_once("includes/geral/menuConta.php");
		require_once("php/edicaoGeral.php");
		require_once("includes/geral/rodape.php");
	?>

</body>
<script src="plugin/notie.js"></script>
<script type="text/javascript" src="js/indexJs.js"></script>
<script type="text/javascript" src="js/geral.js"></script>
</html>
