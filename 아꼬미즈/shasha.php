<?php
    include_once "common/html_head.php";
?>
<link rel="stylesheet" href="character.css">
<style>
    body {
        background-color: #ff9898;
    }
    .name {
        color: #e82929;
    }
    .cWrap span {
        background-color: #e82929;
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
                <img src="images/shasha.png" alt="샤샤" class="char">
                <p class="name">샤샤 SHASHA</p>
                <div class="cWrap">
                    <div class="fav"><span>좋아하는 것</span><p>청소, 집꾸미기, 손님맞이하기</p></div>
                    <div class="live"><span>사는 곳</span><p>동백수목원</p></div>
                </div>
                    <p class="info">샤샤는 제주의 4·3사건의 상징인 동백꽃이 모티브인 캐릭터로 진지하고 항상 남들과는 다른 생각을 합니다. 샤샤는 자신의 집에 대한 자부심이 있으며 집에 머물러 있는 것을 좋아합니다. 특히 집으로 누군가 오는것을 좋아하여 항상 친구들이 오기를 기다립니다</p>
                    <p class="info">샤샤는 따뜻한 날씨를 좋아하며 자부심이 있기때문에 종종 자존심때문에 문제가 생기기도 하지만 적극적으로 상황을 해결해 나갑니다</p>
                <img src="images/shasha_house.png" alt="샤집" class="house">
                <p class="name">SHASHA HOUSE</p>
            </div>
        </section>
    </main>
    <?php
        include_once "character.php";
        include_once "common/footer.php";
    ?>
</body>