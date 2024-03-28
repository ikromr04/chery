@extends('layout.app')

@section('styles')
  <link href="{{ asset('styles/base.css') }}" type="text/css" rel="stylesheet">
  <link href="{{ asset('styles/swiper.min.css') }}" type="text/css" rel="stylesheet">
  <link href="{{ asset('styles/animate.min.css') }}" type="text/css" rel="stylesheet">
  <link href="{{ asset('styles/threesixty.css') }}" rel="stylesheet" />
  <link href="{{ asset('styles/themes.css') }}" type="text/css" rel="stylesheet">
  <link href="{{ asset('styles/m_themes.css') }}" type="text/css" rel="stylesheet">
  <link href="{{ asset('styles/model.css') }}" rel="stylesheet" />
  <link href="{{ asset('styles/m_model.css') }}" rel="stylesheet" />
@endsection

@section('content')
  <div class="modelwrap tiggo7 sameModel">
    @include('layout.header')

    <section>
      <div class="banner">
        <div class="txt wow fadeInRight animated" data-wow-duration="1s" data-wow-delay=".8s">
          <img src="{{ asset('images/newtiggo7_tit.png') }}" class="">
        </div>
        <div class="mediabox">
          <!--<video src="video/video.mp4" poster="images/newtiggo8pro_banner.jpg" autoplay="" muted=""></video>-->
          <img src="images/newtiggo7_banner.jpg" class="m_hide" />
          <img src="images/newtiggo7_banner_m.jpg" class="pc_hide" />
        </div>
      </div>
      <!--360-->
      <div class="model_wrap">
        <h3 class="tit_360">360° view</h3>
        <div class="change_E_I">
          <span class="on">EXTERIOR</span>
          <span>INTERIOR</span>
        </div>
        <div class="model_360">
          <img src="images/newtiggo7_360bg.png" class="bg360 m_hide" />
          <img src="images/newtiggo7_360bg_m.png" class="bg360 pc_hide" />
          <div class="pop_360_rou pop_360_rout">
            <div class="pop_360_rcon">
              <img src="images/360_view/tiggo7/black/34.jpg" class="reel" id="image" data-image="stitched-reel.jpg" data-stitched="496" data-frames="30" data-frame="15" data-rows="3" data-row="2" data-loops="false">
            </div>
            <div id="interior_360">
              <br>Loading...<br>
            </div>
          </div>
          <style>
            #image-reel {
              width: 100%;
              height: 6.33rem;
            }

            #image {
              width: 100%;
              height: 6.33rem;
            }

            .reel-panning,
            .reel-panning * {
              cursor: url(images/360_view/cursor.cur), move;
            }

            .reel-preloader {
              display: none !important;
            }

            @media (max-width: 900px) {
              #image {
                height: 3.96rem;
              }
            }
          </style>
          <script type="text/javascript">
            $(function() {
              $('.model_360 #image').reel({
                images: 'images/360_view/tiggo7/black/##.jpg|01..37',
                frame: 34
              });
              $('.exterior_color span').click(function() {
                $('.exterior_color span').removeClass('on');
                $(this).addClass('on');
                $('#image').reel('images', 'images/360_view/tiggo7/' + $(this).data('color') + '/##.jpg|01..37');
              })
            })
          </script>
        </div>
        <div class="color_cut">
          <div class="color exterior_color">
            <span data-color="black" class="black on"><i></i></span>
            <span data-color="blue" class="blue-b"><i></i></span>
            <span data-color="green" class="green"><i></i></span>
            <span data-color="orange" class="orange"><i></i></span>
            <span data-color="red" class="red"><i></i></span>
            <span data-color="white" class="white"><i></i></span>
          </div>
          <!--<div class="color interior_color off">-->
          <!--<span data-color="brown" class="orange on"><i></i></span>-->
          <!--</div>-->
        </div>
      </div>
      <!--Fashionable Design-->
      <div class="modelmenu">
        <div class="it on">
          <span class="ic"><i></i></span>
          <span class="label">DESIGN</span>
        </div>
        <div class="it">
          <span class="ic"><i></i></span>
          <span class="label">INTERIOR</span>
        </div>
        <div class="it">
          <span class="ic"><i></i></span>
          <span class="label">POWER</span>
        </div>
        <div class="it">
          <span class="ic"><i></i></span>
          <span class="label">TECH</span>
        </div>
        <div class="it">
          <span class="ic"><i></i></span>
          <span class="label">SAFETY</span>
        </div>
      </div>
      <div class="design module" id="module1">
        <div class="title">
          <h4>
            <span class="big_num">01</span>
            <span class="tit">DESIGN</span>
          </h4>
        </div>
        <div class="swiper-container sameSwiper samebox swiper-no-swiping">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="images/newtiggo7_design_p1.jpg" class="pic m_hide" />
              <img src="images/newtiggo7_design_p1_m.jpg" class="pic pc_hide" />
              <div class="textbox">
                <p>The sporty H.D.S body represents a perfect combination of power and softness.</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="images/newtiggo7_design_p2.jpg" class="pic m_hide" />
              <img src="images/newtiggo7_design_p2_m.jpg" class="pic pc_hide" />
              <div class="textbox">
                <p>The virtually indestructible trident xenon headlamps not only demonstrate a sense of power of this SUV, but also add to some luxury elements to reveal your uncommon status.</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="images/newtiggo7_design_p3.jpg" class="pic m_hide" />
              <img src="images/newtiggo7_design_p3_m.jpg" class="pic pc_hide" />
              <div class="textbox">
                <p>The wave-like waistline graces the car with the beauty of streamline, and at the same time reduces the drag coefficient to 0.34.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="cutTab wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
          <div class="cutbtn on">Hydrodynamic Body </div>
          <div class="cutbtn">Trident Xenon Headlamp</div>
          <div class="cutbtn">Wave-like Waistline</div>
        </div>
      </div>
      <!--INTERIOR-->
      <div class="comfort module" id="module2">
        <div class="title">
          <h4>
            <span class="big_num">02</span>
            <span class="tit">INTERIOR</span>
          </h4>
        </div>
        <div class="swiper-container sameSwiper samebox swiper-no-swiping">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="images/newtiggo7_royal_p1.jpg" class="pic m_hide" />
              <img src="images/newtiggo7_royal_p1_m.jpg" class="pic pc_hide" />
              <div class="textbox black">
                <p>Flawless full-grain fine leather is carefully chosen, with soft and delicate touch and preserved natural texture.</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="images/newtiggo7_royal_p2.jpg" class="pic m_hide" />
              <img src="images/newtiggo7_royal_p2_m.jpg" class="pic pc_hide" />
              <div class="textbox">
                <p>Stretching to both sides like an eagle spreading its wings, the dashboard conveys a sense of power.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="cutTab wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
          <div class="cutbtn on">Sporty and Cool Interior Trim</div>
          <div class="cutbtn">Wing-shaped Center Console</div>
        </div>
      </div>
      <!--Platinum Power-->
      <div class="power module" id="module3">
        <img src="images/newtiggo7_power_bg2.jpg" class="cover_bg m_hide" />
        <img src="images/newtiggo7_power_bg2_m.jpg" class="cover_bg pc_hide" />
        <div class="title">
          <h4>
            <span class="big_num">03</span>
            <span class="tit">POWER</span>
          </h4>
        </div>
        <div class="powerbox samebox">
          <div class="caritem">
            <div class="imgbox">
              <img src="images/newtiggo7_power_p1.jpg" />
            </div>
            <div class="textbox">
              <h5>AISIN 6MT</h5>
              <p>Superior gear shifting feel, strong drawing-in feel, comfortable operation, low noise, high efficiency and fuel economy.</p>
            </div>
          </div>
          <div class="caritem">
            <div class="imgbox">
              <img src="images/newtiggo7_power_p2.jpg" />
            </div>
            <div class="textbox">
              <h5>GETRAG 6-SPEED TRANSVERSE DRY DUAL CLUTCH TRANSMISSION</h5>
              <p>This brings more direct power output, higher transmission efficiency, and quicker shifting response. The transmission is also smooth and clear-cut in gear shifting, with excellent fuel-efficiency and durability.</p>
            </div>
          </div>
          <div class="caritem">
            <div class="imgbox">
              <img src="images/newtiggo7_power_p3.jpg" />
            </div>
            <div class="textbox">
              <h5>INDEPENDENT MULTI-LINK REAR SUSPENSION + SUBFRAME STRUCTURE</h5>
              <p>Ensure both flexibility at low speeds and stability at high speeds, with smooth and natural turning.</p>
            </div>
          </div>
        </div>
      </div>
      <!--Intelligent Tech-->
      <div class="tech module graybg" id="module4">
        <div class="title">
          <h4>
            <span class="big_num">04</span>
            <span class="tit">TECH</span>
          </h4>
        </div>
        <div class="swiper-container sameSwiper samebox">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="images/newtiggo7_tech_p1.jpg" class="pic m_hide" />
              <img src="images/newtiggo7_tech_p1_m.jpg" class="pic pc_hide" />
              <div class="textdet pc_hide">
                <p>4.8-inch Color LCD Dashboard </p>
                <p>Easy and user-friendly interactive experience.</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="images/newtiggo7_tech_p2.jpg" class="pic m_hide" />
              <img src="images/newtiggo7_tech_p2_m.jpg" class="pic pc_hide" />
              <div class="textdet pc_hide">
                <p>Bluetooth Hands-free Phone </p>
                <p>It frees the hands of the driver, thus reducing the risk of traffic accident.</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="images/newtiggo7_tech_p3.jpg" class="pic m_hide" />
              <img src="images/newtiggo7_tech_p3_m.jpg" class="pic pc_hide" />
              <div class="textdet pc_hide">
                <p>Dual USB Ports</p>
                <p>Support charging for external devices while playing music and videos, ensuring continuous power supply for your entertainment throughout the ride.</p>
              </div>
            </div>
          </div>
          <div class="swiper-pagination pc_hide"></div>
        </div>
        <div class="cutwindow">
          <div class="cutbtn on">
            <div class="text">
              <h5>4.8-inch Color LCD Dashboard</h5>
              <p>Easy and user-friendly interactive experience.</p>
            </div>
          </div>
          <div class="cutbtn">
            <div class="text">
              <h5>Bluetooth Hands-free Phone</h5>
              <p>It frees the hands of the driver, thus reducing the risk of traffic accident.</p>
            </div>
          </div>
          <div class="cutbtn">
            <div class="text">
              <h5>Dual USB Ports</h5>
              <p>Support charging for external devices while playing music and videos, ensuring continuous power supply for your entertainment throughout the ride.</p>
            </div>
          </div>
        </div>
      </div>
      <!--Overall Safety-->
      <div class="safety module" id="module5">
        <div class="title">
          <h4>
            <span class="big_num">05</span>
            <span class="tit">SAFETY</span>
          </h4>
        </div>
        <div class="swiper-container sameSwiper samebox swiper-no-swiping">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="images/newtiggo7_safe_p1.jpg" class="pic m_hide" />
              <img src="images/newtiggo7_safe_p1_m.jpg" class="pic pc_hide" />
              <div class="textbox">
                <p>The desired braking experience is provided to avoid accidents, thus making the driver safer and more confident.</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="images/newtiggo7_safe_p2.jpg" class="pic m_hide" />
              <img src="images/newtiggo7_safe_p2_m.jpg" class="pic pc_hide" />
              <div class="textbox ">
                <p>Ensure the best stability of the body and accurate steering performance, effectively decreasing 80% of sideslip.</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="images/newtiggo7_safe_p3.jpg" class="pic m_hide" />
              <img src="images/newtiggo7_safe_p3_m.jpg" class="pic pc_hide" />
              <div class="textbox">
                <p>Airbag is a passive security system. When collision occurs, airbag can reduce about 25% of head injury rate, and about 80% of face injury rate.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="cutTab wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
          <div class="cutbtn on">ULTRA-SHORT BRAKING DISTANCE</div>
          <div class="cutbtn">BOSCH 9.1ESP</div>
          <div class="cutbtn">ALL-ROUND PROTECTION ENABLED BY 6 AIRBAG</div>
        </div>
      </div>
    </section>

    @include('layout.footer')
  </div>
