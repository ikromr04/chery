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
        <div class="txt wow fadeInLeft animated" data-wow-duration="1s" data-wow-delay=".8s">
          <img src="images/tiggo7ProMax/tiggo7promax_tit.png" class="">
        </div>
        <div class="mediabox">
          <!--<video src="video/video.mp4" poster="images/newtiggo8pro_banner.jpg" muted=""></video>-->
          <!--<span class="play"></span>-->
          <img src="images/tiggo7ProMax/tiggo7promax_banner.jpg" class="m_hide" />
          <img src="images/tiggo7ProMax/tiggo7promax_banner_m.jpg" class="pc_hide" />
        </div>
      </div>
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
          <span class="label">POWER</span>
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
            <span class="tit">EXTERIOR DESIGN</span>
          </h4>
        </div>
        <div class="swiper-container sameSwiper samebox swiper-no-swiping">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="images/tiggo7ProMax/tiggo7promax_design_p1.jpg" class="pic m_hide" />
              <img src="images/tiggo7ProMax/tiggo7promax_design_p1_m.jpg" class="pic pc_hide" />
            </div>
            <div class="swiper-slide">
              <img src="images/tiggo7ProMax/tiggo7promax_design_p2.jpg" class="pic m_hide" />
              <img src="images/tiggo7ProMax/tiggo7promax_design_p2_m.jpg" class="pic pc_hide" />
            </div>
            <div class="swiper-slide">
              <img src="images/tiggo7ProMax/tiggo7promax_design_p3.jpg" class="pic m_hide" />
              <img src="images/tiggo7ProMax/tiggo7promax_design_p3_m.jpg" class="pic pc_hide" />
            </div>
          </div>
        </div>
        <div class="cutTab wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
          <div class="cutbtn on">Bright and technologically advanced </div>
          <div class="cutbtn">Integrated crescent-shaped LED tail lamp</div>
          <div class="cutbtn">Diamond-shaped front grille</div>
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
              <img src="images/tiggo7ProMax/tiggo7promax_inner_p1.jpg" class="pic m_hide" />
              <img src="images/tiggo7ProMax/tiggo7promax_inner_p1_m.jpg" class="pic pc_hide" />
            </div>
            <div class="swiper-slide">
              <img src="images/tiggo7ProMax/tiggo7promax_inner_p2.jpg" class="pic m_hide" />
              <img src="images/tiggo7ProMax/tiggo7promax_inner_p2_m.jpg" class="pic pc_hide" />
            </div>
            <div class="swiper-slide">
              <img src="images/tiggo7ProMax/tiggo7promax_inner_p3.jpg" class="pic m_hide" />
              <img src="images/tiggo7ProMax/tiggo7promax_inner_p3_m.jpg" class="pic pc_hide" />
            </div>
          </div>
        </div>
        <div class="cutTab wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
          <div class="cutbtn on">Sony Sound System(8 Speakers)</div>
          <div class="cutbtn">Atmosphere lights with 64 colors </div>
          <div class="cutbtn">Voice controlled sunroof</div>
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
              <img src="images/tiggo7ProMax/tiggo7promax_tech_p1.jpg" class="pic m_hide" />
              <img src="images/tiggo7ProMax/tiggo7promax_tech_p1_m.jpg" class="pic pc_hide" />
              <div class="textdet pc_hide">
                <p>Dual 12.3-inch screen with voice assistant </p>
              </div>
            </div>
            <div class="swiper-slide">
              <img src="images/tiggo7ProMax/tiggo7promax_tech_p2.jpg" class="pic m_hide" />
              <img src="images/tiggo7ProMax/tiggo7promax_tech_p2_m.jpg" class="pic pc_hide" />
              <div class="textdet pc_hide">
                <p>360° Round view camera</p>
              </div>
            </div>
          </div>
          <div class="swiper-pagination pc_hide"></div>
        </div>
        <div class="cutwindow">
          <div class="cutbtn on">
            <div class="text">
              <h5>Dual 12.3-inch screen with voice assistant</h5>
            </div>
          </div>
          <div class="cutbtn">
            <div class="text">
              <h5>360° Round view camera</h5>
            </div>
          </div>
        </div>
      </div>
      <!--Platinum Power-->
      <div class="power module" id="module4">
        <div class="title">
          <h4>
            <span class="big_num">04</span>
            <span class="tit">POWER</span>
          </h4>
        </div>
        <div class="powerbox samebox">
          <div class="caritem">
            <div class="imgbox">
              <img src="images/tiggo7ProMax/tiggo7promax_power_p1.jpg" />
            </div>
            <div class="textbox">
              <h5>1.6T SUPER KUNPENG POWER</h5>
            </div>
          </div>
          <div class="caritem">
            <div class="imgbox">
              <img src="images/tiggo7ProMax/tiggo7promax_power_p2.jpg" />
            </div>
            <div class="textbox">
              <h5>FOUR-WHEEL DRIVE</h5>
            </div>
          </div>
          <div class="caritem">
            <div class="imgbox">
              <img src="images/tiggo7ProMax/tiggo7promax_power_p3.jpg" />
            </div>
            <div class="textbox">
              <h5>ELECTRONIC GEARSHIFT</h5>
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
              <img src="images/tiggo7ProMax/tiggo7promax_safe_p1.jpg" class="pic m_hide" />
              <img src="images/tiggo7ProMax/tiggo7promax_safe_p1_m.jpg" class="pic pc_hide" />
            </div>
            <div class="swiper-slide scroll-slide">
              <img src="images/tiggo7ProMax/tiggo7promax_safe_p2.jpg" class="pic m_hide" />
              <img src="images/tiggo7ProMax/tiggo7promax_safe_p2_m.jpg" class="pic pc_hide" />
            </div>
            <div class="swiper-slide">
              <img src="images/tiggo7ProMax/tiggo7promax_safe_p3.jpg" class="pic m_hide" />
              <img src="images/tiggo7ProMax/tiggo7promax_safe_p3_m.jpg" class="pic pc_hide" />
            </div>
          </div>
        </div>
        <div class="cutTab wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
          <div class="cutbtn on">High-strength Body</div>
          <div class="cutbtn">6 Airbags </div>
          <div class="cutbtn">Electronic Child-safety Lock</div>
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
