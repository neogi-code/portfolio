<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>밴스의원</title>
    <?php
        include_once "head_link.php";
    ?>
    <link rel="stylesheet" href="index.css">
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>
<body>
    <?php
        include_once "../common/header.php";
    ?>
    <div class="container">
        <section>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><div class="bgc"></div><img src="images/허벅지_01.jpg" alt="허벅지_01"></div>
                    <div class="swiper-slide"><div class="bgc"></div><img src="images/허벅지_02.jpg" alt="허벅지_02"></div>
                    <div class="swiper-slide"><div class="bgc"></div><img src="images/허벅지_03.jpg" alt="허벅지_03"></div>
                    <div class="swiper-slide"><div class="bgc"></div><img src="images/허벅지_04.jpg" alt="허벅지_04"></div>
                    <div class="swiper-slide"><div class="bgc"></div><img src="images/허벅지_05.jpg" alt="허벅지_05"></div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
             </div>
        </section>
        <section>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><div class="bgc"></div><img src="images/복부_01.jpg" alt="복부_01"></div>
                    <div class="swiper-slide"><div class="bgc"></div><img src="images/복부_02.jpg" alt="복부_02"></div>
                    <div class="swiper-slide"><div class="bgc"></div><img src="images/복부_03.jpg" alt="복부_03"></div>
                    <div class="swiper-slide"><div class="bgc"></div><img src="images/복부_04.jpg" alt="복부_04"></div>
                    <div class="swiper-slide"><div class="bgc"></div><img src="images/복부_05.jpg" alt="복부_05"></div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
             </div>
        </section>
        <section>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><div class="bgc"></div><img src="images/팔_01.jpg" alt="팔_01"></div>
                    <div class="swiper-slide"><div class="bgc"></div><img src="images/팔_02.jpg" alt="팔_02"></div>
                    <div class="swiper-slide"><div class="bgc"></div><img src="images/팔_03.jpg" alt="팔_03"></div>
                    <div class="swiper-slide"><div class="bgc"></div><img src="images/팔_04.jpg" alt="팔_04"></div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
             </div>
        </section>
        <section>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><div class="bgc"></div><img src="images/하체_01.jpg" alt="하체_01"></div>
                    <div class="swiper-slide"><div class="bgc"></div><img src="images/하체_02.jpg" alt="하체_02"></div>
                    <div class="swiper-slide"><div class="bgc"></div><img src="images/하체_03.jpg" alt="하체_03"></div>
                    <div class="swiper-slide"><div class="bgc"></div><img src="images/하체_04.jpg" alt="하체_04"></div>
                    <div class="swiper-slide"><div class="bgc"></div><img src="images/하체_05.jpg" alt="하체_05"></div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
             </div>
        </section>
        <section>
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><div class="bgc"></div><img src="images/전신_01.jpg" alt="전신_01"></div>
                    <div class="swiper-slide"><div class="bgc"></div><img src="images/전신_02.jpg" alt="전신_02"></div>
                    <div class="swiper-slide"><div class="bgc"></div><img src="images/전신_03.jpg" alt="전신_03"></div>
                    <div class="swiper-slide"><div class="bgc"></div><img src="images/전신_04.jpg" alt="전신_04"></div>
                    <div class="swiper-slide"><div class="bgc"></div><img src="images/전신_05.jpg" alt="전신_05"></div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
             </div>
        </section>
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