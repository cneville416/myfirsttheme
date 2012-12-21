//$ is the same as Jquery
$(function(){
	$('.alert').delay(3000).fadeOut(3000);
	/*$('#main .row .span7').click(function(){
		$(this).addClass('highlight');
	});*/
	/*$('textarea').click(function(){
	$(this).addClass('join');
});*/
	/*$('#main .row .span4').hover(
		function(){
			$(this).addClass('highlight');
		},
		function(){
			$(this).removeClass('highlight');
		});*/
/*	
	$('p').dblclick(function(){
		$(this).addClass('deleting');
		$(this).slideUp(1000);
	});*/
		
	/*$('textarea').dblclick(function(){
		$(this).addClass('leave');
	});*/
	
	$(document).keyup(function(e){
		switch(e.which) {
		case 39: //right arrow
			window.location = 'http://google.com';
			break;
		case 20: //caps lock
			$('input[name=s]').val('');
			break;
		case 27: //escape key
			$('#main').slideUp();
			break;
		//case 76: //l key
			//get the url for wp-admin
			//var url = $('a.login').attr('href');
			//window.location = url
		}
	});
	
	$(document).keydown(function(e){
		switch(e.which) {
		//case 20: //caps lock
			//$('input[name=s]').val('CAPS LOCK ON');
			//break;
		}
	})
});