<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>밴스의원</title>
    <?php
    include_once "common/head_link.php"
?>
    <link rel="stylesheet" href="index.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>
<body>
    <?php
        include_once "../common/header.php"
    ?>
    <div class="container">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide"><img src="images/Q&A롤링01.jpg" alt="Q&A_01"></div>
                <div class="swiper-slide"><img src="images/Q&A롤링02.jpg" alt="Q&A_02"></div>
				<div class="swiper-slide"><img src="images/Q&A롤링03.jpg" alt="Q&A_03"></div>
                <div class="swiper-slide"><img src="images/Q&A롤링04.jpg" alt="Q&A_04"></div>
				<div class="swiper-slide"><img src="images/Q&A롤링05.jpg" alt="Q&A_05"></div>
                <div class="swiper-slide"><img src="images/Q&A롤링06.jpg" alt="Q&A_06"></div>
				<div class="swiper-slide"><img src="images/Q&A롤링07.jpg" alt="Q&A_07"></div>
                <div class="swiper-slide"><img src="images/Q&A롤링08.jpg" alt="Q&A_08"></div>
            </div>
            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
         </div>
    </div>
    <script>
        var swiper = new Swiper('.swiper-container', {
          speed: 600,
          loop: true,
          autoplay:{
              delay:3000,
              disableOnInteraction:false,
          },
          slidesPerView: 'auto',
          spaceBetween: 200,
          pauseOnFocus: false,
          centeredSlides: true,
          navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
          },
      });  
    </script>
</body>
</html>