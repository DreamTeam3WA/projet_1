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

var startOff;
var endOff;
	function getSelectionHtml() 
	{
	    var html = "";
	    if (typeof window.getSelection != "undefined") 
	        {
	        var sel = window.getSelection();
	        startOff = sel.getRangeAt(0).startOffset;
	        endOff = sel.getRangeAt(0).endOffset;
	        console.log(sel.getRangeAt(0).startOffset, sel.getRangeAt(0).endOffset);
	        if (sel.rangeCount) 
	            {
	            var container = document.createElement("div");
	            for (var i = 0, len = sel.rangeCount; i < len; ++i) {
	                container.appendChild(sel.getRangeAt(i).cloneContents());
	            }
	            html = container.innerHTML;
	        }
	    } else if (typeof document.selection != "undefined") {
	        if (document.selection.type == "Text") {
	            html = document.selection.createRange().htmlText;
	        }
	    }
	    return html;
	}
	var selection = "";
	$(document).on('mouseup','#message',function(){
		selection = getSelectionHtml();
});
   	$('.styletexte .gras').click(function(){
   		if ( $('selection').hasClass('gras') == false)
   		{
   		var content = $('#message').html();
   		content = content.substring(0, startOff)+'<span class="gras">' + selection +'</span>'+content.substr(endOff);
		$('#message').html(content);
		}
		else 
		{
			var content = $('#message').html();
   			content = content.substring(0, startOff)+selection.css("font-weigth","none")+content.substr(endOff);
		$('selection').classList.remove("gras");
		}
	});

	$('.styletexte .italic').click(function(){
		var content = $('#message').html();
   		content = content.substring(0, startOff)+'<span class="italic">' + selection +'</span>'+content.substr(endOff);
		$('#message').html(content);
	});

	$('.styletexte .souligne').click(function(){
		var content = $('#message').html();
   		content = content.substring(0, startOff)+'<span class="souligne">' + selection +'</span>'+content.substr(endOff);
		$('#message').html(content);
	});

	$('.styletexte .liste').click(function(){
		$('#message').append("<ul><li><li></ul>");
	});

	$('.styletexte .police').click(function(){
		$('.selectionpolice').css("display","block");
	});

	$('.fermercouleur3').click(function(info){
		$('.selectionpolice').css("display","none");
		info.stopPropagation();
	});

	$('.styletexte .couleurpolice').click(function(){
		$('.couleurpoliceblock').css("display","block");
	});

	$('.fermercouleur').click(function(info){
		$('.couleurpoliceblock').css("display","none");
		info.stopPropagation();
	});

	$('.styletexte .couleurpolice2').click(function(){
		$('.couleurpoliceblock2').css("display","block");
	});

	$('.fermercouleur2').click(function(info){
		$('.couleurpoliceblock2').css("display","none");
		info.stopPropagation();
	});

	$('.couleurpoliceblock .bleu').click(function(){
		$('#message').css('color','blue');
	});

	$('.couleurpoliceblock .bleuciel').click(function(){
		$('#message').css('color','#00E4FF');
	});

	$('.couleurpoliceblock .vertflash').click(function(){
		$('#message').css('color','#00FF4D');
	});

	$('.couleurpoliceblock .vert').click(function(){
		$('#message').css('color','green');
	});

	$('.couleurpoliceblock .gris').click(function(){
		$('#message').css('color','grey');
	});

	$('.couleurpoliceblock .orange').click(function(){
		$('#message').css('color','orange');
	});

	$('.couleurpoliceblock .rouge').click(function(){
		$('#message').css('color','red');
	});

	$('.couleurpoliceblock .rose').click(function(){
		$('#message').css('color','pink');
	});

	$('.couleurpoliceblock .violet').click(function(){
		$('#message').css('color','purple');
	});

	$('.couleurpoliceblock2 .bleu').click(function(){
		$('#message').css('background','blue');
	});

	$('.couleurpoliceblock2 .bleuciel').click(function(){
		$('#message').css('background','#00E4FF');
	});

	$('.couleurpoliceblock2 .vertflash').click(function(){
		$('#message').css('background','#00FF4D');
	});

	$('.couleurpoliceblock2 .vert').click(function(){
		$('#message').css('background','green');
	});

	$('.couleurpoliceblock2 .gris').click(function(){
		$('#message').css('background','grey');
	});

	$('.couleurpoliceblock2 .orange').click(function(){
		$('#message').css('background','orange');
	});

	$('.couleurpoliceblock2 .rouge').click(function(){
		$('#message').css('background','red');
	});

	$('.couleurpoliceblock2 .rose').click(function(){
		$('#message').css('background','pink');
	});

	$('.couleurpoliceblock2 .violet').click(function(){
		$('#message').css('background','purple');
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
