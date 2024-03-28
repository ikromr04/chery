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
  <div class="modelwrap arrizo8 sameModel">
    @include('layout.header')

    <section>
      <div class="banner">
        <div class="txt wow fadeInLeft animated" data-wow-duration="1s" data-wow-delay=".8s">
          <img src="images/arrizo8/arrizo8_logo.png" class="">
        </div>
        <div class="mediabox">
          <!-- <video src="video/video.mp4" poster="images/newtiggo8pro_banner.jpg" autoplay="" muted=""></video>						 -->
          <img src="images/arrizo8/arrizo8_banner.png" class="m_hide" />
          <img src="images/arrizo8/arrizo8_banner_m.png" class="pc_hide" />
        </div>
      </div>
      <!--360-->
      <!-- 素材有問題，暫時隱藏，等待客戶重新提供素材 -->
      <!-- <div class="model_wrap">
          <img src="images/arrizo8/arrizo8_3dview.png" class="pic360 m_hide"/>
          <img src="images/arrizo8/arrizo8_3dview_m.png" class="pic360 pc_hide"/>
          <span class="viewTitle">
            <p>360° view</p>
            <span></span>
          </span>
          <span class="pointer"></span>
          <div class="three_pop">
            <iframe src="" frameborder="0" class="frame" id="car360" scrolling="no" allow="autoplay" webkitallowfullscreen="true" mozallowfullscreen="true" allowfullscreen="true" allowvr=""></iframe>
          </div>
        </div>
        <script>
          $(function() {
            $(".pointer").click(function() {
              // var url = '360deg/TIGGO8PHEV/index.html';
              var url = 'http://108.88.5.190:10043/data/tms/website/html/360/ARRIZO8360/ARRIZO8/index.html';
              $(this).siblings('.three_pop').find('#car360').attr('src', url);
              $(this).siblings('.three_pop').show()
            })
          })
        </script> -->

      <!--Fashionable Design-->
      <div class="modelmenu">
        <div class="it on">
          <span class="ic"><i></i></span>
          <span class="label">EXTERIOR DESIGN</span>
        </div>
        <div class="it">
          <span class="ic"><i></i></span>
          <span class="label">INTERIOR DESIGN</span>
        </div>
        <div class="it">
          <span class="ic"><i></i></span>
          <span class="label">TECH</span>
        </div>
        <div class="it">
          <span class="ic"><i></i></span>
          <span class="label">SAFETY</span>
        </div>
        <div class="it">
          <span class="ic"><i></i></span>
          <span class="label">POWER</span>
        </div>
      </div>
      <div class="design module" id="module1">
        <div class="title">
          <h4>
            <span class="big_num">01</span>
            <span class="tit">EXTERIOR DESIGN</span>
          </h4>
        </div>
        <div class="swiper-container sameSwiper samebox swiper-no-swiping">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="images/arrizo8/arrizo8_sec1_tab1.png" class="pic m_hide" />
              <img src="images/arrizo8/arrizo8_sec1_tab1_m.png" class="pic pc_hide" />
            </div>
            <div class="swiper-slide">
              <img src="images/arrizo8/arrizo8_sec1_tab2.png" class="pic m_hide" />
              <img src="images/arrizo8/arrizo8_sec1_tab2_m.png" class="pic pc_hide" />
            </div>
            <div class="swiper-slide">
              <img src="images/arrizo8/arrizo8_sec1_tab3.png" class="pic m_hide" />
              <img src="images/arrizo8/arrizo8_sec1_tab3_m.png" class="pic pc_hide" />
            </div>
          </div>
        </div>
        <div class="cutTab wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
          <div class="cutbtn on">Class B Body Dimensions </div>
          <div class="cutbtn">LED Headlight / Rearlamp </div>
          <div class="cutbtn">R18 Blackened Sporty wheels</div>
        </div>
      </div>
      <!--INTERIOR-->
      <div class="comfort module" id="module2">
        <div class="title">
          <h4>
            <span class="big_num">02</span>
            <span class="tit">INTERIOR DESIGN</span>
          </h4>
        </div>
        <div class="swiper-container sameSwiper samebox swiper-no-swiping">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="images/arrizo8/arrizo8_sec2_tab1.png" class="pic m_hide" />
              <img src="images/arrizo8/arrizo8_sec2_tab1_m.png" class="pic pc_hide" />
              <!-- <div class="textbox">
                  <p>Intelligent integrated central control screen    </p>
                </div> -->
            </div>
            <div class="swiper-slide">
              <img src="images/arrizo8/arrizo8_sec2_tab2.png" class="pic m_hide" />
              <img src="images/arrizo8/arrizo8_sec2_tab2_m.png" class="pic pc_hide" />
              <!-- <div class="textbox">
                  <p>Aviation class seat +super large comfortable space of 7 seats  </p>
                </div> -->
            </div>
            <div class="swiper-slide">
              <img src="images/arrizo8/arrizo8_sec2_tab3.png" class="pic m_hide" />
              <img src="images/arrizo8/arrizo8_sec2_tab3_m.png" class="pic pc_hide" />
              <!-- <div class="textbox">
                  <p>24.6-inch large intelligent duplex screen   </p>
                </div> -->
            </div>
          </div>
        </div>
        <div class="cutTab wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
          <div class="cutbtn on">Folio armrest <br>+ yacht style gear handle</div>
          <div class="cutbtn">Sony Sound System(8 Speakers)</div>
          <div class="cutbtn">Surround Cockpit Design </div>
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
              <img src="images/arrizo8/arrizo8_sec3_tab1.png" class="pic m_hide" />
              <img src="images/arrizo8/arrizo8_sec3_tab1_m.png" class="pic pc_hide" />
              <div class="textdet pc_hide">
                <p>24.6-Inch curved dual screen </p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="images/arrizo8/arrizo8_sec3_tab2.png" class="pic m_hide" />
              <img src="images/arrizo8/arrizo8_sec3_tab2_m.png" class="pic pc_hide" />
              <div class="textdet pc_hide">
                <p>540˚ Round View Camera </p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="images/arrizo8/arrizo8_sec3_tab3.png" class="pic m_hide" />
              <img src="images/arrizo8/arrizo8_sec3_tab3_m.png" class="pic pc_hide" />
              <div class="textdet pc_hide">
                <p>18 Advanced Driver Assist Systems</p>
              </div>
            </div>
          </div>
          <div class="swiper-pagination pc_hide"></div>
        </div>
        <div class="cutwindow">
          <div class="cutbtn on">
            <div class="text">
              <h5>24.6-Inch curved dual screen </h5>
            </div>
          </div>
          <div class="cutbtn">
            <div class="text">
              <h5>Intelligent switching of 9 driving modes </h5>
            </div>
          </div>
          <div class="cutbtn">
            <div class="text">
              <h5>18 Advanced Driver Assist Systems</h5>
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
              <img src="images/arrizo8/arrizo8_sec4_tab1.png" class="pic m_hide" />
              <img src="images/arrizo8/arrizo8_sec4_tab1_m.png" class="pic pc_hide" />
              <!-- <div class="textbox">
                  <p>Intelligent integrated central control screen    </p>
                </div> -->
            </div>
            <div class="swiper-slide">
              <img src="images/arrizo8/arrizo8_sec4_tab2.png" class="pic m_hide" />
              <img src="images/arrizo8/arrizo8_sec4_tab2_m.png" class="pic pc_hide" />
              <div class="textbox">
                <p>The side air curtains cover almost the entire side area of ​​the car. With OPW technology, the internal pressure remains greater than 50% after 6 seconds of the collision.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="cutTab wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
          <div class="cutbtn on">Over 80% High-Strength Steel Frame</div>
          <div class="cutbtn">10-Airbag System </div>
        </div>
      </div>

      <!--Platinum Power-->
      <div class="power module" id="module5">
        <div class="title">
          <h4>
            <span class="big_num">05</span>
            <span class="tit">POWER</span>
          </h4>
        </div>
        <div class="powerbox samebox w1200">
          <p>
            Chery iHEC combustion system can deliver 6.5L/100Km (NEDC) super low fuel consumption rate.<br>
            Compared with the traditional automatic transmission, it improves fuel efficiency by 5%-9%, comprehensive mechanical efficiency of 96%, smoother and lower energy consumption, and provides 3 different (ECO+Normal+Sport) driving modes.
          </p>
          <!-- <div class="textbox"> -->
          <!--<div class="lf wow fadeInLeft animated" data-wow-duration="1s" data-wow-delay="0.2s">-->
          <!-- <p>8.2s for 0-100km acceleration</p> -->
          <!-- <p>Max input torque: 510N·m</p> -->
          <!-- <p>Pure electric endurance of 75km </p> -->
          <!--<p>comprehensive fuel consumption of 1.55L per 100km</p>-->
          <!--</div>-->
          <!--<div class="rt wow fadeInRight animated" data-wow-duration="1s" data-wow-delay="0.2s">-->
          <!--<p>Fuel consumption of power loss: 6.5L</p>-->
          <!--<p>Pure electric endurance of 75km </p>-->
          <!--</div>-->
          <!-- </div> -->
          <div class="swiper-container viewbox">
            <div class="powerbox_image">
              <div>
                <img src="images/arrizo8/arrizo8_sec5_tab1.png">
                <p>1.6T GDI engine</p>
              </div>
              <div>
                <img src="images/arrizo8/arrizo8_sec5_tab2.png">
                <p>7-speed Dual Clutch Transmission</p>
              </div>
            </div>
            <!-- <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="images/newtiggo8proe_power_p1.jpg"/>
                </div>
                <div class="swiper-slide">
                  <img src="images/newtiggo8proe_power_p2.jpg"/>
                </div>
                <div class="swiper-slide">
                  <img src="images/newtiggo8proe_power_p3.jpg"/>
                </div>
              </div> -->
          </div>
          <div class="pagination"></div>
          <!--<div class="viewbox">
              <div class="it_lf wow fadeInLeft animated">
                <div class="imgbox">
                  <img src="images/newtiggo8proe_power_p1.jpg"/>
                </div>
              </div>
              <div class="it_rt wow fadeInRight animated">
                <div class="imgbox">
                  <img src="images/newtiggo8proe_power_p2.jpg"/>
                </div>
                <div class="imgbox">
                  <img src="images/newtiggo8proe_power_p3.jpg"/>
                </div>
              </div>
            </div>-->
        </div>
      </div>

    </section>

    <footer class="wow">
      <div class="ft_cont m_hide">
        <div class="ft_menu">
          <div class="item">
            <span>Models</span>
            <a href="">Tiggo</a>
            <a href="">Arrizo</a>
            <a href="">New energy</a>
          </div>
          <div class="item">
            <span>Design & Technology</span>
            <a href="">Platform</a>
            <a href="">Powertrain</a>
            <a href="">Lab</a>
            <a href="">ADAS</a>
            <a href="">Autopilot</a>
            <a href="">New Energy</a>
          </div>
          <div class="item">
            <span>News</span>
            <a href="">News</a>
            <a href="">Events</a>
          </div>
          <div class="item">
            <span>About Chery</span>
            <a href="">From CEO</a>
            <a href="">Introduction</a>
            <a href="">Brand Concept</a>
            <a href="">Honors</a>
          </div>
          <div class="item">
            <span>Contact Us</span>
          </div>
          <div class="item">
            <span>Worldwide</span>
          </div>
        </div>
        <div class="ft_link">
          <img src="images/logo_bottom.png" class="logo" />
          <div class="fast_link">
            <a href=""><img src="images/link_ic1.png" /></a>
            <a href=""><img src="images/link_ic2.png" /></a>
            <a href=""><img src="images/link_ic3.png" /></a>
          </div>
        </div>
      </div>
      <div class="copyright">
        © Copyright 2021 Chery.All Right Reserved.
      </div>
    </footer>
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
