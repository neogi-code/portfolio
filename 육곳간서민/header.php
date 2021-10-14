<header class="en">
        <h1><a href="/">logo</a></h1>
        <ul class="gnb">
            <li class="ab"><a href="/about.php">ABOUT US</a></li>
            <li class="pe"><a href="/people.php">PEOPLE</a></li>
            <li class="wo"><a href="/work.php">WORK</a></li>
            <li class="ma"><a href="/mall.php">MALL</a></li>
            <li class="co"><a href="/community.php">COMMUNITY</a></li>
        </ul>
        <ul class="user">
            <li><a href="pre.php"><img src="images/user.png" alt="로그인"></a></li>
            <li><a href="pre.php"><img src="images/cart.png" alt="장바구니"> </a></li>
            <li class="#"><img src="images/search.png" alt="검색"></li>
        </ul>
        <div class="hamberger">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <script>
        $('.hamberger').click(function(){
            $(this).toggleClass('active');
            $('.gnb').toggleClass('active');
        });
    </script>
    </header>