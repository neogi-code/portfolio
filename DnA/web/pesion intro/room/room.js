$('.main .gallery .select img').click(function(){
    var link = $(this).attr('src');
    $('.expand img').attr('src',link);
});
$('.main .menu li').click(function(){
    var resetLink = $(this).index();
    var src = $('.main .cover > div').eq(resetLink);
    var linkSrc = $(src).find('.select > div:first-child > img').attr('src');
    $('.main .cover > div').eq(resetLink).find('.gallery .expand img').attr('src',linkSrc);
});
$('.main .breadcrumb li').click(function(){
    var txt = $(this).text();
});