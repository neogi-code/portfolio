<?php
    include_once "common/html_head.php";
?>
<link rel="stylesheet" href="character.css">
<style>
    body {
        background-color: #ffcbe2;
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
                <img src="images/pew.png" alt="퓨" class="char">
                <p class="name">퓨 PEW</p>
                <div class="cWrap">
                    <div class="fav"><span>좋아하는 것</span><p>꽃바람, 여행, 사교적모임</p></div>
                    <div class="live"><span>사는 곳</span><p>서사라 전농로</p></div>
                </div>
                    <p class="info">퓨는 제주를 사랑하는 순수한 캐릭터로 따뜻한 마음씨를 가지고 있으며, 결단력, 리더십이 강해 평소에도 친구들의 리더로서 활동합니다.</p>
                    <p class="info">퓨는 여행을 좋아하고 사교성이 뛰어나 외향적인 성격입니다. 항상 탐험하고 이것저것 알아가는 것을 좋아하고 동식물들을 알아가는 것을 좋아하며 친구들을 불러모아 제주 이곳저곳 돌아다닐때 가장 기쁨을 느낍니다.</p>
                <img src="images/pew_house.png" alt="퓨집" class="house">
                <p class="name">PEW HOUSE</p>
            </div>
        </section>
    </main>
    <?php
        include_once "character.php";
        include_once "common/footer.php";
    ?>
</body>