// 메인 배너
var swiper = new Swiper('.mainBanner .swiper-container', {
  cssMode:false,
  slidesPerView: 1,
  spaceBetween: 0,
  loop: true,
  draggable:false,
  speed: 1000,
  intervalTime: 1000,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});
// 포폴 컨텐츠 배너
var appendNumber = 4;
  var prependNumber = 1;
  var swiper = new Swiper('.position .swiper-container', {
    slidesPerView: 'auto',
    centeredSlides: false,
    spaceBetween: 30,
    navigation: {
      nextEl: '.position .swiper-button-next',
      prevEl: '.position .swiper-button-prev',
    },
  });
  //스킨 선택 버티컬 스와이퍼
  var swiper = new Swiper('.skin .verticalSwiper .swiper-container', {
    direction: 'vertical',
    autoplay:true,
    loop:true,
    freeMode:false,
    simulateTouch: false,
    slidesPerView: 'auto',
  });
  // 스킨 선택 사이드 스와이퍼
  var swiper = new Swiper('.skin .sideSwiper .swiper-container',{
    autoplay:true,
    loop:true,
    spaceBetween: 20,
  })
// 스크롤슬라이드 스크립트
$(function() {
  $(window).scroll(function() {
      if ($(this).scrollTop() >= Math.ceil($('.scrollSlide').offset().top)) {
        $('.scrollSlide').addClass('move')
      } else {
        $('.scrollSlide').removeClass('move')
      }
  });
});
// 스킨커버 스크롤 슬라이드 이벤트
$(function() {
  $(window).scroll(function() {
      if ($(this).scrollTop() >= Math.ceil($('.skinCover').offset().top)) {
        $('.skinCover').addClass('move')
      } else {
        $('.skinCover').removeClass('move')
      }
  });
});