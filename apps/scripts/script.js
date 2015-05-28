/*-----------boutons header--------------*/

$('document').ready(function()
{
	$('.header .signup, .inscr .fermer').click(function(){
		 $( ".inscr" ).toggle(500);
		 $('.log').css('display','none');
		 $('.article').css('display','none');
		 $('.modifArticle').css('display','none');
		 $('supprArticle').css('display','none');
		 $('.administration-admin').css('display','none');
	});

	$('.header .signin, .log .fermer').click(function(){
		 $( ".log" ).toggle(500);
		 $('.inscr').css('display','none');
		 $('.article').css('display','none')
		 $('.modifArticle').css('display','none');;
		 $('supprArticle').css('display','none');
		 $('.administration-admin').css('display','none');
	});

	$('.cliqueModifArticle, .modifArticle .fermer').click(function(){
		$('.modifArticle').toggle(500);
		$( '.article').css('display','none');
		 $('.log').css('display','none');
		 $('.inscr').css('display','none');
		 $('.supprArticle').css('display','none');
		 $('.administration-admin').css('display','none');
	})
	$('.cliqueSupprArticle, .supprArticle .fermer').click(function(){
		$('.supprArticle').toggle(500);
		$( '.article').css('display','none');
		$('.modifArticle').css('display','none');
		$( '.article').css('display','none');
		 $('.log').css('display','none');
		 $('.inscr').css('display','none');
		 $('.administration-admin').css('display','none');
	})
	$('.cliqueModifProfil, .modifProfil .fermer').click(function(){
		$('.modifProfil').toggle(500);
		$( '.supprProfil').css('display','none');
		$( '.article').css('display','none');
		 $('supprArticle').css('display','none');
		 $('.administration-admin').css('display','none');
	})
	$('.cliqueSupprProfil, .supprProfil .fermer').click(function(){
		$('.supprProfil').toggle(500);
		$( '.modifProfil').css('display','none');
		$( '.article').css('display','none');
		 $('supprArticle').css('display','none');
		 $('.administration-admin').css('display','none');
	})
	$('.administration, .fermer').click(function(){
		$('.administration-admin').toggle(500);
		$('.modifArticle').css('display','none');
		$( '.article').css('display','none');
		 $('.log').css('display','none');
		 $('.inscr').css('display','none');
		 $('.supprArticle').css('display','none');
	})
	$('.cliqueModifCommentaire').click(function(){
		$(this).next('.modifCommentaire').toggle(500);
	})
	$('.cliqueSupprCommentaire').click(function(){
		$(this).next('.supprCommentaire').toggle(500);
	})

	$('.nonPasSuppr').click(function(){
		$('.supprArticle').css('display','none');
	})
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
	});
	setInterval(function scrollTchat(){
		$('.tchat-content').scrollTop(5000)},100);

	$('.addldo').click(function(){
		 $( '.formldo' ).toggle(500);
	});
// ---------------------------------------------------------
//                      AJAX
// ---------------------------------------------------------

	$('#tchat').submit(function(info)
		{
			info.preventDefault();
			$message = $(this).find('#tchat_message').val();
			$id_user = $(this).find('#id_user').val();
			$.post($(this).attr('action'),{"message":$message , "id_user":$id_user}); 
			// function(data)
			// {
			// 	$('body').html(data);
			// });
			$('#tchat_message').val('');
			return false;
		});

	setInterval(function()
	{
		$.get('index.php?ajax=tchat-liste',function(data)
			{
				$('#tchat-content').html(data);
			});
	},500);


	$('#contact-form').submit(function(info)
		{
			info.preventDefault();
			$email = $(this).find('#contact-email').val();
			$nom = $(this).find('#contact-nom').val();
			$prenom = $(this).find('#contact-prenom').val();
			$objet = $(this).find('#contact-objet').val();
			$message = $(this).find('#contact-message').val();
			$.post($(this).attr('action'),
				{"message":$message ,
				 "email":$email,
				 "nom" : $nom,
				 "prenom" : $prenom,
				 "objet" :$objet
				}); 

			$.get('index.php?ajax=contact-ok',function(data)
			{
				$('#contact-content').html(data);
			});
			// function(data)
			// {
			// 	$('body').html(data);
			// });
			return false;
		});
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



