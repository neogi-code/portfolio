<?php
    include_once "common/html_head.php";
?>
<link rel="stylesheet" href="character.css">
<style>
    body {
        background-color: #f9f1ea;
    }
    .name {
        color:#c3a07f;
    }
    .cWrap span {
        background-color: #c3a07f;
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
                <img src="images/hari.png" alt="하리" class="char">
                <p class="name">하리 HARI</p>
                <div class="cWrap">
                    <div class="fav"><span>좋아하는 것</span><p>낮잠자기, 고민 들어주기</p></div>
                    <div class="live"><span>사는 곳</span><p>새별오름</p></div>
                </div>
                    <p class="info">하리는 동글동글하고 의리를 중요시하며 샤샤를 잘 따릅니다. 한가한 것을 좋아하기 때문에 집돌이 기질이 있지만 청소를 하거나 집을 가꾸지는 않기 때문에 샤샤에게 자주 도움을 구하는 편입니다. </p>
                    <p class="info">하리는 어떤말이든 상대방의 말을 귀담아 듣기 때문에 상담을 자주들어주는 편입니다. 또한 친절하기 때문에 누구에게나 편하게 다가가고 빠르게 친해지는 스타일 입니다.</p>
                <img src="images/hari_house.png" alt="하집" class="house">
                <p class="name">HARI HOUSE</p>
            </div>
        </section>
    </main>
    <?php
        include_once "character.php";
        include_once "common/footer.php";
    ?>
</body>