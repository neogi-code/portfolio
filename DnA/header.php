<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5ZBPQNT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<header>
    <h1><a href="/index.php">logo</a></h1>
    <!-- gnb -->
    <ul id="gnb">
        <li><a href="/index.php">HOME</a></li>
        <li><a href="/about.php">ABOUT US</a></li>
        <li><a href="/service.php">SERVICES</a></li>
        <li><a href="/works.php?id=design">WORKS</a></li>
        <li><a href="/contact.php">CONTACT</a></li>
    </ul>
    <div class="hamberger">
        <span></span>
        <span></span>
        <span></span>
    </div>
    <script>
        $('.hamberger').click(function(){
            $(this).toggleClass('active');
            $('#gnb').toggleClass('active');
            $('body').toggleClass('hide');
        });
    </script>
</header>