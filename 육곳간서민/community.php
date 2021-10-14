<?php
    include_once "html_head.php"
?>
<link rel="stylesheet" href="css/community.css">
<script src='https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js'></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>
<body>
<?php
        include_once "header.php"
    ?>
    <div class="main">
    <section class="one">
        <p>육곳간 서민의 소식을 전해드립니다.</p>
        <!-- Swiper -->
    <div class="swiper-container mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide"><a href="https://instagram.com/hjfood2021" target="_blank"><img src="images/co1.jpg" alt=""></a></div>
        <div class="swiper-slide"><a href="https://instagram.com/hjfood2021" target="_blank"><img src="images/co2.jpg" alt=""></a></div>
        <div class="swiper-slide"><a href="https://instagram.com/hjfood2021" target="_blank"><img src="images/co3.jpg" alt=""></a></div>
        <div class="swiper-slide"><a href="https://instagram.com/hjfood2021" target="_blank"><img src="images/co4.jpg" alt=""></a></div>
        <div class="swiper-slide"><a href="https://instagram.com/hjfood2021" target="_blank"><img src="images/co5.jpg" alt=""></a></div>
        <div class="swiper-slide"><a href="https://instagram.com/hjfood2021" target="_blank"><img src="images/co6.jpg" alt=""></a></div>
        <div class="swiper-slide"><a href="https://instagram.com/hjfood2021" target="_blank"><img src="images/co7.jpg" alt=""></a></div>
      </div>
      <div class="swiper-button-next arrow"></div>
      <div class="swiper-button-prev arrow"></div>
    </div>
    </section>
    <section class="two">
        <div class="txtWrap">
          <h3>월요일 - 일요일</h3>
          <p class="en">OPEN AM 11:00<br>
          CLOSE PM 10:00</p>
        </div>
        <span>자세한 문의 사항은 <span class="en">Q&A</span> 게시판에 문의해 주세요.</span>
    </section>
    <?php
        include_once "footer.php"
        ?>
        <ul class="lnb"></ul>
    </div>
    <script src="js/common.js"></script>
    <script>
        var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        loop:true,
        autoplay:{
            delay:2000,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        breakpoints: {
        500: {
          slidesPerView: 'auto',
        },
      },
      });
    </script>
</body>
</html>