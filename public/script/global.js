var currentIndex = 0;
var preIndex = 0;
var phone=false;
function browserRedirect() {
	var sUserAgent = navigator.userAgent.toLowerCase();
	var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";
	var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
	var bIsMidp = sUserAgent.match(/midp/i) == "midp";
	var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
	var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";
	var bIsAndroid = sUserAgent.match(/android/i) == "android";
	var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";
	var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";
	if (!(bIsIpad || bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM)) {
		//window.location.href=B页面;
		phone = false;
	}
	else {
		phone = true;
	};
	return phone;
}
browserRedirect()
console.log("phone",phone)
var numCount = function (className) {// 读秒
	var curNume = className.attr("data-num");
	console.log(className)
	if (curNume.indexOf(".") == -1) {//是否小数
		if (curNume.indexOf('≥') >= 0 || curNume.indexOf('>') >= 0) {
			var num = +curNume.slice(1);
			className.animateNumber({ number: num }, 1000, function () {
				className.text(curNume[0] + num)
			});
		} else {
			className.animateNumber({ number: curNume }, 1000);
		}
	} else {
		//小数位数
		var decimal_places = 1;
		var decimal_factor = decimal_places === 0 ? 1 : Math.pow(10, decimal_places);
		className.animateNumber({
			number: curNume * decimal_factor,
			numberStep: function (now, tween) {
				var floored_number = Math.floor(now) / decimal_factor,
					target = $(tween.elem);
				if (decimal_places > 0) {
					floored_number = floored_number.toFixed(decimal_places);
					floored_number = floored_number.toString().replace('.', '.');
				}
				target.text(floored_number);
			}
		}, 1000);
	}
};
//browserRedirect();
var wow = new WOW({
    boxClass: 'wow',
    animateClass: 'animated',
    offset: 0,
    mobile: true,
    live: true
});
$(document).ready(function () {
	wow.init();
	
	//360按钮
//	$(".open360btn").on("click",function(){
//		$('#car360').attr('src','360deg/360/index.html')
//		$('#car360').show();
//		$(".close360btn").show()
//	})
//	$(".close360btn").on("click",function(){
//		$('#car360').hide();
//		$('#car360').attr('src', '')
//		$(this).hide()
//	})
//	
	
	
//	$('.menu .subnav .btnbox').each(function () {
//		var time = 0
//		$(this).children('.subtn,span').each(function () {
//			time += 50
//			$(this).css('transition-delay', time + 'ms')
//		})
//	});
//	$('.menu .subnav.models .subtn').mouseenter(function () {
//		if ($(this).find('.subtnbox').length > 0) {
//			$('.menu .subnav.models').addClass('on')
//		}
//	})
//	$('.menu .subnav.models .subtn_b').mouseenter(function () {
//		if ($(this).find('.carbox').length > 0) {
//			$('.menu .subnav.models').addClass('onTo')
//		}
//	})
//	$('.menu .subnav.models .subtn_b').mouseleave(function () {
//		$('.menu .subnav.models').removeClass('onTo')
//	})
//	$('.menu .subnav.models .subtn').mouseleave(function () {
//		$('.menu .subnav.models').removeClass('onTo')
//		$('.menu .subnav.models').removeClass('on')
//	})
//	$('.menu .subnav.models').mouseleave(function () {
//		$('.menu .subnav.models').removeClass('onTo')
//		$('.menu .subnav.models').removeClass('on')
//	})
	
	$(".subtn>a").hover(function(){
		$(this).parents('.btnbox').find('.subtn>a').css('background', 'none');
		$(this).css('background', '#c50d27');
		$('.subtnbox').hide();
		$(this).siblings('.subtnbox').show();
		$(this).siblings('.subtnbox').find('.carbox').hide();
		$(this).siblings('.subtnbox').find('.subtn_b:nth-child(2)').find('.carbox').show();
		$('.subtn_b').find('>a').css('background', 'none');
		$(this).siblings('.subtnbox').find(".subtn_b:nth-child(2)>a").css('background', '#c50d27');
	})
	$(".subtn_b").hover(function(){
		$(this).find('.carbox').show().siblings('.carbox').hide();
		$(this).find('>a').css('background', '#c50d27');
		$(this).siblings('.subtn_b').find('>a').css('background', 'none');
		$(this).parents('.subtnbox').find('.subtn_b .carbox').hide();
		$(this).find('.carbox').show();
	})
	function resetChan(){
		$(".btn:first-child .subtn .subtnbox").hide();
		$(".btn:first-child .subtn:nth-child(2) .subtnbox").show();
		$(".btn:first-child .subtn:nth-child(2)>a").css('background', '#c50d27');
		$(".btn:first-child .subtn:nth-child(2) .subtn_b:nth-child(2)>a").css('background', '#c50d27');
		$(".btn:first-child .subtn:nth-child(2) .subtnbox .subtn_b:nth-child(2) .carbox").show();
	}
	resetChan();
	$("nav .menu .btn").mouseleave(function(){
		$('.btnbox').find('.subtn>a').css('background', 'none');
		$('.subtn_b').find('>a').css('background', 'none');
		$('.subtnbox').find('.carbox').hide();
		$('.subtnbox').hide();
		resetChan();
	})
	
	$('.nav').click(function(){
		if(!$(this).hasClass('on')){
			$(".submenubg").addClass('on')
			$('.nav').addClass('on');
			$('html, body').css({'overflow-y':"hidden"})
			$(".absoLogo").css('z-index', 8);
		}else{
			$(".submenubg").removeClass('on')
			$('.nav').removeClass('on')
			$('html, body').css({'overflow-y':"inherit"})
			$(".submenubg").removeClass('onCar')
			$(".menucarbox").removeClass('on off')
			$(".submenubg dd").removeClass('on,off')
			setTimeout(function(){
				$(".absoLogo").css('z-index', 10);
			}, 400)
		}
	})
	$(".submenubg dl dt").click(function(){
		if(!$(this).parent().hasClass('on')){
			$(".submenubg dl.on").removeClass('on')
			$(".submenubg dd").removeClass('on')
			$(this).parent().addClass('on')
			if($('.menucarbox').hasClass('on')){
				$(".submenubg").removeClass('onCar')
				$(".menucarbox").removeClass('on off')
			}
		}
	})
	$(".submenubg dd").click(function(){
		$(".submenubg dd").removeClass('on')
		$(this).addClass('on')
		if ($(this).hasClass('carbtn')){
			$(".submenubg").addClass('onCar')
			var index = $(this).index()-1;
			var tabIndex = $(this).parent().index();
			var thirdmenu = $('.thirdmenu').eq(tabIndex);
			
			var menucarbox = thirdmenu.find('.menucarbox');
			menucarbox.eq(index).addClass('on').removeClass('off').siblings('.menucarbox').removeClass('on').addClass('off')
			
		}
	});
	
	$("header .earth").hover(function(){
		if ($(this).hasClass('on')){
			$(this).removeClass('on');
			$(this).find('.country').fadeOut(0)
		} else {
			$(this).addClass('on');
			$(this).find('.country').fadeIn(0)
		}
	})
	$(".absoLogo .earth").click(function(){
		if ($(this).hasClass('on')){
			$(this).removeClass('on');
			$(this).find('.country').slideUp(100)
		} else {
			$(this).addClass('on');
			$(this).find('.country').slideDown(100)
		}
	})
	
	//播放音乐
	$('.music').on('click', function(){
		var audio = $(this).find('audio');
		if ($(this).hasClass('on')){
			$(this).removeClass('on');
			audio.get(0).pause();
		} else {
			$(this).addClass('on');
			audio.get(0).play();
		}
	});
	$(".modelwrap .videoBox .play").on('click', function(){
		var video = $(this).siblings('video').get(0);
		video.play();
		$(this).hide();
	});
	if ($(".modelwrap").find('.mediabox').hasClass('videoBox')){
		var modelVideo = $(".modelwrap .banner .videoBox video");
		modelVideo.get(0).addEventListener('ended', function(){
			$(".modelwrap .videoBox .play").show();
		});
	}
	
	
	var index_banner = new Swiper('.index .banner', {
		slidesPerView: 'auto',
		loop: true,
		autoplay: 8000,
		autoplayStopOnLast: true,
		speed: 600,
		onInit: function (swiper) {
			$('.banner').addClass('init')
		},
		paginationClickable: true,
//		paginationBulletRender: function (swiper, index, className) {
//			var index = (index + 1)
//			if (index < 10) {
//				index = '0' + index
//			}
//			return '<span class="' + className + '">' + index + '</span>';
//		},
		pagination: '.banner .swiper-pagination',
	})
	$('.index .design .itembox li').on('mouseenter', function(){
		var index = $(this).index();
		$('.index .design .txtwrap .txt').eq(index).show().siblings('.txt').hide();
	});
	var carModelsSwiper = new Swiper('.car_models_mb .swiper-container', {
		paginationClickable: true,
		loop: false,
		spaceBetween: '6.585%',
		pagination: '.car_models_mb .pagination'
	})
	var newstxtSwiper = new Swiper('.itemboxswiper', {
		paginationClickable: true,
		loop: true,
		onInit: function (swiper) { //Swiper2.x的初始化是onFirstInit
			swiperAnimateCache(swiper); //隐藏动画元素 
			swiperAnimate(swiper); //初始化完成开始动画
		},
		onSlideChangeEnd: function (swiper) {
			swiperAnimate(swiper); //每个slide切换结束时也运行当前slide动画
		},
		pagination: '.design .pagination',
		// prevButton:'.models .LRbtn .left',
		// nextButton:'.models .LRbtn .right',
	})
	var index_enterprise = new Swiper('.modelspic', {
		paginationClickable: true,
		loop: true,
		effect: 'coverflow',
		onSlideChangeEnd: function (swiper) {
			// console.log('index_enterprise',$('.models .swiper-slide-active  .num'))
			$('.models .swiper-slide-active  .num').each(function (i, e) {
				numCount($(e))
			})

		},
		coverflow: {
			rotate: 20,
			stretch: 10,
			depth: 30,
			modifier: 1,
			slideShadows: true
		},
		speed: 1000,
		pagination: '.models .pagination',
		prevButton: '.models .LRbtn .left',
		nextButton: '.models .LRbtn .right',
		
	})
	var newstxtSwiper = new Swiper('.index .newstxt', {
		loop: true,
		paginationClickable: true,
		pagination: '.newspic .pagination',
		autoplayDisableOnInteraction: false,
		autoplay: 8000,
		prevButton:'.news .prev',
		nextButton:'.news .next',
		onSlideChangeStart: function(swiper){
			var index = swiper.realIndex;
			var newspic = $(".newspic .img");
			newspic.eq(index).addClass('on').siblings('.img').removeClass('on');
			if (index == newspic.length-1){
				newspic.eq(0).addClass('next').siblings('.img').removeClass('next')
			} else {
				newspic.eq(index+1).addClass('next').siblings('.img').removeClass('next')
			}
		},
		paginationClickable: true,
		paginationBulletRender: function (swiper, index, className) {
			var index = (index + 1)
			if (index < 10) {
				index = '0' + index
			}
			return '<span class="' + className + '">' + index + '</span>';
		},
		pagination: '.news .swiper-pagination'
	})
	var introductionSwi = new Swiper('.introduction .independent .swiper-container', {
		loop: true,
		autoplay: 5000,
		loopAdditionalSlides: 100,
		observer:true,
		autoplayDisableOnInteraction: false,
		observeParents:true,
		paginationClickable: true,
	});
	/*	 车型	*/	
	//newTiggo4
	if ($('.modelwrap').hasClass('newTiggo4')){
		
		var designSwiperImgM = new Swiper('.modelwrap .design .imgSwiper.m_hide', {
			speed: 1000,
			spaceBetween: '14%',
			direction: 'vertical',
			simulateTouch: false,
			observer:true,
			observeParents:true,
		});
		var designSwiperTxt = new Swiper('.modelwrap .design .txtSwiper', {
			simulateTouch: false,
			paginationBulletRender: function (swiper, index, className) {
				var index = (index + 1)
				if (index < 10) {
					index = '0' + index
				}
				return '<span class="' + className + '">' + index + '</span>';
			},
			paginationClickable: browserRedirect() ? false : true,
			pagination: '.designbox .swiper-pagination',
			onSlideChangeStart: function(swiper){
				var index = swiper.realIndex;
				designSwiperImgM.slideTo(index)
			}
		});
		var designSwiperImgP = new Swiper('.modelwrap .design .imgSwiper.pc_hide', {
			loop: true,
			autoplay: 5000,
			loopAdditionalSlides: 100,
			observer:true,
			autoplayDisableOnInteraction: false,
			observeParents:true,
			paginationClickable: true,
			onSlideChangeEnd: function(swiper){
				var index = swiper.realIndex;
				designSwiperTxt.slideTo(index)
			}
		});
		var powerSwiperImgs = $(".modelwrap .power .imgSwiper .swiper-slide");
		var powerSwiperText = new Swiper('.modelwrap .power .textSwiper', {
			simulateTouch: false
		})
		if (powerSwiperImgs.length > 1) {
			var powerSwiperImg = new Swiper('.modelwrap .power .imgSwiper', {
				loop: true,
				autoplay: 5000,
				speed: 1000,
				autoplayDisableOnInteraction: false,
//				simulateTouch: false,
				onSlideChangeStart: function(swiper){
					var index = swiper.realIndex;
					powerSwiperText.slideTo(index)
				}
			})
			
		}
		// 手机模块4
		var techSwiperTxt = new Swiper('.modelwrap .tech .pc_hide .txtSwiper', {
			simulateTouch: false,
			paginationBulletRender: function (swiper, index, className) {
				var index = (index + 1)
				if (index < 10) {
					index = '0' + index
				}
				return '<span class="' + className + '">' + index + '</span>';
			},
			pagination: '.tech .pc_hide .swiper-pagination'
		});
		var techSwiperImg = new Swiper('.modelwrap .tech .pc_hide .imgSwiper', {
			loop: true,
//			speed: 5000,
			loopAdditionalSlides: 100,
			observer:true,
			observeParents:true,
			paginationClickable: true,
			onSlideChangeEnd: function(swiper){
				var index = swiper.realIndex;
				techSwiperTxt.slideTo(index)
			}
		});
	};
	if ($('.modelwrap').hasClass('sameModel')){
		function fadeSwiper(target, methods){
			var swiperName = target + 'Swi';
			swiperName = new Swiper('.modelwrap .' + target + ' .sameSwiper', {
				effect : 'fade',
				fade: {
				  crossFade: false,
				},
				speed: 1000,
				simulateTouch: false,
				observer:true,
				observeParents:true,
				paginationClickable: true,
				pagination: target == 'tech' ? '.modelwrap .tech .swiper-pagination' : ''
				
			});
			$('.' + target + ' .cutbtn').on(methods, function(){
				var index = $(this).index();
				$(this).addClass('on').siblings('.cutbtn').removeClass('on');
				swiperName.slideTo(index)
			});
		}
		fadeSwiper('design', 'click');
		fadeSwiper('comfort', 'click');
		fadeSwiper('safety', 'click');
		fadeSwiper('tech', 'mouseenter');
//		var safetySwi = new Swiper('.modelwrap .safety .swiper-container', {
//			autoplay: 5000,
////			speed: 2000,
//			pagination: '.safety .swiper-pagination',
//			paginationClickable: true,
//			autoplayDisableOnInteraction: false,
//			onSlideChangeStart: function(swiper){
//				var index = swiper.realIndex;
//				$(".textwrap .textbox").eq(index).show().siblings('.textbox').hide();
//			}
//		});
		
		$(window).on('scroll', function(){
			var module = $('.module');
			var scrollTop = $(window).scrollTop();
			var windowHeight = $(window).height();
			var distanceArr = [];
			var sidebar = $(".modelmenu");
			module.each(function(){
				var that = $(this);
				that.addClass(that.attr('id'));
				var domTop = that.offset().top;
				distanceArr.push(domTop)
			});
			for(var i = 0; i < distanceArr.length; i++){
				if (scrollTop > distanceArr[0]-windowHeight/2) {
					sidebar.addClass('on');
					if (scrollTop > distanceArr[i]-windowHeight/3){
						sidebar.attr('class', 'modelmenu on ' + module.eq(i).attr('id'));
						sidebar.find('.it').eq(i).addClass('on').siblings('.it').removeClass('on');
					}
				} else {
					sidebar.removeClass('on');
				}
				
			}
		});
		var slideItem = $(".modelmenu .it");
		slideItem.on('click', function(){
			var module = $('.module');
			var index = $(this).index();
			var top = module.eq(index).offset().top;
			$('body, html').animate({
				scrollTop: top
			}, 500)
		})
		// 图片警示
		var aniTimer = setInterval(function(){
			$(".warning").addClass('on').removeClass('off')
			setTimeout(function(){
				$(".warning").addClass('off').removeClass('on')
			},1600)
		}, 3150)
		// 文字垂直滚动
		function textSwiper(target){
			var name = 'swi_' + target;
			name = new Swiper('.'+target, {
				loop: true,
				autoplay: 3000,
				speed: 5000,
				freeMode:true,
				direction: 'vertical',
				simulateTouch: false,
				observer:true,
				observeParents:true,
				loopAdditionalSlides: 100
			});
		}
		textSwiper('textSwi_0');
		textSwiper('textSwi_1');
	}
	
	//新闻
	var newsswiper = new Swiper('.newswrap .newsswiper .swiper-container', {
//		autoplay: 5000,
		speed: 2000,
		simulateTouch: false,
		prevButton:'.newsswiper .prev',
		nextButton:'.newsswiper .next',
		pagination: '.newsswiper .swiper-pagination',
		paginationClickable: true,
	})
	
	//视频播放
	var VideoPlay = function(){
		this.video = document.querySelectorAll('.videobox video');
	}
	VideoPlay.prototype = {
		init: function(){
			var self = this;
			var playbtn = $('.videobox .play_btn');
			for(var i = 0; i<self.video.length; i++){
				(function(j){
					playbtn.eq(j).on('click', function(){
						self.video[j].play();
						if (self.video[j].getAttribute('controls') == null) {
							self.video[j].setAttribute('controls', 'controls')
						}
					})
					self.video[j].addEventListener('play', function(){
						playbtn.eq(j).hide();
					})
					self.video[j].addEventListener('pause', function(){
						playbtn.eq(j).show();
					})
				})(i)
			}
		},
		constructor: VideoPlay
	}
	var videoPlay = new VideoPlay();
	if (videoPlay.video) {
		videoPlay.init();
	};
	
	//liveshow
	var liveshowswiper = new Swiper('.motorshow .liveshow .swiper-container', {
//		autoplay: 5000,
		speed: 1000,
//		simulateTouch: false,
		prevButton:'.liveshow .arrow_prev',
		nextButton:'.liveshow .arrow_next',
		pagination: '.liveshow .swiper-pagination',
		paginationClickable: true,
		onSlideChangeStart: function(swiper){
			var index = swiper.realIndex;
			console.log(index)
			$(".textwrap .textbox").eq(index).show().siblings('.textbox').hide();
			var videos = $(".showSwi").find('video');
			if (videos.length > 0) {
				for(var i = 0; i < videos.length; i++) {
					videos.eq(i).get(0).pause();
				}
			}
		}
	});
	var pc_exhibitionswiper = new Swiper('.motorshow .exhibition .swiper-container.m_hide', {
//		simulateTouch: false,
		loop: true,
		autoplay: 5000,
		slidesPerView: 3,
		spaceBetween: '6.25%',
		prevButton:'.exhibition .arrow_prev',
		nextButton:'.exhibition .arrow_next',
	});
	var m_exhibitionswiper = new Swiper('.motorshow .exhibition .swiper-container.pc_hide', {
//		simulateTouch: false,
		loop: true,
		autoplay: 5000,
		prevButton:'.exhibition .arrow_prev',
		nextButton:'.exhibition .arrow_next',
	});
	
	//honors
	var honorsIndex = 0;
	var honorsSwi = new Swiper('.honors .swiper-container', {
		slidesPerView: 5,
		centeredSlides: true,
		prevButton:'.honors .year_choose .prev',
		nextButton:'.honors .year_choose .next',
		onInit: function(swiper){
			var activeIndex = swiper.activeIndex;
			honorsIndex = swiper.activeIndex;
			var slides = swiper.slides;
			var year = $(slides).eq(activeIndex+1).text();
			$(".goTo span").text(year);
		},
		onSlideChangeStart: function(swiper){
			var activeIndex = swiper.activeIndex;
			honorsIndex = swiper.activeIndex;
			var slides = swiper.slides;
			var year;
			if (activeIndex+1 >= slides.length) {
				year = $(slides).eq(0).text();
			} else {
				year = $(slides).eq(activeIndex+1).text();
			};
			$(".m_hide .eventList").eq(activeIndex).css('display', 'flex').siblings('.eventList').css('display', 'none');
			$(".pc_hide .eventList").eq(activeIndex).css('display', 'flex').siblings('.eventList').css('display', 'none');
			$(".goTo span").text(year);
		}
	});
	$(".honors .goTo").on('click', function(){
		$('body, html').animate({
			scrollTop: 0
		}, 500);
		var slides = $(".year_choose .swiper-slide");
		if (honorsIndex+1 >= slides.length) {
			honorsSwi.slideTo(0, 200, true)
		} else {
			honorsSwi.slideNext(true, 200)
		}
	})
	$(".year_choose .swiper-slide").on('click', function(){
		var index = $(this).index();
		honorsSwi.slideTo(index, 200, true)
	})
	
	//newenergy
	var newenergySwi = new Swiper('.newenergy .swiper-container', {
		loop: true,
		autoplay: 5000,
		prevButton:'.newenergy .prev',
		nextButton:'.newenergy .next',
	});
	// tiggo8pro-e
	var tiggo8p_banner = new Swiper('.tiggo8proe .viewbox', {
		loop: true,
		autoplay: 000,
		autoplayStopOnLast: false,
		autoplayDisableOnInteraction: false,
		speed: 1000,
		paginationClickable: true,
		pagination: '.tiggo8proe .powerbox .pagination',
	})
})


