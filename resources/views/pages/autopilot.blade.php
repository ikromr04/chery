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
  <div class="autopilot whitebg paddingtop">
    @include('layout.header')

    <section>
      <div class="breadcrumb wow fadeIn animated" data-wow-delay="0.4s">
        <a>Home</a>
        <span>></span>
        <a>Design & Technology</a>
        <span>></span>
        <a href="speech" class="current">Autopilot</a>
      </div>
      <div class="content w1200">
        <div class="videobox">
          <video src="video/video.mp4" poster="images/auto_video.jpg"></video>
          <span class="play_btn"></span>
        </div>
        <div class="textbox">
          <h4 class="tit">AUTOPILOT</h4>
          <p class="det">Chery places a high value on our customer’s safety and security. Autopilot features monitor, assist or even take control of certain steering, braking and even parking functions on your vehicle, applying advanced technology to further ensure your security in daily driving.</p>
        </div>
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
