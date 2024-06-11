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
  <div class="contact whitebg paddingtop">
    @include('layout.header')

    <section>
      <div class="breadcrumb wow fadeIn animated" data-wow-delay="0.4s">
        <a>@lang('Home')</a>
        <span>></span>
        <a class="current">@lang('Contact us')</a>
      </div>
      <div class="content w1200">
        <div class="about">
          <h3 class="line_title left">@lang('About')</h3>
          <div class="types">
            <div class="tab" data-name="Business">@lang('Business')</div>
            <div class="tab" data-name="Purchase Intention">@lang('')</div>
            <div class="tab" data-name="Service Support">@lang('Service Support')</div>
            <div class="tab" data-name="The Website">@lang('The Website')</div>
            <input type="text" hidden="hidden" id="type" value="" name="type" class="type" />
          </div>
        </div>
        <div class="information">
          <h3 class="line_title left">@lang('Information')</h3>
          <form class="form">
            <div class="form_group mustwrite select">
              <select class="form_control" id="country">
                <option value="Country" hidden>@lang('Country')</option>
                <option value="china1">@lang('China1')</option>
                <option value="china2">@lang('China2')</option>
              </select>
            </div>
            <div class="form_group mustwrite">
              <input type="text" class="form_control" id="name" placeholder="Name" />
            </div>
            <div class="form_group mustwrite">
              <input type="text" class="form_control" id="phone" placeholder="Phone" />
            </div>
            <div class="form_group mustwrite">
              <input type="text" class="form_control" id="email" placeholder="E-mail" />
            </div>
            <div class="form_group select isShow">
              <select class="form_control" id="vehicleType">
                <option value="">@lang('Vehicle Type')</option>
                <option value="">b</option>
              </select>
            </div>
            <div class="form_group isShow">
              <input type="text" class="form_control" id="vin" placeholder="Vehicle VIN" />
            </div>
            <div class="form_group seat"></div>
            <div class="form_group seat"></div>
            <div class="form_textarea mustwrite">
              <textarea class="form_control" id="leaveWord" placeholder="Leave a message"></textarea>
            </div>
            <button class="submit" type="button">@lang('Submit')</button>
          </form>
          <div class="hint">
            <p class="success gray">@lang('Email sent successfully!')</p>
            <p class="error red">@lang('You have been delivery please do not repeat submitted!')</p>
            <p class="empty red">@lang('The form cannot be empty!')</p>
            <p class="emailcheck red">@lang('Please enter a valid email address!')</p>
            <p class="failure red">@lang('Email sent failure!')</p>
          </div>
          <!--<div class="message_box">
                <span class="icon"></span>
                <p>You have been delivery please do not repeat submitted！</p>
              </div>-->
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

@section('script')
  <script>
    $(function() {

      function myrefresh() {
        window.location.reload();
      }
      var isShow = false;
      $(".types .tab").on('click', function() {
        var name = $(this).data('name');
        $(this).addClass('on').siblings('.tab').removeClass('on');
        $(this).siblings('input').val(name);
        if (name == 'Purchase Intention' || name == 'Service Support') {
          isShow = true;
          $(".isShow").show();
        } else {
          isShow = false;
          $(".isShow").hide();
        }
      })
      var hintText = {
        success: 'Submitted successfully！',
        error: 'You have been delivery please do not repeat submitted！',
        empty: 'The form cannot be empty！',
        emailcheck: 'Please enter a valid email address!',
        failure: 'Submission Failed！'
      }

      function showToast(status) {
        var message_box = $("<div class='message_box'>");
        var span = $("<span class='icon'>");
        var p = $("<p>");
        if (status == 'success') {
          message_box.addClass('success');
        }
        p.text(hintText[status]);
        message_box.append(span).append(p);
        $(".contact").append(message_box);
        var timerAdd = setTimeout(function() {
          message_box.addClass('on');
          clearTimeout(timerAdd);
        }, 10)
        var timerRemoveC = setTimeout(function() {
          message_box.removeClass('on');
          clearTimeout(timerRemoveC);
          var timerRemove = setTimeout(function() {
            message_box.remove();
            clearTimeout(timerRemove);
          }, 600)
        }, 2000)
      }
      $(".submit").on('click', function() {
        $(this).attr("disabled", "disabled");
        var type = $("#type").val();
        var country = $('#country').val();
        var name = $('#name').val().trim();
        var phone = $('#phone').val().trim();
        var email = $('#email').val().trim();
        var vehicleType = $('#vehicleType').val();
        var vin = $('#vin').val().trim();
        var leaveWord = $('#leaveWord').val();
        if (type == '' || country == '' || country == 'Country' || name == '' || phone == '' || email == '' || leaveWord == '') {
          //						$(".empty").show().siblings('p').hide();
          showToast('empty');
          $(this).removeAttr('disabled')
          return;
        }
        if (!email.match(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/)) {
          //						$('.emailcheck').show().siblings('p').hide();
          showToast('emailcheck');
          $(this).removeAttr('disabled')
          return;
        }
        var data = {
          country: country,
          name: name,
          phone: phone,
          email: email,
          leaveWord: leaveWord
        }
        if (isShow) {
          data.vehicleType = vehicleType;
          data.vin = vin;
        }
        //请求
        console.log(data)
      })
    })
  </script>
@endsection
