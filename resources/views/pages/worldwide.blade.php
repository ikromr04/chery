@extends('layout.app')

@section('styles')
  <link href="styles/base.css" type="text/css" rel="stylesheet">
  <link href="styles/swiper.min.css" type="text/css" rel="stylesheet">
  <link href="styles/animate.min.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="styles/threesixty.css" />
  <link href="styles/themes.css" type="text/css" rel="stylesheet">
  <link href="styles/m_themes.css" type="text/css" rel="stylesheet">
@endsection

@section('content')
  <div class="worldwide whitebg paddingtop">
    @include('layout.header')

    <section>
      <div class="breadcrumb wow fadeIn animated" data-wow-delay="0.4s">
        <a>Home</a>
        <span>></span>
        <a class="current">Worldwide</a>
      </div>
      <div class="mapwrap m_hide">
        <img src="images/map/map_bg.jpg" class="map" />

        <img src="images/map/map_pop.png" class="map_pop wow mapSlide animated" data-wow-duration="2s" data-wow-delay="0.2s" />
        <div class="points">
          <div class="pointbox left on" style="left: 14.1146%; top: 60.7673%" data-name="CHILE" data-img="images/map_img.jpg" data-url="/" data-link="/" data-content="OWNERS CLUB-ONLINE EVENTS">
            <a class="point">
              <span class="ic_t"></span>
              <span class="ic_b"></span>
            </a>
            <span class="name">CHILE</span>
          </div>
          <!-- <div class="pointbox leftbottom" style="left: 18.4896%; top: 42.698%" data-name="PERU" data-img="images/map_img.jpg" data-url="/" data-link="/" data-content="OWNERS CLUB-ONLINE EVENTS">
                <a class="point" >
                  <span class="ic_t"></span>
                  <span class="ic_b"></span>
                </a>
                <span class="name">PERU</span>
              </div> -->
          <!-- <div class="pointbox leftbottom" style="left: 20.1563%; top: 29.8267%" data-name="COSTA RICA" data-img="images/map_img.jpg" data-url="/" data-link="/" data-content="OWNERS CLUB-ONLINE EVENTS">
                <a class="point"  >
                  <span class="ic_t"></span>
                  <span class="ic_b"></span>
                </a>
                <span class="name">COSTA RICA</span>
              </div>
              <div class="pointbox rightbottom" style="left: 20.7292%; top: 54.5792%" data-name="ARGENTINA" data-img="images/map_img.jpg" data-url="/" data-link="/" data-content="OWNERS CLUB-ONLINE EVENTS">
                <a class="point">
                  <span class="ic_t"></span>
                  <span class="ic_b"></span>
                </a>
                <span class="name">ARGENTINA</span>
              </div>
              <div class="pointbox rightbottom" style="left: 22.8646%; top: 50.2475%" data-name="URUGUAY" data-img="images/map_img.jpg" data-url="/" data-link="/" data-content="OWNERS CLUB-ONLINE EVENTS">
                <a class="point">
                  <span class="ic_t"></span>
                  <span class="ic_b"></span>
                </a>
                <span class="name">URUGUAY</span>
              </div>
              <div class="pointbox right" style="left: 22.0833%; top: 44.9257%" data-name="PARAGUAY" data-img="images/map_img.jpg" data-url="/" data-link="/" data-content="OWNERS CLUB-ONLINE EVENTS">
                <a class="point" >
                  <span class="ic_t"></span>
                  <span class="ic_b"></span>
                </a>
                <span class="name">PARAGUAY</span>
              </div>
              <div class="pointbox right" style="left: 28.9063%; top: 37.7475%" data-name="BRAZIL" data-img="images/map_img.jpg" data-url="/" data-link="/" data-content="OWNERS CLUB-ONLINE EVENTS">
                <a class="point"  >
                  <span class="ic_t"></span>
                  <span class="ic_b"></span>
                </a>
                <span class="name">BRAZIL</span>
              </div>
              <div class="pointbox righttop" style="left: 25.0521%; top: 32.9208%"  data-name="ECUADOR" data-img="images/map_img.jpg" data-url="/" data-link="/" data-content="OWNERS CLUB-ONLINE EVENTS">
                <a class="point" >
                  <span class="ic_t"></span>
                  <span class="ic_b"></span>
                </a>
                <span class="name">ECUADOR</span>
              </div>
              <div class="pointbox leftbottom" style="left: 44.5313%; top: 22.6485%" data-name="TUNISIA" data-img="images/map_img.jpg" data-url="/" data-link="/" data-content="OWNERS CLUB-ONLINE EVENTS">
                <a class="point" >
                  <span class="ic_t"></span>
                  <span class="ic_b"></span>
                </a>
                <span class="name">TUNISIA</span>
              </div> -->
          <div class="pointbox lefttop on" style="left: 46.9271%; top: 26.8564%" data-name="EGYPT" data-img="images/map_img.jpg" data-url="/" data-link="/" data-content="OWNERS CLUB-ONLINE EVENTS">
            <a class="point">
              <span class="ic_t"></span>
              <span class="ic_b"></span>
            </a>
            <span class="name">EGYPT</span>
          </div>
          <!-- <div class="pointbox left" style="left: 49.6354%; top: 17.0792%" data-name="UKRAINE" data-img="images/map_img.jpg" data-url="/" data-link="/" data-content="OWNERS CLUB-ONLINE EVENTS">
                <a class="point">
                  <span class="ic_t"></span>
                  <span class="ic_b"></span>
                </a>
                <span class="name">UKRAINE</span>
              </div>
              <div class="pointbox rightbottom" style="left: 50.9375%; top: 22.1535%" data-name="KUWAIT" data-img="images/map_img.jpg" data-url="/" data-link="/" data-content="OWNERS CLUB-ONLINE EVENTS">
                <a class="point" >
                  <span class="ic_t"></span>
                  <span class="ic_b"></span>
                </a>
                <span class="name">KUWAIT</span>
              </div> -->
          <div class="pointbox rightbottom on" style="left: 50.3646%; top: 28.3416%" data-name="SAUDI ARABIA" data-img="images/map_img.jpg" data-url="/" data-link="/" data-content="OWNERS CLUB-ONLINE EVENTS">
            <a class="point">
              <span class="ic_t"></span>
              <span class="ic_b"></span>
            </a>
            <span class="name">SAUDI ARABIA</span>
          </div>
          <!--<div class="pointbox left on" style="left: 56.5938%; top: 14.3564%"  data-name="RUSSIA" data-img="images/map_img.jpg" data-url="/" data-link="/" data-content="OWNERS CLUB-ONLINE EVENTS">
                <a class="point">
                  <span class="ic_t"></span>
                  <span class="ic_b"></span>
                </a>
                <span class="name">RUSSIA</span>
              </div>-->
          <div class="pointbox leftbottom on" style="left: 73.28125%; top: 33.7871%" data-name="PHILIPPINES" data-img="images/map_img.jpg" data-url="/" data-link="/" data-content="OWNERS CLUB-ONLINE EVENTS">
            <a class="point">
              <span class="ic_t"></span>
              <span class="ic_b"></span>
            </a>
            <span class="name">PHILIPPINES</span>
          </div>
          <!-- <div class="pointbox lefttop" style="left: 90.3646%; top: 49.2574%" data-name="FRENCH POLYNESIA" data-img="images/map_img.jpg" data-url="/" data-link="/" data-content="OWNERS CLUB-ONLINE EVENTS">
                <a class="point" >
                  <span class="ic_t"></span>
                  <span class="ic_b"></span>
                </a>
                <span class="name">FRENCH POLYNESIA</span>
              </div> -->
        </div>
        <div class="countryInfo countryInfo_CHILE wow fadeIn animated" style="left:16.5271%;
      top: 58.8564%" data-wow-duration="1s" data-wow-delay="3s">
          <h3 class="name"><img src="images/map/country_ic.png" class="ic" />CHILE</h3>
          <a href="" class="imgbox">
            <video src="./video/TIGGO 3X-Fun to drive.MP4" muted autoplay loop></video>
          </a>
          <p class="det">OWNERS CLUB-ONLINE EVENTS</p>
          <a href="" class="link">READ MORE</a>
        </div>
        <div class="countryInfo countryInfo_EGYPT wow fadeIn animated" style="left:31.9564%;
      top:27.9271%;" data-wow-duration="1s" data-wow-delay="3.2s">
          <h3 class="name"><img src="images/map/country_ic.png" class="ic" />EGYPT</h3>
          <a href="" class="imgbox">
            <video src="./video/TIGGO 8-Duelo.mp4" muted autoplay loop></video>
          </a>
          <p class="det">OWNERS CLUB-ONLINE EVENTS</p>
          <a href="" class="link">READ MORE</a>
        </div>
        <div class="countryInfo countryInfo_SAUDI ARABIA wow fadeIn animated" style="left: 49.3646%; top:37.3416%" data-wow-duration="1s" data-wow-delay="3.4s">
          <h3 class="name"><img src="images/map/country_ic.png" class="ic" />SAUDI ARABIA</h3>
          <a href="" class="imgbox">
            <img src="images/map_img.jpg" />
          </a>
          <p class="det">OWNERS CLUB-ONLINE EVENTS</p>
          <a href="" class="link">READ MORE</a>
        </div>
        <!--<div class="countryInfo countryInfo_RUSSIA wow fadeIn animated" style="left:58.5938%; top:1.3564%" data-wow-duration="1s" data-wow-delay="3.5s">
              <h3 class="name"><img src="images/map/country_ic.png" class="ic"/>RUSSIA</h3>
              <a href="" class="imgbox">
                <img src="images/map_img.jpg"/>
              </a>
              <p class="det">OWNERS CLUB-ONLINE EVENTS</p>
              <a href="" class="link">READ MORE</a>
            </div>-->
        <div class="countryInfo countryInfo_PHILIPPINES wow fadeIn animated" style="left:76.5938%; top:38.3416%" data-wow-duration="1s" data-wow-delay="3.6s">
          <h3 class="name"><img src="images/map/country_ic.png" class="ic" />PHILIPPINES</h3>
          <a href="" class="imgbox">
            <img src="images/map_img.jpg" />
          </a>
          <p class="det">OWNERS CLUB-ONLINE EVENTS</p>
          <a href="" class="link">READ MORE</a>
        </div>
      </div>
      <div class="selectWrap pc_hide">
        <span>BRAZIL</span>
        <img src="images/select_icon.png" class="angle" />
        <div class="options">
          <a class="">BRAZIL</a>
          <a class="">CHILE</a>
          <a class="">EGYPT</a>
          <a class="">KUWAIT</a>
          <a class="">PERU</a>
          <a class="">PHILIPPINES</a>
          <a class="">QATAR</a>
          <a class="">RUSSIA</a>
          <a class="">SAUDI ARABIA</a>
          <a class="">UKRAINE</a>
        </div>
      </div>
      <div class="content pc_hide">
        <div class="country w1200">
          <h3 class="line_title left">EGYPT
            <div class="link">
              <div class="linkwrap">
                <a href="www.chery-eg.com">www.chery-eg.com</a>
              </div>
              <img src="images/go_link.png" />
            </div>
          </h3>
          <div class="showSwi">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="videobox">
                    <video src="./video/video.mp4" poster="./images/worldwide_video.jpg" class="video">
                    </video>
                    <span class="play_btn"></span>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="videobox">
                    <video src="./video/zuchechengpian.mp4" poster="./images/worldwide_video.jpg" class="video">
                    </video>
                    <span class="play_btn"></span>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="imgbox">
                    <img src="images/motorshow_video.jpg" />
                  </div>
                </div>
              </div>
            </div>
            <div class="arrow_prev m_hide"></div>
            <div class="arrow_next m_hide"></div>
            <div class="swiper-pagination"></div>
          </div>
        </div>
        <div class="gallery w1200">
          <h3 class="line_title bottom">GALLERY</h3>
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="images/worldwide_demo.jpg" />
              </div>
              <div class="swiper-slide">
                <img src="images/worldwide_demo.jpg" />
              </div>
            </div>
            <div class="arrow_prev control"></div>
            <div class="arrow_next control"></div>
          </div>
        </div>
      </div>
    </section>

    @include('layout.footer')
  </div>
