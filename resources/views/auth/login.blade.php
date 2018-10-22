<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Panagea - Premium site template for travel agencies, hotels and restaurant listing.">
    <meta name="author" content="Ansonika">
    <title>{{ ENV('APP_NAME') }}</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{ asset('image/logo-app.png') }}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- BASE CSS -->
    <link href="{{ asset('assets/front/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/css/vendors.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/front/css/color-blue.css') }}" id="colors" rel="stylesheet">
    <!-- YOUR CUSTOM CSS -->
    <link href="{{ asset('assets/front/css/custom.css') }}" rel="stylesheet">

</head>

<body id="login_bg" style="background-image: url('../image/bg-login.jpg')">
  
  <nav id="menu" class="fake_menu"></nav>
  
  <div id="preloader">
    <div data-loader="circle-side"></div>
  </div>
  <!-- End Preload -->
  
  <div id="login">
    <aside>
      <figure>
        <a href="index.html"><img src="{{ asset('image/logo-app.png') }}" height="36" data-retina="true" alt="" class="logo_sticky"><h4>Lawang Sewa</h4></a>
      </figure>
        <form action="{{ route('login') }}" method="POST">
          {{ csrf_field() }}
        <div class="access_social">
          <a href="#" class="social_bt facebook">Login with Facebook</a>
          <a href="#" class="social_bt google">Login with Google</a>
          <a href="#" class="social_bt linkedin">Login with Linkedin</a>
        </div>
        <div class="divider"><span>Or</span></div>
        <div class="form-group">
          <label>Email</label>
          <input type="email" class="form-control {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" id="email" required value="{{ old('email') }}">
          <i class="icon_mail_alt"></i>
          @if ($errors->has('email'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
        @endif
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" class="form-control" name="password" id="password" value="" required="">
          <i class="icon_lock_alt"></i>
        </div>
        <div class="clearfix add_bottom_30">
          <div class="checkboxes float-left">
            <label class="container_check">Remember me
              <input type="checkbox">
              <span class="checkmark"></span>
            </label>
          </div>
          <div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
        </div>
        <button type="submit" class="btn_1 rounded full-width">Login to Panagea</button>
        <div class="text-center add_top_10">New to Panagea? <strong><a href="{{ route('register') }}">Sign up!</a></strong></div>
      </form>
      <div class="copy">© 2018 Panagea</div>
    </aside>
  </div>
  <!-- /login -->
    
  <!-- COMMON SCRIPTS -->
    <script src="{{ asset('assets/front/js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('assets/front/js/common_scripts.js') }}"></script>
    <script src="{{ asset('assets/front/js/main.js') }}"></script>
  <script src="{{ asset('assets/front/assets/validate.js') }}"></script>  
  
</body>
</html>