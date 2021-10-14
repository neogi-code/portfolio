$(window).scroll(function () {

  var scrollTop = $(this).scrollTop();
  var windowHeight = $(this).height();

  var visibleBottom = scrollTop + windowHeight;

  var $activeOnView = $('.fill');

  // 언젠가는 $activeOnView 안에 들어있는 엘리먼트의 개수가 0개 => 모든 view 클래스 요소가 없어지는 때
  if ($activeOnView.length == 0) {
    // 함수를 여기서 종료 왜냐하면 이미 모든 엘리먼트가 active 되었기 때문에
    return;
  }

  var scrollTop = $(this).scrollTop();
  var windowHeight = $(this).height();

  var visibleBottom = scrollTop + windowHeight;

  $activeOnView.each(function (index, node) {
  // $(node).offset().top => 엘리먼트의 정수리와 body의 맨 위 부분까지의 거리
  if (visibleBottom > $(node).offset().top) {
    $(node).addClass('active');
    }
  });
});
$('.color').each(function(){
  var color = $(this).text();
  $(this).css('background-color',color);
});
var elm = ".section";
$(elm).each(function (index) {
    // 개별적으로 Wheel 이벤트 적용
    $(this).on("mousewheel DOMMouseScroll", function (e) {
        e.preventDefault();
        var delta = 0;
        if (!event) event = window.event;
        if (event.wheelDelta) {
            delta = event.wheelDelta / 120;
            if (window.opera) delta = -delta;
        } 
        else if (event.detail)
            delta = -event.detail / 3;
        var moveTop = $(window).scrollTop();
        var elmSelecter = $(elm).eq(index);
        // 마우스휠을 위에서 아래로
        if (delta < 0) {
            if ($(elmSelecter).next() != undefined) {
                try{
                    moveTop = $(elmSelecter).next().offset().top;
                }catch(e){}
            }
        // 마우스휠을 아래에서 위로
        } else {
            if ($(elmSelecter).prev() != undefined) {
                try{
                    moveTop = $(elmSelecter).prev().offset().top;
                }catch(e){}
            }
        }
         
        // 화면 이동
        $("html,body").stop(true,false).animate({
            scrollTop: moveTop + 'px'
        }, {
            duration: 1200, complete: function () {
            }
        });
    });
  });
$('#view .img').hover(function(){
  $(this).addClass('active');
},function(){
  $(this).removeClass('active');
})
var str = '숙면 사이클';
var typing = ' ';
var i = 0;
(function type() {
  if(i < str.length){
    typing = typing+str.charAt(i);
    $('#type').text(typing+'_');
  }else{
    $('#type').text(typing);
    return false;
  }
  var ran = Math.floor(Math.random() * 150) + 75;//this gives a random delay between each character so it feels more realistic
  //set ran to a fixed number if you want consistent speed.
  setTimeout(function(){
    type();
  }, ran)
  i++;
}());
