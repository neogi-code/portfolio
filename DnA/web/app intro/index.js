var swiper = new Swiper('.swiper-container', {
    slidesPerView: 5,
    spaceBetween: 15,
    autoplay: true,
    loop: true,
});
$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    var ht = $(window).height()
    var obj = $('#fullColor .bgi').offset().top - ht;
    var map = $('#map img').offset().top - ht + 400;
    var sImg = $('#search img').offset().top - ht + 400;
    var coupon = $('#coupon img').offset().top - ht + 400;
    if (scroll > obj) {
        $('#fullColor *').css({
            'transform':'translateY(0)',
            'opacity':'1'
        })
    } if (scroll >= map) {
        $('#map img').css({
            'transform':'translateY(0)',
            'opacity':'1'
        })
    } if (scroll >= sImg) {
        $('#search img').css({
            'transform':'translateX(0)',
            'opacity':'1'
        })
    } if (scroll >= coupon) {
        $('#coupon img').css({
            'transform':'translateY(0)',
            'opacity':'1'
        })
    }
});
$('.float').on('click',function(){
    var ht = $(window).height();
    var i = $(this).index();
    $('html,body').stop().animate({
       scrollTop:0
    },1000)
});