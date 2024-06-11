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
  <div class="speech whitebg paddingtop">
    @include('layout.header')

    <section>
      <div class="breadcrumb">
        <a>@lang('About chery')</a>
        <span>></span>
        <a class="current">@lang('From CEO')</a>
      </div>
      <div class="content w1200">
        <img src="images/speech.jpg" class="pic" />
        <div class="person">
          <h3 class="name">@lang('Yin Tongyue')</h3>
          <span class="label1">@lang('Chairman')</span>
          <span class="label2">@lang('Chery Automobile Co.,Ltd.')</span>
        </div>
        <div class="para">
          <p>@lang('Since it was founded, Chery has always taken adhering to technology-driven strategy, creating a vehicle brand with international competitiveness and influence as its corporate vision.')</p>
          <p>@lang('Relying on the constant pursuit of technological innovation, Chery has become the first passenger vehicle enterprise in China to master the core technology of engine, gearbox, chassis, platform and new energy, and also the first one in China to export vehicle, CKD parts, engine and vehicle manufacturing technology and equipment to overseas market.Chery has always focused on developing domestic and international markets. ')</p>
          <p>@lang('Chery has continuously deepened its globalization through the implementation of product strategy, localization strategy and talent strategy. After more than 20 years of development, Chery’s sales and services network covers more than 80 countries and regions and has won the trust of 8.3 million consumers worldwide.')</p>
          <p>@lang('The global vehicle market is ushering in a new era of Electrification, Connection, Intelligence and Sharing. which will lead to major changes once in a century. In 2018, Chery officially released the intelligent brand CHERY LION, marking an overall transformation to intellectualization and it committed to providing an intelligent and interconnected lifestyle of new era for global consumers.')</p>
          <p>@lang('Meanwhile, Chery has carried out a variety of social contribution activities concerning green development, environmental protection, social welfare, talent cultivation and other fields in the global market. We hope that our efforts will contribute to the society and make a good impact.')</p>
          <p>@lang('Chery will always persist in technology-driven strategy, take the consumer experience as the core, and provide better products and services ')</p>
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
