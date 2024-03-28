@extends('layout.app')

@section('content')
  <div class="index">
    <div class="music m_hide">
      <audio src="{{ asset('video/audio.mp3') }}" controls=""></audio>
      <img src="{{ asset('images/play_audio.png') }}" class="play" />
      <img src="{{ asset('images/pause_audio.png') }}" class="pause" />
    </div>

    @include('layout.header')

    <div class="pc_hide absoLogo">
      <a class="logo" href="{{ route('home') }}">
        <img src="{{ asset('images/logo.png') }}" />
      </a>
      {{-- <a href="" class="search"></a> --}}
      {{-- <div class="earth">
        <div class="country">
          <div class="list">
            <a href="">
              <img src="images/flag.png" />a
            </a>
            <a href="">
              <img src="images/flag.png" />a
            </a>
            <a href="">
              <img src="images/flag.png" />a
            </a>
            <a href="">
              <img src="images/flag.png" />a
            </a>
            <a href="">
              <img src="images/flag.png" />a
            </a>
            <a href="">
              <img src="images/flag.png" />a
            </a>
            <a href="">
              <img src="images/flag.png" />a
            </a>
            <a href="">
              <img src="images/flag.png" />a
            </a>
            <a href="">
              <img src="images/flag.png" />a
            </a>
            <a href="">
              <img src="images/flag.png" />a
            </a>
            <a href="">
              <img src="images/flag.png" />a
            </a>
          </div>
        </div>
      </div> --}}
    </div>
    <div class="pc_hide m_menu">
      <a class="nav">
        <span class="nav_line"></span>
        <span class="nav_line close"></span>
      </a>
      <div class="submenubg">
        <dl>
          <dt>
            <a>Models</a> <span>01</span>
          </dt>
          <dd class="carbtn">Tiggo</dd>
          <dd class="carbtn">Arrizo</dd>
          <dd class="carbtn">New energy</dd>
        </dl>
        <dl>
          <dt>
            <a>Design & Technology</a> <span>02</span>
          </dt>
          <dd>
            <a href="{{ route('dt.platform') }}">Platform</a>
          </dd>
          <dd>
            <a href="{{ route('dt.lab') }}">Lab</a>
          </dd>
          <dd>
            <a href="{{ route('dt.adas') }}">ADAS</a>
          </dd>
          <dd>
            <a href="{{ route('dt.autopilot') }}">Autopilot</a>
          </dd>
          <dd>
            <a href="{{ route('dt.newenergy') }}">New Energy</a>
          </dd>
        </dl>
        <dl>
          <dt>
            <a>News</a> <span>03</span>
          </dt>
          <dd>
            <a href="{{ route('news.news') }}">News</a>
          </dd>
          <dd>
            <a href="{{ route('news.events') }}">Events</a>
          </dd>
        </dl>
        <dl>
          <dt>
            <a href="{{ route('about.ceo') }}">About Chery</a> <span>04</span>
          </dt>
        </dl>
        <dl>
          <dt>
            <a href="{{ route('contact') }}">Contact Us</a> <span>05</span>
          </dt>
        </dl>
        <dl>
          <dt>
            <a href="{{ route('worldwide') }}">Worldwide</a> <span>06</span>
          </dt>
        </dl>
        <div>
          <div class="thirdmenu">
            <!--Models-->
            <div class="menucarbox">
              <div class="carlist">
                <a href="{{ route('tiggo8pro') }}" class="it">
                  <img src="{{ asset('images/mb_car_01.png') }}" />
                  <span class="label">Tiggo 8 Pro</span>
                </a>
                <a href="{{ route('tiggo8') }}" class="it">
                  <img src="images/mb_car_02.png" />
                  <span class="label">New Tiggo 5</span>
                </a>
                <a href="{{ route('newtiggo4') }}" class="it">
                  <img src="images/mb_car_03.png" />
                  <span class="label">New Tiggo 4</span>
                </a>
                <a href="{{ route('newtiggo4') }}" class="it">
                  <img src="images/mb_car_04.png" />
                  <span class="label">Tiggo 4</span>
                </a>
                <a href="{{ route('tiggo8') }}" class="it">
                  <img src="images/mb_car_06.png" />
                  <span class="label">Tiggo 8</span>
                </a>
                <a href="{{ route('tiggo7pro') }}" class="it">
                  <img src="images/mb_car_07.png" />
                  <span class="label">Tiggo 7 Pro</span>
                </a>
                <a href="{{ route('tiggo7') }}" class="it">
                  <img src="images/mb_car_08.png" />
                  <span class="label">Tiggo 7</span>
                </a>
                <a href="{{ route('tiggo2') }}" class="it">
                  <img src="images/mb_car_09.png" />
                  <span class="label">Tiggo 2</span>
                </a>
              </div>
            </div>
            <div class="menucarbox">
              <div class="carlist">
                <a href="{{ route('tiggo8pro') }}" class="it">
                  <img src="images/mb_car_01.png" />
                  <span class="label">Tiggo 8 Pro</span>
                </a>
                <a href="{{ route('newtiggo4') }}" class="it">
                  <img src="images/mb_car_02.png" />
                  <span class="label">New Tiggo 5</span>
                </a>
              </div>
            </div>
            <div class="menucarbox">
              <div class="carlist">
                <a href="{{ route('tiggo8pro') }}" class="it">
                  <img src="images/mb_car_01.png" />
                  <span class="label">Tiggo 8 Pro</span>
                </a>
                <a href="{{ route('tiggo8') }}" class="it">
                  <img src="images/mb_car_02.png" />
                  <span class="label">New Tiggo 5</span>
                </a>
                <a href="{{ route('tiggo8') }}" class="it">
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
      <div class="swiper-container banner">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="pic">
              <img src="{{ asset('images/banner1.jpg') }}" class="m_hide" />
              <img src="{{ asset('images/banner1_m.jpg') }}" class="pc_hide" />
            </div>
          </div>
          <div class="swiper-slide">
            <div class="pic">
              <video class="video" src="{{ asset('video/video.mp4') }}" autoplay muted loop></video>
            </div>
          </div>
        </div>
        <div class="swiper-pagination wow fadeInUp animated" data-wow-duration="1s" data-wow-delay="0.8s"></div>
      </div>

      <div class="m_hide car_models_pc wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.3s" data-wow-offset="100">
        <div class="models_list">
          <a class="car_item" href="{{ route('tiggo8') }}">
            <img src="{{ asset('images/car_show_1.jpg') }}" class="pic" />
          </a>
          <a class="car_item" href="{{ route('tiggo7pro') }}">
            <img src="{{ asset('images/car_show_2.jpg') }}" class="pic" />
          </a>
          <a class="car_item" href="{{ route('tiggo7') }}">
            <img src="{{ asset('images/car_show_3.jpg') }}" class="pic" />
          </a>
          <img src="{{ asset('images/latest_txt.png') }}" class="latest_txt" />
        </div>
      </div>

      <div class="pc_hide car_models_mb wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.3s" data-wow-offset="200">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <a href="{{ route('tiggo8') }}">
                <img src="{{ asset('images/car_show_1.jpg') }}" class="pic" />
              </a>
            </div>
            <div class="swiper-slide">
              <a href="{{ route('tiggo7pro') }}">
                <img src="{{ asset('images/car_show_2.jpg') }}" class="pic" />
              </a>
            </div>
            <div class="swiper-slide">
              <a href="{{ route('tiggo7') }}">
                <img src="{{ asset('images/car_show_3.jpg') }}" class="pic" />
              </a>
            </div>
          </div>
        </div>
        <div class="pagination pc_hide"></div>
      </div>
      <div class="design  wow fadeIn" data-wow-duration="0.8s" data-wow-delay="0.2s">

        <div class="video_bg m_hide">
          <video class="video" src="{{ asset('video/video.mp4') }}" autoplay="autoplay" muted="muted" loop="loop"></video>
        </div>
        <img src="{{ asset('images/design_title.png') }}" class="title wow fadeInDown m_hide" data-wow-duration="0.8s" data-wow-delay="0.5s">
        <div class="title wow fadeInDown pc_hide" data-wow-duration="0.8s" data-wow-delay="0.5s">
          DESIGN & TECHNOLOGY
        </div>
        <div class="txtwrap wow fadeInLeft m_hide">
          <p class="txt">The M1X platform is Chery's first car platform to adhere to a V-shaped positive
            development process,combining Jaguar Land Rover and Qoros technologies.Thank for years of effort
            made to Chery's international development platform</p>
          <p class="txt">combining Jaguar Land Rover and Qoros technologies.Thank for years of effort made
            to Chery's international development platform</p>
          <p class="txt">dhere to a V-shaped positive development process,combining Jaguar Land Rover and
            Qoros technologies.Thank for years of effort made to Chery's international development platform
          </p>
        </div>
        <ul class="itembox m_hide">
          <li class=" wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
            <a href="{{ route('dt.platform') }}">
              <span class="h5">
                Platform
              </span>
              <img src="{{ asset('images/design_img0.png') }}">
              <span class="p">
                Excellent Body <br>Structure Design
              </span>
            </a>
          </li>
          <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.52s">
            <a href="{{ route('dt.powertrain') }}">
              <span class="h5">
                Powertrain
              </span>
              <img src="{{ asset('images/design_img2.png') }}">
              <span class="p">
                Outstanding Economic <br> and Power Energy
              </span>
            </a>
          </li>
          <li class=" wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.55s">
            <a href="{{ route('dt.newenergy') }}">
              <span class="h5">
                R&D
              </span>
              <img src="{{ asset('images/design_img1.png') }}">
              <span class="p">
                Research on Intelligent <br> Connectivity Technologies
              </span>
            </a>
          </li>
        </ul>
        <div class="swiper-container itemboxswiper pc_hide">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <a href="{{ route('dt.platform') }}">
                <span class="h5">
                  Platform
                </span>
                <img src="{{ asset('images/design_img0.png') }}">
                <span class="p">
                  Excellent Body <br>Structure Design
                </span>
              </a>
            </div>
            <div class="swiper-slide">
              <a href="{{ route('dt.powertrain') }}">
                <span class="h5">
                  Powertrain
                </span>
                <img src="{{ asset('images/design_img2.png') }}">
                <span class="p">
                  Outstanding Economic <br> and Power Energy
                </span>
              </a>
            </div>
            <div class="swiper-slide">
              <a href="{{ route('dt.newenergy') }}">
                <span class="h5">
                  R&D
                </span>
                <img src="{{ asset('images/design_img1.png') }}">
                <span class="p">
                  Research on Intelligent <br> Connectivity Technologies
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="pagination pc_hide"></div>
      </div>
      <div class="news">
        <img src="{{ asset('images/news_txt.png') }}" class="title" />
        <div class="newspic ">
          <div class="img">
            <img src="{{ asset('images/models_img1.jpg') }}" />
          </div>
          <div class="img">
            <img src="{{ asset('images/models_img0.jpg') }}" />
          </div>
          <div class="img">
            <img src="{{ asset('images/models_img1.jpg') }}" />
          </div>
          <div class="img">
            <img src="{{ asset('images/new_pic2.jpg') }}" />
          </div>
          <div class="img">
            <img src="{{ asset('images/models_img0.jpg') }}" />
          </div>
        </div>
        <div class="controls pc_hide">
          <img src="{{ asset('images/news_prev.png') }}" class="btn prev" />
          <img src="{{ asset('images/news_next.png') }}" class="btn next" />
        </div>
        <div class="txtcon">
          <div class="swiper-container newstxt">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <h5>
                  Dedicated to Technical R&D and
                  Creating a World-Class Brand
                </h5>
                <span class="time JavaneseText">
                  2021-03-24
                </span>
                <br />
                <p>
                  China has been the world's largest automobile market for 12 consecutive years, and
                  several famous brands have emerged in China's automotive industry, among which Chery
                  is one...
                </p>
                <a href="{{ route('news.news') }}">
                  more <span>+</span>
                </a>
              </div>
              <div class="swiper-slide">
                <h5>
                  Dedicated to Technical R&D and
                  Creating a World-Class Brand
                </h5>
                <span class="time JavaneseText">
                  2021-03-24
                </span>
                <br />
                <p>
                  China has been the world's largest automobile market for 12 consecutive years, and
                  several famous brands have emerged in China's automotive industry, among which Chery
                  is one...
                </p>
                <a href="{{ route('news.news') }}">
                  more <span>+</span>
                </a>
              </div>
              <div class="swiper-slide">
                <h5>
                  Dedicated to Technical R&D and
                  Creating a World-Class Brand
                </h5>
                <span class="time JavaneseText">
                  2021-03-24
                </span>
                <br />
                <p>
                  China has been the world's largest automobile market for 12 consecutive years, and
                  several famous brands have emerged in China's automotive industry, among which Chery
                  is one...
                </p>
                <a href="{{ route('news.news') }}">
                  more <span>+</span>
                </a>
              </div>
              <div class="swiper-slide">
                <h5>
                  Dedicated to Technical R&D and
                  Creating a World-Class Brand
                </h5>
                <span class="time JavaneseText">
                  2021-03-24
                </span>
                <br />
                <p>
                  China has been the world's largest automobile market for 12 consecutive years, and
                  several famous brands have emerged in China's automotive industry, among which Chery
                  is one...
                </p>
                <a href="{{ route('news.news') }}">
                  more <span>+</span>
                </a>
              </div>
              <div class="swiper-slide">
                <h5>
                  Dedicated to Technical R&D and
                  Creating a World-Class Brand
                </h5>
                <span class="time JavaneseText">
                  2021-03-24
                </span>
                <br />
                <p>
                  China has been the world's largest automobile market for 12 consecutive years, and
                  several famous brands have emerged in China's automotive industry, among which Chery
                  is one...
                </p>
                <a href="{{ route('news.news') }}">
                  more <span>+</span>
                </a>
              </div>
            </div>
          </div>
          <div class="swiper-pagination pagination_row JavaneseText"></div>
        </div>
      </div>
    </section>

    @include('layout.footer')
  </div>
@endsection
