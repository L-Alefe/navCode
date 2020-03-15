<?php
	require_once("php/Conexao.php");
	$conexao = new Conexao();
	$sql = "SELECT * FROM conteudo WHERE id=1;";
	$puxarConteudo = $conexao->getCon()->prepare($sql);
	$puxarConteudo->execute();
	$conteudo = $puxarConteudo->fetch(PDO::FETCH_OBJ);
?>
<p class="textoGrande divNav negrito" id="conteudo1"><?php echo "$conteudo->titulo";?></p>
            <br /><br />
            <p class="pTexto"><?php echo "$conteudo->texto";?></p>
            <br /><br />
            <img src="php/conteudo/exibirImg1.php" style="border: 1px solid #bbb; width: 200px; height: 200px;">
            <br /><br />
            <p class="pTexto"><?php echo "$conteudo->texto1";?></p>
            <br />
            <p class="pTexto">Estrutura básica do arquivo: </p>
            <br /><br />
            <div class="divCodigo">
              <pre>
&lt;!doctype html&gt;<br />
&lt;html lang="pt-br" /&gt;<br />
    &lt;head&gt;<br />
        &lt;title&gt;Título&lt;/title&gt;<br />
        &lt;meta charset="utf-8"&gt;<br />
    &lt;/head&gt;<br />
    &lt;body&gt;<br />
        &lt;h1&gt;Conteúdo da página&lt;/h1&gt;<br />
    &lt;/body&gt;<br />
&lt;/html&gt;<br /></pre>
            </div>
            <br /><br /><br />
