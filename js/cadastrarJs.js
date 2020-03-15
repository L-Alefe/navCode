var formCadastro = document.forms.formCadastro;
var btnCadastrar = document.getElementById("btnCadastrar");
formCadastro.onsubmit = function(){
	var usuario = formCadastro.usuario.value;
	var senha = formCadastro.senha.value;
	var comSenha = formCadastro.comSenha.value;
	if (senha.length < 6) {
        notie.alert({ type: 1, text: 'Senha muito pequena!  =(', time: 3 });
		return false;
	}else if(senha != comSenha){
        notie.alert({ type: 1, text: 'Senhas diferentes!  =(', time: 3 });
		return false;
		}else{
			
		}
	}
