<!doctype html>
<html lang='ko'>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=Edge,chrome=1'>
<title>vr</title>
<meta name='viewport' content='width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0'>
<meta name='title' content=''>
<meta name='description' content=''>
<meta name='keyword' content=''>
<meta property='og:title' content=''>
<meta property='og:description' content=''>
<meta property='og:image' content='http://이미지 경로(절대경로)'>
<meta property='og:url' content='http://웹주소'>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<link rel="stylesheet" href="normalize.css">
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<link rel="stylesheet" href="index.css">
<script src='https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js'></script>
<script src="https://kit.fontawesome.com/7d82baa645.js" crossorigin="anonymous"></script>
</head>
<body>
    <header></header>
    <main>
        
        <section id="vr">
             <!-- Swiper -->
  <div class="swiper-container">
            <div class="wrap">
                <img src="images/jeju.png" alt="제주" class="jeju">
            </div>
    <div class="swiper-pagination gal"></div>
    <div class="swiper-wrapper">
      <div class="swiper-slide">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/_3Vsy3k4WqA?enablejsapi=1&version=3&playerapiid=ytplayer" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
      </div>
      <div class="swiper-slide">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/80XvYwBxGhg?enablejsapi=1&version=3&playerapiid=ytplayer" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="swiper-slide">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/gLatnL0R9Pg?enablejsapi=1&version=3&playerapiid=ytplayer" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
      <div class="swiper-slide">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/U042VJmN2T8?enablejsapi=1&version=3&playerapiid=ytplayer" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination pin"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next arrow"></div>
    <div class="swiper-button-prev arrow"></div>
  </div>
        </section>
    </main>
    <footer></footer>
    <script>
 var swiper = new Swiper('.swiper-container', {
        slidesPerView:'auto',
      spaceBetween: 30,
      centeredSlides: true,
      loop:true,
      
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });

    //핀 모양 생성
    $('.pin .swiper-pagination-bullet').append('<i class="fas fa-map-marker-alt fa-lg"></i>');
    $('.gal .swiper-pagination-bullet').append('<img src="" alt="">');

    $('.gal .swiper-pagination-bullet:first-of-type img').attr('src','images/sungsan.jpg');
    $('.gal .swiper-pagination-bullet:nth-of-type(2) img').attr('src','images/glass.jpg');
    $('.gal .swiper-pagination-bullet:nth-of-type(3) img').attr('src','images/got.jpg');
    $('.gal .swiper-pagination-bullet:nth-of-type(4) img').attr('src','images/sehwa.jpg');


    function pause(){
            $("iframe").each(function() { //각 iframe 에 함수 적용
		        $(this)[0].contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}', '*')
                // 유튜브 영상 중지
		    });
        }

    $('.swiper-pagination-bullet').click(pause);
    $('.arrow').click(pause);
      
    // setInterval(function(){
    //   $('.swiper-slide-duplicate-prev').find("iframe").each(function() { //각 iframe 에 함수 적용
		//         $(this)[0].contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}', '*')
    //             // 유튜브 영상 중지
		//     });
    // })

  var drag_x1 = false;
  $('.swiper-wrapper').on({
    mousedown: function(event) {
      event = $('.swiper-slide-duplicate-active');
      drag_x1 = event.offsetX;
    },
    mouseup: function(event) {
      if(event.offsetX - drag_x1 > 100) {
      	$(".wrap").append( $("<li>오른쪽으로 드래그</li>") );
      }
      if(event.offsetX - drag_x1 < -100) {
      	$(".wrap").append( $("<li>왼쪽으로 드래그</ li>") );
      }
    }
  });
  // var offset = 0;
  // $('.swiper-wrapper').on({
  //   mousedown:function (){
  //     $('.swiper-slide-active')
  //   }
  // })
    </script>
</body>