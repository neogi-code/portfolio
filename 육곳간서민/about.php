<?php
    include_once "html_head.php"
?>
<link rel="stylesheet" href="css/about.css">
<script src='https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js'></script>
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
</head>
<body>
<?php
        include_once "header.php"
        ?>
    <div class="main">
        <section class="one">
            <h3>
            <div>숨어있는 가치를 되찾다</div>
            <div>비어있는 가치를 더하다</div>
            <div>함께하는 가치를 나누다</div>
        </h3>
        </section>
        <section class="two">
            <span class="title">VALUE FINDING</span>
            <h2>AGING 500hrs.</h2>
            <p>2등급 이하의 한우를<br>
                500시간 이상 숙성해서 <br>
                숨어있던 맛과 향을 향상시켜 <br>
                품질의 고급화를 이루었습니다.</p>
        </section>
        <section class="three">
            <span class="title">VALUE ADDING</span>
            <h2>INFINITE CHALLENGE</h2>
            <p>더 맛있는 고기,<br>
더 편안한 서비스,<br>
더 행복한 공간이 될 수 있도록<br>
도전을 게을리 하지 않습니다.</p>
        </section>
        <section class="four">
            <span class="title">VALUE SHARING</span>
            <h2>REMEMBER 1997</h2>
            <p>자발적인 금모으기 운동을 통해<br>
아픔을 나누고 위기를 극복하고자 했던<br>
1997년 외환위기 때의 대한민국 서민 정신,<br>
현주푸드가 이어받은 ‘가치를 함께 나누는 정신’입니다.</p>
        </section>
        <?php
        include_once "footer.php"
        ?>
    </div>
    <ul class="lnb">
    </ul>
    <script>
        $('.one > h3 > div').each(function(){
            var index = $(this).index() + 1;
            $(this).css('transition-delay',index*.7+'s');
        })
    </script>
    <script src="js/common.js"></script>
</body>
</html>