var swiper = new Swiper('.commonBanner .swiper-container', {
    cssMode:true,
    slidesPerView: 1,
    spaceBetween: 0,
    loop: true,
    intervalTime: 1000,
    navigation: {
      nextEl: '.swiper-button-next',
      addClass:'fadeIn',
      prevEl: '.swiper-button-prev',
    },
    mousewheel: {
      invert:true,
    },
  });