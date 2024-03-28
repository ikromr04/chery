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
  <div class="modelwrap newTiggo4">
    @include('layout.header')

    <section>
      <div class="banner">
        <div class="txt wow fadeInRight animated" data-wow-duration="1s" data-wow-delay=".8s">
          <img src="images/newtiggo4_tit.png" class="m_hide">
          <img src="images/newtiggo4_tit_m.png" class="pc_hide">
        </div>
        <div class="mediabox">
          <img src="images/newtiggo4_banner.jpg" class="m_hide" />
          <img src="images/newtiggo4_banner_m.jpg" class="pc_hide" />
        </div>
      </div>
      <!--360-->
      <div class="model_wrap">
        <h3 class="tit_360">360° view</h3>
        <div class="change_E_I">
          <span class="on">EXTERIOR</span>
          <!--<span>INTERIOR</span>-->
        </div>
        <div class="model_360">
          <img src="images/newtiggo4_360bg.png" class="bg360" />
          <div class="pop_360_rou pop_360_rout">
            <div class="pop_360_rcon">
              <img src="images/360_view/newTiggo4/black/34.jpg" class="reel" id="image" data-image="stitched-reel.jpg" data-stitched="496" data-frames="30" data-frame="15" data-rows="3" data-row="2" data-loops="false">
            </div>
            <div id="interior_360">
              <br>Loading...<br>
            </div>
          </div>
          <style>
            #image-reel {
              width: 100%;
              height: 6.99rem;
            }

            #image {
              width: 100%;
              height: 6.99rem;
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
          <script type="text/javascript">
            $(function() {
              $('.model_360 #image').reel({
                images: 'images/360_view/newTiggo4/black/##.jpg|01..36',
                frame: 34
              });
              $('.exterior_color span').click(function() {
                $('.exterior_color span').removeClass('on');
                $(this).addClass('on');
                $('#image').reel('images', 'images/360_view/newTiggo4/' + $(this).data('color') + '/##.jpg|01..36');
              })
            })
          </script>
        </div>
        <div class="color_cut">
          <div class="color exterior_color">
            <span data-color="black" class="black on"><i></i></span>
            <span data-color="blue" class="blue-b"><i></i></span>
            <span data-color="gray" class="gray"><i></i></span>
            <span data-color="orange" class="orange"><i></i></span>
            <span data-color="red" class="red"><i></i></span>
            <span data-color="white" class="white"><i></i></span>
            <span data-color="silver" class="silver"><i></i></span>
          </div>
          <!--<div class="color interior_color off">-->
          <!--<span data-color="black" class="black on"><i></i></span>-->
          <!--<span data-color="orange" class="orange"><i></i></span>-->
          <!--</div>-->
        </div>
      </div>
      <!--Fashionable Design-->
      <div class="design module graybg">
        <div class="title">
          <h4>
            <span class="tit">DESIGN</span>
            <span class="big_num">01</span>
          </h4>
        </div>
        <div class="designbox">
          <div class="page">
            <div class="pagination_row swiper-pagination JavaneseText"></div>
          </div>
          <div class="swiper-container swiper-no-swiping txtSwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="txtbox">
                  <h5>1Family style <br /> tiger-crouching front </h5>
                  <p>The tiger-crouching front face design inherits the steady design aesthetics of TIGGO family.The front grille adopts the futuristic starry sky design, which creates natural but futuristic high-tech impression by the 2 transverse lines full of sense of depth.</p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="txtbox">
                  <h5>2Family style <br /> tiger-crouching front </h5>
                  <p>The tiger-crouching front face design inherits the steady design aesthetics of TIGGO family.The front grille adopts the futuristic starry sky design, which creates natural but futuristic high-tech impression by the 2 transverse lines full of sense of depth.</p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="txtbox">
                  <h5>3Family style <br />tiger-crouching front </h5>
                  <p>The tiger-crouching front face design inherits the steady design aesthetics of TIGGO family.The front grille adopts the futuristic starry sky design, which creates natural but futuristic high-tech impression by the 2 transverse lines full of sense of depth.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-container imgSwiper m_hide">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="images/newtiggo4_fastion_p1.jpg" class="pic" />
              </div>
              <div class="swiper-slide">
                <img src="images/newtiggo4_fastion_p2.jpg" class="pic" />
              </div>
              <div class="swiper-slide">
                <img src="images/newtiggo4_fastion_p1.jpg" class="pic" />
              </div>
            </div>
          </div>
          <div class="swiper-container imgSwiper pc_hide">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="images/newtiggo4_fastion_p1.jpg" class="pic" />
              </div>
              <div class="swiper-slide">
                <img src="images/newtiggo4_fastion_p2.jpg" class="pic" />
              </div>
              <div class="swiper-slide">
                <img src="images/newtiggo4_fastion_p1.jpg" class="pic" />
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--INTERIOR-->
      <div class="comfort module">
        <div class="title">
          <h4>
            <span class="tit">INTERIOR</span>
            <span class="big_num">02</span>
          </h4>
        </div>
        <div class="comfort_item graybg clearfix">
          <div class="txtbox">
            <h5>Wide high-quality space</h5>
            <p>Excellent space design provides sufficient head room, shoulder room and leg room for front and rear passengers, improving the riding comfort of all the occupants.</p>
          </div>
          <div class="imgbox">
            <img src="images/newtiggo4_royal_p1.jpg" class="pic" />
          </div>
        </div>
        <div class="comfort_item clearfix">
          <div class="txtbox">
            <h5>Wide high-quality space</h5>
            <p>Excellent space design provides sufficient head room, shoulder room and leg room for front and rear passengers, improving the riding comfort of all the occupants.</p>
          </div>
          <div class="imgbox">
            <img src="images/newtiggo4_royal_p2.jpg" class="pic" />
          </div>
        </div>
        <div class="comfort_item graybg clearfix">
          <div class="txtbox">
            <h5>Wide high-quality space</h5>
            <p>Excellent space design provides sufficient head room, shoulder room and leg room for front and rear passengers, improving the riding comfort of all the occupants.</p>
          </div>
          <div class="imgbox">
            <img src="images/newtiggo4_royal_p3.jpg" class="pic" />
          </div>
        </div>
      </div>
      <!--Platinum Power-->
      <div class="power module">
        <div class="title">
          <h4>
            <span class="tit">POWER</span>
            <span class="big_num">03</span>
          </h4>
        </div>
        <div class="powerbox">
          <div class="swiper-container imgSwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="images/newtiggo4_power_p1.jpg" class="pic" />
              </div>
              <div class="swiper-slide">
                <img src="images/newtiggo4_power_p1.jpg" class="pic" />
              </div>
            </div>
          </div>
          <div class="swiper-container textSwiper swiper-no-swiping">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="txtbox">
                  <h5>2.0L high-performance <br />engine</h5>
                  <div class="params">
                    <span>Max. power</span>
                    <div class="numbox">
                      <strong>102<span>kw</span></strong>
                      <span>/</span>
                      <strong>5750<span>rpm</span></strong>
                    </div>
                    <span>Max. torque</span>
                    <div class="numbox">
                      <strong>180<span>N·m</span></strong>
                      <span>/</span>
                      <strong>4500<span>rpm</span></strong>
                    </div>
                  </div>
                  <p>This naturally aspirated engine features fast throttle response, stable start, stable power output upon rpm change, simple mechanical construction and low maintenance cost.</p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="txtbox">
                  <h5>2.0L high-performance <br />engine</h5>
                  <div class="params">
                    <span>Max. power</span>
                    <div class="numbox">
                      <strong>102<span>kw</span></strong>
                      <span>/</span>
                      <strong>5750<span>rpm</span></strong>
                    </div>
                    <span>Max. torque</span>
                    <div class="numbox">
                      <strong>180<span>N·m</span></strong>
                      <span>/</span>
                      <strong>4500<span>rpm</span></strong>
                    </div>
                  </div>
                  <p>This naturally aspirated engine features fast throttle response, stable start, stable power output upon rpm change, simple mechanical construction and low maintenance cost.</p>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>
      <!--Intelligent Tech-->
      <div class="tech module graybg">
        <div class="title">
          <h4>
            <span class="tit">TECH</span>
            <span class="big_num">04</span>
          </h4>
        </div>
        <div class="m_hide">
          <div class="tech_item">
            <div class="txtbox">
              <h5>Smart bracelet key</h5>
              <p>It embraces such functions as vehicle control which is available for remote control key, reminding, mobile phone interconnection and monitoring.</p>
            </div>
            <div class="imgbox">
              <img src="images/newtiggo4_tech_p1.jpg" class="pic" />
            </div>
          </div>
          <div class="tech_item">
            <div class="txtbox">
              <h5>9-inch touch screen</h5>
              <p>The interface is beautiful but also easy for operation and use, and various available connection methods makes the connection easy and convenient.</p>
            </div>
            <div class="imgbox">
              <img src="images/newtiggo4_tech_p2.jpg" class="pic" />
            </div>
          </div>
          <div class="tech_item">
            <div class="txtbox">
              <h5>7-inch LCD <br />instrument display</h5>
              <p>The 7-inch LCD instrument panel, which is largest in its class and has a larger display area than the traditional 4-5-inch LCD instrument panel, makes the information display clearer and more intuitive, and improves the grade of the car.</p>
            </div>
            <div class="imgbox">
              <img src="images/newtiggo4_tech_p3.jpg" class="pic" />
            </div>
          </div>
        </div>
        <div class="pc_hide">
          <div class="swiper-container swiper-no-swiping txtSwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="txtbox">
                  <h5>Smart bracelet key</h5>
                  <p>It embraces such functions as vehicle control whiIt embraces such functions as vehicle control which is available for remote control key, reminding, mobile phone interconnection and monitoring.</p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="txtbox">
                  <h5>9-inch touch screen</h5>
                  <p>The interface is beautiful but also easy for operation and use, and various available connection methods makes the connection easy and convenient.</p>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="txtbox">
                  <h5>7-inch LCD <br />instrument display</h5>
                  <p>The 7-inch LCD instrument panel, instrument panel, makes the information display clearer and more intuitive, and improves the grade of the car.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-container imgSwiper">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="images/newtiggo4_tech_p1.jpg" class="pic" />
              </div>
              <div class="swiper-slide">
                <img src="images/newtiggo4_tech_p2.jpg" class="pic" />
              </div>
              <div class="swiper-slide">
                <img src="images/newtiggo4_tech_p3.jpg" class="pic" />
              </div>
            </div>
          </div>
          <div class="page">
            <div class="pagination_row swiper-pagination JavaneseText"></div>
          </div>
        </div>
      </div>
      <!--Overall Safety-->
      <div class="safety module">
        <div class="title">
          <h4>
            <span class="tit">SAFETY</span>
            <span class="big_num">05</span>
          </h4>
        </div>
        <div class="safetylist">
          <div class="safety_item">
            <div class="imgbox">
              <img src="images/newtiggo4_overall_p1.jpg" class="pic" />
            </div>
            <div class="txtbox">
              <h5>360° around-view monitor</h5>
              <p>More viewing angles and wider vision are provided, making the driving safer.</p>
            </div>
          </div>
          <div class="safety_item">
            <div class="imgbox">
              <img src="images/newtiggo4_overall_p2.jpg" class="pic" />
            </div>
            <div class="txtbox">
              <h5>HHC (Hill-start Assist Control)</h5>
              <p>Effectively prevent the car from sliding when being started on a slope, making the driving easier and safer.</p>
            </div>
          </div>
          <div class="safety_item">
            <div class="imgbox">
              <img src="images/newtiggo4_overall_p3.jpg" class="pic" />
            </div>
            <div class="txtbox">
              <h5>6D-BODY construction</h5>
              <p>This advanced safety body design concept can not only effectively transmit the front impact load, but also evenly disperse the side impact energy</p>
            </div>
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
@endsection


@section('script')
  <script type="text/javascript">
    $(document).ready(function() {
      //				var pano = new pano2vrPlayer("interior_360");
      //				pano.readConfigUrlAsync("360/pano_newTiggo4_black.xml");
      //				$(".pop_360_rcon").ThreeSixty({
      //					totalFrames: 36,
      //					endFrame: 30,
      //					currentFrame: 29,
      //					imgList: ".threesixty_images",
      //					progress: ".loading-360",
      //					imagePath: "./images/360_view/newTiggo4/black/",
      //					filePrefix: "",
      //					ext: ".jpg",
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
      //						imagePath: "./images/360_view/newTiggo4/" + $(this).data('color') + "/",
      //						filePrefix: "",
      //						ext: ".jpg",
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
  </script>
@endsection
