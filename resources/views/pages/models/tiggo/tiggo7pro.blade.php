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

    <section>
      <div class="banner">
        <div class="txt wow fadeInRight animated" data-wow-duration="1s" data-wow-delay=".8s">
          <img src="{{ asset('images/newtiggo7pro_tit.png') }}" class="">
        </div>
        <div class="mediabox">
          <!--<video src="video/video.mp4" poster="images/newtiggo8pro_banner.jpg" autoplay="" muted=""></video>-->
          <img src="{{ asset('images/newtiggo7pro_banner.jpg') }}" class="m_hide" />
          <img src="{{ asset('images/newtiggo7pro_banner_m.jpg') }}" class="pc_hide" />
        </div>
      </div>
      <!--360-->
      <div class="model_wrap">
        <h3 class="tit_360">@lang('360° view')</h3>
        <div class="change_E_I">
          <span class="on">@lang('EXTERIOR')</span>
          <span>@lang('INTERIOR')</span>
        </div>
        <div class="model_360">
          <img src="{{ asset('images/newtiggo7pro_360bg.png') }}" class="bg360 m_hide" />
          <img src="{{ asset('images/newtiggo7_360bg_m.png') }}" class="bg360 pc_hide" />
          <div class="pop_360_rou pop_360_rout">
            <div class="pop_360_rcon">
              <img src="{{ asset('images/360_view/tiggo7pro/black/21.jpg') }}" class="reel" id="image" data-image="stitched-reel.jpg" data-stitched="496" data-frames="30" data-frame="15" data-rows="3" data-row="2" data-loops="false">
            </div>
            <!--<div class="pop_360_rcon threesixty" id="car">
              <div class="loading-360"></div>
              <ol class="threesixty_images">

              </ol>
            </div>-->
            <div id="interior_360">
              <br>@lang('Loading...')<br>
            </div>
          </div>
        </div>
        <style>
          #image-reel {
            width: 100%;
            height: 6.88rem;
          }

          #image {
            width: 100%;
            height: 6.88rem;
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
              height: 4.37rem;
            }
          }
        </style>
        <div class="color_cut">
          <div class="color exterior_color">
            <span data-color="black" class="black on"><i></i></span>
            <span data-color="blue-a" class="blue-a "><i></i></span>
            <span data-color="red" class="red"><i></i></span>
            <span data-color="red-1" class="red"><i></i></span>
            <span data-color="gray" class="gray"><i></i></span>
            <span data-color="orange" class="orange"><i></i></span>
            <span data-color="white" class="white"><i></i></span>
            <span data-color="blue-b" class="blue-b"><i></i></span>
            <span data-color="white-1" class="white"><i></i></span>
            <span data-color="blue-b-1" class="blue-b"><i></i></span>
          </div>
          <div class="color interior_color off">
            <span data-color="red" class="red on"><i></i></span>
            <span data-color="white" class="white"><i></i></span>
          </div>
        </div>
        <!--<div class="rotate_icon">
          <img src="images/model_360_view.png" class="ro"/>
          <img src="images/model_360_arrow.png" class="ct"/>
        </div>-->
        <script type="text/javascript">
          $(function() {
            $('.model_360 #image').reel({
              images: 'images/360_view/tiggo7pro/black/##.jpg|01..36',
              frame: 21
            });
            $('.exterior_color span').click(function() {
              $('.exterior_color span').removeClass('on');
              $(this).addClass('on');
              $('#image').reel('images', 'images/360_view/tiggo7pro/' + $(this).data('color') + '/##.jpg|01..36');
            })
          })
        </script>
      </div>
      <!--Fashionable Design-->
      <div class="modelmenu">
        <div class="it on">
          <span class="ic"><i></i></span>
          <span class="label">@lang('DESIGN')</span>
        </div>
        <div class="it">
          <span class="ic"><i></i></span>
          <span class="label">@lang('INTERIOR')</span>
        </div>
        <div class="it">
          <span class="ic"><i></i></span>
          <span class="label">@lang('POWER')</span>
        </div>
        <div class="it">
          <span class="ic"><i></i></span>
          <span class="label">@lang('TECH')</span>
        </div>
        <div class="it">
          <span class="ic"><i></i></span>
          <span class="label">@lang('SAFETY')</span>
        </div>
      </div>
      <div class="design module" id="module1">
        <div class="title">
          <h4>
            <span class="big_num">01</span>
            <span class="tit">@lang('DESIGN')</span>
          </h4>
        </div>
        <div class="swiper-container sameSwiper samebox swiper-no-swiping">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="{{ asset('images/newtiggo7pro_design_p1.jpg') }}" class="pic m_hide" />
              <img src="{{ asset('images/newtiggo7pro_design_p1_m.jpg') }}" class="pic pc_hide" />
              <div class="textbox">
                <p>@lang('The upper beltline is horizontal and square, traversing the side body, robust, epic, and triumphs against action by staying still. The two lower beltlines are round and dynamic, forming an accelerating atmosphere, dynamic and fashionable.')</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('images/newtiggo7pro_design_p2.jpg') }}" class="pic m_hide" />
              <img src="{{ asset('images/newtiggo7pro_design_p2_m.jpg') }}" class="pic pc_hide" />
              <div class="textbox">
                <p>@lang('The LED high and low beams adopt a multi-cavity reflective matrix, simple and elegant, illuminating all.')</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('images/newtiggo7pro_design_p3.jpg') }}" class="pic m_hide" />
              <img src="{{ asset('images/newtiggo7pro_design_p3_m.jpg') }}" class="pic pc_hide" />
              <div class="textbox black">
                <p>@lang('The panoramic sunroof has a daylighting area of up to 1.13m², allowing users to enjoy the experience of looking up at the cosmos. One-touch ON/OFF/Warped, the glass anti-pinch design protects occupants from injury.')</p>
              </div>
            </div>
          </div>
        </div>
        <div class="cutTab wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
          <div class="cutbtn on">@lang('Penetrating Beltline')</div>
          <div class="cutbtn">@lang('Matrix LED Headlight')</div>
          <div class="cutbtn">@lang('Large Panoramic Sunroof')</div>
        </div>
      </div>
      <!--INTERIOR-->
      <div class="comfort module" id="module2">
        <div class="title">
          <h4>
            <span class="big_num">02</span>
            <span class="tit">@lang('INTERIOR')</span>
          </h4>
        </div>
        <div class="swiper-container sameSwiper samebox swiper-no-swiping">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="{{ asset('images/newtiggo7pro_royal_p1.jpg') }}" class="pic m_hide" />
              <img src="{{ asset('images/newtiggo7pro_royal_p1_m.jpg') }}" class="pic pc_hide" />
              <div class="textbox">
                <p>@lang('The horizontal integrated dashboard is symmetrical left and right, comfortable and elegant. The screens and knobs after zoning are easy to operate and upgrade.')</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('images/newtiggo7pro_royal_p2.jpg') }}" class="pic m_hide" />
              <img src="{{ asset('images/newtiggo7pro_royal_p2_m.jpg') }}" class="pic pc_hide" />
              <div class="textbox">
                <p>@lang('With 5 occupants, the tail space measures out 475L')</p>
                <p>@lang('In the case when rear seats recline, the tail space can reach 1500L')</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('images/newtiggo7pro_royal_p3.jpg') }}" class="pic m_hide" />
              <img src="{{ asset('images/newtiggo7pro_royal_p3_m.jpg') }}" class="pic pc_hide" />
              <div class="textbox">
                <p>@lang('Coated with delicate leather, the multipurpose steering wheel gives a better sense of grip and touch.')</p>
              </div>
            </div>
          </div>
        </div>
        <div class="cutTab wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
          <div class="cutbtn on">@lang('Embracing Cabin')</div>
          <div class="cutbtn">@lang('Agile, Spacious Trunk')</div>
          <div class="cutbtn">@lang('4-way Adjustable Multipurpose Steering Wheel')</div>
        </div>
      </div>
      <!--Platinum Power-->
      <div class="power module" id="module3">
        <div class="title">
          <h4>
            <span class="big_num">03</span>
            <span class="tit">@lang('POWER')</span>
          </h4>
        </div>
        <div class="powerbox samebox">
          <div class="caritem">
            <div class="imgbox">
              <img src="{{ asset('images/newtiggo7pro_power_p1.jpg') }}" />
            </div>
            <div class="textbox">
              <h5>@lang('1.5T ENGINE')</h5>
              <p>@lang('The 1.5T engine has the maximum power of 108KW, the maximum torque of 210 / 1750-4500rpm, and the fuel consumption per 100 kilometers of only 6.8L.')</p>
            </div>
          </div>
          <div class="caritem">
            <div class="imgbox">
              <img src="{{ asset('images/newtiggo7pro_power_p2.jpg') }}" />
            </div>
            <div class="textbox">
              <h5>@lang('9-SPEED CVT')</h5>
              <p>@lang('CVT25 can be on a par with Aisin 6AT, and its maximum torque is 280N · m. The BOSCH steel belt improves the transmission efficiency to 92.5%, and saves 7% fuel.')</p>
            </div>
          </div>
          <div class="caritem">
            <div class="imgbox">
              <img src="{{ asset('images/newtiggo7pro_power_p3.jpg') }}" />
            </div>
            <div class="textbox">
              <h5>@lang('T1X COMFORT CHASSIS')</h5>
              <p>@lang('The T1X platform has better headroom for front and rear seats, and higher ground clearance. The approach and departure angles also ensure better off-road performance.')</p>
            </div>
          </div>
        </div>
      </div>
      <!--Intelligent Tech-->
      <div class="tech module graybg" id="module4">
        <div class="title">
          <h4>
            <span class="big_num">04</span>
            <span class="tit">@lang('TECH')</span>
          </h4>
        </div>
        <div class="swiper-container sameSwiper samebox">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="{{ asset('images/newtiggo7pro_tech_p1.jpg') }}" class="pic m_hide" />
              <img src="{{ asset('images/newtiggo7pro_tech_p1_m.jpg') }}" class="pic pc_hide" />
              <div class="textdet pc_hide">
                <p>@lang('8-inch A/C LCD Touch Screen')</p>
                <p>@lang('8 inch LCD touch screen, IML (In-Mold Labeling) process + capacitive touch screen + voice feedback + physical knob, and has the unique 8-inch intelligent A/C touch screen, as a scratch proof and dust-proof and waterproof, corrosion resistant, high-end luxury type.')</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('images/newtiggo7pro_tech_p2.jpg') }}" class="pic m_hide" />
              <img src="{{ asset('images/newtiggo7pro_tech_p2_m.jpg') }}" class="pic pc_hide" />
              <div class="textdet pc_hide">
                <p>@lang('Inductive electric trunk door')</p>
                <p>@lang('The opening angle will be automatically memorized when the trunk button is pressed for 3 seconds. Other methods to open the trunk door include remote control opening and manual opening.')</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('images/newtiggo7pro_tech_p3.jpg') }}" class="pic m_hide" />
              <img src="{{ asset('images/newtiggo7pro_tech_p3_m.jpg') }}" class="pic pc_hide" />
              <div class="textdet pc_hide">
                <p>@lang('12-inch Full LCD Meter')</p>
                <p>@lang('The 12-Inch HD full-screen LCD instrument can interact with the central control screen. It can realize multimedia, communication, early warning, driving information, warning message, setting and other functions.')</p>
              </div>
            </div>
          </div>
          <div class="swiper-pagination pc_hide"></div>
        </div>
        <div class="cutwindow">
          <div class="cutbtn on">
            <div class="text">
              <h5>@lang('8-inch A/C LCD Touch Screen')</h5>
              <p>@lang('8 inch LCD touch screen, IML (In-Mold Labeling) process + capacitive touch screen + voice feedback + physical knob, and has the unique 8-inch intelligent A/C touch screen, as a scratch proof and dust-proof and waterproof, corrosion resistant, high-end luxury type.')</p>
            </div>
          </div>
          <div class="cutbtn">
            <div class="text">
              <h5>@lang('Inductive electric trunk door')</h5>
              <p>@lang('The opening angle will be automatically memorized when the trunk button is pressed for 3 seconds. Other methods to open the trunk door include remote control opening and manual opening.')</p>
            </div>
          </div>
          <div class="cutbtn">
            <div class="text">
              <h5>@lang('12-inch Full LCD Meter')</h5>
              <p>@lang('The 12-Inch HD full-screen LCD instrument can interact with the central control screen. It can realize multimedia, communication, early warning, driving information, warning message, setting and other functions.')</p>
            </div>
          </div>
        </div>
      </div>
      <!--Overall Safety-->
      <div class="safety module" id="module5">
        <div class="title">
          <h4>
            <span class="big_num">05</span>
            <span class="tit">@lang('SAFETY')</span>
          </h4>
        </div>
        <div class="swiper-container sameSwiper samebox swiper-no-swiping">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="{{ asset('images/newtiggo7pro_safe_p1.jpg') }}" class="pic m_hide" />
              <img src="{{ asset('images/newtiggo7pro_safe_p1_m.jpg') }}" class="pic pc_hide" />
              <div class="textbox">
                <!--<p>High-strength steels are present more than 60% in the alloy </p>-->
                <p>@lang('Multiple blocks of Bentler ultra-high strength thermal forming steels')</p>
                <p>@lang('Yield strength ≥1500Mpa')</p>
                <p>@lang('The whole vehicle cover is made of galvanized steel plates')</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('images/newtiggo7pro_safe_p2.jpg') }}" class="pic m_hide" />
              <img src="{{ asset('images/newtiggo7pro_safe_p2_m.jpg') }}" class="pic pc_hide" />
              <div class="textbox ">
                <p>@lang('Each tire carries a tire pressure sensor, which displays tire pressure and temperature on the instrument via wireless radio frequency signals, effectively avoiding accidents.')</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('images/newtiggo7pro_safe_p3.jpg') }}" class="pic m_hide" />
              <img src="{{ asset('images/newtiggo7pro_safe_p3_m.jpg') }}" class="pic pc_hide" />
              <div class="textbox">
                <p>@lang('The leading guard-ring type 6 airbags provide comprehensive and thoughtful protection.')</p>
              </div>
            </div>
          </div>
        </div>
        <div class="cutTab wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
          <div class="cutbtn on">@lang('High-strength body')</div>
          <div class="cutbtn">@lang('Tire-Pressure Monitoring System (TPMS)')</div>
          <div class="cutbtn">@lang('Guard-ring 6 airbags')</div>
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
      pano.readConfigUrlAsync("360/pano_tiggo7pro_red.xml");
      //				$(".pop_360_rcon").ThreeSixty({
      //					totalFrames: 36,
      //					endFrame: 5,
      //					currentFrame: 4,
      //					imgList: ".threesixty_images",
      //					progress: ".loading-360",
      //					imagePath: "./images/360_view/tiggo7pro/black/",
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
      //						endFrame: 5,
      //						currentFrame: 4,
      //						imgList: ".threesixty_images",
      //						progress: ".loading-360",
      //						imagePath: "./images/360_view/tiggo7pro/" + $(this).data('color') + "/",
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
          pano.readConfigUrlAsync('360/pano_tiggo7pro_' + $(this).data('color') + '.xml');
        }
      })
    })
  </script>
@endsection
