  // 메뉴 리스트 클릭 시 div 변경
  $('.headSection ul > li').click(function(){
    var index = $(this).index();
    $('.headSection ul > li').removeClass('focus');
    $(this).addClass('focus');
    $('section > .wrapper').removeClass('focus');
    $('section > .wrapper').eq(index).addClass('focus');
});
