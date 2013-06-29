$(document).ready(function(){

	// selecionar a primeira linha do resultado da tabela e aumentar a font
	$("table tbody tr:first-child").css("font-size","20px");
	
	$("#efeito").click(function (){
		// alterar atributos css com efeito
		$("table").animate({
			opacity: 0.5,
		}, 1500);
	});
	
	$("#fonteMax").click(function (){
		$("table").css("font-size","20px");
	});
	
	
});