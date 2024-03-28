$(document).ready(function () {
	console.log(browserRedirect())
	var annualSwiper = new Swiper('.annual_business .banner', {
		loop: false,
		autoplay: false,
		speed: 1000,
		observer: true, 
		observeParents: true,
		autoplayDisableOnInteraction: false,
//		pagination: '.banner .swiper-pagination',
//		paginationClickable: true
	})
	
	var pileCurrent = 0, flag = true, flagTimer = null;
	var pilePics = $(".pile_wrap .pile_pic");
	pilePics.each(function(i){
		$(this).css('z-index', pilePics.length - i);
		if(i !== 0) {
			$(this).addClass('off')
		}
	})
	//上一张
	$(".pile_arrow .arrow_up").click(function(){
		if (flag) {
			clearTimeout(flagTimer)
			pilePics.eq(pileCurrent).addClass('off downB').removeClass('down up');
			if (pileCurrent <= 0) {
				pileCurrent = pilePics.length - 1;
			} else {
				pileCurrent--;
			}
			pilePics.eq(pileCurrent).addClass('down').removeClass('off downB up');
			flag = false;
			flagTimer = setTimeout(function(){
				flag = true;
			}, 1200)
		}
	})
	//下一张
	$(".pile_arrow .arrow_down").click(function(){
		if (flag) {
			clearTimeout(flagTimer)
			pilePics.eq(pileCurrent).addClass('off').removeClass('up downB down');
			if (pileCurrent >= pilePics.length - 1) {
				pileCurrent = 0;
			} else {
				pileCurrent++;
			}
			pilePics.eq(pileCurrent).addClass('up').removeClass('off downB down');
			flag = false;
			flagTimer = setTimeout(function(){
				flag = true;
			}, 1200)
		}
	})
	//自动
	function autoShow(){
		pilePics.eq(pileCurrent).addClass('off').removeClass('up downB down');
		if (pileCurrent >= pilePics.length - 1) {
			pileCurrent = 0;
		} else {
			pileCurrent++;
		}
		pilePics.eq(pileCurrent).addClass('up').removeClass('off downB down');
	}
	var autoShowTimer = setInterval(autoShow, 5000);
	$(".autoshow").on('mouseenter', function(){
		clearInterval(autoShowTimer);
	})
	$(".autoshow").on('mouseleave', function(){
		autoShowTimer = setInterval(autoShow, 5000);
	})
	
	
	function scrollImgs(scrollWrap, direction, speed){
		var oul = scrollWrap.find('ul')
		var oulHtml = oul.html();
		oul.html(oulHtml+oulHtml); //复制一份
		var timeId = null;
		var ali = scrollWrap.find('li');
		
		var aliSize = ali.size();
		var aliWidth, ulWidth; //总长度
		if (direction == 'left') {
			// 横向
			aliWidth = ali.eq(0).width(); //总长度
			ulWidth = aliWidth*aliSize;
			oul.width(ulWidth);
		} else {
			// 纵向
			aliWidth = ali.eq(0).height(); //总长度
			ulWidth = aliWidth*aliSize;
			oul.height(ulWidth);
		}
		function slider(){
			if (direction != 'left') {
				window.addEventListener('resize',function(){
					aliWidth = ali.eq(0).height();
					ulWidth = aliWidth * aliSize;
					oul.height(ulWidth);
				})
			}
			if(speed<0){
				if(parseInt(oul.css(direction)) <= -ulWidth/2){
		 			oul.css(direction,0);
			 	}
			 	oul.css(direction,'+=-1px');
			}
			if(speed>0){
				if(parseInt(oul.css(direction)) >= 0){
		 			oul.css(direction,-ulWidth/2+'px');
			 	}
			 	oul.css(direction,'+='+speed+'px');
			}
		}
		timeId = setInterval(slider,20);
		scrollWrap.mouseover(function(){
			clearInterval(timeId);
		});
		scrollWrap.mouseout(function(){
			timeId = setInterval(slider,20);
		});
	}
	if (browserRedirect()) {
		scrollImgs($('.scroll_lf'), 'left', 1);
		scrollImgs($('.scroll_rt'), 'left', -1);
	} else {
		scrollImgs($('.scroll_lf'), 'top', 1);
		scrollImgs($('.scroll_rt'), 'top', -1);
	}
	
	
	//点击查看大图
	$(".swiper .pic").click(function(){
		var src = $(this).attr('src');
		$(".show_pop .pic").attr('src', src);
		$(".show_pop").addClass('on');
	})
	$(".show_pop").click(function(){
		$(".show_pop").removeClass('on')
		$(".show_pop .pic").attr('src', '');
	})
	
	
	//testDrive
	function testDriveSwiper(type){
		var testDriveBig = new Swiper('.testDrive .bigSwiper', {
			loop: false,
			speed: 600,
			observer: true, 
			observeParents: true,
			autoplayDisableOnInteraction: false,
			prevButton:'.testDrive .prev',
			nextButton:'.testDrive .next',
			onSlideChangeStart: function(swiper){
				console.log(swiper.realIndex)
				var index = swiper.realIndex;
				var smallSlides = $('.smallSwiper .swiper-slide');
				smallSlides.eq(index).addClass('on').siblings('.swiper-slide').removeClass('on');
				testDriveSmall.slideTo(index);
			},
			onSlideChangeEnd: function(swiper){
				var video = $(".testDrive .video");
				video.each(function(){
					$(this).get(0).pause();
				})
			},
			onInit: function(){
				var video = $(".testDrive .video");
				video.each(function(){
					var _this = $(this);
					_this.get(0).addEventListener('play', function(){
						_this.siblings('.play').hide();
					});
					_this.get(0).addEventListener('pause', function(){
						_this.siblings('.play').show();
					});
				})
			}
		})
		var testDriveSmall = new Swiper('.testDrive .smallSwiper', {
			loop: false,
			slidesPerView: type == 'pc' ? 4 : 'auto',
			spaceBetween: type == 'pc' ? 15 : 8,
			speed: 1000,
			onlyExternal: true,
			onTap: function(swiper){
				var index = swiper.clickedIndex;
				testDriveBig.slideTo(index);
			}
		})
	}
	$(".testDrive .play").click(function(){
		var video = $(this).siblings('.video');
		video.get(0).play();
	})
	
	if(browserRedirect()) {
		//手机版
		var annualSwiper = new Swiper('.autoshow .swiper-container', {
			loop: true,
			autoplay: 6000,
			speed: 1000,
			observer: true, 
			observeParents: true,
			autoplayDisableOnInteraction: false,
			pagination: '.autoshow .swiper-pagination',
			paginationClickable: true
		});
		testDriveSwiper('phone');
	} else {
		// pc
		testDriveSwiper('pc');
	}
})

	
	

