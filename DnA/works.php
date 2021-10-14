<?php
    include_once 'html_head.php';
    include_once 'link.php';
?>
<link rel="stylesheet" href="works.css">
<script src='https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js'></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
</head>
<body>
    <!-- 헤더 -->
    <?php
        include_once 'header.php'
    ?>
    <main>
        <ul class="lnb">
            <li><a href="works.php?id=design">Design</a></li>
            <li><a href="works.php?id=video">Video Edit</a></li>
            <li><a href="works.php?id=web">Web Publish</a></li>
        </ul>
        <div class="content">
                <?php
                    echo file_get_contents("works-kind/".$_GET['id'].'.php')
                ?>
        </div>
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
        $('div.linked').click(pop);
        function pop (){
            var count = $(this).parents('.wrap').index();
            $('.popUp').eq(count).siblings().hide();
            $('.popUp').eq(count).show();
            $('.popWrapper').css('height','100%');
            $('body').addClass('hide');
        }
        $('.design .popWrapper').click(function(){
            $(this).children('.popUp').hide();
            $(this).css('height','auto');
            $('body').removeClass('hide');
        })
    $(function(){//video edit
        $('div.linked').on('click', function(){ //레이어 열때
            var count = $(this).parents('.wrap').index();
            $('.popWrapper').show();
            $('.popUp').eq(count).show();
    })
        $('.right').on('click', function(){
            $("iframe").each(function() { //각 iframe 에 함수 적용
		        $(this)[0].contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}', '*')
                // 유튜브 영상 중지
		    });
            $('.popWrapper').hide();
            $('.popUp').hide();
            $('body').removeClass('hide');
        })
});
    $('.video .close').click(function(){
        $('.popWrapper').hide();
        $('body').removeClass('hide')
    })
    </script>
</body>