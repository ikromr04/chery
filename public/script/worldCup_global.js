var currentIndex = 0;
var preIndex = 0;
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

$(document).ready(function () {
//	视频播放轮播
var video_len=$(".video_con .swiper-slide").length;
if(video_len>1){
	
	var video_con = new Swiper('.video_con', {
		paginationClickable: true,
		loop: true,
		onInit: function (swiper) { //Swiper2.x的初始化是onFirstInit
			swiperAnimateCache(swiper); //隐藏动画元素 
			swiperAnimate(swiper); //初始化完成开始动画
		},
		onSlideChangeEnd: function (swiper) {
			swiperAnimate(swiper); //每个slide切换结束时也运行当前slide动画
		},
		pagination: '.video_con .swiper-pagination',
	})
}
	
	
	//console.log(!phone)
	var pic_len=$(".pic_con .swiper-slide").length;
	
	if(!phone)
	{
		//	图片轮播（PC版）
		var pic_con = new Swiper('.pic_con', {
	//		paginationClickable: true,
			slidesPerView: 2,
	        slidesPerColumn: 2,
	        // 如果需要前进后退按钮
//	     slidesPerView: "auto",
//freeMode: true,
	    	nextButton: '.right .swiper-button-next',
	    	prevButton: '.right .swiper-button-prev',
	//      spaceBetween: 10,
	//		loop: true,
			onInit: function (swiper) { //Swiper2.x的初始化是onFirstInit
//				swiperAnimateCache(swiper); //隐藏动画元素 
//				swiperAnimate(swiper); //初始化完成开始动画
			},
			onSlideChangeEnd: function (swiper) {
				//swiperAnimate(swiper); //每个slide切换结束时也运行当前slide动画
			},
	//		pagination: '.pic_con .swiper-pagination',
		})
		if(pic_len<=4){
			$(".right .swiper-button-next").hide();
			$(".right .swiper-button-prev").hide();
		}
	}
	else
	{
		//	图片轮播（手机版）
		var pic_con = new Swiper('.pic_con', {
	//		paginationClickable: true,
			slidesPerView: 2,
 			//slidesPerView: "auto",
//	        slidesPerColumn: 2,
	        // 如果需要前进后退按钮
	//      slidesPerView: "auto",
	    	nextButton: '.right .swiper-button-next',
	    	prevButton: '.right .swiper-button-prev',
	//      spaceBetween: 10,
	//		loop: true,
			onInit: function (swiper) { //Swiper2.x的初始化是onFirstInit
//				swiperAnimateCache(swiper); //隐藏动画元素 
//				swiperAnimate(swiper); //初始化完成开始动画
			},
			onSlideChangeEnd: function (swiper) {
//				swiperAnimate(swiper); //每个slide切换结束时也运行当前slide动画
			},
	//		pagination: '.pic_con .swiper-pagination',
		})
		if(pic_len<=2){
			$(".right .swiper-button-next").hide();
			$(".right .swiper-button-prev").hide();
		}
	}
	var l=$(".new_con .swiper-slide").length;
	if(!phone&&l>4||phone)
	{	
		//	新闻图片轮播
		$(".new_con .btn_con").show();
		var new_con = new Swiper('.new_con', {
 			slidesPerView: "auto",
	    	nextButton: '.new_con .btn_con .right_btn',
	    	prevButton: '.new_con .btn_con .left_btn',
	    	pagination: '.swiper-pagination',
        	paginationType: 'progress',
			onInit: function (swiper) { //Swiper2.x的初始化是onFirstInit
//				swiperAnimateCache(swiper); //隐藏动画元素 
//				swiperAnimate(swiper); //初始化完成开始动画
			},
			onSlideChangeEnd: function (swiper) {
//				swiperAnimate(swiper); //每个slide切换结束时也运行当前slide动画
			},
		})
	}
//	上方图片轮播点击放大图片
//	$(".pic_con .swiper-slide a .pic").click(function(){
//		console.log("paly")
//		var line=$(this).find("img").attr("src");
//		$(".pop").fadeIn();
//		$(".pop").css("display","flex");
//		$(".pop .pic_con").show();
//		$(".pop .video").hide();
//		$(".pop .pic_con img").attr("src",line);
//	})
//	上方视频轮播点击播放视频	
	$(".video_con .swiper-slide .pic").click(function(){
		var index=$(this).index();
		var line=$(this).attr("data-line");
		if($.trim(line) != ""){
			$(".pop").fadeIn();
			$(".pop").css("display","flex");
			$(".pop .video").show();
			$(".pop .pic_con").hide();
			$(".pop .video video").attr("src",line);
			var v=$(".pop .video video")[0];
			v.play();
		}
		console.log(line)
	})
	//	弹窗关闭
	$(".pop .close").click(function(){
		$(".pop").fadeOut();
		
	})
})

	
	

