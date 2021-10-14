var sw = $('.two').width();
var wt = $(window).width();
    var bw = sw/4/2;
    $('.two .swiper-button-next, .swiper-container-rtl .swiper-button-prev,.two .swiper-button-prev, .swiper-container-rtl .swiper-button-next').css({'width':bw})
    $('.two .swiper-button-prev, .swiper-container-rtl .swiper-button-next').css('right',-bw);
    $('.two .swiper-button-next, .swiper-container-rtl .swiper-button-prev').css('left',-bw);

    $('.two .sw .swiper-container:first-of-type').css('display','block');
    
    var swiper = new Swiper('.one .swiper-container', {
      slidesPerView: 'auto',
      loop:true,
      autoplay:{
        delay:1000,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
    var swiper = new Swiper('.two .swiper-container', {
      slidesPerView: 1,
      loop:true,
      autoplay:true,
      allowTouchMove: false,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        500: {
          slidesPerView: 2,
        },
      },
    });
    $('.ca > li').click(function(){
      var content = $(this).index();
      $('.two .swiper-container').css('display','none');
      $('.two .sw .swiper-container').eq(content).css('display','block');
      $('.ca > li').removeClass('focus');
      $(this).addClass('focus');
      var swiper = new Swiper('.two .swiper-container', {
      slidesPerView: 1,
      loop:true,
      autoplay:true,
      allowTouchMove: false,
      loopAdditionalSlides: 2,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        500: {
          slidesPerView: 2,
        },
      },
    });
    });
    if(wt<500){
      $('.two .swiper-button-prev, .swiper-container-rtl .swiper-button-next').css('right',0);
      $('.two .swiper-button-next, .swiper-container-rtl .swiper-button-prev').css('left',0);  

      $('.two .swiper-container:nth-of-type(4) .txtWrap p').css('margin-left: 8rem');
    }

