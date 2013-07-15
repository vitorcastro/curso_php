$(document).ready(function(){

// 	selecionar a primeira linha do resultado da tabela e aumentar a font
//	$("table thead tr:first-child").css("font-size","14px");
	
	$("table thead tr:first-child").addClass("cabecalhoTabela");
	
	// ao clicar no elemento de id efeito
	$("#efeito").click(function (){
		// alterar atributos css com efeito
		$("table").animate({
			opacity: 0.5,
		}, 1500);
	});
	
	// ao clicar no botão
	$("#fonteMax").click(function (){
//		$("table").hide();
//		$("tbody tr").css("font-size","20px");
	});
	
	//itens arrastáveis
	$(".item").draggable({
//		addClasses: false,
//		containment: ".tarefas",
		cursor: "crosshair",
//		cursorAt: {left: 5},
//		grid: [50,20],
//		helper: "original",
//		opacity: 0.30,
//		refreshPositions: true,
//		revert: true,
		snap: true,
//		snapMode: "inner",
		drag: function (event, ui){
//			alert("Arrastando");
		},
		stop: function (event, ui){
			var element = this;
//			alert("Parou");
			$.ajax({
				url: "_xmlCategorias.php",
				type: "xml",
				success: function(data){
					var text = $(data).text();
					$(element).html(text);
				},
			});
		},
		start: function (event, ui){
			//alert("iniciando");
		},
	
	});
	
	// redimencionar elemento
	$( ".item" ).resizable({
//		animate: true,
//		animateEasing: "easeOutBounce",
//		aspectRatio: true,
//		containment: ".tarefas",
		//distance: 30,
		helper: "ui-resizable-helper",
//		ghost: true,
//		maxHeight: 100,
//		maxWidth: 200,
//		minHeight: 50,
//		minWidth: 100,
		create: function (event, ui){
			//alert("Construtor");
		},
		resize: function (event, ui){
//			alert("Mexendo");
			//alert(ui.element);
		},
		stop: function (event, ui){
//			alert("Parou");
			//alert($("input[name=const]").val());
		},
	});
	
	// organizar e mudar posição
	 $("#menu").sortable({
		 cursor: "move",
//		 disabled: true,
//		 grid: [50,10],
//		 opacity: 0.50,
		 change: function (event, ui){
//			 alert($(ui.item).text());
//			 alert($(ui.position));
			 //alert("mudando");
		 },
		 stop: function (event, ui){
			 $("#menu li").each(function(key, val){
				 //alert($(val).attr("id"));
			 });
			 //alert("parado");
			 //ui.item.children().css("color","black");
		 },
		 activate: function (event, ui){
//			alert("Ativado");
			ui.item.children().css("color","red");
		 },
		 beforeStop: function (event, ui){
//			alert("antes de parar"); 
		 },
	 });

	$("#listaTarefas").selectable({
		stop: function(event, ui){
			var result = $( "#marcados" ).empty();
			$(".ui-selected", this).each(function(key, obj) {
				result.append(+ obj.value);
			});
		},
	});

	$(".lixeira").droppable({
		  activeClass: "black-box",
		  hoverClass: "white-box",
	      drop: function( event, ui ) {
	    	  //$(this).addClass("lixeiraMarcada");
//	    	  $(ui.draggable).html("Marcado");
	    	  $(ui.draggable).css("color","red");
//	    	  $(ui.draggable).hide();
	    	  
	    	  
	      },
	      out: function (event, ui) {
//	    	  $(ui.draggable).html("Desmarcado");
	    	  $(ui.draggable).css("color","black");
	      },
	      over: function (event, ui){
	    	$(ui.draggable).css("color","white");
	      },
		
	    });
});