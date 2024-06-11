<footer class="wow">
  <div class="ft_cont m_hide">
    <div class="ft_menu">
      <div class="item">
        <span>@lang('Models')</span>
        <a href="{{ route('tiggo8pro') }}">Tiggo</a>
        <a href="{{ route('arrizo8') }}">Arrizo</a>
        <a href="{{ route('newenergy') }}">@lang('New energy')</a>
      </div>
      <div class="item">
        <span>@lang('Design & Technology')</span>
        <a href="{{ route('dt.autopilot') }}">@lang('Autopilot')</a>
        <a href="{{ route('newenergy') }}">@lang('New Energy')</a>
      </div>
      <div class="item">
        <span>@lang('News')</span>
        <a href="{{ route('news.news') }}">@lang('News')</a>
        <a href="{{ route('news.events') }}">@lang('Events')</a>
      </div>
      <div class="item">
        <span>@lang('About Chery')</span>
        <a href="{{ route('about.ceo') }}">@lang('From CEO')</a>
        <a href="{{ route('about.introduction') }}">@lang('Introduction')</a>
        <a href="{{ route('about.honors') }}">@lang('Honors')</a>
      </div>
      <div class="item">
        <span>
          <a href="{{ route('contact') }}">@lang('Contact Us')</a>
        </span>
      </div>
      <div class="item">
        <span>
          <a href="{{ route('worldwide') }}">@lang('Worldwide')</a>
        </span>
      </div>
    </div>
    <div class="ft_link">
      <img src="{{ asset('images/logo_bottom.png') }}" class="logo" />
      <div class="fast_link">
        <a href="https://www.facebook.com/cheryinternational" target="_blank">
          <img src="{{ asset('images/link_ic1.png') }}" />
        </a>
        <a href="https://mobile.twitter.com/CheryAutoCo" target="_blank">
          <img src="{{ asset('images/link_ic2.png') }}" />
        </a>
        <a href="https://www.instagram.com/cheryauto/" target="_blank">
          <img src="{{ asset('images/link_ic3.png') }}" />
        </a>
        <a href="https://www.youtube.com/@cheryinternational_official" target="_blank">
          <img src="{{ asset('images/link_ic4.png') }}" />
        </a>
      </div>
    </div>
  </div>
  <div class="copyright">
    @lang('© Copyright 2024 Chery. All Right Reserved.')
  </div>
</footer>
