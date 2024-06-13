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
  <div class="modelwrap tiggo7pro sameModel">
    @include('layout.header')

    <div class="pc_hide m_menu">
      <a href="">
        <img src="images/logo.png" class="logo" />
      </a>
      <a class="nav">
        <span class="nav_line"></span>
        <span class="nav_line close"></span>
      </a>
      <div class="submenubg">
        <dl>
          <dt>
            Models <span>01</span>
          </dt>
          <dd class="carbtn">
            Tiggo
          </dd>
          <dd class="carbtn">
            Arrizo
          </dd>
          <dd class="carbtn">
            New energy
          </dd>
        </dl>
        <dl>
          <dt>
            Design & Technology <span>02</span>
          </dt>
          <dd>
            Platform
          </dd>
          <dd>
            Lab
          </dd>
          <dd>
            ADAS
          </dd>
          <dd>
            Autopilot
          </dd>
          <dd>
            New Energy
          </dd>
        </dl>
        <dl>
          <dt>
            News <span>03</span>
          </dt>
          <dd>
            News
          </dd>
          <dd>
            Events
          </dd>
        </dl>
        <dl>
          <dt>
            About Chery <span>04</span>
          </dt>
        </dl>
        <dl>
          <dt>
            Contact Us <span>05</span>
          </dt>
        </dl>
        <div>
          <div class="thirdmenu">
            <!--Models-->
            <div class="menucarbox">
              <div class="carlist">
                <a href="" class="it">
                  <img src="images/mb_car_01.png" />
                  <span class="label">Tiggo 8 Pro</span>
                </a>
                <a href="" class="it">
                  <img src="images/mb_car_02.png" />
                  <span class="label">New Tiggo 5</span>
                </a>
                <a href="" class="it">
                  <img src="images/mb_car_03.png" />
                  <span class="label">New Tiggo 4</span>
                </a>
                <a href="" class="it">
                  <img src="images/mb_car_04.png" />
                  <span class="label">Tiggo 4</span>
                </a>
                <a href="" class="it">
                  <img src="images/mb_car_05.png" />
                  <span class="label">Tiggo 4</span>
                </a>
                <a href="" class="it">
                  <img src="images/mb_car_06.png" />
                  <span class="label">Tiggo 8</span>
                </a>
                <a href="" class="it">
                  <img src="images/mb_car_07.png" />
                  <span class="label">Tiggo 7 Pro</span>
                </a>
                <a href="" class="it">
                  <img src="images/mb_car_08.png" />
                  <span class="label">Tiggo 7</span>
                </a>
                <a href="" class="it">
                  <img src="images/mb_car_09.png" />
                  <span class="label">Tiggo 2</span>
                </a>
              </div>
            </div>
            <div class="menucarbox">
              <div class="carlist">
                <a href="" class="it">
                  <img src="images/mb_car_01.png" />
                  <span class="label">Tiggo 8 Pro</span>
                </a>
                <a href="" class="it">
                  <img src="images/mb_car_02.png" />
                  <span class="label">New Tiggo 5</span>
                </a>
              </div>
            </div>
            <div class="menucarbox">
              <div class="carlist">
                <a href="" class="it">
                  <img src="images/mb_car_01.png" />
                  <span class="label">Tiggo 8 Pro</span>
                </a>
                <a href="" class="it">
                  <img src="images/mb_car_02.png" />
                  <span class="label">New Tiggo 5</span>
                </a>
                <a href="" class="it">
                  <img src="images/mb_car_03.png" />
                  <span class="label">New Tiggo 4</span>
                </a>
              </div>
            </div>
          </div>
          <div class="thirdmenu">
            <!--Design-->
          </div>
          <div class="thirdmenu">
            <!--News-->
          </div>
          <div class="thirdmenu">
            <!--About-->
          </div>
          <div class="thirdmenu">
            <!--Contact-->
          </div>

        </div>
      </div>

    </div>
    <section>
      <div class="banner">
        <div class="txt wow fadeInRight animated" data-wow-duration="1s" data-wow-delay=".8s">
          <img src="images/newtiggo8promax_tit.png" class="">
        </div>
        <div class="mediabox">
          <!--poster="images/newtiggo8pro_banner.jpg"-->
          <!--<video src="video/tiggo7pro.mp4"  muted=""></video>
              <span class="play"></span>-->
          <img src="images/tiggo8promax_banner.jpg" class="m_hide" />
          <img src="images/tiggo8promax_banner_m.jpg" class="pc_hide" />
        </div>
      </div>
      <!--360-->
      <!--<div class="model_wrap">
            <h3 class="tit_360">360° view</h3>

            <div class="change_E_I">
              <span class="on">EXTERIOR</span>
              <span>INTERIOR</span>
            </div>
            <div class="model_360">
              <div class="pop_360_rou pop_360_rout">
                <div class="pop_360_rcon">
                  <img src="images/360_view/tiggo8pro/black/21.jpg"  class="reel" id="image" data-image="stitched-reel.jpg" data-stitched="496" data-frames="30" data-frame="15" data-rows="3" data-row="2" data-loops="false">
                </div>
                <div id="interior_360">
                  <br>Loading...<br>
                </div>
              </div>
            </div>
            <style>
              #image-reel{
                width: 100%;
              }
              #image{
                width: 100%;
                height: 5.4rem
              }
              .reel-panning,.reel-panning *{
                cursor: url(images/360_view/cursor.cur),move;
              }
              .reel-preloader{
                display: none!important;
              }
              @media (max-width: 900px) {
                #image {
                    height: 3.4rem;
                }
              }
            </style>
            <div class="color_cut">
              <div class="color exterior_color">
                <span data-color="black" class="black on"><i></i></span>
                <span data-color="blue" class="blue-b"><i></i></span>
                <span data-color="gray" class="gray"><i></i></span>
                <span data-color="purple" class="purple"><i></i></span>
                <span data-color="red" class="red"><i></i></span>
                <span data-color="white" class="white"><i></i></span>
              </div>
              <div class="color interior_color off">-->
      <!--<span data-color="black" class="black on"><i></i></span>-->
      <!--<span data-color="orange" class="orange"><i></i></span>-->
      <!--</div>
            </div>
            <script type="text/javascript">
              $(function() {
                $('.model_360 #image').reel({
                  images: 'images/360_view/tiggo8pro/black/##.jpg|01..36',
                  frame: 21
                });
                $('.exterior_color span').click(function() {
                  $('.exterior_color span').removeClass('on');
                  $(this).addClass('on');
                  $('#image').reel('images', 'images/360_view/tiggo8pro/' + $(this).data('color') + '/##.jpg|01..36');
                })
              })
            </script>
          </div>-->
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
              <img src="images/tiggo8promax_design_p1.gif" class="pic m_hide" />
              <img src="images/tiggo8promax_design_p1_m.jpg" class="pic pc_hide" />
              <div class="textbox">
                <p>Avant-garde fashion appearance, a wide range of lighting coverage.</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="images/tiggo8promax_design_p2.jpg" class="pic m_hide" />
              <img src="images/tiggo8promax_design_p2_m.jpg" class="pic pc_hide" />
              <div class="textbox">
                <p>TIGGO 8Pro is applied with the diamond front grille, an unique design of Pro family, it perfectly interprets the “Life in Motion” design concept, and embodies the unique form & meaning aesthetics of China with international language.</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="images/tiggo8promax_design_p3.jpg" class="pic m_hide" />
              <img src="images/tiggo8promax_design_p3_m.jpg" class="pic pc_hide" />
              <div class="textbox">
                <p>The hub is made of glossy aluminum alloy, which has excellent anti-rust and anti-corrosion ability. The 235mm tyre width provides plenty of grip.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="cutTab wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
          <div class="cutbtn on">Dynamic lighting combination</div>
          <div class="cutbtn">Matrix Diamond Front Grille</div>
          <div class="cutbtn">18 "glossy sport hub</div>
        </div>
      </div>
      <!-- INTERIOR-->
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
              <img src="images/tiggo8promax_royal_p1.jpg" class="pic m_hide" />
              <img src="images/tiggo8promax_royal_p1_m.jpg" class="pic pc_hide" />
              <div class="textbox">
                <!--<div class="swiper-container textSwi textSwi_0">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <p>The third-row seats can be folded flat when there are only 5 occupants in the vehicle, and once folded, the storage space will be enlarged to 1179L.</p>
                        </div>
                        <div class="swiper-slide">
                          <p>When the second-row seats are also folded, the storage space will increase to 2101L.</p>
                        </div>
                      </div>
                    </div>-->
                <p>The third-row seats can be folded flat when there are only 5 occupants in the vehicle, and once folded, the storage space will be enlarged to 1179L.</p>
                <p>When the second-row seats are also folded, the storage space will increase to 2101L.</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="images/tiggo8promax_royal_p2.jpg" class="pic m_hide" />
              <img src="images/tiggo8promax_royal_p2_m.jpg" class="pic pc_hide" />
              <div class="textbox">
                <p>Luxurious electric + multi-layer composite material seats provide drivers with a comfortable driving experience, so that driving is no longer exhausting.</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="images/tiggo8promax_royal_p3.jpg" class="pic m_hide" />
              <img src="images/tiggo8promax_royal_p3_m.jpg" class="pic pc_hide" />
              <div class="textbox">
                <!--<div class="swiper-container textSwi textSwi_1">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <p>The panoramic sunroof has a daylighting area up to 0.79m2, allowing users to enjoy the vast starry sky.</p>
                        </div>
                        <div class="swiper-slide">
                          <p>The sunroof is equipped with a sunshade, which, once closed, can realize 100% shading.</p>
                        </div>
                      </div>
                    </div>-->
                <p>The panoramic sunroof has a daylighting area up to 0.79m2, allowing users to enjoy the vast starry sky.</p>
                <p>The sunroof is equipped with a sunshade, which, once closed, can realize 100% shading.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="cutTab wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
          <div class="cutbtn on">Fully Cladded Luxury Seat</div>
          <div class="cutbtn">Agile, Spacious Trunk</div>
          <div class="cutbtn">Embracing Cabin</div>
        </div>
      </div>
      <!--Platinum Power-->
      <div class="power module" id="module3">
        <div class="title">
          <h4>
            <span class="big_num">03</span>
            <span class="tit">POWER</span>
          </h4>
        </div>
        <div class="textwrap">
          <p class="text">The fish-belly inlet allows fuel and air to fully mix, effectively improving combustion efficiency and achieving excellent fuel economy.</p>
          <p class="text dot">7.0L fuel per 100 km</p>
          <p class="text dot">Acceleration from 0-100Km/h in 7.3 seconds</p>
        </div>
        <div class="powerbox">
          <div class="imgtext box1 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.4s" data-wow-offset="100">
            <img src="images/tiggo8promax_power_p1.jpg" />
          </div>
          <div class="imgtext box2 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.6s" data-wow-offset="100">
            <img src="images/tiggo8promax_power_p2.gif" />
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
              <img src="images/tiggo8promax_tech_p1.jpg" class="pic m_hide" />
              <img src="images/tiggo8promax_tech_p1_m.jpg" class="pic pc_hide" />
              <div class="textdet pc_hide">
                <p>Intelligent triple-screen interaction</p>
                <p>The LCD instrument screen can interact with the central control screen, air conditioning/vehicle control screen, including navigation, music multimedia, Bluetooth phone, etc., making driving full of fun.</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="images/tiggo8promax_tech_p2.jpg" class="pic m_hide" />
              <img src="images/tiggo8promax_tech_p2_m.jpg" class="pic pc_hide" />
              <div class="textdet pc_hide">
                <p>24.6-inch intelligent double screen</p>
                <p>Adopting an integrated seamless dual screen design, you can switch information between the two screens only by sliding your finger, effectively eliminating the barriers caused by hardware during information interaction.</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="images/tiggo8promax_tech_p3.jpg" class="pic m_hide" />
              <img src="images/tiggo8promax_tech_p3_m.jpg" class="pic pc_hide" />
              <div class="textdet pc_hide">
                <p>SONY 8 speakers + multicolor ambient</p>
                <p>When playing music in the car, multiple high-fidelity speakers are surrounded by multi-color ambient lights to create an immersive listening experience.</p>
              </div>
            </div>
          </div>
          <div class="swiper-pagination pc_hide"></div>
        </div>
        <div class="cutwindow">
          <div class="cutbtn on">
            <div class="text">
              <h5>Intelligent triple-screen interaction</h5>
              <p>The LCD instrument screen can interact with the central control screen, air conditioning/vehicle control screen, including navigation, music multimedia, Bluetooth phone, etc., making driving full of fun.</p>
            </div>
          </div>
          <div class="cutbtn">
            <div class="text">
              <h5>24.6-inch intelligent double screen</h5>
              <p>Adopting an integrated seamless dual screen design, you can switch information between the two screens only by sliding your finger, effectively eliminating the barriers caused by hardware during information interaction.</p>
            </div>
          </div>
          <div class="cutbtn">
            <div class="text">
              <h5>SONY 8 speakers + multicolor ambient</h5>
              <p>When playing music in the car, multiple high-fidelity speakers are surrounded by multi-color ambient lights to create an immersive listening experience.</p>
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
        <div class="content w1200">
          <div class="imgbox">
            <img src="images/tiggo8promax_safe_p1.jpg" class="pic" />
          </div>
          <div class="textbox">
            <h4 class="tit">TPMS</h4>
            <p class="det">Each tire is equipped with a tire pressure sensor, which transmits the tire pressure and tire temperature via the RF signals to the instrument for display, effectively preventing the occurrence of accidents.</p>
          </div>
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

  <script type="text/javascript">
    $(document).ready(function() {
      //				var pano = new pano2vrPlayer("interior_360");
      //				pano.readConfigUrlAsync("360/tiggo8pro.xml");
      //				$(".pop_360_rcon").ThreeSixty({
      //					totalFrames: 36,
      //					endFrame: 30,
      //					currentFrame: 29,
      //					imgList: ".threesixty_images",
      //					progress: ".loading-360",
      //					imagePath: "./images/360_view/tiggo8pro/black/",
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
      //						imagePath: "./images/360_view/tiggo8pro/" + $(this).data('color') + "/",
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
      //				$('.change_E_I span').on('click', function() {
      //					$('.change_E_I span').removeClass('on');
      //					$(this).addClass('on');
      //					switch($(this).index()) {
      //						case 0:
      //							$('#interior_360').css({'z-index': -10, 'opacity': 0});
      //							$('.color_cut .color').removeClass('off');
      //							$('.color_cut .interior_color').addClass('off');
      //							break;
      //						case 1:
      //							$('.color_cut .color').removeClass('off');
      //							$('.color_cut .exterior_color').addClass('off');
      //							$('#interior_360').css({'z-index': 10, 'opacity': 1});
      //							break;
      //					}
      //				})
      //				$('.interior_color span').click(function() {
      //					if(!$(this).hasClass('on')) {
      //						$('.interior_color span').removeClass('on');
      //						$(this).addClass('on');
      //						pano.readConfigUrlAsync('360/pano_newTiggo4_' + $(this).data('color') + '.xml');
      //					}
      //				})
    })
    $(function() {

    })
  </script>
@endsection
