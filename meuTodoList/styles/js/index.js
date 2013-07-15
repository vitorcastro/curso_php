$(document).ready(function(){

	// click no elemento de ID login
	$("#login").click(function(){

		$("#boxLogin").html("TESTE");
		$("#boxLogin").slideToggle();
		return false;
		
		
//		$("#boxLogin").hide();
// 		carrega a página no elemento boxLogin
		//$("#boxLogin").load("_login.php",function(){
		
//		$("#boxLogin").show();
		
		//,function(data){
//			$(this).fadeIn("slow");



		//	$(this).slideToggle(200);
//			$(this).fadeToggle("slow");

		//});

		//return false;

	});
	
	$("#dialog-usuario").hide();
	
	$("#novoUsuario").click(function(){
		
		$("#dialog-usuario").show();
		$("#dialog-usuario").load("novoUsuario.php");
		
		// Define o Dialog com vários atributos
		$("#dialog-usuario").dialog({ 
			width: 300,
			height: 250,
			show: "explode",
			title: "Novo Usuário",
			hide: "puff",
			modal: true,
			focus: function (event, ui){
				
				$("form").submit(function(){
						
					alert($(this).serialize());
					
					
					$.ajax({
						url: "salvarUsuario.php",
						type: "POST",
						data: $(this).serialize(),
					})
					.fail(function(){
						alert("falha");
					})
					.success(function (response){
						alert(response);
					});
					
					return false;
				});
				
				$("input[name=senha]").focus();
			},
		});
		
		//	Ativa o dialog simples
		//	$("#dialog-usuario").dialog();

		// Colocar o titulo no Dialog
//		$("#dialog-usuario").dialog({title: "Novo Usuário"});
		
		// Desabilitar o ajuste do tamanho do dialog
//		$("#dialog-usuario").dialog({resizable: false});
		// Setar a posição do dialog
//		$("#dialog-usuario").dialog({ position: { my: "right", at: "center" } });
		
//		$("#dialog-usuario" ).dialog({ hide: "puff" });
		
		return false;
	});
	
	
	
	

	
	// Criar o componente de Abas com efeito
	$( "#tabs" ).tabs({ show: { effect: "blind", duration: 200 } });
	// Adiciona class para ficar vertical
	//	$( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
	
	$("#tab-2-load").click(function (){
		$.ajax({
			url: "_sobre.php",
			type: "GET",
			data: { nome: "Vitor" },
			beforeSend: function(){
				$("#tab-2").html("<b>Carregando...</b>");
			}
		})
		.fail(function(jqXHR, textStatus) {
			$("#tab-2").html("Falha no Carregamento");
		})
		.done(function( html ) {
			$("#tab-2").html(html);
		});
		
	});
	
	
	

});