$(document).ready(function(){
	if($(window).width() <= 768) {
		$('.con1.img1').attr('src','img/event201911/event08-1.png');
		$('.con1.img2').attr('src','img/event201911/event08-2-before.gif');
		$('.con1.img3').attr('src','img/event201911/event08-3.png');
		$('.con1.before').click(function(){ $('.con1.before').attr('src','img/event201911/event08-2.png'); });
	}else {
		$('.con1.img1').attr('src','img/event201911/event08-1.png');
		$('.con1.img2').attr('src','img/event201911/event08-2-before.gif');
		$('.con1.img3').attr('src','img/event201911/event08-3.png');
		$('.con1.before').click(function(){ $('.con1.before').attr('src','img/event201911/event08-2.png'); });
	}
	$(window).resize(function(){
		if($(window).width() <= 768) {
			$('.con1.img1').attr('src','img/event201911/event08-1.png');
			$('.con1.img2').attr('src','img/event201911/event08-2-before.gif');
			$('.con1.img3').attr('src','img/event201911/event08-3.png');
			$('.con1.before').click(function(){ $('.con1.before').attr('src','img/event201911/event08-2.png'); });
		}else {
			$('.con1.img1').attr('src','img/event201911/event08-1.png');
			$('.con1.img2').attr('src','img/event201911/event08-2-before.gif');
			$('.con1.img3').attr('src','img/event201911/event08-3.png');
			$('.con1.before').click(function(){ $('.con1.before').attr('src','img/event201911/event08-2.png'); });
		}
	});
});