var swiper = new Swiper('.main .swiper-container', {
	cssMode:true,
	slidesPerView: 1,
	spaceBetween: 0,
	autoplay: {
		delay:6000,
	},
	loop: true,
	intervalTime: 1000,
	navigation: {
	  nextEl: '.swiper-button-next',
	  prevEl: '.swiper-button-prev',
	},
	mousewheel: {
	  invert:true,
	},
  });