<!doctype html>
<html lang='ko'>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=Edge,chrome=1'>
<title>밴스의원</title>
<?php
    include_once "common/head_link.php"
?>
<link rel="stylesheet" href="index.css">
<script src='https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js'></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>
<body>
<?php
        include_once "../common/header.php";
    ?>
    <section>
        <img src="images/01_ 안 예뻐져요-min.png" alt="뱃살 고민">
        <img src="images/02_ 밴스스니키를 만나면_-min.png" alt="밴스 스키니">
    </section>
    <img src="images/03_나에게 딱 맞는-min.png" alt="나에게 딱 맞는 밴스" class="fullWidth">
    <section>
        <img src="images/03.5_이미지3+텍스트-min.png" alt="스키니 전신 광고">
    </section>
    <section class="review">
        <img src="images/04_한국모델협회 지정병원-min.png" alt="한국모델협회 병원 지정">
        <div class="swiper">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide"><div class="bgc"></div><img src="images/밴스옴므_후기롤링01-min.jpg" alt="밴스옴므_후기롤링01"></div>
                    <div class="swiper-slide"><div class="bgc"></div><img src="images/밴스옴므_후기롤링02-min.jpg" alt="밴스옴므_후기롤링02"></div>
                    <div class="swiper-slide"><div class="bgc"></div><img src="images/밴스옴므_후기롤링03-min.jpg" alt="밴스옴므_후기롤링03"></div>
                    <div class="swiper-slide"><div class="bgc"></div><img src="images/밴스옴므_후기롤링04-min.jpg" alt="밴스옴므_후기롤링04"></div>
                    <div class="swiper-slide"><div class="bgc"></div><img src="images/밴스옴므_후기롤링05-min.jpg" alt="밴스옴므_후기롤링05"></div>
                </div>
                <!-- Add Arrows -->
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
             </div>
        </div>
    </section>
    <section>
        <img src="images/06_특별한 이유-min.png" alt="특별한 이유">
        <img src="images/07_WHY 밴스주사 _-min.png" alt="왜? 밴스주사">
        <img src="images/08_TOP of TOP 밴스주사-min.png" alt="최고중의 최고 밴스주사">
        <div class="bgc">
            <img src="images/09_다이어트 컨설팅-min.png" alt="다이어트 컨설팅">
        </div>
    </section>
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