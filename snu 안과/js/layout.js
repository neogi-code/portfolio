$(document).ready(function(){
    $(".pop").hide();
    
    $("#btn1").click(function(){
        $("#pop_1").fadeIn(400)
    });
    $(".close").click(function(){
        $(".pop").fadeOut(400)
    });
});