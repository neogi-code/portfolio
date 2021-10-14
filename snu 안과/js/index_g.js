
//JavaScript Document
        $(function(){
            $("#header_bottom .m").on("mouseover",function(){
                $("#header_bottom").stop().animate({height:250},320);
                $("#drop_sub").fadeIn();
                $("#black_back").css("display","block");
            });
            
            $("#header_bottom ").on("mouseleave",function(){
               $("#header_bottom").stop().animate({height:60},320);
                $("#drop_sub").fadeOut();
                
                $("#black_back").css("display","none")
                ;
            });
             
            
            
            /*scroll menu fixed*/
    var nav=$('#header_bottom');
    var navoffset=$('#header_bottom').offset();
   
    
     $(window).scroll(function(){ 
      if($(this).scrollTop() >= navoffset.top){ 
         
       nav.css('position','fixed').css('top',0);
          }else{
        nav.css('position','absolute').css('top',35);
        }
        });
        
            
            
        });
      