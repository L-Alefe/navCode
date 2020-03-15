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
<body>
  <!-- menu -->
 	<?php 
		require_once("includes/index/menuIndex.php");
		if(isset($_SESSION['usuario'])){
			require_once("includes/geral/menuConta.php");
		}
	
		require_once("includes/index/apresentacao.php");
		echo "
			<div class='conteudoGeral'>
			<div class='conteudo' style='background-color: #eee; border-radius: 0.4em;'>
		";
		require_once("includes/index/surgimento.php");

		require_once("includes/index/notUm.php");
		
		require_once("includes/index/notDois.php");

		require_once("includes/index/notTres.php");

		
		require_once("includes/index/editorUm.php");

		require_once("includes/index/editorDois.php");
		echo "<br />";
		require_once("includes/geral/rodape.php");
	?>

</body>
<script src="plugin/notie.js"></script>
<script type="text/javascript" src="js/indexJs.js"></script>
<script type="text/javascript" src="js/geral.js"></script>
<?php
	if($_SESSION['dadosAlterados'] == "ok"){
		echo "	
		<script>
			window.onload = function () {
        			notie.alert({ type: 1, text: 'Dados alterados com sucesso!', time: 2 })
      			}	
		</script>";
		$_SESSION['dadosAlterados'] = "fim";
	}
?>
</html>
