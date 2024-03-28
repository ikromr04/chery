@extends('layout.app')

@section('styles')
  <link href="{{ asset('styles/base.css') }}" type="text/css" rel="stylesheet">
  <link href="{{ asset('styles/swiper.min.css') }}" type="text/css" rel="stylesheet">
  <link href="{{ asset('styles/animate.min.css') }}" type="text/css" rel="stylesheet">
  <link href="{{ asset('styles/themes.css') }}" type="text/css" rel="stylesheet">
  <link href="{{ asset('styles/m_themes.css') }}" type="text/css" rel="stylesheet">
@endsection

@section('content')
  <div class="index">
    <div class="music m_hide">
      <audio src="{{ asset('video/audio.mp3') }}" controls=""></audio>
      <img src="{{ asset('images/play_audio.png') }}" class="play" />
      <img src="{{ asset('images/pause_audio.png') }}" class="pause" />
    </div>

    @include('layout.header')

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

@section('script')
  <script type="text/javascript" src="{{ asset('script/resizeRoot.js') }}"></script>
  <script type="text/javascript" src="{{ asset('script/jquery.js') }}"></script>
  <script type="text/javascript" src="{{ asset('script/swiper.jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('script/swiper.animate1.0.3.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('script/jquery-ui.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('script/jquery.animateNumber.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('script/wow.min.js') }}" charset="utf-8"></script>
  <script type="text/javascript" src="{{ asset('script/PxLoader.js') }}" charset="utf-8"></script>
  <script type="text/javascript" src="{{ asset('script/PxLoaderImage.js') }}" charset="utf-8"></script>
  <script type="text/javascript" src="{{ asset('script/global.js') }}"></script>
@endsection
