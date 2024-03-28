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
  <div class="modelwrap tiggo2pro sameModel">
    @include('layout.header')

    <section>
      <div class="banner">
        <div class="txt wow fadeInLeft animated" data-wow-duration="1s" data-wow-delay=".8s">
          <img src="images/newtiggo2pro_tit.png" class="">
        </div>
        <div class="mediabox">
          <!--<video src="video/video.mp4" poster="images/newtiggo8pro_banner.jpg" autoplay="" muted=""></video>-->
          <img src="images/newtiggo2pro_banner.jpg" class="m_hide" />
          <img src="images/newtiggo2pro_banner_m.jpg" class="pc_hide" />
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
          <img src="images/newtiggo2pro_360bg.png" class="bg360" />
          <div class="pop_360_rou pop_360_rout">
            <div class="pop_360_rcon">
              <img src="images/360_view/tiggo2pro/black/35.jpg" class="reel" id="image" data-image="stitched-reel.jpg" data-stitched="496" data-frames="30" data-frame="15" data-rows="3" data-row="2" data-loops="false">
            </div>
            <div id="interior_360">
              <br>Loading...<br>
            </div>
          </div>
          <style>
            #image-reel {
              width: 100%;
              height: 6.75rem;
            }

            #image {
              width: 100%;
              height: 6.75rem;
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
                height: 4.22rem;
              }
            }
          </style>
          <script type="text/javascript">
            $(function() {
              $('.model_360 #image').reel({
                images: 'images/360_view/tiggo2pro/black/##.jpg|01..36',
                frame: 35
              });
              $('.exterior_color span').click(function() {
                $('.exterior_color span').removeClass('on');
                $(this).addClass('on');
                $('#image').reel('images', 'images/360_view/tiggo2pro/' + $(this).data('color') + '/##.jpg|01..36');
              })
            })
          </script>
        </div>
        <div class="color_cut">
          <div class="color exterior_color">
            <span data-color="black" class="black on"><i></i></span>
            <span data-color="gray" class="gray"><i></i></span>
            <span data-color="grayblack" class="grayblack"><i></i></span>
            <span data-color="red" class="red"><i></i></span>
            <span data-color="white" class="white"><i></i></span>
            <span data-color="silverblack" class="silverblack"><i></i></span>
          </div>
          <div class="color interior_color off">
            <span data-color="black" class="black on"><i></i></span>
            <span data-color="orange" class="orange"><i></i></span>
          </div>
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
              <img src="images/newtiggo2pro_design_p1.jpg" class="pic m_hide" />
              <img src="images/newtiggo2pro_design_p1_m.jpg" class="pic pc_hide" />
              <div class="textbox black">
                <p>The radial layout reveals the tension of the front face.</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="images/newtiggo2pro_design_p2.jpg" class="pic m_hide" />
              <img src="images/newtiggo2pro_design_p2_m.jpg" class="pic pc_hide" />
              <div class="textbox ">
                <p>The upper and lower shoulder lines present a sense of power. </p>
                <p>A sense of plumpness, fashion and aggression is reflected by the two shoulder lines.</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="images/newtiggo2pro_design_p3.jpg" class="pic m_hide" />
              <img src="images/newtiggo2pro_design_p3_m.jpg" class="pic pc_hide" />
              <div class="textbox">
                <p>The 3D hollow smoked tail lamps, together with the rhythmic light strip, echo the headlamps.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="cutTab wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
          <div class="cutbtn on">Dot-matrix galaxy-like grille</div>
          <div class="cutbtn">Dynamic double shoulder lines</div>
          <div class="cutbtn">3D hollow smoked tail lamps</div>
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
              <img src="images/newtiggo2pro_royal_p1.jpg" class="pic m_hide" />
              <img src="images/newtiggo2pro_royal_p1_m.jpg" class="pic pc_hide" />
              <div class="textbox ">
                <p>It feels comfortable in both cold and hot environment.</p>
                <p>It can adapt to environmental impact actively.</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="images/newtiggo2pro_royal_p2.jpg" class="pic m_hide" />
              <img src="images/newtiggo2pro_royal_p2_m.jpg" class="pic pc_hide" />
              <div class="textbox ">
                <p>Large legroom in the rear seats.</p>
                <p>The large headroom gives the passengers a stronger sense of longitudinal space.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="cutTab wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
          <div class="cutbtn on">D-shaped multifunction thermostatic steering wheel</div>
          <div class="cutbtn">Larger rear seat space than similar products</div>
        </div>
      </div>
      <!--Intelligent Tech-->
      <div class="tech module graybg" id="module3">
        <div class="title">
          <h4>
            <span class="big_num">03</span>
            <span class="tit">TECH</span>
          </h4>
        </div>
        <div class="swiper-container sameSwiper samebox">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="images/newtiggo2pro_tech_p1.jpg" class="pic m_hide" />
              <img src="images/newtiggo2pro_tech_p1_m.jpg" class="pic pc_hide" />
              <div class="textdet pc_hide">
                <p>9-inch HMI touch screen</p>
                <p>The 9-inch HMI touch screen has a black bezel and touch buttons, giving a strong sense of fashion and technology. <br> The HMI is simple and user-friendly.</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="images/newtiggo2pro_tech_p2.jpg" class="pic m_hide" />
              <img src="images/newtiggo2pro_tech_p2_m.jpg" class="pic pc_hide" />
              <div class="textdet pc_hide">
                <p>EPB</p>
                <p>the parking braking is realized through electronic control to ensure that the braking force is evenly applied to each wheel, thereby ensuring the parking effect.</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="images/newtiggo2pro_tech_p3.jpg" class="pic m_hide" />
              <img src="images/newtiggo2pro_tech_p3_m.jpg" class="pic pc_hide" />
              <div class="textdet pc_hide">
                <p>Bluetooth+USB HMI</p>
                <p>The connection between your mobile phone and your vehicle can be realized by Bluetooth or a USB port in an easy manner.</p>
              </div>
            </div>
          </div>
          <div class="swiper-pagination pc_hide"></div>
        </div>
        <div class="cutwindow">
          <div class="cutbtn on">
            <div class="text">
              <h5>9-inch HMI touch screen</h5>
              <p>The 9-inch HMI touch screen has a black bezel and touch buttons, giving a strong sense of fashion and technology. <br> The HMI is simple and user-friendly.</p>
            </div>
          </div>
          <div class="cutbtn">
            <div class="text">
              <h5>EPB</h5>
              <p>the parking braking is realized through electronic control to ensure that the braking force is evenly applied to each wheel, thereby ensuring the parking effect.</p>
            </div>
          </div>
          <div class="cutbtn">
            <div class="text">
              <h5>Bluetooth+USB HMI</h5>
              <p>The connection between your mobile phone and your vehicle can be realized by Bluetooth or a USB port in an easy manner.</p>
            </div>
          </div>
        </div>
      </div>
      <!--Overall Safety-->
      <div class="safety module" id="module4">
        <div class="title">
          <h4>
            <span class="big_num">04</span>
            <span class="tit">SAFETY</span>
          </h4>
        </div>
        <div class="swiper-container sameSwiper samebox swiper-no-swiping">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="images/newtiggo2pro_safe_p2.jpg" class="pic m_hide" />
              <img src="images/newtiggo2pro_safe_p1_m.jpg" class="pic pc_hide" />
              <div class="textbox">
                <p>It can be operated by a switch inside the door in an easy and safe manner.</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="images/newtiggo2pro_safe_p1.jpg" class="pic m_hide" />
              <img src="images/newtiggo2pro_safe_p2_m.jpg" class="pic pc_hide" />
              <div class="textbox ">
                <!--<p>High-strength steel accounts for over 60% of the whole vehicle.</p>-->
                <p>Several Benteler ultra-high-strength hot formed steel sheets.</p>
                <p>All covering parts are made of galvanized steel sheets.</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="images/newtiggo2pro_safe_p3.jpg" class="pic m_hide" />
              <img src="images/newtiggo2pro_safe_p3_m.jpg" class="pic pc_hide" />
              <div class="textbox black">
                <p>Each wheel is equipped with a tire pressure sensor inside, which displays the tire pressure and the tire temperature on the dashboard by radio-frequency signal to effectively prevent accidents.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="cutTab wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
          <div class="cutbtn on">High-strength body</div>
          <div class="cutbtn">Tire-pressure monitoring system (TPMS)</div>
          <div class="cutbtn">Mechanical child safety lock</div>
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
      pano.readConfigUrlAsync("360/pano_tiggo2pro_black.xml");
      //				$(".pop_360_rcon").ThreeSixty({
      //					totalFrames: 72,
      //					endFrame: 66,
      //					currentFrame: 65,
      //					imgList: ".threesixty_images",
      //					progress: ".loading-360",
      //					imagePath: "./images/360_view/tiggo2pro/black/",
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
      //						totalFrames: 72,
      //						endFrame: 66,
      //						currentFrame: 65,
      //						imgList: ".threesixty_images",
      //						progress: ".loading-360",
      //						imagePath: "./images/360_view/tiggo2pro/" + $(this).data('color') + "/",
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
          pano.readConfigUrlAsync('360/pano_tiggo2pro_' + $(this).data('color') + '.xml');
        }
      })
    })
  </script>
@endsection
