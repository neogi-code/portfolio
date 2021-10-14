<!doctype html>
<html lang='ko'>
<head>
<meta charset='utf-8'>
<meta http-equiv='X-UA-Compatible' content='IE=Edge,chrome=1'>
<title>밴스의원</title>
<?php
    include_once "common/head_link.php";
?>
<link rel="stylesheet" href="index.css">
<script src='https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js'></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>  
<script>
  document.getElementById('vid').play();
</script>
</head>
<body>
    <?php
        include_once "common/header_main.php";
    ?>
    <main>
    <section class="intro">
        <div class="wrap">
            <div class="container">
                <!-- Swiper -->
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="images/밴스_상담사이트_메인롤링_01.jpg" alt="밴스_상담사이트_메인롤링_01"></div>
                        <div class="swiper-slide"><img src="images/밴스_상담사이트_메인롤링_02.jpg" alt="밴스_상담사이트_메인롤링_02"></div>
                        <div class="swiper-slide"><img src="images/밴스_상담사이트_메인롤링_03.jpg" alt="밴스_상담사이트_메인롤링_03"></div>
                        <div class="swiper-slide"><img src="images/밴스_상담사이트_메인롤링_04.jpg" alt="밴스_상담사이트_메인롤링_04"></div>
                        <!--<div class="swiper-slide"><img src="images/밴스_상담사이트_메인롤링_05.jpg" alt="밴스_상담사이트_메인롤링_05"></div>-->
                        <div class="swiper-slide"><img src="images/밴스_상담사이트_메인롤링_06.jpg" alt="밴스_상담사이트_메인롤링_06"></div>
                    </div>
                    <!-- Add Pagination -->
                    <div class="swiper-pagination"></div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next arrow"></div>
                    <div class="swiper-button-prev arrow"></div>
                </div>
                <img src="images/오른쪽.png" alt="5주 프로젝트">
            </div>
            <div class="txtBox">
                <p>"성공하는 다이어트는 이유가 있습니다"</p>
                <h2>VandS <span>다이어트 컨설팅</span> 프로그램</h2>
            </div>
        </div>
    </section>
    <section class="program">
        <div class="gridBox">
            <div class="gridItem"><a href="팔복허벅지/index.php"></a></div>
            <div class="gridItem"><a href="밴스크롭탑/index.php"></a></div>
            <div class="gridItem column"><a href="스키니 하체/index.php"></a></div>
            <div class="gridItem"><a href="코르셋상체/index.php"></a></div>
            <div class="gridItem"><a href="전신 스키니/index.php"></a></div>
            <div class="gridItem"><a href="허벅지295/index.php"></a></div>
            <div class="gridItem"><a href="옴므/index.php"></a></div>
            <div class="gridItem"><a href="Q&A/index.php"></a></div>
        </div>
    </section>
    <section class="video">
            <video id="vid" width="100%" height="" controls="controls" loop="loop" autoplay="autoplay" muted="muted">
				<source src="images/01.mp4" type="video/mp4">
			</video>
    </section>
    <section class="strength">
        <div class="txtBox">
            <p>매월 1,000명의 밴스어터분들의 선택한 다이어트</p>
            <h2><span class="color">라인을 빼야 진짜 다이어트<br></span><span>밴스의원</span>과 함께 지금부터 시작하세요!</h2>
        </div>
        <div class="gridBox">
            <div class="gridItem"><img src="images/01.png" alt="변화1"></div>
            <div class="gridItem"><img src="images/02.png" alt="변화2"></div>
            <div class="gridItem"><img src="images/03.png" alt="변화3"></div>
            <div class="gridItem"><img src="images/04.png" alt="변화4"></div>
            <div class="gridItem"><img src="images/05.png" alt="변화5"></div>
            <div class="gridItem"><img src="images/06.png" alt="변화6"></div>
        </div>
    </section>
    <section class="end">
        <div class="img"><img src="images/03_선택받은 이유.png" alt="선택받은 이유"></div>
        <div class="linked">
            <div class="wrap">
                <a href="식단표/index.php"><span>VandS <span class="color">식단 안내</span></span></a>
                <a href="시술 후 주의사항/index.php"><span>VandS <span class="color">프로그램<br>시술 후, 주의사항</span></span></a>
            </div>
        </div>
    </section>
</main>
    <script>
    var swiper = new Swiper('.swiper-container', {
        speed: 500,
        loop: true,
        autoplay:{
            delay:3000,
            disableOnInteraction:false,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination'
        },
    });
    </script>
</body>
</html>