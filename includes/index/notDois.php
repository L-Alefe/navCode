<p class="textoGrande divNav negrito" id="conteudo2">O famoso JavaScript.</p>
            <br /><br />
            <p class="pTexto">JavaScript é uma linguagem de programação interpretada. Foi originalmente implementada como parte dos navegadores web para que scripts pudessem ser executados do lado do cliente e interagissem com o usuário sem a necessidade deste script passar pelo servidor, controlando o navegador, realizando comunicação assíncrona e alterando o conteúdo do documento exibido.</p>
            <br /><br />
            <div class="pure-g">
              <div class="pure-u-1 pure-u-md-1-3">
                <img src="imgs/js.png" width="150px;">
              </div>
              <div class="pure-u-1 pure-u-md-2-3">
                <p class="pTexto" style="font-size: 14px;">Caso o desenvolvedor queira se comunicar com o usuário devido a alguma finalidade, ele pode facilmente definir com a linguagem, um método a ser processado, dependendo de uma determinada atitude do usuário, por exemplo. O método <i>alert</i>, causa literalmente um alerta na página em uso, onde entre as aspas " ("") ", é inserido o texto.</p>
                <br /><br />
                <center><button class="pure-button btnCode" id="btnAlerta" onclick="istoAlerta()">Alerta</button></center>
              </div>
            </div>
            <br />
            <p class="pTexto">Código desse alerta:</p>
            <br />
            <div class="divCodigo">
              <pre>
var btnAlerta = document.getElementById('btnAlerta'); <br />
btnAlerta.onclick = function(){ <br />
alert("Uma pequena demonstração !"); <br />
}</pre>
            </div>
            <br /><br /><br />
