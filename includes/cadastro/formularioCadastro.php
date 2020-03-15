<center>
        <div id="inicio">
            <br /><br /><br /><br />
            <p class="textoGrande animated shake">Crie sua conta aqui.</p>
            <br />
            <p>Você receberá as notificações. Comente também em nosso fórum.</p>
        </div>
    </center>
    <div class="centro" style="color: #666;">
        <div id="divFormularioCadastrar">
            <form class="pure-form pure-form-stacked" method="post" action="php/cadastro.php" name="formCadastro">
                <br />
                <fieldset>       
                    <label for="nome">Usuário</label>
                    <input id="usuario" name="usuario" type="text" placeholder="Usuário_Exemplo" required>
                    <br />
		    <label for="email">Email</label>
                    <input id="email" name="email" type="email" placeholder="@email.com" required>
                    <br />
                    <label for="senha">Senha</label>
                    <input id="senha" name="senha" type="password" placeholder="******" required>
                    <br />
                    <label for="comSenha">Comfirmação de senha</label>
                    <input id="comSenha" name="comSenha" type="password" placeholder="******" required>
                    <br />
                    <input type="submit" class="pure-button pure-button btnCode" value="Vai" />
                </fieldset>
            </form>
            <br />
            <p><i>Aproveite!</i></p>
            <br />
        </div>
    </div>
