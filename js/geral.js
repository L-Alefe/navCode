//Animação

var tremerHome = document.getElementById('tremerHome');
tremerHome.onmouseover = function(){
	this.setAttribute("class", "animated shake itemC");
}
tremerHome.onmouseout = function(){
	this.setAttribute("class", "itemC");
}

var tremerLogin = document.getElementById('tremerLogin');
tremerLogin.onmouseover = function(){
	this.setAttribute("class", "animated shake itemC");
}
tremerLogin.onmouseout = function(){
	this.setAttribute("class", "itemC");
}

var tremer2Forum = document.getElementById('tremer2Forum');
tremer2Forum.onmouseover = function(){
	this.setAttribute("class", "animated shake itemC");
}
tremer2Forum.onmouseout = function(){
	this.setAttribute("class", "itemC");
}

// Animação Botões index

var btnTremer1 = document.getElementById('btnTremer1');
btnTremer1.onmouseover = function(){
	this.setAttribute("class", "animated tada pure-button pure-button-primary");
}
btnTremer1.onmouseout = function(){
	this.setAttribute("class", "pure-button pure-button-primary");
}

var btnTremer2 = document.getElementById('btnTremer2');
btnTremer2.onmouseover = function(){
	this.setAttribute("class", "animated tada pure-button");
}
btnTremer2.onmouseout = function(){
	this.setAttribute("class", "pure-button");
}

var btnTremer3 = document.getElementById('btnTremer3');
btnTremer3.onmouseover = function(){
	this.setAttribute("class", "animated tada pure-button");
}
btnTremer3.onmouseout = function(){
	this.setAttribute("class", "pure-button");
}

//Animação botões editores

var downloadVim = document.getElementById('downloadVim');
downloadVim.onmouseover = function(){
	this.setAttribute("class", "animated tada pure-button");
}
downloadVim.onmouseout = function(){
	this.setAttribute("class", "pure-button");
}

var downloadAtom = document.getElementById('downloadAtom');
downloadAtom.onmouseover = function(){
	this.setAttribute("class", "animated tada pure-button");
}
downloadAtom.onmouseout = function(){
	this.setAttribute("class", "pure-button");
}
