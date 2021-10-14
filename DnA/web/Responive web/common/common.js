$(function(){
	$("a[href='#'").click(function(e){
		e.preventDefault();
	})
	$(window).scroll(function(){
		var wt = $(window).width();
		var sc = $(window).scrollTop();
		var hd = $('header').height();
		if(wt>415 && sc>hd){
			$('header .top').stop().css('display','none');
		}else{
			$('header .top').stop().css('display','flex');
		};
	});
	$('.topBtn').click(function(){
		$('html,body').stop().animate({
			scrollTop:0
		},500)
	});
	var wt = $('body').width();
	if(wt<=414){
		var click = 0;
		$('h2').on('click',function(){
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
	}
	$('.hamBtn').click(function(){
		$('.gnb').animate({left:0},500);
	});
	$('.close').click(function(){
		$('.gnb').animate({left:-100+"%"});
	})
});