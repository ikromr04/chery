@extends('layout.app')

@section('styles')
  <link href="styles/base.css" type="text/css" rel="stylesheet">
  <link href="styles/swiper.min.css" type="text/css" rel="stylesheet">
  <link href="styles/animate.min.css" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="styles/threesixty.css" />
  <link href="styles/themes.css" type="text/css" rel="stylesheet">
  <link href="styles/m_themes.css" type="text/css" rel="stylesheet">
@endsection

@section('content')
  <div class="motorshow whitebg paddingtop">
    @include('layout.header')

    <section>
      <div class="breadcrumb wow fadeIn animated" data-wow-delay="0.4s">
        <a>@lang('News')</a>
        <span>></span>
        <a>@lang('Event')</a>
        <span>></span>
        <a class="current">@lang('Motorshow')</a>
      </div>
      <div class="content w1200">
        <ul class="newslist m_hide">
          <li class="wow fadeIn animated" data-wow-delay="0.6s">
            <div class="imgbox">
              <img src="images/motorshow_p1.jpg" class="pic" />
            </div>
            <div class="det">
              <p class="date JavaneseText">2021-04-15</p>
              <a href="">@lang('SHANGHAI INTERNATIONAL AUTO SHOW')</a>
            </div>
          </li>
          <li class="wow fadeIn animated" data-wow-delay="0.8s">
            <div class="det">
              <p class="date JavaneseText">2020-04-15</p>
              <a href="">@lang('BEIJING INTERNATIONAL <br />AUTO SHOW')</a>
            </div>
            <div class="imgbox">
              <img src="images/motorshow_p2.jpg" class="pic" />
            </div>
          </li>
          <li class="wow fadeIn animated" data-wow-delay="0.2s">
            <div class="imgbox">
              <img src="images/motorshow_p3.jpg" class="pic" />
            </div>
            <div class="det">
              <p class="date JavaneseText">2019-04-15</p>
              <a href="">@lang('EMBRACE CHALLENGE')</a>
            </div>
          </li>
          <li class="wow fadeIn animated" data-wow-delay="0.2s">
            <div class="det">
              <p class="date JavaneseText">2020-04-15</p>
              <a href="">@lang('BEIJING INTERNATIONAL <br />AUTO SHOW')</a>
            </div>
            <div class="imgbox">
              <img src="images/motorshow_p2.jpg" class="pic" />
            </div>
          </li>
          <li class="wow fadeIn animated" data-wow-delay="0.2s">
            <div class="imgbox">
              <img src="images/motorshow_p3.jpg" class="pic" />
            </div>
            <div class="det">
              <p class="date JavaneseText">2019-04-15</p>
              <a href="">@lang('EMBRACE CHALLENGE')</a>
            </div>
          </li>
        </ul>
        <ul class="newslist pc_hide">
          <li class="wow fadeIn animated" data-wow-delay="0.6s">
            <div class="imgbox">
              <img src="images/motorshow_p1.jpg" class="pic" />
            </div>
            <div class="det">
              <p class="date JavaneseText">2021-04-15</p>
              <a href="">@lang('SHANGHAI INTERNATIONAL AUTO SHOW')</a>
            </div>
          </li>
          <li class="wow fadeIn animated" data-wow-delay="0.2s">
            <div class="imgbox">
              <img src="images/motorshow_p3.jpg" class="pic" />
            </div>
            <div class="det">
              <p class="date JavaneseText">2019-04-15</p>
              <a href="">@lang('EMBRACE CHALLENGE')</a>
            </div>
          </li>
          <li class="wow fadeIn animated" data-wow-delay="0.2s">
            <div class="imgbox">
              <img src="images/motorshow_p3.jpg" class="pic" />
            </div>
            <div class="det">
              <p class="date JavaneseText">2019-04-15</p>
              <a href="">@lang('EMBRACE CHALLENGE')</a>
            </div>
          </li>
        </ul>
      </div>
    </section>

    @include('layout.footer')
  </div>
@endsection

@section('scripts')
  <script type="text/javascript" src="script/resizeRoot.js"></script>
  <script type="text/javascript" src="script/jquery.js"></script>
  <script type="text/javascript" src="script/swiper.jquery.min.js"></script>
  <script type="text/javascript" src="script/threesixty.min.js"></script>
  <script type="text/javascript" src="script/js_360.js"></script>
  <script type="text/javascript" src="script/swiper.animate1.0.3.min.js"></script>
  <script type="text/javascript" src="script/jquery-ui.min.js"></script>
  <script type="text/javascript" src="script/jquery.animateNumber.min.js"></script>
  <script src="script/wow.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="script/PxLoader.js" type="text/javascript" charset="utf-8"></script>
  <script src="script/PxLoaderImage.js" type="text/javascript" charset="utf-8"></script>
  <script type="text/javascript" src="script/global.js"></script>
  <script src="script/jquery.pagination.js"></script>
@endsection
