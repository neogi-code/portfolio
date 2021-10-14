<?php
    include_once "common/html_head.php";
?>
<link rel="stylesheet" href="character.css">
<style>
    body {
        background-color: #ffe45f;
    }
    .name {
        color:#ffc723;
    }
    .cWrap span {
        background-color: #ffc723;
    }
</style>
<script src='https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js'></script>
</head>
<body>
    <?php
        include_once "common/header.php";
    ?>
    <main>
        <section>
            <div class="wrap">
                <img src="images/chacha.png" alt="차차" class="char">
                <p class="name">차차 CHACHA</p>
                <div class="cWrap">
                    <div class="fav"><span>좋아하는 것</span><p>시원한 바람맞기, 이야기 들어주기</p></div>
                    <div class="live"><span>사는 곳</span><p>중문관광단지</p></div>
                </div>
                    <p class="info">차차는 퓨(벚꽃)와 생일이 비슷하여 유년시절부터 함께 지내왔기 때문에 가장 친한사이입니다. 쾌활한 성격과 긍정적인 성격으로 친구들의 말에 귀를 기울여주는 역할을 하기 때문에 퓨에게 있어 가장 든든한 지원군입니다. </p>
                    <p class="info">차차는 서늘한 기후를 좋아하며 어디든 즉흥적으로 가는 성향이 있어 위기에 빠지거나 난감한 상황을 만들기도 합니다. 차차는 위기상황에도 특유의 긍정적인 성격을 잃지않고 빠르게 문제를 해결 해나갑니다. </p>
                <img src="images/chacha_house.png" alt="차집" class="house">
                <p class="name">CHACHA HOUSE</p>
            </div>
        </section>
    </main>
    <?php
        include_once "character.php";
        include_once "common/footer.php";
    ?>
</body>