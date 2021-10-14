<?php
    include_once 'html_head.php';
    include_once 'link.php';
?>
<link rel="stylesheet" href="contact_form.css">
<link rel="stylesheet" href="contact.css">
<script src='https://cdn.jsdelivr.net/npm/jquery@3.4.1/dist/jquery.min.js'></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
</head>
<body>
    <!-- 헤더 -->
    <?php
        include_once 'header.php'
    ?>
    <main>
        <h2>Contact</h2>
        <div class="wrap">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3326.6352630655606!2d126.51979721551037!3d33.51086545351119!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x350ce4aaba22ee97%3A0xa8ffb23e146380c1!2z7KCc7KO87Yq567OE7J6Q7LmY64-EIOygnOyjvOyLnCDsgrzrj4Qy64-ZIOykkeyVmeuhnDE06ri4IDIx!5e0!3m2!1sko!2skr!4v1612761250631!5m2!1sko!2skr" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            <div class="contact">
                <div class="form-container">
                    <?php
                        include_once 'contact_form.php';
                    ?>
                </div>
            </div>
        </div>
    </main>
    <!-- 푸터 -->
    <?php
        include_once 'footer.php'
    ?>
    <?php
        include_once 'loading.php'
    ?>
</body>