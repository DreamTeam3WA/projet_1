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
	})

	$('.tchat h3').click(function(){
		 $( "div.tchat-wd" ).toggle(500);
	});

	$('.navforum .newsujet').click(function(){
		$('.forum').css('display','none');
		$('.sujetforum').css('display','none');
		$('.newsujetforum').css('display','block');
	})

	$('.sujetforum .newsujet').click(function(){
		$('.forum').css('display','none');
		$('.sujetforum').css('display','none');
		$('.newsujetforum').css('display','block');
	})

	$('.navforum .actualiserforum').click(function(){
		void window.location.reload();
	})
	$('.newsujetforum .returnforum').click(function(){
		$('.forum').css('display','block');
		$('.newsujetforum').css('display','none');
	})
	$('.descriptionnewsujetforum #message').click(function(){
		$('#message').wrapInner('<p></p>');
	})
	$('.styletexte .gras').click(function(){
		$('#message').css("font-weight","bold");
	})
	$('.styletexte .italic').click(function(){
		$('#message').css("font-style","italic");
	})
	$('.styletexte .souligne').click(function(){
		$('#message').css("text-decoration","underline");
	})
	$('.styletexte .citation').click(function(){
		$('#message').append('" "');
	})
	$('.styletexte .liste').click(function(){
		$('#message').append("<ul><li><li></ul>");
	})
	$('.styletexte .parenthese').click(function(){
		$('#message').append('( )');
	})
	$('.styletexte .image').click(function(){
		$('#message').css("font-style","italic");
	})
	$('.styletexte .couleurpolice').click(function(){
		$('.couleurpoliceblock').css("display","block");
	})
	$('.fermercouleur').click(function(info){
		$('.couleurpoliceblock').css("display","none");
		info.stopPropagation();
	})
	$('.couleurpoliceblock .bleu').click(function(){
		$('#message').css('color','blue');
	})
	$('.couleurpoliceblock .bleuciel').click(function(){
		$('#message').css('color','#00E4FF');
	})
	$('.couleurpoliceblock .vertflash').click(function(){
		$('#message').css('color','#00FF4D');
	})
	$('.couleurpoliceblock .vert').click(function(){
		$('#message').css('color','green');
	})
	$('.couleurpoliceblock .gris').click(function(){
		$('#message').css('color','grey');
	})
	$('.couleurpoliceblock .orange').click(function(){
		$('#message').css('color','orange');
	})
	$('.couleurpoliceblock .rouge').click(function(){
		$('#message').css('color','red');
	})
	$('.couleurpoliceblock .rose').click(function(){
		$('#message').css('color','pink');
	})
	$('.couleurpoliceblock .violet').click(function(){
		$('#message').css('color','purple');
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