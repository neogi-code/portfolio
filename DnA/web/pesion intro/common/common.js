    // html dom 이 다 로딩된 후 실행된다.
    $(document).ready(function(){
      $('header .gnb > li').hover(function(){
        $(this).children('ul').stop().slideDown();
      },function(){
        $(this).children('ul').stop().slideUp();
      }
      );
		var gnbOffset = $( 'header .gnb>li' ).offset();
		var onOff = Number
        $( window ).scroll( function() {
          if ( $( document ).scrollTop() > gnbOffset.top ) {
            $( 'header .gnb' ).addClass( 'fixed' );
          }
          else {
            $( 'header .gnb' ).removeClass( 'fixed' );
          }
		});
    })
    $('a[href="#"]').click(function(e) {
      e.preventDefault();
    });
    // 공통배너 스와이퍼
  var swiper = new Swiper('.commonBanner .swiper-container', {
    cssMode:true,
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    intervalTime: 1000,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    mousewheel: {
      invert:true,
    },
    autoplay: {
      delay: 5000,
    },
  });
  // 메뉴 리스트 클릭 시 div 변경
  $('.content .menu > li').click(function(){
    var index = $(this).index();
    $('.content .menu > li').removeClass('focus');
    $(this).addClass('focus');
    $('.content .cover > div').removeClass('focus');
    $('.content .cover > div').eq(index).addClass('focus');
});
  // 스크롤 탑에 따른 푸터 이벤트
	$(window).scroll(function() {
		var scroll = $(window).scrollTop();
		var obj = $('.infoBar').offset().top - $(window).height();
		if (scroll > obj) {
			$('.infoBar .float').addClass('move')
		} else {
			$('.infoBar .float').removeClass('move')
		};
  });