'@extends('layout.app')

@section('styles')
  <link href="{{ asset('styles/base.css') }}" type="text/css" rel="stylesheet">
  <link href="{{ asset('styles/swiper.min.css') }}" type="text/css" rel="stylesheet">
  <link href="{{ asset('styles/animate.min.css') }}" type="text/css" rel="stylesheet">
  <link href="{{ asset('styles/themes.css') }}" type="text/css" rel="stylesheet">
  <link href="{{ asset('styles/m_themes.css') }}" type="text/css" rel="stylesheet">
  <link href="{{ asset('styles/threesixty.css') }}" rel="stylesheet" />
  <link href="{{ asset('styles/model.css') }}" rel="stylesheet" />
  <link href="{{ asset('styles/m_model.css') }}" rel="stylesheet" />
@endsection

@section('content')
  <div class="modelwrap tiggo8pro sameModel">
    @include('layout.header')

    <section>
      <div class="banner">
        <div class="mediabox videoBox">
          <video src="{{ asset('video/tiggo7pro.mp4') }}" muted=""></video>
          <span class="play"></span>
        </div>
      </div>
      <div class="model_wrap">
        <h3 class="tit_360">@lang('360° view')</h3>

        <div class="change_E_I">
          <span class="on">@lang('EXTERIOR')</span>
          <span>@lang('INTERIOR')</span>
        </div>
        <div class="model_360">
          <div class="pop_360_rou pop_360_rout">
            <div class="pop_360_rcon">
              <img src="{{ asset('images/360_view/tiggo8pro/black/21.jpg') }}" class="reel" id="image" data-image="stitched-reel.jpg" data-stitched="496" data-frames="30" data-frame="15" data-rows="3" data-row="2" data-loops="false">
            </div>
            <div id="interior_360">
              <br>@lang('Loading...')<br>
            </div>
          </div>
        </div>
        <style>
          #image-reel {
            width: 100%;
          }

          #image {
            width: 100%;
            height: 5.4rem
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
          <div class="color interior_color off">
          </div>
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
              <img src="{{ asset('images/newtiggo8pro_design_p1.gif') }}" class="pic m_hide" />
              <img src="{{ asset('images/newtiggo8pro_design_p1_m.gif') }}" class="pic pc_hide" />
              <div class="textbox">
                <p>@lang('The LED high and low beams adopt a multi-cavity reflective matrix, simple and elegant, illuminating all.')</p>
                <p>@lang('The lighting efficiency of LED headlight is about 2.7 times that of the traditional halogen lamp.')</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('images/newtiggo8pro_design_p2.jpg') }}" class="pic m_hide" />
              <img src="{{ asset('images/newtiggo8pro_design_p2_m.jpg') }}" class="pic pc_hide" />
              <div class="textbox black">
                <p>@lang('The body is outlined by three main lines, creating an effect that carries dynamic and static elements alike.')</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('images/newtiggo8pro_design_p3.jpg') }}" class="pic m_hide" />
              <img src="{{ asset('images/newtiggo8pro_design_p3_m.jpg') }}" class="pic pc_hide" />
              <div class="textbox">
                <p>@lang('18 inch super bright aluminum alloy rim, comparable to sports car class rim, the vehicle is more sporty and majestic')</p>
              </div>
            </div>
          </div>
        </div>
        <div class="cutTab wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
          <div class="cutbtn on">@lang('Full series LED light source')</div>
          <div class="cutbtn">@lang('Penetrating Beltline')</div>
          <div class="cutbtn">@lang('18 inch aluminum alloy rim')</div>
        </div>
      </div>
      <!-- INTERIOR-->
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
              <div class="imgscroll m_hide">
                <img src="{{ asset('images/newtiggo8pro_royal_p1.jpg') }}" />
              </div>
              <img src="{{ asset('images/newtiggo8pro_royal_p1_m.jpg') }}" class="pic pc_hide" />
              <div class="textbox">
                <div class="swiper-container textSwi textSwi_0">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <p>@lang('The seat cushions are designed with the wrap-around thickened side wings, which increases the wrapping of the occupant’s hip.')</p>
                    </div>
                    <div class="swiper-slide">
                      <p>@lang('The six-way electric adjuster for driver‘s seat, matching up the electric heater, allows the driver to enjoy convenient, comfort and noble experience.')</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('images/newtiggo8pro_royal_p2.jpg') }}" class="pic m_hide" />
              <img src="{{ asset('images/newtiggo8pro_royal_p2_m.jpg') }}" class="pic pc_hide" />
              <div class="textbox black">
                <p>@lang('With 5 occupants, the tail space measures out 1179L')</p>
                <p>@lang('In the case when rear seats recline, the tail space can reach 2101L')</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('images/newtiggo8pro_royal_p3.jpg') }}" class="pic m_hide" />
              <img src="{{ asset('images/newtiggo8pro_royal_p3_m.jpg') }}" class="pic pc_hide" />
              <div class="textbox">
                <div class="swiper-container textSwi textSwi_1">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide">
                      <p>@lang('With luxurious and dynamic tech, the seat is designed with surround-wide schematics, luxurious quality and elegant interior.')</p>
                    </div>
                    <div class="swiper-slide">
                      <p>@lang('The horizontal integrated dashboard is symmetrical left and right, comfortable and elegant. The screens and knobs after zoning are easy to operate and upgrade.')</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="cutTab wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
          <div class="cutbtn on">@lang('Fully Cladded Luxury Seat')</div>
          <div class="cutbtn">@lang('Agile, Spacious Trunk')</div>
          <div class="cutbtn">@lang('Embracing Cabin')</div>
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
        <p class="text">@lang('The T1X platform has better headroom for front and rear seats, and higher ground clearance. The approach and departure angles also ensure better off-road performance.')</p>
        <div class="powerbox">
          <div class="imgtext box1 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.4s" data-wow-offset="100">
            <img src="{{ asset('images/newtiggo8pro_power_p1.jpg') }}" />
            <span>@lang('T1X COMFORT CHASSIS')</span>
          </div>
          <div class="imgtext box2 wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.6s" data-wow-offset="100">
            <img src="{{ asset('images/newtiggo8pro_power_p2.jpg') }}" />
            <span>@lang('1.6T GDI ENGINE')</span>
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
              <div class="imgwrap m_hide">
                <img src="{{ asset('images/newtiggo8pro_tech_p1.jpg') }}" />
                <div class="warningbox">
                  <img src="{{ asset('images/newtiggo8pro_warnning_w4.png') }}" class="pic warning w1" />
                  <img src="{{ asset('images/newtiggo8pro_warnning_w5.png') }}" class="pic warning w2" />
                  <img src="{{ asset('images/newtiggo8pro_warnning_w6.png') }}" class="pic warning w3" />
                </div>
              </div>
              <img src="{{ asset('images/newtiggo8pro_tech_p1_m.jpg') }}" class="pic pc_hide" />
              <div class="textdet pc_hide">
                <p>@lang('ACC Adaptive cruise control')</p>
                <p>@lang('Monitoring road conditions，vehicle spacing，automatic speed regulation and start/stop.')</p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="imgwrap m_hide">
                <img src="{{ asset('images/newtiggo8pro_tech_p2.jpg') }}" />
                <div class="warningbox">
                  <img src="{{ asset('images/newtiggo8pro_warnning_w1.png') }}" class="pic warning w1" />
                  <img src="{{ asset('images/newtiggo8pro_warnning_w2.png') }}" class="pic warning w2" />
                  <img src="{{ asset('images/newtiggo8pro_warnning_w3.png') }}" class="pic warning w3" />
                </div>
                <img src="{{ asset('images/newtiggo8pro_car1.png') }}" class="pic" />
              </div>
              <img src="{{ asset('images/newtiggo8pro_tech_p2_m.jpg') }}" class="pic pc_hide" />
              <div class="textdet pc_hide">
                <p>@lang('BSD Blind spot detection')</p>
                <p>@lang('Detection range of radar wave 3m*3m behind the vehicle')</p>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="imgwrap m_hide">
                <img src="{{ asset('images/newtiggo8pro_tech_p3.gif') }}" />
                <div class="warningbox">
                  <img src="{{ asset('images/newtiggo8pro_tech_w1.png') }}" class="pic warning w1" />
                  <img src="{{ asset('images/newtiggo8pro_tech_w2.png') }}" class="pic warning movecar" />
                </div>
              </div>
              <img src="{{ asset('images/newtiggo8pro_tech_p3_m.jpg') }}" class="pic pc_hide" />
              <div class="textdet pc_hide">
                <p>@lang('LKA Lane keeping assist')</p>
                <p>@lang('Real-time monitoring of lane lines，keeping driving in the lane')</p>
              </div>
            </div>
          </div>
          <div class="swiper-pagination pc_hide"></div>
        </div>
        <div class="cutwindow">
          <div class="cutbtn on">
            <div class="text">
              <h5>@lang('ACC Adaptive cruise control')</h5>
              <p>@lang('Monitoring road conditions，vehicle spacing，automatic speed regulation and start/stop.')</p>
            </div>
          </div>
          <div class="cutbtn">
            <div class="text">
              <h5>@lang('BSD Blind spot detection')</h5>
              <p>@lang('Detection range of radar wave 3m*3m behind the vehicle')</p>
            </div>
          </div>
          <div class="cutbtn">
            <div class="text">
              <h5>@lang('LKA Lane keeping assist')</h5>
              <p>@lang('Real-time monitoring of lane lines，keeping driving in the lane')</p>
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
              <img src="{{ asset('images/newtiggo8pro_safe_p1.jpg') }}" class="pic m_hide" />
              <img src="{{ asset('images/newtiggo8pro_safe_p1_m.jpg') }}" class="pic pc_hide" />
              <div class="textbox">
                <p>@lang('The leading guard-ring type 6 airbags provide comprehensive and thoughtful protection.')</p>
                <!--<p>When danger occurs, it can reduce injuries to occupants in the vehicle;</p>-->
                <!--<p>With an overlong side curtain airbag, the rear passengers can also be well protected.</p>-->
              </div>
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('images/newtiggo8pro_safe_p2.jpg') }}" class="pic m_hide" />
              <img src="{{ asset('images/newtiggo8pro_safe_p2_m.jpg') }}" class="pic pc_hide" />
              <div class="textbox ">
                <p>@lang('Advanced double-force-limiter pre-crash seat belts for the driver and the front passenger, and 3-point emergency locking seat belt for the second and the third rows.')</p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="{{ asset('images/newtiggo8pro_safe_p3.jpg') }}" class="pic m_hide" />
              <img src="{{ asset('images/newtiggo8pro_safe_p3_m.jpg') }}" class="pic pc_hide" />
              <div class="textbox">
                <!--<p>High-strength steels are present more than 60% in the alloy </p>-->
                <p>@lang('Multiple blocks of Bentler ultra-high strength thermal forming steels')</p>
                <p>@lang('Yield strength ≥1500Mpa')</p>
                <p>@lang('The whole vehicle cover is made of galvanized steel plates')</p>
              </div>
            </div>
          </div>
        </div>
        <div class="cutTab wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
          <div class="cutbtn on">@lang('Guard-ring 6 Airbags')</div>
          <div class="cutbtn">@lang('Seat belt')</div>
          <div class="cutbtn">@lang('High-strength Body')</div>
        </div>
      </div>
    </section>

    @include('layout.footer')
  </div>
@endsection

@section('scripts')
  <script src="{{ asset('script/resizeRoot.js') }}" type="text/javascript"></script>
  <script src="{{ asset('script/jquery.js') }}" type="text/javascript"></script>
  <script src="{{ asset('script/swiper.jquery.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('script/swiper.animate1.0.3.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('script/jquery-ui.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('script/jquery.animateNumber.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('script/wow.min.js') }}" type="text/javascript" charset="utf-8"></script>
  <script src="{{ asset('script/PxLoader.js') }}" type="text/javascript" charset="utf-8"></script>
  <script src="{{ asset('script/PxLoaderImage.js') }}" type="text/javascript" charset="utf-8"></script>
  <script src="{{ asset('script/global.js') }}" type="text/javascript"></script>
  <script src="{{ asset('script/threesixty.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('script/js_360.js') }}" type="text/javascript"></script>
  <script src="{{ asset('script/jquery.reel-min.js') }}"></script>
@endsection


@section('script')
  <script type="text/javascript">
    $(document).ready(function() {
      var pano = new pano2vrPlayer("interior_360");
      pano.readConfigUrlAsync("360/tiggo8pro.xml");
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
'
