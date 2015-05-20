/*-----------boutons header--------------*/

$('document').ready(function()
{
	$('.header .signup, .inscr .fermer').click(function(){
		 $( ".inscr" ).toggle(500);
		 $('.log').css('display','none');
		 $('.article').css('display','none');
	});

	$('.header .signin, .log .fermer').click(function(){
		 $( ".log" ).toggle(500);
		 $('.inscr').css('display','none');
		 $('.article').css('display','none');
	});

	$('.header .newarticle, .article .fermer').click(function(){
		$( ".article" ).toggle(500);
		 $('.log').css('display','none');
		 $('.inscr').css('display','none');
	});

	$('.tchat h3').click(function(){
		 $( "div.tchat-wd" ).toggle(500);
	});

	$('.navforum .newsujet').click(function(){
		$('.forum').css('display','none');
		$('.sujetforum').css('display','none');
		$('.newsujetforum').css('display','block');
	});

	$('.sujetforum .newsujet').click(function(){
		$('.forum').css('display','none');
		$('.sujetforum').css('display','none');
		$('.newsujetforum').css('display','block');
	});

	$('.navforum .actualiserforum').click(function(){
		void window.location.reload();
	});
	$('.newsujetforum .returnforum').click(function(){
		$('.forum').css('display','block');
		$('.newsujetforum').css('display','none');
	});
	$('.buttonReponseCommentaire').click(function(){
		$('.reponse-forum').css('display','block');
		$('.buttonReponseCommentaire').css('display','none');
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


// SCROLL TCHAT-----------------------------------------
// $('document').ready(function(){
// setInterval(function scrollTchat(){
// 	$('.test').scrollTop($('.chat-content').outerHeight);
// },1200);
// });
