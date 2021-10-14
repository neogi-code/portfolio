<?php
    include_once 'common/html_head.php';
?>
<link rel="stylesheet" href="index.css">
<script src='https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js'></script>
<!-- <script src="https://kit.fontawesome.com/7d82baa645.js" crossorigin="anonymous"></script> -->
</head>
<body>
    <?php
        include_once 'common/header.php'
    ?>
    <main>
        <section id="intro">
            <div class="wrap">
                <img src="images/main.png" alt="메인">
                <a href="http://revelyview.cafe24.com/index.php" target="_blank" class="dna">DnA 바로가기</a>
            </div>
        </section>
        <section id="about" style="height:100vh">
            <div class="wrap">
                <h2>ABOUT</h2>
                <p>아꼬미즈는 '사랑스럽다, 아껴주고 싶다' 라는 의미를 지닌 '아꼽다'에서 따온 이름으로, 제주를 대표하는 꽃 4가지를 모티브로 만들어진 캐릭터 입니다.<br>
                    퓨(벚꽃),차차(유채꽃),하리(억새꽃),샤샤(동백꽃)와 함께 제주의 생태계와 꽃들에 얽힌 이야기를 알아볼까요?
                </p>
                <div class="videoWrap">
                    <div class="videoContainer">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/JDxXkCuvvgY?enablejsapi=1&version=3&playerapiid=ytplayer" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>
        <section id="instagram">
            <h2>FlowerGram</h2>
            <div class="wrap">
                <div class="insta"><a href="#"></a><img src="https://via.placeholder.com/230" alt=""></div>
                <div class="insta"><a href="#"></a><img src="https://via.placeholder.com/230" alt=""></div>
                <div class="insta"><a href="#"></a><img src="https://via.placeholder.com/230" alt=""></div>
                <div class="insta"><a href="#"></a><img src="https://via.placeholder.com/230" alt=""></div>
                <div class="insta"><a href="#"></a><img src="https://via.placeholder.com/230" alt=""></div>
                <div class="insta"><a href="#"></a><img src="https://via.placeholder.com/230" alt=""></div>
            </div>
        </section>
    </main>
    <ul class="lnb">
        <li class="focus">01<span>HELLO</span></li>
        <li>02<span>ABOUT</span></li>
        <li>03<span>FLOWERGRAM</span></li>
    </ul>
<?php
    include_once "common/footer.php";
?>
</body>