@endsection

@section('scripts')
  <script type="text/javascript" src="{{ asset('script/resizeRoot.js') }}"></script>
  <script type="text/javascript" src="{{ asset('script/jquery.js') }}"></script>
  <script type="text/javascript" src="{{ asset('script/swiper.jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('script/threesixty.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('script/js_360.js') }}"></script>
  <script type="text/javascript" src="{{ asset('script/swiper.animate1.0.3.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('script/jquery-ui.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('script/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('script/wow.min.js') }}" type="text/javascript" charset="utf-8"></script>
  <script src="{{ asset('script/PxLoader.js') }}" type="text/javascript" charset="utf-8"></script>
  <script src="{{ asset('script/PxLoaderImage.js') }}" type="text/javascript" charset="utf-8"></script>
  <script src="{{ asset('script/jquery.reel-min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('script/global.js') }}"></script>
@endsection


@section('script')
  <script type="text/javascript">
    $(document).ready(function() {
      var pano = new pano2vrPlayer("interior_360");
      pano.readConfigUrlAsync("360/pano_tiggo7_brown.xml");
      //				$(".pop_360_rcon").ThreeSixty({
      //					totalFrames: 36,
      //					endFrame: 30,
      //					currentFrame: 29,
      //					imgList: ".threesixty_images",
      //					progress: ".loading-360",
      //					imagePath: "./images/360_view/tiggo7/black/",
      //					filePrefix: "",
      //					ext: ".png",
      //					width: $(window).outerWidth(),
      //					height: '100%',
      //					navigation: !1,
      //					disableSpin: !1,
      //					responsive: !0,
      //					zeroPadding: true
      //				})
      //				$('.exterior_color span').click(function() {
      //					$('.exterior_color span').removeClass('on');
      //					$(this).addClass('on');
      //					$('.threesixty_images').html('');
      //					$("#car").ThreeSixty({
      //						totalFrames: 36,
      //						endFrame: 30,
      //						currentFrame: 29,
      //						imgList: ".threesixty_images",
      //						progress: ".loading-360",
      //						imagePath: "./images/360_view/tiggo7/" + $(this).data('color') + "/",
      //						filePrefix: "",
      //						ext: ".png",
      //						width: $(window).outerWidth(),
      //						height: '100%',
      //						navigation: !1,
      //						disableSpin: !1,
      //						responsive: !0,
      //						zeroPadding: true
      //					})
      //				})
      $('.change_E_I span').on('click', function() {
        $('.change_E_I span').removeClass('on');
        $(this).addClass('on');
        switch ($(this).index()) {
          case 0:
            $('#interior_360').css({
              'z-index': -10,
              'opacity': 0
            });
            $('.color_cut .color').removeClass('off');
            $('.color_cut .interior_color').addClass('off');
            break;
          case 1:
            $('.color_cut .color').removeClass('off');
            $('.color_cut .exterior_color').addClass('off');
            $('#interior_360').css({
              'z-index': 10,
              'opacity': 1
            });
            break;
        }
      })
      $('.interior_color span').click(function() {
        if (!$(this).hasClass('on')) {
          $('.interior_color span').removeClass('on');
          $(this).addClass('on');
          pano.readConfigUrlAsync('360/pano_tiggo7_' + $(this).data('color') + '.xml');
        }
      })
    })
    $(function() {

    })
  </script>
@endsection
