<!DOCTYPE html>  
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" type="image/png" sizes="16x16" href="{{ url('image/logo-app.png') }}">
<title>{{ env('APP_NAME') }} | Login</title>
<!-- Bootstrap Core CSS -->
<link href="{{ asset('assets/back/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet">
<!-- animation CSS -->
<link href="{{ asset('assets/back/css/animate.css') }}" rel="stylesheet">
<!-- Custom CSS -->
<link href="{{ asset('assets/back/css/style.css') }}" rel="stylesheet">
<!-- color CSS -->
<link href="{{ asset('assets/back/css/colors/default.css') }}" id="theme"  rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

</head>
<body>
<!-- Preloader -->
<div class="preloader">
  <div class="cssload-speeding-wheel"></div>
</div>
<section id="wrapper" class="login-register">
    @if ($errors->has('email'))
        <div class="alert alert-danger text-center"><strong>{{ $errors->first('email') }}</strong></div>
    @endif
  <div class="login-boxku" style="border-radius: 25px;box-shadow: 1px 2px 20px 2px #393b3c94;">

    <div class="white-box" style="border-radius: 25px;margin-bottom: 0px">
        <div class="row">
          <form class="form-horizontal" id="loginform" action="{{ route('login') }}" method="POST">
                {{ csrf_field() }}
                <div class="col-md-6">
                <div class="form-group">
                  <div class="col-md-12 text-center">
                    <div class="user-thumb text-center" id="logo"> <img alt="thumbnail" class="img-circle" width="220" src="{{ url('image/logo-app.png') }}" style="position: relative;z-index: 1;padding-top: 25px">
                    </div>
                    <div class="user-thumb text-center" style="display: none" id="loading-form"> <img alt="thumbnail" class="img-circle" width="220" src="{{ url('image/logo-load.gif') }}" style="position: relative;z-index: 1;padding-top: 25px">
                    </div>
                  </div>
                </div>
                
            </div>
            <div class="col-md-6">
                <div class="form-group">
                  @if(session('confirmed'))
                  <div class="col-md-12" id="successalert">
                    <div class="alert alert-success text-center">{{ session('confirmed') }}</div>
                  </div>
                  @endif
                </div>
                <div id="login-form">
                    <div class="form-group">
                      <div class="col-xs-12">
                        <input class="form-control" type="email" required="" placeholder="Email" name="email" autofocus>
                      </div>
                    </div>
                    <div class="form-group ">
                      <div class="col-xs-12">
                        <input class="form-control" type="password" required="" placeholder="Password" name="password">
                      </div>
                    </div>
                    <div class="form-group ">
                        <div class="col-xs-6">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                        <div class="col-xs-6 text-right">
                            <a href="{{ url('login/facebook') }}"><button class="btn btn-facebook waves-effect waves-light" type="button"><i class="fa fa-facebook"></i></button></a>
                        </div>
                    </div>
                    <div class="form-group text-center">
                      <div class="col-xs-12">
                        <button class="btn btn-info btn-lg btn-rounded text-uppercase waves-effect waves-light" type="submit">Login</button>
                      </div>
                    </div>
                </div>
                <div class="form-group text-center" id="loading-form" style="display: none;margin-top: -45px">
                  <div class="col-xs-12">
                    <img src="{{ url('image/load.gif') }}" height="150px" style="margin-bottom: -30px;margin-top:-30px">
                    <p style="padding-top: -20px">Login to your account</p>
                  </div>
                </div>
                <div class="col-md-12 text-center">
                    <p>Dont have an account ?<a href="{{ route('register') }}"> Register Here</a></p>
                </div>
            </div>
          </form>
        </div>

        {{-- <div class="row">
            <div class="col-md-12 text-center">
                <p>Dont have an account ?<a href="{{ route('register') }}"> Register Here</a></p>
            </div>
            <div class="col-md-12 text-center">
                <a href="{{ url('/') }}">Back to Home</a>
            </div>
        </div> --}}
    </div>
  </div>
</section>
<!-- jQuery -->
<script src="{{ asset('plugins/bower_components/jquery/dist/jquery.min.js') }}"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('assets/back/bootstrap/dist/js/bootstrap.min.js') }}"></script>
<!-- Menu Plugin JavaScript -->
<script src="{{ asset('plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js') }}"></script>

<!--slimscroll JavaScript -->
<script src="{{ asset('assets/back/js/jquery.slimscroll.js') }}"></script>
<!--Wave Effects -->
<script src="{{ asset('assets/back/js/waves.js') }}"></script>
<!-- Custom Theme JavaScript -->
<script src="{{ asset('assets/back/js/custom.min.js') }}"></script>
<!--Style Switcher -->
<script src="{{ asset('plugins/bower_components/styleswitcher/jQuery.style.switcher.js') }}"></script>
{{-- Custom Script --}}
<script type="text/javascript">
$('#loginform').on('submit',function(){
    $('#loading-form').css('display','block');
    $('#logo').css('display','none');
});
</script>
</body>
</html>