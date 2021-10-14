<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
<title>DnA</title>
<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<link rel="shortcut icon" href="http://dna-jeju.com/images/favicon.ico">
<meta name="title" content="DnA">
<meta name="description" content="제주 모바일 전문 컨설팅 회사 DnA"/>
<meta name="keyword" content="제주,일러스트,디자인,영상편집,웹,웹 퍼블리싱, 유튜브, 명함, 캐릭터, 캐릭터 디자인, 제주 dna, dna 제주,리블리뷰,제주 디자인, 제주 피피티, 제주 ppt, 제주 영상, 제주 영상 편집, 제주 편집자,제주 명함, 제주 사이트, 제주 웹사이트, 제주 웹사이트 제작,제주 퍼블리싱, 예쁜 디자인, 제주 예쁜 디자이너">
<meta property="og:title" content="DnA">
<meta property="og:type" content="website">
<meta property="og:description" content="제주 모바일 전문 컨설팅 회사 DnA"/>
<meta property="og:image" content="http://revelyview.cdn3.cafe24.com/images/portfolio/illust/illust2.jpg">
<meta property="og:url" content="http://dna-jeju.com">
<meta name="naver-site-verification" content="94c388c2eff5941ccbaad90e2688f0f6633eb4e9" />
<link rel="canonical" href="http://dna-jeju.com">
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5ZBPQNT');</script>
<!-- End Google Tag Manager -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-YG86TGG2MS"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-YG86TGG2MS');
</script>
<?php
    // include_once 'html_head.php';
    include_once 'link.php';
?>
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<link rel="stylesheet" href="contact_form.css">
<link rel="stylesheet" href="index.css">
<script src='https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js'></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="index_vide.js"></script>
</head>
<body>
    <!-- 헤더 -->
        <?php
            include_once 'header.php';
        ?>
    <!-- 컨텐츠 -->
    <main>
        <section id="banner">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="txtBox">
                            <p class="txt">Design & Video Edit & Web Publish</p>
                            <h2>Find your D&A</h2>
                        </div>
                        <div class="video" data-vide-bg="images/main_1.mp4"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="txtBox">
                            <p class="txt">새로운 콘텐츠를 창조하다</p>
                            <h2>Create New Contents</h2>
                        </div>
                        <div class="video" data-vide-bg="images/main_2.mp4"></div>
                    </div>
                    <div class="swiper-slide">
                        <div class="txtBox">
                            <p class="txt">이상적이고 전문적인 맞춤형 서비스</p>
                            <h2>Ideal, Expert, Customize</h2>
                        </div>
                        <div class="video" data-vide-bg="images/main_3.mp4"></div>
                    </div>
                </div>
            </div>
        </section>
        <section id="contents">
            <h2>Provide the design you need and<br>proceed with your own app business</h2>
            <div class="wrap">
                <div class="design"><a href="works.php?id=design"><span>Design</span></a></div>
                <div class="character"><a href="works.php?id=design#akkomis"><span>Character</span></a></div>
                <div class="video"><a href="works.php?id=video"><span>Video Edit</span></a></div>
                <div class="web"><a href="works.php?id=web"><span>Web Publish</span></a></div>
            </div>
            <div class="wrap flex">
                <div class="bgc">
                    <div class="txtBox">
                        <h2>Design &<br> Contents</h2>
                        <p class="txt">DnA는 모바일작업이 필요한 디자인,<br>웹 퍼블리싱, 영상 편집을 작업하는<br> 모바일 컨설팅 회사입니다.</p>
                    </div>
                </div>
                <div class="videoWrap">
                    <div class="videoContainer">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/kLyegWzu0FY?enablejsapi=1&version=3&playerapiid=ytplayer" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
                <?php
                    include_once 'contact_form.php';
                ?>
        </section>
    </main>
    <!-- 푸터 -->
    <?php
        include_once 'footer.php'
    ?>
    <?php
        include_once 'loading.php'
    ?>
    <script src="index.js"></script>
</body>