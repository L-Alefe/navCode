<?php
	session_start();
	if(!isset($_SESSION['usuario'])){
		header('Location: index.php');
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Configurações</title>
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
    <!-- animate.css -->
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <!-- php.css -->
    <link rel="stylesheet" type="text/css" href="css/stylephp.css">
    <!-- NOTIE.JS	 -->
	<link rel="stylesheet" type="text/css" href="plugin/notie.css">
	 <!--alertfy	 -->
	<link rel="stylesheet" href="css/alertify.css">
</head>
<body>
  <!-- menu -->
 	<?php
		require_once("includes/cadastro/menuCadastro.php");
		require_once("includes/geral/menuConta.php");
		require_once("includes/login/inforPerfilAdmin.php");
		require_once("includes/geral/rodape.php");
	?>
</body>
<script type="text/javascript" src="js/geral.js"></script>
<script src="js/alertify.js"></script>
<?php
echo "<script>
	var btnRemover = document.getElementById('btnRemover');
	btnRemover.onclick = function(){
	alertify.confirm('Quer mesmo remover sua conta?',
	  function(){
	    window.setTimeout(\"location.href='php/removerConta.php?id={$_SESSION['id']}';\");
	  },
	  function(){
	    
	  });
	}
</script>";
?>
</html>
