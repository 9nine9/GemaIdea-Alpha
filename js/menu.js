$(document).ready(function(){
	$('#pass_form').hide();
	$('.idea').hide();
	$('.skill').hide();

	$('.menu-btn').click(function(){
		$('.menu').toggleClass("slide-menu");
	});

	$('#btn-idea').click(function(){
		$('.idea').toggle();
	});


	$('#btn-skill').click(function(){
		$('.skill').toggle();
	});
	
});
