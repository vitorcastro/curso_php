$(document).ready(function(){

	// click no elemento de ID login
	$("#login").click(function(){

//		$("#boxLogin").hide();
// 		carrega a página no elemento boxLogin
		$("#boxLogin").load("_login.php",function(){
		
//		$("#boxLogin").show();
		
		//,function(data){
//			$(this).fadeIn("slow");



//			$(this).slideToggle(200);
			$(this).fadeToggle("slow");

		});

		return false;

	});
	
	$("#dialog-usuario").hide();
	
	$("#novoUsuario").click(function(){
		
//		$("#dialog-usuario").show();
//		$("#dialog-usuario").load("novoUsuario.php");
		
//		$("#dialog-usuario").dialog({title: "Novo Usuário"});
		
		//  $("#dialog-usuario").dialog({resizable: false});
		//	$("#dialog-usuario").dialog({ position: { my: "right", at: "center" } });
		//  $("#dialog-usuario" ).dialog({ hide: "explode" });
		//  $("#dialog-usuario").dialog({ height: 200 });
		
		return false;
	});
	
	$("#tabs").tabs();
	
	$( "#tabs" ).tabs({ show: { effect: "blind", duration: 800 } });
//  $( "#tabs" ).tabs().addClass( "ui-tabs-vertical ui-helper-clearfix" );
	
//	$("#tab-2-load").click(function (){
//		
//		$.ajax({
//			url: "_sobre.php",
//			beforeSend: function(){
//				$("#tab-2").html("<b>Carregando...</b>");
//			}
//		})
//		.fail(function(jqXHR, textStatus) {
//			$("#tab-2").html("Falha no Carregamento");
//			
//		})
//		.done(function( html ) {
//		
//			$("#tab-2").html(html);
//			
//		});
//		
//	});
	
	
	

});