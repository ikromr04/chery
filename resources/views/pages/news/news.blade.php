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
  <div class="newswrap whitebg paddingtop">
    @include('layout.header')

    <section>
      <div class="breadcrumb wow fadeIn animated" data-wow-delay="0.4s">
        <a>News</a>
        <span>></span>
        <a class="current">News</a>
      </div>
      <div class="content w1200">
        <div class="newsswiper wow fadeIn animated" data-wow-duration="1s" data-wow-delay="0.6s">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="imgbox">
                  <img src="images/news_swipe.jpg" />
                </div>
                <div class="newtext">
                  <span>Jun 01,2021</span>
                  <p>Quality Earns Trust: Tiggo 8 Pro Comes Out on Top in Satisfaction Assessment of Entry-level Midsize SUVs</p>
                  <a href="{{ route('news.news.read') }}" class="readmore">READ MORE</a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="imgbox">
                  <img src="images/news_swipe.jpg" />
                </div>
                <div class="newtext">
                  <span>Jun 01,2021</span>
                  <p>Quality Earns Trust: Assessment of Entry-level Midsize SUVs</p>
                  <a href="{{ route('news.news.read') }}" class="readmore">READ MORE</a>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="imgbox">
                  <img src="images/news_swipe.jpg" />
                </div>
                <div class="newtext">
                  <span>Jun 01,2021</span>
                  <p>Quality Earns Trust: Tiggo 8 Pro Comes Out on Top in Satisfaction Assessment of Entry-level Midsize SUVs</p>
                  <a href="{{ route('news.news.read') }}" class="readmore">READ MORE</a>
                </div>
              </div>
            </div>
            <img src="images/news_prev.png"/ class="prev controls">
            <img src="images/news_next.png"/ class="next controls">
          </div>
          <div class="swiper-pagination"></div>
        </div>
        <ul class="newslist wow fadeIn animated" data-wow-delay="0.8s">
          <li>
            <div class="imgbox">
              <img src="images/news_list_p1.jpg" />
            </div>
            <div class="newstext">
              <p>Chery's Future ICV Plant Project Breaks Ground to Accelerate Chery's Thorough Transformation from Traditional Vehicles to Intelligent Vehicles</p>
              <div class="botinfo">
                <a href="{{ route('news.news.read') }}" class="readmore">READ MORE</a>
                <span>Jun 01,2021</span>
              </div>
            </div>
          </li>
          <li>
            <div class="imgbox">
              <img src="images/news_list_p1.jpg" />
            </div>
            <div class="newstext">
              <p>Chery's Future ICV Plant Project Breaks Ground to Accelerate Chery's Thorough Transformation from Traditional Vehicles to Intelligent Vehicles</p>
              <div class="botinfo">
                <a href="{{ route('news.news.read') }}" class="readmore">READ MORE</a>
                <span>Jun 01,2021</span>
              </div>
            </div>
          </li>
        </ul>
        <div class="pagewrap"></div>
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


@section('script')
  <script>
    $(function() {
      $('.pagewrap').pagination({
        pageCount: 20,
        current: 1,
        mode: "fixed",
        count: 6,
        jump: true,
        keepShowPN: true,
        prevContent: '',
        nextContent: '',
        callback: function(api) {
          console.log(api.getCurrent())
        }
      });
    })
  </script>
@endsection
