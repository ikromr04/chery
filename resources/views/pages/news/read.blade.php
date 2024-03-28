@extends('layout.app')

@section('styles')
  <link href="{{ asset('styles/base.css') }}" type="text/css" rel="stylesheet">
  <link href="{{ asset('styles/swiper.min.css') }}" type="text/css" rel="stylesheet">
  <link href="{{ asset('styles/animate.min.css') }}" type="text/css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('styles/threesixty.css') }}" />
  <link href="{{ asset('styles/themes.css') }}" type="text/css" rel="stylesheet">
  <link href="{{ asset('styles/m_themes.css') }}" type="text/css" rel="stylesheet">
@endsection

@section('content')
  <div class="newspage whitebg paddingtop">
    @include('layout.header')

    <section>
      <div class="breadcrumb">
        <a>News</a>
        <span>></span>
        <a class="current">News</a>
      </div>
      <div class="content w1200">
        <h3>CHERY AND IFLYTEK DEEPENED STRATEGIC COOPERATION IN AN ALL-ROUND WAY</h3>
        <div class="date">Jun 01,2021</div>

        <p>On May 24, Chery Automobile Co., Ltd. (hereinafter referred to as "Chery") and iFlytek CO., LTD. (hereinafter referred to as "iFlytek") signed a comprehensive deepening strategic cooperation framework agreement at the headquarters of Chery. This is an important cooperation upgrade on the basis of the formal establishment of the strategic partnership between the two sides in 2017. The cooperation scope covers multiple fields such as intelligent products and enterprise digital transformation, and all-round cooperation between the two sides.</p>
        <img src="{{ asset('images/speech.jpg') }}" class="pic" />
        <span>Strategic cooperation signing ceremony</span>
        <p>On May 24, Chery Automobile Co., Ltd. (hereinafter referred to as "Chery") and iFlytek CO., LTD. (hereinafter referred to as "iFlytek") signed a comprehensive deepening strategic cooperation framework agreement at the headquarters of Chery. This is an important cooperation upgrade on the basis of the formal establishment of the strategic partnership between the two sides in 2017. The cooperation scope covers multiple fields such as intelligent products and enterprise digital transformation, and all-round cooperation between the two sides.</p>
        <p>Under the comprehensive deepening strategic cooperation framework agreement, the two sides will continue to deepen cooperation in the areas of smart cockpit and Internet of Vehicles solutions, on which they have worked together for many years, develop a series of intelligent products, jointly create intelligent vehicle audio systems and solutions for various Chery brands, and carry out comprehensive and in-depth cooperation in AI marketing & service, intelligent customer service center and other fields. The two sides will use their respective resources to cooperate on intelligent driving and, under appropriate conditions, try to jointly build an autonomous vehicle that can reach level 4 under specific scenarios. Based on the advantages of Chery's overseas market and iFlytek's multilingual technology, both parties will explore international multilingual cooperation, focus on the key export regions of Chery Automobile, Chery develops intelligent interactive products in English, Russian, Arabic, Portuguese and other languages to help Chery promote its globalization strategy.</p>
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
  <script type="text/javascript" src="{{ asset('script/global.js') }}"></script>
@endsection
