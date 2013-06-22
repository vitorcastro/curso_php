function index()
{
//	// declaração de variável
//	var nomeDaVariavel = '';
//	var nomeDaConstante = 12;
//	
//	// tipagem dinâmica
//	var inteiro = 10;
//	var pontoFlutuante = 10.5;
//	var booleana = true;
//	var string = 'Nome';
//	var array = new Array();

//	array = ["teste","arroz"];
//	alert(array);
	
	//var objeto = {};
	//objeto.teste = "TESTE";
	
	//alert(objeto.teste);
}


// ativa a função quando a página for carregada
window.onload = function (){
	
	//index();
	
	/*
	// Caixa de Alerta 
	alert("Para realizar o login, preenchar usuário e senha");

	// busca o elemento de ID email
	var campoEmail = document.getElementById('email');
	
	var label = document.getElementById('labelEmail');
	var labelChange = document.getElementById('labelEmailChange');
	
	// adiciona um evento ao campo email ao ser alterado e retirado o foco
	campoEmail.onchange = function(){
		labelChange.innerHTML = campoEmail.value;
	};
	
	// adiciona um evento ao campo email ao ser alterado
	campoEmail.onkeyup = function(){
		var label = document.getElementById('labelEmail');
		label.innerHTML = campoEmail.value;
	};
	
	// adiciona um evento ao campo email ao ser alterado
	campoEmail.onfocus = function(){
		var label = document.getElementById('labelEmail');
		label.innerHTML = "Digite o email";
	};
	
	// adicionar um evento ao campo email quando perder o foco
	campoEmail.onblur = function(){
		var label = document.getElementById('labelEmail');
		this.value = this.value + "@gmail.com";
		label.innerHTML = "Email digitado: " + this.value;
	};
	
	// busca elementos pelo nome
	var botoesLogin = document.getElementsByName("Login");

	// total de elementos na lista
	if (botoesLogin.length)
	{
		// retorna o elemento na posição 0
		var botaoLogin = botoesLogin.item(0);
		
		// adiciona evento para quando clicar
		botaoLogin.onclick = function(){

			this.value = "Login ...";
			
			label.innerHTML = '';
			
			// verificar se o tamanho da string do valor
			if (document.forms[0].email.value.length == 0)
			{
				label.style.color = "red";
				label.style.setProperty("font-size", "1.2em");
				label.innerHTML += "Email inválido<br>";
			}
			
			if (document.forms[0].senha.value.length == 0)
			{
				label.style.color = "red";
				label.style.setProperty("font-size", "1.2em");
				label.innerHTML += "Senha inválida";
			}
			
			return false;
		};
	}
	*/
};

