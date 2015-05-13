$('document').ready(function()
{
	$('.header .signin').click(function(){
		$('.notvisiblein').css('display','block');
		$('.notvisiblelog').css('display','none');
	});

	$('.header .signup').click(function(){
		$('.notvisiblelog').css('display','block');
		$('.notvisiblein').css('display','none');
	});
});