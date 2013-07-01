$(document).ready(function(){

// 	selecionar a primeira linha do resultado da tabela e aumentar a font
//	$("table thead tr:first-child").css("font-size","14px");
	
	$("table thead tr:first-child").addClass("cabecalhoTabela");
	
	$("#efeito").click(function (){
		// alterar atributos css com efeito
		$("table").animate({
			opacity: 0.5,
		}, 1500);
	});
	
	
	$("#fonteMax").click(function (){
		$("table").hide();
//		$("tbody tr").css("font-size","20px");
	});
});