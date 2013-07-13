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
	
	//itens arrastáveis
	$(".item").draggable({
//		addClasses: false,
//		containment: ".tarefas",
//		cursor: "crosshair",
//		cursorAt: {left: 5},
//		grid: [50,20],
//		helper: "original",
//		opacity: 0.30,
//		refreshPositions: true,
//		revert: true,
//		snap: true,
//		snapMode: "outer",
		drag: function (event, ui){
//			alert("Arrastando");
		},
		stop: function (event, ui){
			//alert("Parou");
		},
		start: function (event, ui){
			//alert("iniciando");
		},
	
	});
	
	// redimencionar elemento
	$( ".item" ).resizable({
		//animate: true,
		//animateEasing: "easeOutBounce",
		//aspectRatio: true,
		//containment: ".tarefas",
		//distance: 30,
		//ghost: true,
		maxHeight: 100,
		maxWidth: 200,
		minHeight: 50,
		minWidth: 100,
		create: function (event, ui){
			//alert("Construtor");
		},
		resize: function (event, ui){
			//alert("Mexendo");
			//alert(ui.element);
		},
		stop: function (event, ui){
			//alert("Parou");
		},
		
		
		
		
	});
	
	// organizar e mudar posição
	 $( "#menu" ).sortable({
//		 cursor: "move",
//		 disabled: true,
//		 grid: [50,10],
//		 opacity: 0.50,
		 change: function (event, ui){
			 //alert("mudando");
		 },
		 stop: function (event, ui){
			 // alert("parado");
		 },
		 activate: function (event, ui){
//			alert("Ativado");
//			 ui.item.children().css("color","red");
		 },
		 beforeStop: function (event, ui){
//			alert("antes de parar"); 
		 },
	 });

	$("#tarefas").selectable({
		stop: function(event, ui){
			var result = $( "#marcados" ).empty();
			$( ".ui-selected", this ).each(function(key, obj) {
				result.html(obj.value);
			});
		},
	});

	$(".lixeira").droppable({
	      drop: function( event, ui ) {
	    	  //$(this).addClass("lixeiraMarcada");
	    	  $(ui.draggable).html("Marcado");
	    	  $(ui.draggable).css("color","red");
	      },
	      out: function (event, ui) {
	    	  $(ui.draggable).html("Desmarcado");
	    	  $(ui.draggable).css("color","black");
	      },
//	      over: function (event, ui){
//	    	alert("movimentando"); 
//	      },
		
	    });
});