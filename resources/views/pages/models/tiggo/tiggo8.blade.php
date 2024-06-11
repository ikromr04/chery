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
  <div class="modelwrap tiggo8 sameModel">
    @include('layout.header')

    <section>
      <div class="banner">
        <div class="txt wow fadeInRight animated" data-wow-duration="1s" data-wow-delay=".8s">
          <img src="images/newtiggo8_tit.png" class="">
        </div>
        <div class="mediabox">
          <!--<video src="video/video.mp4" poster="images/newtiggo8pro_banner.jpg" autoplay="" muted=""></video>-->
          <img src="{{ asset('images/newtiggo8_banner.jpg') }}" class="m_hide" />
          <img src="{{ asset('images/newtiggo8_banner_m.jpg') }}" class="pc_hide" />
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
          <img src="{{ asset('images/newtiggo8_360bg.png') }}" class="bg360" />
          <div class="pop_360_rou pop_360_rout">
            <div class="pop_360_rcon">
              <img src="{{ asset('images/360_view/tiggo8/black/26.jpg') }}" class="reel" id="image" data-image="stitched-reel.jpg" data-stitched="496" data-frames="30" data-frame="15" data-rows="3" data-row="2" data-loops="false">
            </div>
            <div id="interior_360">
              <br>@lang('Loading...')<br>
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
              cursor: url('images/360_view/cursor.cur'), move;
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
                images: 'images/360_view/tiggo8/black/##.jpg|01..35',
                frame: 26
              });
              $('.exterior_color span').click(function() {
                $('.exterior_color span').removeClass('on');
                $(this).addClass('on');
                $('#image').reel('images', 'images/360_view/tiggo8/' + $(this).data('color') + '/##.jpg|01..35');
              })
            })
          </script>
        </div>
        <div class="color_cut">
          <div class="color exterior_color">
            <span data-color="black" class="black on"><i></i></span>
            <span data-color="brown" class="gold"><i></i></span>
            <span data-color="gray" class="gray"><i></i></span>
            <span data-color="red" class="red"><i></i></span>
            <span data-color="sand" class="gold"><i></i></span>
            <span data-color="white" class="white"><i></i></span>
          </div>
          <div class="color interior_color off">
            <span data-color="black" class="black on"><i></i></span>
            <span data-color="brown" class="brown"><i></i></span>
          </div>
        </div>
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
              <img src="{{ asset('images/newtiggo8_design_p1.jpg') }}" class="pic m_hide" />
              <img src="{{ asset('images/newtiggo8_design_p1_m.jpg') }}" class="pic pc_hide" />
              <div class="textbox">
                <p>@lang('The high-tech design and unique headlamp modeling will make people remember it all the time; and liking eyes of human, the headlamp will become the window of the car’s soul when switched on.')</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('images/newtiggo8_design_p2.jpg') }}" class="pic m_hide" />
              <img src="{{ asset('images/newtiggo8_design_p2_m.jpg') }}" class="pic pc_hide" />
              <div class="textbox">
                <p>@lang('The design of tail lamp is inspired from the quintessence of China culture - the wooden pane in ancient architecture meaning auspiciousness, happy life and successful career.')</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('images/newtiggo8_design_p3.jpg') }}" class="pic m_hide" />
              <img src="{{ asset('images/newtiggo8_design_p3_m.jpg') }}" class="pic pc_hide" />
              <div class="textbox black">
                <p>@lang('The tire size is 235/55 R18, large-size tires enhance the driving stability. The wheel hub is full of sporty characteristic and artistic atmosphere.')</p>
              </div>
            </div>
          </div>
        </div>
        <div class="cutTab wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
          <div class="cutbtn on">@lang('LED automatic headlamp')</div>
          <div class="cutbtn">@lang('Traverse-type LED sooting tail lamp')</div>
          <div class="cutbtn">@lang('18-inch wheelhub')</div>
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
              <img src="{{ asset('images/newtiggo8_royal_p1.jpg') }}" class="pic m_hide" />
              <img src="{{ asset('images/newtiggo8_royal_p1_m.jpg') }}" class="pic pc_hide" />
              <div class="textbox">
                <p>@lang('The trunk can accommodate large strollers and large suitcases to meet the needs for travelling.')</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('images/newtiggo8_royal_p2.jpg') }}" class="pic m_hide" />
              <img src="{{ asset('images/newtiggo8_royal_p2_m.jpg') }}" class="pic pc_hide" />
              <div class="textbox">
                <p>@lang('The driver seat is electrically 6-way adjustable, and the front seats have two-stage heating function.')</p>
                <!--<p>The ergonomic H-type seat design reduces driving fatigue.</p>-->
              </div>
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('images/newtiggo8_royal_p3.jpg') }}" class="pic m_hide" />
              <img src="{{ asset('images/newtiggo8_royal_p3_m.jpg') }}" class="pic pc_hide" />
              <div class="textbox black">
                <p>@lang('The area enables you to enjoy the blue sky and white cloud.')</p>
              </div>
            </div>
          </div>
        </div>
        <div class="cutTab wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
          <div class="cutbtn on">@lang('892L-1930L trunk capacity')</div>
          <div class="cutbtn">@lang('Ergonomic seats')</div>
          <div class="cutbtn">@lang('Panoramic sunroof2')</div>
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
              <img src="{{ asset('images/newtiggo8_power_p1.jpg') }}" />
            </div>
            <div class="textbox">
              <h5>@lang('HIGH-EFFICIENCY ENGINE')</h5>
              <p>@lang('Tiggo8 is equipped with Honeywell turbocharger and BorgWarner DVVT.')</p>
            </div>
          </div>
          <div class="caritem">
            <div class="imgbox">
              <img src="{{ asset('images/newtiggo8_power_p2.jpg') }}" />
            </div>
            <div class="textbox">
              <h5>@lang('HIGH EFFICIENCY TRANSMISSION')</h5>
              <p>@lang('Maximum input torque is 250N.m, supporting SPORT and ECO modes. More direct power output, higher transmission efficiency, and faster shift response.')</p>
            </div>
          </div>
          <div class="caritem">
            <div class="imgbox">
              <img src="{{ asset('images/newtiggo8_power_p3.jpg') }}" />
            </div>
            <div class="textbox">
              <h5>@lang('T1X MODULAR PLATFORM')</h5>
              <p>@lang('The T1X platform has larger front and rear head room, ground clearance, approach angle and departure angle, all of which ensure a better off-road performance.')</p>
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
              <img src="{{ asset('images/newtiggo8_tech_p1.jpg') }}" class="pic m_hide" />
              <img src="{{ asset('images/newtiggo8_tech_p1_m.jpg') }}" class="pic pc_hide" />
              <div class="textdet pc_hide">
                <p>@lang('8-inch LCD A/C touch screen')</p>
                <p>@lang('8-inch A/C touch screen is dustproof, waterproof and corrosion resistant. The design style of A/C panel is not only intelligent, beautiful and safe, but also makes the A/C convenient.')</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('images/newtiggo8_tech_p2.jpg') }}" class="pic m_hide" />
              <img src="{{ asset('images/newtiggo8_tech_p2_m.jpg') }}" class="pic pc_hide" />
              <div class="textdet pc_hide">
                <p>@lang('7-inch LCD instrument cluster')</p>
                <p>@lang('The 7-inch instrument screen enjoys a fine and smooth display effect, and can show more information. The round LCD on both sides is originated from the round disc of watch, which well combines modern aesthetics with vintage elements, and implies dignity and luxury.')</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('images/newtiggo8_tech_p3.jpg') }}" class="pic m_hide" />
              <img src="{{ asset('images/newtiggo8_tech_p3_m.jpg') }}" class="pic pc_hide" />
              <div class="textdet pc_hide">
                <p>@lang('Inductive electric trunk door')</p>
                <p>@lang('The opening angle will be automatically memorized when the trunk button is pressed for 3 seconds. Other methods to open the trunk door include remote control opening and manual opening.')</p>
              </div>
            </div>
          </div>
          <div class="swiper-pagination pc_hide"></div>
        </div>
        <div class="cutwindow">
          <div class="cutbtn on">
            <div class="text">
              <h5>@lang('8-inch LCD A/C touch screen')</h5>
              <p>@lang('8-inch A/C touch screen is dustproof, waterproof and corrosion resistant. The design style of A/C panel is not only intelligent, beautiful and safe, but also makes the A/C convenient.')</p>
            </div>
          </div>
          <div class="cutbtn">
            <div class="text">
              <h5>@lang('7-inch LCD instrument cluster')</h5>
              <p>@lang('The 7-inch instrument screen enjoys a fine and smooth display effect, and can show more information. The round LCD on both sides is originated from the round disc of watch, which well combines modern aesthetics with vintage elements, and implies dignity and luxury.')</p>
            </div>
          </div>
          <div class="cutbtn">
            <div class="text">
              <h5>@lang('Inductive electric trunk door')</h5>
              <p>@lang('The opening angle will be automatically memorized when the trunk button is pressed for 3 seconds. Other methods to open the trunk door include remote control opening and manual opening.')</p>
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
              <img src="{{ asset('images/newtiggo8_safe_p1.jpg') }}" class="pic m_hide" />
              <img src="{{ asset('images/newtiggo8_safe_p1_m.jpg') }}" class="pic pc_hide" />
              <div class="textbox">
                <p>@lang('It can effectively protect drivers and passengers in driving, and thus enables the driver to enjoy the dynamic driving <br />pleasure without worry.')</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('images/newtiggo8_safe_p2.jpg') }}" class="pic m_hide" />
              <img src="{{ asset('images/newtiggo8_safe_p2_m.jpg') }}" class="pic pc_hide" />
              <div class="textbox ">
                <p>@lang('It can effectively improve the impact resistance in case of frontal collision and lateral collision to well protect the personal safety of occupants in the car.')</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('images/newtiggo8_safe_p3.jpg') }}" class="pic m_hide" />
              <img src="{{ asset('images/newtiggo8_safe_p3_m.jpg') }}" class="pic pc_hide" />
              <div class="textbox black">
                <p>@lang('Each tire is equipped with a tire pressure sensor, which transmits the tire pressure and tire temperature via the RF<br />(radio frequency signals) to the instrument for display, effectively preventing the occurrence of accidents.')</p>
              </div>
            </div>
          </div>
        </div>
        <div class="cutTab wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
          <div class="cutbtn on">@lang('BOSCH TEN-IN-ONE ESP9.3')</div>
          <div class="cutbtn">@lang('High-strength body')</div>
          <div class="cutbtn">@lang('Intelligent tire pressure monitoring system')</div>
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
      pano.readConfigUrlAsync("360/pano_tiggo8_black.xml");
      //				$(".pop_360_rcon").ThreeSixty({
      //					totalFrames: 35,
      //					endFrame: 24,
      //					currentFrame: 23,
      //					imgList: ".threesixty_images",
      //					progress: ".loading-360",
      //					imagePath: "./images/360_view/tiggo8/black/",
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
      //						totalFrames: 35,
      //						endFrame: 24,
      //						currentFrame: 23,
      //						imgList: ".threesixty_images",
      //						progress: ".loading-360",
      //						imagePath: "./images/360_view/tiggo8/" + $(this).data('color') + "/",
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
          pano.readConfigUrlAsync('360/pano_tiggo8_' + $(this).data('color') + '.xml');
        }
      })
    })
  </script>
@endsection
