$(document).ready(function(){
	$("#irFim").click(function(e) {
		$('body').animate({
			scrollTop : $("#fim").offset().top
		}, 1000);
		return false;
	});
});