@endsection

@section('scripts')
  <script type="text/javascript" src="script/resizeRoot.js"></script>
  <script type="text/javascript" src="script/jquery.js"></script>
  <script type="text/javascript" src="script/swiper.jquery.min.js"></script>
  <script type="text/javascript" src="script/threesixty.min.js"></script>
  <script type="text/javascript" src="script/js_360.js"></script>
  <script type="text/javascript" src="script/swiper.animate1.0.3.min.js"></script>
  <script type="text/javascript" src="script/jquery-ui.min.js"></script>
  <script type="text/javascript" src="script/jquery.animateNumber.min.js"></script>
  <script src="script/wow.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="script/PxLoader.js" type="text/javascript" charset="utf-8"></script>
  <script src="script/PxLoaderImage.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript" src="script/global.js"></script>
  <script src="script/jquery.pagination.js"></script>
@endsection

@section('script')
  <script>
    $(function() {
      function randomsort(a, b) {
        //随机打乱
        return Math.random() > .5 ? -1 : 1;
      }
      var time = 2000;
      var points = $(".points .pointbox");
      var pointNumArr = [];
      points.each(function(k) {
        pointNumArr.push(k);
        //					time += 300;
        //					console.log(time)
        //					points.eq(k).css({
        //						'animationDelay': time + 'ms'
        //					})
      })
      var randomNum = pointNumArr.sort(randomsort)
      for (var i = 0; i < randomNum.length; i++) {
        time += 100;
        console.log(time)
        points.eq(randomNum[i]).css({
          'animationDelay': time + 'ms'
        })
      }
      var countryInfo = $('.countryInfo');
      // $(".pointbox").on('click', function(){
      // 	$(this).addClass('on').siblings('.pointbox').removeClass('on');
      // 	var name = $(this).data('name'),
      // 		img = $(this).data('img'),
      // 		url = $(this).data('url'),
      // 		link = $(this).data('link'),
      // 		content = $(this).data('content');
      // 	countryInfo.find('.name').text(name);
      // 	countryInfo.find('.imgbox').attr('href', url);
      // 	countryInfo.find('img').attr('src', img);
      // 	countryInfo.find('.link').attr('href', link);
      // 	countryInfo.find('.det').text(content);
      // })

      var countryswiper = new Swiper('.country .swiper-container', {
        speed: 1000,
        prevButton: '.country .arrow_prev',
        nextButton: '.country .arrow_next',
        pagination: '.country .swiper-pagination',
        paginationClickable: true,
        onSlideChangeStart: function(swiper) {
          var index = swiper.realIndex;
          console.log(index)
          var videos = $(".showSwi").find('video');
          if (videos.length > 0) {
            for (var i = 0; i < videos.length; i++) {
              videos.eq(i).get(0).pause();
            }
          }
        }
      });
      var slides = $(".gallery .m_hide .swiper-slide");
      if (slides.length > 1) {
        var galleryswiperPc = new Swiper('.gallery .swiper-container.m_hide', {
          loop: true,
          autoplay: 5000,
          speed: 1000,
          prevButton: '.gallery .m_hide .arrow_prev',
          nextButton: '.gallery .m_hide .arrow_next'
        });
        $(".gallery .m_hide .control").show();
      } else {
        $(".gallery .m_hide .control").hide();
      };
      $(".selectWrap").on('click', function() {
        if ($(this).hasClass('on')) {
          $(this).removeClass('on');
          $(this).find('.options').slideUp();
        } else {
          $(this).addClass('on')
          $(this).find('.options').slideDown();
        }
      })
      $(".selectWrap a").click(function() {
        var name = $(this).text();
        $(this).parent().siblings('span').text(name);
      })
      var galleryswiperMb = new Swiper('.pc_hide .gallery .swiper-container', {
        loop: true,
        autoplay: 5000,
        speed: 1000,
        prevButton: '.pc_hide .gallery .arrow_prev',
        nextButton: '.pc_hide .gallery .arrow_next'
      });
    })
  </script>
@endsection
