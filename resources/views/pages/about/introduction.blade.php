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
  <div class="introduction whitebg paddingtop">
    @include('layout.header')

    <section>
      <div class="breadcrumb wow fadeIn animated" data-wow-duration=".5s" data-wow-delay="0.4s">
        <a>@lang('About chery')</a>
        <span> > </span>
        <a class="current">@lang('Introduction')</a>
      </div>
      <div class="content">
        <div class="overview w1200 wow fadeIn animated" data-wow-duration=".8s" data-wow-delay="0.6s">
          <h3 class="line_title left">@lang('Overview')</h3>
          <p class="text">@lang('Chery Automobile Co., Ltd. was founded in 1997. It is a globalized automobile brand located in China.')</p>
          <div class="videobox">
            <video src="{{ asset('video/introduction.mp4') }}" poster="./images/introduction_bg.jpg" class="video">
            </video>
            <span class="play_btn"></span>
          </div>
        </div>
        <div class="independent">
          <div class="w1200">
            <h3 class="line_title left wow fadeInUp animated" data-wow-delay="0.4s">@lang('Independent Innovation')</h3>
            <p class="text wow fadeInUp animated" data-wow-delay="0.6s">@lang('Over the past 20 years, Chery has always insisted on independent innovation, established R&D centers in China, Germany, United States and Brazil. It also has established a global automotive R&D team of more than 5,500 people，thus gradually establishing the holistic technology and product R&D system. In this way, Chery has successfully created product brands such as Arrizo, Tiggo, and high-end EXEED brand with cumulative global sales of more than 9 million units.')</p>
            <div class="paramsbox m_hide">
              <div class="item wow fadeInUp animated" data-wow-delay="0.8s">
                <strong>20+</strong>
                <span>@lang('Years of independent <br /> innovation')</span>
              </div>
              <div class="item wow fadeInUp animated" data-wow-delay="1s">
                <strong>5,500+</strong>
                <span>@lang('R&D <br />talents')</span>
              </div>
              <div class="item wow fadeInUp animated" data-wow-delay="1.2s">
                <strong>9 MILLION+</strong>
                <span>@lang('Cumulative <br /> global sales')</span>
              </div>
              <div class="item wow fadeInUp animated" data-wow-delay="1.4s">
                <strong>80+</strong>
                <span>@lang('Countries/regions <br /> with export business')</span>
              </div>
              <div class="item wow fadeInUp animated" data-wow-delay="1.6s">
                <strong>1,500+</strong>
                <span>@lang('Sales outlets in <br /> overseas market')</span>
              </div>
            </div>
            <div class="swiper-container pc_hide paramsbox">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="item wow fadeInUp animated" data-wow-delay="0.8s">
                    <strong>20+</strong>
                    <span>@lang('Years of independent <br /> innovation')</span>
                  </div>
                  <div class="item wow fadeInUp animated" data-wow-delay="1s">
                    <strong>5,500+</strong>
                    <span>@lang('R&D <br />talents')</span>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="item wow fadeInUp animated" data-wow-delay="1.2s">
                    <strong>9 MILLION+</strong>
                    <span>@lang('Cumulative <br /> global sales')</span>
                  </div>
                  <div class="item wow fadeInUp animated" data-wow-delay="1.4s">
                    <strong>80+</strong>
                    <span>@lang('Countries/regions <br /> with export business')</span>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="item wow fadeInUp animated" data-wow-delay="1.6s">
                    <strong>1,500+</strong>
                    <span>@lang('Sales outlets in <br /> overseas market')</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        {{-- <div class="team w1200">
          <h3 class="line_title bottom wow fadeInUp animated" data-wow-delay="0.4s">CHERY R&D DREAM TEAM</h3>
          <div class="teamlist wow fadeIn animated" data-wow-duration=".8s" data-wow-delay="0.6s">
            <div class="swiper-container">
              <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <div class="item">
                    <p class="country">USA</p>
                    <img src="images/intro_per1.jpg" class="per" />
                    <span class="name">RAYMOND CHARLES BIERZYNSKI</span>
                    <span class="intr">executive vice president r&d</span>
                  </div>
                  <div class="item">
                    <p class="country">BRITAIN</p>
                    <img src="images/intro_per2.jpg" class="per" />
                    <span class="name">PETER MATKIN</span>
                    <span class="intr">exeed chief engineer</span>
                  </div>
                  <div class="item">
                    <p class="country">USA</p>
                    <img src="images/intro_per3.jpg" class="per" />
                    <span class="name">HENRY BRICE</span>
                    <span class="intr">director of advanced  engineering and  pre-program</span>
                  </div>
                  <div class="item">
                    <p class="country">USA</p>
                    <img src="images/intro_per4.jpg" class="per" />
                    <span class="name">HENRY BRICE</span>
                    <span class="intr">chief engineer</span>
                  </div>
                  <div class="item">
                    <p class="country">USA</p>
                    <img src="images/intro_per5.jpg" class="per" />
                    <span class="name">STEVE EUM </span>
                    <span class="intr">vice president and general manager of design </span>
                  </div>
                  <div class="item">
                    <p class="country">CANADA</p>
                    <img src="images/intro_per6.jpg" class="per" />
                    <span class="name">ALEX MIKLOSI</span>
                    <span class="intr"> design director</span>
                  </div>
                </div>
                <div class="swiper-slide">
                  <div class="item">
                    <p class="country">FRANCE</p>
                    <img src="images/intro_per7.jpg" class="per" />
                    <span class="name">FLAVIEN DACHET</span>
                    <span class="intr">advanced design director</span>
                  </div>
                  <div class="item">
                    <p class="country">KOREAN</p>
                    <img src="images/intro_per8.jpg" class="per" />
                    <span class="name">RICHARD KOO</span>
                    <span class="intr">exterior design director</span>
                  </div>
                  <div class="item">
                    <p class="country">GERMAN</p>
                    <img src="images/intro_per9.jpg" class="per" />
                    <span class="name">JOCHEN TUETING</span>
                    <span class="intr">managing director chery europe</span>
                  </div>
                  <div class="item">
                    <p class="country">GERMAN</p>
                    <img src="images/intro_per10.jpg" class="per" />
                    <span class="name">MICHAEL DUERR</span>
                    <span class="intr">senior manager interior design</span>
                  </div>
                  <div class="item">
                    <p class="country">GERMAN</p>
                    <img src="images/intro_per11.jpg" class="per" />
                    <span class="name">CAROLIN NUYTEN </span>
                    <span class="intr">senior manager color&material </span>
                  </div>
                  <div class="item">
                    <p class="country">FRANCE & GERMAN</p>
                    <img src="images/intro_per12.jpg" class="per" />
                    <span class="name">STÉPHANE RICHTER</span>
                    <span class="intr">senior manager vehicle architecture</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-pagination"></div>
          </div>
        </div> --}}
        <div class="development w1200">
          <h3 class="line_title bottom wow fadeInUp animated" data-wow-delay="0.4s">Global Development</h3>
          <div class="text_img">
            <div class="text wow fadeInLeft animated" data-wow-delay="0.6s">
              <p>@lang('Chery has implemented a globalization strategy since its establishment and has become the first passenger car company in China to export complete vehicles, CKD parts, engines, manufacturing technology and equipment to the global market. Up to now, Chery has exports in more than 80 countries and regions, establishing more than 1,500 sales and service outlets with more than 1.8 million accumulative export volume, remaining the biggest exporter passenger vehicles in China for 18 years in a row.')</p>
              <p>@lang('In 2012, Chery and Jaguar Land Rover Motors jointly invested in the establishment of Chery Jaguar Land Rover Motors Co., Ltd., which is China\'s first Sino-British joint venture high-end automobile company.')</p>
            </div>
            <div class="img wow fadeInRight animated" data-wow-delay="0.6s">
              <img src="images/introdction_logo.jpg" class="rt_p m_hide" />
              <img src="images/introdction_logo_m.jpg" class="rt_p pc_hide" />
            </div>
          </div>
        </div>
        <div class="car_pic w1200">
          <img src="images/introduction_pic.jpg" class="pic wow fadeIn animated" data-wow-delay="0.8s" />
        </div>
        <div class="foresight w1200">
          <h3 class="line_title bottom wow fadeInUp animated" data-wow-delay="0.4s">@lang('Foresight Technology')</h3>
          <div class="text  wow fadeInUp animated" data-wow-delay="0.6s">
            <p>@lang('In the future, the automobile market will enter the era of Electrification, Connection, Intelligence and Sharing. Chery Lion System emerges as the times require. The latest Chery Lion 2.0 system has been applied on Tiggo 8 and EXEED models, supporting the functions such as voice control, facial recognition, AR navigation, internet service and smart home. Chery has successfully developed the first and second generation of unmanned driving products and has planned to achieve L4 highly autonomous driving in 2025.')</p>
            <p>@lang('Based on information technology, Chery will integrate smart transport, intelligent manufacturing, IOT and block chain, dedicated to providing an intelligent interconnected lifestyle for global consumers in the new era.')</p>
          </div>
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
@endsection

@section('script')
  <script>
    $(function() {
      var designSwiperImg = new Swiper('.teamlist .swiper-container', {
        loop: true,
        autoplay: 5000,
        speed: 2000,
        pagination: '.teamlist .swiper-pagination',
        paginationClickable: true,
        spaceBetween: 10
      });
    })
  </script>
@endsection
