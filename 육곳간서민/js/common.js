$(function(){

    var wt = $(window).width();
    var ht = $(window).height();
    var headHt = $('header').height();
   		var elm = "section";
   		$(elm).each(function (index) {
   		    // 개별적으로 Wheel 이벤트 적용
   		    $(this).on("mousewheel DOMMouseScroll", function (e) {
   		        e.preventDefault();
   		        var delta = 0;
   		        if (!event) event = window.event;
   		        if (event.wheelDelta) {
   		            delta = event.wheelDelta / 120;
   		            if (window.opera) delta = -delta;
   		        } 
   		        else if (event.detail)
   		            delta = -event.detail / 3;
   		        var moveTop = $(window).scrollTop();
   		        var elmSelecter = $(elm).eq(index);
   		        // 마우스휠을 위에서 아래로
   		        if (delta < 0) {
   		            if ($(elmSelecter).next() != undefined) {
   		                try{
   		                    moveTop = $(elmSelecter).next().offset().top;
   		                }catch(e){}
   		            }
   		        // 마우스휠을 아래에서 위로
   		        } else {
   		            if ($(elmSelecter).prev() != undefined) {
   		                try{
   		                    moveTop = $(elmSelecter).prev().offset().top;
   		                }catch(e){}
   		            }
   		        }
   		         
   		        // 화면 이동
   		        $("html,body").stop(true,false).animate({
   		            scrollTop: moveTop + 'px'
   		        }, {
   		            duration: 1100, complete: function () {
   		            }
   		        });
   		    });
   		});
      $( window ).scroll( function() {
        $('section').each(function(){
			var ot = $(this).offset().top - 300;
			var oft = $(this).offset().top;
			var st = $(window).scrollTop();
			var index = $(this).index();
          if(st>=ot){
            $('.lnb>li').removeClass('focus');
            $('.lnb>li').eq(index).addClass("focus");
			$(this).addClass("focus");
          }
		});
      });
	  $(document).ready(function() {
        $('section').each(function(){
			var ot = $(this).offset().top - 300;
			var oft = $(this).offset().top;
			var st = $(window).scrollTop();
			var index = $(this).index();
          if(st>=ot){
            $('.lnb>li').removeClass('focus');
            $('.lnb>li').eq(index).addClass("focus");
			$(this).addClass("focus");
          }
		});
      })
    $(".top").click(function(){
    $('html').stop().animate({
     scrollTop:0
    },800)
    })
   $('section').css({
       'height':ht,
    });
	$('section:first-of-type').addClass("focus");
    $('section:last-of-type').css('height','auto');
	var li = $('section').length - 1;
	for(i=0;i<li;i++){
		$('.lnb').append('<li></li>');
	}
	$('.lnb>li:first-of-type').addClass('focus');
	$('.lnb li').on('click',function(){
		var i = $(this).index();
		var nowTop = ht * (i);
		$('html,body').stop().animate({
		   scrollTop:nowTop
		},1500);
		});
		$( window ).scroll( function() {
			$('section').each(function(){
				var ot = $(this).offset().top - 500;
				var oft = $(this).offset().top;
				var st = $(window).scrollTop();
				var index = $(this).index();
			  if(st>=ot){
				$('.lnb>li').removeClass('focus');
				$('.lnb>li').eq(index).addClass("focus");
				$(this).addClass("focus");
			  }
			});
		  });
});