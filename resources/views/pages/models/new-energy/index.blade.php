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
  <div class="newenergy whitebg paddingtop">
    @include('layout.header')

    <section>
      <div class="breadcrumb wow fadeIn animated" data-wow-delay="0.4s">
        <a href="{{ route('home') }}">@lang('Home')</a>
        <span>></span>
        <a class="current">@lang('NEW ENERGY')</a>
      </div>
      <div class="content w1200">
        <div class="videobox">
          <video src="video/video.mp4" poster="images/energy_pic.jpg"></video>
          <span class="play_btn"></span>
        </div>
        <p class="videoText">@lang('Persists in leading the green rtevolution of auto industry')</p>
        <div class="imgtitle">
          <img src="images/energy_text.jpg" class="energy_text m_hide" />
          <img src="images/energy_text_m.jpg" class="energy_text pc_hide" />
          <div class="text">
            @lang('ECO-FRIENDLY SMART MODULAR PLATFORM')
          </div>
        </div>
        <div class="module">
          <h3 class="bigTitle">
            @lang('ECO')
          </h3>
          <img src="images/energy_car1.jpg" class="pic" />
          <h4 class="smallTitle">
            <img src="images/energy_ic1.png" class="ic" />
            @lang('Shortened manufacturing process')
          </h4>
          <p>@lang('Evolution of the traditional auto-making process, with number of stations reduced by 50%.')</p>
          <p>@lang('Whole-process green manufacturing,with energy consumption reduced by 80%.')</p>
        </div>
        <div class="module">
          <h3 class="bigTitle">
            @lang('SMART')
          </h3>
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img src="images/energy_car2.jpg" class="pic" />
              </div>
              <div class="swiper-slide">
                <img src="images/energy_car2.jpg" class="pic" />
              </div>
            </div>
            <img src="images/energy_left.png" class="prev btn" />
            <img src="images/energy_right.png" class="next btn" />
          </div>
          <div class="botInfo">
            <div class="col">
              <h4 class="smallTitle">
                <img src="images/energy_ic2.png" class="ic" />
                @lang('Smart battery')
              </h4>
              <p>@lang('Battery intelligent management system.')</p>
              <p>@lang('Liquid-cooled high-efficiency heat transfer structure.')</p>
              <p>@lang('Intelligent heat management.')</p>
              <p>@lang('Thermal runaway suppression technology.')</p>
            </div>
            <div class="col">
              <h4 class="smallTitle">
                <img src="images/energy_ic3.png" class="ic" />
                @lang('Smart electric drive')
              </h4>
              <p>@lang('Smart platform-based and integrated pure electric drive.')</p>
              <p>@lang('Multi-power drive system, multi-drive combination mode.')</p>
              <p>@lang('Motor efficiency up to 97%.')</p>
              <p>@lang('Energy recovery rate up to 100%.')</p>
            </div>
          </div>


        </div>
        <div class="module">
          <h3 class="bigTitle">
            @PILOT
          </h3>
          <img src="images/energy_car3.jpg" class="pic" />
          <div class="botInfo">
            <div class="col">
              <h4 class="smallTitle">
                <img src="images/energy_ic4.png" class="ic" />
                @lang('Improved performance')
              </h4>
              <p>@lang('Extremely rich perceptual information, with more than100 types of objectives detectable')</p>
            </div>
            <div class="col">
              <h4 class="smallTitle">
                <img src="images/energy_ic5.png" class="ic" />
                @lang('Stronger computing power')
              </h4>
              <p>@lang('64-bit processor, with computing speed up to 4 trillion times per second, which is the double of the competitors of same class')</p>
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
