//$(document).ready(function(){
//
//	$("input:submit").click(function(event){
//		
//		if ($("#email").val() == "")
//		{
//			$("#labelEmail").css("color","red");
//			$("#labelEmail").text("Email inválido");
//			$("#labelEmail").show();
//			$("#labelEmail").fadeOut("slow");
//			$("#email").focus();
//			return false;
//		}
//	});
//	
//});

// ativa a função quando a página for carregada
//window.onload = function (){
//	
//	// Caixa de Alerta 
////	alert("Para realizar o login, preenchar usuário e senha");
//
//	// busca o elemento de ID email
////	var campoEmail = document.getElementById('email');
//	var label = document.getElementById('labelEmail');
////
////	campoEmail.onchange = function(){
////		campoEmail.value += '@gmail.com';
////	};
//	
//	/*
//	
//	var labelChange = document.getElementById('labelEmailChange');
//	
//	// adiciona um evento ao campo email ao ser alterado e retirado o foco
//	campoEmail.onchange = function(){
//		labelChange.innerHTML = campoEmail.value;
//	};
//	
//	// adiciona um evento ao campo email ao ser alterado
//	campoEmail.onkeyup = function(){
//		var label = document.getElementById('labelEmail');
//		label.innerHTML = campoEmail.value;
//	};
//	
//	// adiciona um evento ao campo email ao ser alterado
//	campoEmail.onfocus = function(){
//		var label = document.getElementById('labelEmail');
//		label.innerHTML = "Digite o email";
//	};
//	
//	// adicionar um evento ao campo email quando perder o foco
//	campoEmail.onblur = function(){
//		var label = document.getElementById('labelEmail');
//		this.value = this.value + "@gmail.com";
//		label.innerHTML = "Email digitado: " + this.value;
//	};
//	
//	// busca elementos pelo nome
//	var botoesLogin = document.getElementsByName("Login");
//
//	// total de elementos na lista
//	if (botoesLogin.length)
//	{
//		// retorna o elemento na posição 0
//		var botaoLogin = botoesLogin.item(0);
//		
//		// adiciona evento para quando clicar
//		botaoLogin.onclick = function(){
//
//			this.value = "Login ...";
//			
//			label.innerHTML = '';
//			
//			// verificar se o tamanho da string do valor
//			if (retornaValorCampo().length == 0)
//			{
//				label.style.color = "red";
//				label.style.setProperty("font-size", "1.2em");
//				label.innerHTML += "Email inválido<br>";
//				document.forms[0].email.focus();
//			}
//			
//			if (document.forms[0].senha.value.length == 0)
//			{
//				label.style.color = "red";
//				label.style.setProperty("font-size", "1.2em");
//				label.innerHTML += "Senha inválida";
//			}
//			
//			return false;
//		};
//	}
//};
//
//function retornaValorCampo(email)
//{
//	return document.forms[0].email.value;
//}
//*/

