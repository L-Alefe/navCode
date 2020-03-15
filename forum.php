<?php
	session_start();
	if(!isset($_SESSION['usuario'])){
		header('Location: cadastrar.php');
	}
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Forum NavCode</title>
        <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- menuLocal css -->
        <link rel="stylesheet" type="text/css" href="css/styleMenu.css">
        <!-- css Local -->
        <link rel="stylesheet" type="text/css" href="css/styleForum.css">
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
    </head>
    <body style="color: white;">
	<?php
		require_once("includes/forum/menuForum.php");
		if(isset($_SESSION['usuario'])){
			require_once("includes/geral/menuConta.php");
			require_once("includes/forum/formularioForum.php");
			require_once("includes/geral/rodape.php");
		}
	
	?>
  </body>
  <script type="text/javascript" src="js/geral.js"></script>
<script src="js/jquery-1.4.2.js" type="text/javascript"></script>  
<script src="js/jquery.NobleCount.min.js" type="text/javascript"></script>
<script type="text/javascript">
$('#inputComentar').NobleCount('#caracteres',{
					on_negative: 'go_red',
					on_positive: 'go_green',
					max_chars: 255
				});
</script>
<!-- <script type="text/javascript" src="js/ajaxOficial.js"></script>
<script type="text/javascript" src="js/mudarLike.js"></script> -->
</html>
