$(document).ready(function(){
	if($(window).width() <= 768) {
		$('.con1.img1').attr('src','img/event201911/event04-1.png');
		$('.con1.img2').attr('src','img/event201911/event04-before.png');
		$('.con1.img3').attr('src','img/event201911/event04-3.png');
		$('.con1.before').click(function(){ $('.con1.before').attr('src','img/event201911/event04-2.png'); });
	}else {
		$('.con1.img1').attr('src','img/event201911/event05-1.png');
		$('.con1.img2').attr('src','img/event201911/event05-before.png');
		$('.con1.img3').attr('src','img/event201911/event05-3.png');
		$('.con1.before').click(function(){ $('.con1.before').attr('src','img/event201911/event05-2.png'); });
	}
	$(window).resize(function(){
		if($(window).width() <= 768) {
			$('.con1.img1').attr('src','img/event201911/event04-1.png');
			$('.con1.img2').attr('src','img/event201911/event04-before.png');
			$('.con1.img3').attr('src','img/event201911/event04-3.png');
			$('.con1.before').click(function(){ $('.con1.before').attr('src','img/event201911/event04-2.png'); });
		}else {
			$('.con1.img1').attr('src','img/event201911/event05-1.png');
			$('.con1.img2').attr('src','img/event201911/event05-before.png');
			$('.con1.img3').attr('src','img/event201911/event05-3.png');
			$('.con1.before').click(function(){ $('.con1.before').attr('src','img/event201911/event05-2.png'); });
		}
	});
});