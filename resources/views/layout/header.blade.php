@php
  $route = request()->route()->getName();
@endphp

<header class="wow fadeIn animated" data-wow-duration="1s" data-wow-delay="0.2s">
  <nav class="m_hide">
    <a @if ($route != 'home') href="{{ route('home') }}" @endif>
      <img class="logo" src="{{ asset('images/logo.png') }}" />
    </a>
    <div class="menu wow fadeInDown animated" data-wow-duration="1s" data-wow-delay="0.2s">
      <div class="btn">
        <a>Models</a>
        <div class="subnav models on onTo">
          <div class="btnbox">
            <span></span>
            <div class="subtn">
              <a>Tiggo</a>
              <div class="subtnbox">
                <span></span>
                <div class="subtn_b">
                  <a href="{{ route('tiggo8pro') }}">Tiggo 8 Pro</a>
                  <div class="carbox">
                    <div class="img">
                      <img src="{{ asset('images/menu_models_car0.png') }}">
                    </div>
                    <ul class="numbox">
                      <li>
                        <span class="num" data-num="1.6">1.6</span>
                        <span class="uptitle">TGDI</span>
                        <div class="downtitle">Engine</div>
                      </li>
                      <li>
                        <span class="num" data-num="4722">4722</span>
                        <span class="uptitle">mm</span>
                        <div class="downtitle">Length</div>
                      </li>
                      <li>
                        <span class="num" data-num="2710">2710</span>
                        <span class="uptitle">mm</span>
                        <div class="downtitle">Wheelbase</div>
                      </li>
                    </ul>
                    <a href="{{ route('tiggo8pro') }}">details</a>
                  </div>
                </div>
                <div class="subtn_b">
                  <a href="{{ route('tiggo8') }}">Tiggo 8</a>
                  <div class="carbox">
                    <div class="img">
                      <img src="{{ asset('images/menu_models_car1.png') }}">
                    </div>
                    <ul class="numbox">
                      <li>
                        <span class="num" data-num="1.5/2.0">1.5/2.0</span>
                        <span class="uptitle">T</span>
                        <div class="downtitle">Engine</div>
                      </li>
                      <li>
                        <span class="num" data-num="4700">4700</span>
                        <span class="uptitle">mm</span>
                        <div class="downtitle">Length</div>
                      </li>
                      <li>
                        <span class="num" data-num="2710">2710</span>
                        <span class="uptitle">mm</span>
                        <div class="downtitle">Wheelbase</div>
                      </li>
                    </ul>
                    <a href="{{ route('tiggo8') }}">details</a>
                  </div>
                </div>
                <div class="subtn_b">
                  <a href="{{ route('tiggo7pro') }}">Tiggo 7 Pro</a>
                  <div class="carbox">
                    <div class="img">
                      <img src="{{ asset('images/models_menu_tiggo7pro.png') }}">
                    </div>
                    <ul class="numbox">
                      <li>
                        <span class="num" data-num="1.5">1.5</span>
                        <span class="uptitle">T</span>
                        <div class="downtitle">engine</div>
                      </li>
                      <li>
                        <span class="num" data-num="4500">4500</span>
                        <span class="uptitle">mm</span>
                        <div class="downtitle">length</div>
                      </li>
                      <li>
                        <span class="num" data-num="892">892</span>
                        <span class="uptitle">L</span>
                        <div class="downtitle">trunk volume</div>
                      </li>
                      <li>
                        <span class="num" data-num="51">51</span>
                        <span class="uptitle">L</span>
                        <div class="downtitle">fuel tank <br /> capacity</div>
                      </li>
                    </ul>
                    <a href="{{ route('tiggo7pro') }}">details</a>
                  </div>
                </div>
                <div class="subtn_b">
                  <a href="{{ route('tiggo7') }}">Tiggo 7</a>
                  <div class="carbox" style="display: none;">
                    <div class="img">
                      <img src="{{ asset('images/models_menu_tiggo7.png') }}">
                    </div>
                    <ul class="numbox">
                      <li>
                        <span class="num" data-num="1.5/2.0">1.5/2.0</span>
                        <span class="uptitle">T</span>
                        <div class="downtitle">Engine</div>
                      </li>
                      <li>
                        <span class="num" data-num="4505">4505</span>
                        <span class="uptitle">mm</span>
                        <div class="downtitle">Length</div>
                      </li>
                      <li>
                        <span class="num" data-num="2670">2670</span>
                        <span class="uptitle">mm</span>
                        <div class="downtitle">Wheelbase</div>
                      </li>
                    </ul>
                    <a href="{{ route('tiggo7') }}">details</a>
                  </div>
                </div>
                <div class="subtn_b">
                  <a href="{{ route('newtiggo4') }}">New Tiggo 4</a>
                  <div class="carbox">
                    <div class="img">
                      <img src="{{ asset('images/menu_models_car0.png') }}">
                    </div>
                    <ul class="numbox">
                      <li>
                        <span class="num" data-num="2710">2510</span>
                        <span class="uptitle">mm</span>
                        <div class="downtitle">wheelbase</div>
                      </li>
                      <li>
                        <span class="num" data-num="892">892</span>
                        <span class="uptitle">L</span>
                        <div class="downtitle">trunk volume</div>
                      </li>
                      <li>
                        <span class="num" data-num="51">51</span>
                        <span class="uptitle">L</span>
                        <div class="downtitle">fuel tank <br /> capacity</div>
                      </li>
                    </ul>
                    <a href="{{ route('newtiggo4') }}">details</a>
                  </div>
                </div>
                <div class="subtn_b">
                  <a href="{{ route('tiggo2') }}">Tiggo 2</a>
                </div>
              </div>
            </div>
            <div class="subtn">
              <a>Arrizo</a>
              <div class="subtnbox">
                <span></span>
                <div class="subtn_b">
                  <a href="{{ route('arrizo8') }}">Arrizo 8</a>
                </div>
              </div>
            </div>
            <div class="subtn">
              <a href="{{ route('newenergy') }}">New energy</a>
            </div>
            <span></span>
          </div>
        </div>
      </div>
      <div class="btn">
        <a>Design & Technology </a>
        <div class="subnav">
          <div class="btnbox">
            <span></span>
            <div class="subtn">
              <a href="{{ route('dt.platform') }}">Platform</a>
            </div>
            <div class="subtn">
              <a href="{{ route('dt.powertrain') }}">Powertrain</a>
            </div>
            <div class="subtn">
              <a href="{{ route('dt.lab') }}">Lab</a>
            </div>
            <div class="subtn">
              <a href="{{ route('dt.adas') }}">ADAS</a>
            </div>
            <div class="subtn">
              <a href="{{ route('dt.autopilot') }}">Autopilot</a>
            </div>
            <div class="subtn">
              <a href="{{ route('dt.newenergy') }}">New Energy</a>
            </div>
            <span></span>
          </div>
        </div>
      </div>
      <div class="btn">
        <a>News</a>
        <div class="subnav">
          <div class="btnbox">
            <span></span>
            <div class="subtn">
              <a href="{{ route('news.news') }}">News</a>
            </div>
            <div class="subtn">
              <a href="{{ route('news.events') }}">Events</a>
            </div>
            <span></span>
          </div>
        </div>
      </div>
      <div class="btn">
        <a>About Chery</a>
        <div class="subnav">
          <div class="btnbox">
            <span></span>
            <div class="subtn">
              <a href="{{ route('about.ceo') }}">From CEO</a>
            </div>
            <div class="subtn">
              <a href="{{ route('about.introduction') }}">Introduction</a>
            </div>
            <div class="subtn">
              <a href="{{ route('about.concept') }}">Brand Concept</a>
            </div>
            <div class="subtn">
              <a href="{{ route('about.honors') }}">Honors</a>
            </div>
            <span></span>
          </div>
        </div>
      </div>
      <div class="btn">
        <a href="{{ route('contact') }}">Contact Us</a>
      </div>
      <div class="btn">
        <a href="{{ route('worldwide') }}">Worldwide</a>
      </div>
    </div>
  </nav>
  {{-- <a href="" class="search m_hide">
    <img src="images/search_icon1.png" />
  </a> --}}
  {{-- <div class="earth m_hide">
    <img src="images/earth.png" class="icon" />
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
      </div>
    </div>
  </div> --}}
  <div class="line m_hide"></div>
</header>
