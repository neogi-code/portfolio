$('header .gnb > li').mouseenter(function(){
    $(this).children('ul').stop().slideDown();
})
$('header .gnb > li').mouseleave(function(){
    $(this).children('ul').stop().slideUp();
})
if ( $( window ).scrollTop() != 0 ) {
    $( 'header' ).addClass( 'fixed' );
  }
  else {
    $( 'header' ).removeClass( 'fixed' );
  }
$( window ).scroll( function() {
    $('section').each(function(){
      var ot = $(this).offset().top - 300;
      var st = $(window).scrollTop();
      var index = $(this).index();
      if(st>=ot){
        $('.lnb>li').removeClass('focus');
        $('.lnb>li').eq(index).addClass("focus");
      }
      if(st>=500){
          $('.top').addClass('focus');
      }else{
        $('.top').removeClass('focus');
      }
  })
  if ( $( window ).scrollTop() != 0 ) {
    $( 'header' ).addClass( 'fixed' );
  }
  else {
    $( 'header' ).removeClass( 'fixed' );
  }
});
var ht = $('header').height();
$('.lnb li').on('click',function(){
    var index = $(this).index();
    var offset = $('section').eq(index).offset();
$('html').stop().animate({
 scrollTop:offset.top-ht
},800)
});
$(".top").click(function(){
$('html').stop().animate({
 scrollTop:0
},800)
})