
$(document).ready(function(){

	// click no elemento de ID login
	$("#login").click(function(){

//		$("#boxLogin").hide();

		// carrega a p�gina no elemento boxLogin
		$("#boxLogin").load("_login.php",function(data){
//			$(this).fadeIn("slow");



//			$(this).slideToggle("slow");
//			$(this).fadeToggle("slow");

		});
		return false;

	});

});