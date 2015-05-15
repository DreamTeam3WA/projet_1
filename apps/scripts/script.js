/*-----------boutons header--------------*/

$('document').ready(function()
{
	$('.header .signup, .inscr .fermer').click(function(){
		 $( ".inscr" ).toggle(500);
	});

	$('.header .signin, .log .fermer').click(function(){
		 $( ".log" ).toggle(500);
	});

	$('.tchat h3').click(function(){
		 $( "div.tchat-wd" ).toggle( 500);
	});
	$('.header .newarticle').click(function(){
		$('.notvisibleart').css('display','block');
		$('.notvisiblein').css('display','none');
		$('.notvisiblelog').css('display','none');
	});
	$('.navforum .newsujet').click(function(){
		$('.forum').css('display','none');
		$('.sujetforum').css('display','none');
	})
});

/*
$('document').ready(function()
{
	$('.header .signin').click(function(){
		$('.notvisiblein').css('display','none');
		$('.notvisiblelog').css('display','block');
		$('.notvisibleart').css('display','none');
	});

	$('.header .signup').click(function(){
		$('.notvisiblelog').css('display','none');
		$('.notvisiblein').css('display','block');
		$('.notvisibleart').css('display','none');
	});

	$('.fermer').click(function(){
		$('.notvisiblein').css('display','none');
		$('.notvisiblelog').css('display','none');
		$('.notvisibleart').css('display','none');
	})
});
*/
