<?php
    include_once 'html_head.php';
    include_once 'link.php';
?>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
<link rel="stylesheet" href="content_common.css">
<link rel="stylesheet" href="service.css">
<script src='https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js'></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script></head>
<body>
    <!-- 헤더 -->
    <?php
        include_once 'header.php'
    ?>
    <main>
        <section class="comSection">
            <h2>Service</h2>
            <div class="bgi"><div class="bgc"><p class="txt">DnA는 제주 모바일전문 컨설팅 회사입니다.<br>디자인으로 시작해서 영상과 웹까지 고객 맞춤 서비스로 기업의 브랜드 가치를 함께 만들어가겠습니다.</p></div></div>
        </section>
        <section class="content">
            <div class="wrap">
                <h2>Our service.</h2>
                <h3>스타트업을 위한 디자인.</h3>
                <p>DnA는 스타트업 또는 기업의 명함, 로고, PPT, 사업계획서, 회사소개서, 제품소개서 등 을 디자인 하고있으며 클라이언트님께 만족을 드리고 있습니다.</p>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="http://revelyview.cdn3.cafe24.com/images/online_slide01.png" alt="모나 ppt"></div>
                        <div class="swiper-slide"><img src="http://revelyview.cdn3.cafe24.com/images/portfolio/ppt/main.png" alt="RR440 ppt"></div>
                        <div class="swiper-slide"><img src="http://revelyview.cdn3.cafe24.com/images/portfolio/uiux/empathy ui.png" alt="엠파씨 ui"></div>
                        <div class="swiper-slide"><img src="http://revelyview.cdn3.cafe24.com/images/online_slide04.png" alt="명함"></div>
                        <div class="swiper-slide"><img src="http://revelyview.cdn3.cafe24.com/images/portfolio/uiux/main.png" alt="모나앱"></div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <a href="works.php?id=design" class="viewMore">VIEW MORE ></a>
            </div>
            <div class="wrap">
                <h3>오프라인 매장을 위한 디자인</h3>
                <p>DnA는 오프라인 매장의 명함, 로고, 메뉴판 등 각종 어플리케이션을 디자인 하고 있습니다.</p>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="http://revelyview.cdn3.cafe24.com/images/portfolio/offline/logo5.png" alt="간판"></div>
                        <div class="swiper-slide"><img src="http://revelyview.cdn3.cafe24.com/images/offline_slide02.png" alt="메뉴판"></div>
                        <div class="swiper-slide"><img src="http://revelyview.cdn3.cafe24.com/images/portfolio/offline/X-Stand_Banner_Mockup_1.png" alt="외부설치물"></div>
                        <div class="swiper-slide"><img src="http://revelyview.cdn3.cafe24.com/images/portfolio/offline/cup2.png" alt="컵"></div>
                        <div class="swiper-slide"><img src="http://revelyview.cdn3.cafe24.com/images/portfolio/promotion/pamp.png" alt="팜플렛"></div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <a href="works.php?id=design#offline" class="viewMore">VIEW MORE ></a>
            </div>
            <div class="wrap">
                <h3>스타트업을 위한 웹사이트 제작.</h3>
                <p>DnA는 스타트업을 준비하시는 사장님들을 위한 다양한 웹 사이트를 제작하여 드립니다.</p>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="images/ui_ux.jpg" alt="ui/ux"></div>
                        <div class="swiper-slide"><img src="images/mealtop.png" alt="밀탑"></div>
                        <div class="swiper-slide"><img src="images/reponsive-web.jpg" alt="쇼핑몰"></div>
                        <div class="swiper-slide"><img src="images/pension_intro.jpg" alt="펜션 예약"></div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <a href="works.php?id=web" class="viewMore">VIEW MORE ></a>
                <div class="appBgi"></div>
            </div>
            <div class="wrap">
                <h3>미디어 콘텐츠를 위한 영상 편집.</h3>
                <p>DnA는 스타트업을 준비하시는 사장님들을 위한 다양한 웹 사이트를 제작하여 드립니다.</p>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide"><img src="http://revelyview.cdn3.cafe24.com/images/promotion.jpg" alt="홍보영상"></div>
                        <div class="swiper-slide"><img src="http://revelyview.cdn3.cafe24.com/images/youtube.jpg" alt="유튜브"></div>
                        <div class="swiper-slide"><img src="http://revelyview.cdn3.cafe24.com/images/event.jpg" alt="행사영상"></div>
                        <div class="swiper-slide"><img src="http://revelyview.cdn3.cafe24.com/images/ad.jpg" alt="광고영상"></div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <a href="works.php?id=video" class="viewMore">VIEW MORE ></a>
            </div>
        </section>
        <div class="secBgi sBgi"></div>
        <section>
            <div class="wrap padding">
                <h2>Process.</h2>
                <h3>DnA는 다음과 같은 기준으로 작업을 준수하고 서비스를 제공합니다.</h3>
            </div>
            <ul class="process">
                <li>
                    <h4>일정을 준수한다.</h4>
                    <p>DnA는 일정을 준수하여 빠른 디자인을 제공하고자 노력하며, 빠른 기일과 품질을 보장합니다</p>
                </li>
                <li class="margin">
                    <h4>합리적인 가격으로 서비스를<br>제공한다.</h4>
                    <p>DnA는 고객님이 원하는 디자인을 합리적인 가격으로 제공함으로서 대표님들의 부담을 줄이기 위해 노력하겠습니다.</p>
                </li>
                <li>
                    <h4>클라이언트님과의 신뢰를<br>중요시 생각한다.</h4>
                    <p>클라이언트님과의 우호적인 관계가 지속될 수 있도록 최선의 서비스를 제공할 것 입니다.</p>
                </li>
            </ul>
            <div class="imgWrap">
                <img src="http://revelyview.cdn3.cafe24.com/images/process01.png" alt="process" class=processImg01>
                <img src="http://revelyview.cdn3.cafe24.com/images/process02.png" alt="process" class=processImg02>
            </div>
            <!-- <div class="wrap price">
                <h2>Price</h2>
                <h3>Offline Store Design</h3>
                <p>클라이언트 님의 원하시는 디자인에 따라 가격이 변동될 수 있습니다.</p>
                <img src="images/off_price.png" alt="price table">
                <h3>Online Design</h3>
                <p>클라이언트 님의 원하시는 디자인에 따라 가격이 변동될 수 있습니다.</p>
                <img src="images/on_price.png" alt="price table">
                <h3>Web Publish</h3>
                <p>클라이언트 님의 원하시는 디자인에 따라 가격이 변동될 수 있습니다.</p>
                <img src="images/on_price.png" alt="price table">
                <h3>Video Edit</h3>
                <p>클라이언트 님의 원하시는 디자인에 따라 가격이 변동될 수 있습니다.</p>
                <img src="images/on_price.png" alt="price table">
            </div> -->
        </section>
        <div class="topBtn">TOP</div>
    </main>
    <!-- 푸터 -->
    <?php
        include_once 'footer.php'
    ?>
    <?php
        include_once 'loading.php'
    ?>
    <script>
    var swiper = new Swiper('.swiper-container', {
            slidesPerView: 'auto',
            spaceBetween: 10,
            loop: true,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    // $(window).resize(function(){
    //     var doWt = $(window).width();
    //     if(doWt<538) {
    //     var swiper = new Swiper('.swiper-container', {
    //     slidesPerView: 1,
    //     spaceBetween: 10,
    //     loop: true,
    //     navigation: {
    //     nextEl: '.swiper-button-next',
    //     prevEl: '.swiper-button-prev',
    //   },
    // });
    // }else {
    //     var swiper = new Swiper('.swiper-container', {
    //         autoHeight: true,
    //         slidesPerView: 'auto',
    //         spaceBetween: 10,
    //         loop: true,
    //         navigation: {
    //             nextEl: '.swiper-button-next',
    //             prevEl: '.swiper-button-prev',
    //         },
    //     });
    // }
    // })
  </script>
</body>