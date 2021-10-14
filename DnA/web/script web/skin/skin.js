var appendNumber = 4;
  var prependNumber = 1;
  var swiper = new Swiper('.skin .swiper-container', {
    slidesPerView: 'auto',
    centeredSlides: false,
    spaceBetween: 30,
    navigation: {
      nextEl: '.swiper-container .swiper-button-next',
      prevEl: '.swiper-container .swiper-button-prev',
    },
  });