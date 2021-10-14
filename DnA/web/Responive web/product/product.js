$(function(){
	$('#size li').click(function(){
		$('#size li').removeClass('select');
		$(this).addClass('select');
	});
	var wt = $(window).width();
	var click = 0;
	$('.detail h2').on('click',function(){
		if(click==0){
			$(this).siblings('.slideUp').stop().slideDown();
			$(this).siblings('.arrow').css('-webkit-transform','rotate('+180+'deg)');
			click=1;
		}else {
			$(this).siblings('.slideUp').stop().slideUp();
			$(this).siblings('.arrow').css('-webkit-transform','rotate('+0+'deg)');
			click=0;
		}
	});
});