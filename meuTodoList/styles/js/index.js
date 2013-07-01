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

});