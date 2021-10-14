var width = $(window).width();

if(width<582){
  $('#contents .character').css('background-image','url(images/character02.png)');
}
$(window).resize(function(){
  if(width<582){
    $('#contents .character').css('background-image','url(images/character02.png)');
  }else{
    $('#contents .character').css('background-image','url(images/character.png)');
  }
})


  // 스크롤 탑에 따른 슬라이드다운 이벤트
  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    var obj = $('#contents').offset().top - $(window).height();
    if (scroll > obj) {
        $('#contents > .wrap:first-of-type > div::before').slideDown(1000)
    } else {
        $('.infoBar .float').removeClass('move')
    };
});
var swiper = new Swiper('.swiper-container', {
    spaceBetween:0,
    effect: 'fade',
    autoplay: true,
    loop: true,
    intervalTime: 4000,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });