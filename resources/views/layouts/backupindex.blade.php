<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>APP SURABAYA - Area Pelaksana Pemeliharaan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- styles -->
  <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!--alerts CSS -->
    <link href="../plugins/bower_components/sweetalert/sweetalert.css" rel="stylesheet" type="text/css">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,400,600,700" >
  <link rel="stylesheet" href="{{ asset('serenity/css/bootstrap.css')}}" >
  <link rel="stylesheet" href="{{ asset('serenity/css/bootstrap-responsive.css')}}" >
  <link rel="stylesheet" href="{{ asset('serenity/css/docs.css')}}" >
  <link rel="stylesheet" href="{{ asset('serenity/css/prettyPhoto.css')}}" >
  <link rel="stylesheet" href="{{ asset('serenity/js/google-code-prettify/prettify.css')}}" >
  <link rel="stylesheet" href="{{ asset('serenity/css/flexslider.css')}}" >
  <link rel="stylesheet" href="{{ asset('serenity/css/sequence.css')}}" >
  <link rel="stylesheet" href="{{ asset('serenity/css/style.css')}}" >
  <link rel="stylesheet" href="{{ asset('serenity/color/default.css')}}" >

  <!-- fav and touch icons -->
  <link rel="shortcut icon" href="{{asset('serenity/img/PLN.jpg')}}">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('serenity/ico/apple-touch-icon-144-precomposed.png')}}">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('serenity/ico/apple-touch-icon-114-precomposed.png')}}">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('serenity/ico/apple-touch-icon-72-precomposed.png')}}">
  <link rel="apple-touch-icon-precomposed" href="{{ asset('serenity/ico/apple-touch-icon-57-precomposed.png')}}">

</head>

<body>
  <header>
    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <!-- logo -->
          <a class="brand logo" href="">APP SURABAYA <h5>Area Pelaksana Pemeliharaan</h5></a>
          
          <!-- end logo -->
          <!-- top menu -->
          <div class="navigation">
            <nav>
              <ul class="nav topnav">
                <li class="dropdown active">
                   @guest
                      <a href="{{route('index')}}">Home</a>
                      @else
                        <a href="{{route('home')}}">Home</a>
                      @endguest
                  <ul class="dropdown-menu">
                    <li><a href="overview.html">KANTOR INDUK</a></li>
                    <li><a href="scaffolding.html">APP BALI</a></li>
                    <li><a href="base-css.html">APP MALANG</a></li>
                    <li><a href="components.html">APP MADIUN</a></li>
                    <li><a href="javascript.html">APP PROBOLINGGO</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#">Aplikasi</a>
                  <ul class="dropdown-menu">
                    <li class="dropdown"><a href="#">ENJINIRING</a>
                      <ul class="dropdown-menu sub-menu">
                        <li><a href="#">CBM</a></li>
                        <li><a href="#">SRINTAMI</a></li>
                        <li><a href="#">JALUR</a></li>
                        <li><a href="#">WP-ONLINE</a></li>
                      </ul>
                    </li>
                    <li class="dropdown"><a href="#">SDM</a>
                      <ul class="dropdown-menu sub-menu">
                        <li><a href="#">AMOR</a></li>
                        <li><a href="#">AMS</a></li>
                        <li><a href="#">ESS</a></li>
                        <li><a href="#">Komando</a></li>
                        <li><a href="#">Simkpnas</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
@guest
                <li>
                  <a href="#mySignin" data-toggle="modal"><i class="icon-user"></i>{{ __('Login') }}</a>
                </li>
@else
                <!--<li class="nav-item dropdown">
                  <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> {{ Auth::user()->name }} <span class="caret"></span> </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">{{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                  </div>
                </li>-->
                <li class="dropdown"><a class="dropdown" href="#" role="button">{{ Auth::user()->name }} <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li class="dropdown">
                      <a class="dropdown" href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">{{ __('Logout') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                    </form>
                    </li>
                    
                  </ul>
                  
                </li>
@endguest
              </ul>
            </nav>
          </div>
          <!-- end menu -->
        </div>
      </div>
    </div>
  </header>
  
  <div id="mySignin" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      <h4 id="mySigninModalLabel">{{ __('Login') }} to your <strong>account</strong></h4>
    </div>
    <div class="modal-body">
      <form class="form-horizontal" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="control-group">
        <label class="control-label" for="inputText">Email</label>
        <div class="controls">
          <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
        </div>
        </div>
          <div class="control-group">
            <label class="control-label" for="inputSigninPassword">Password</label>
              <div class="controls">
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
              </div>
          </div>
          <div class="control-group">
            <div class="controls">
              <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
            </div>        
          </div>
      </form>
    </div>
  </div>


@yield('content')
  <!-- Footer
 ================================================== -->
  <footer class="footer">
    <div class="container">
      <div class="row">
        <div class="span4">
          <div class="widget">
            <h5>Browse pages</h5>
            <ul class="regular">
              <li><a href="#">Work for us</a></li>
              <li><a href="#">Creative process</a></li>
              <li><a href="#">Case study</a></li>
              <li><a href="#">Scaffold awwards</a></li>
              <li><a href="#">Meet the team</a></li>
            </ul>
          </div>
        </div>
        <div class="span4">
          <div class="widget">
            <h5>Recent blog posts</h5>
            <ul class="regular">
              <li><a href="#">Lorem ipsum dolor sit amet</a></li>
              <li><a href="#">Mea malis nominavi insolens ut</a></li>
              <li><a href="#">Minim timeam has no aperiri sanctus ei mea per pertinax</a></li>
              <li><a href="#">Te malorum dignissim eos quod sensibus</a></li>
            </ul>
          </div>
        </div>
        <div class="span4">
          <div class="widget">
            <!-- logo -->
            <a class="brand logo" href="index.html">
              <img src="{{asset('serenity/img/logo-dark.png')}}" alt="">
            </a>
            <!-- end logo -->
            <address>
              <strong>Registered Companyname, Inc.</strong><br>
               8895 Somename Ave, Suite 600<br>
               San Francisco, CA 94107<br>
              <abbr title="Phone">P:</abbr> (123) 456-7890
            </address>
          </div>
        </div>
      </div>
    </div>
    <div class="verybottom">
      <div class="container">
        <div class="row">
          <div class="span6">
            <p>
              &copy; Serenity - All right reserved
            </p>
          </div>
          <div class="span6">
            <div class="credits">
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <script src="{{asset('ample/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
  <!-- Bootstrap Core JavaScript -->
  <script src="{{asset('ampleotstrap/dist/js/bootstrap.min.js')}}"></script>
  <!-- Menu Plugin JavaScript -->
  <script src="{{asset('ample/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
  <!--slimscroll JavaScript -->
  <script src="{{asset('ample/jquery.slimscroll.js')}}"></script>
  <!--Wave Effects -->
  <script src="{{asset('ample/waves.js')}}"></script>
  <!-- Sweet-Alert  -->
  <script src="{{asset('ample/plugins/bower_components/sweetalert/sweetalert.min.js')}}"></script>
  <script src="{{asset('ample/plugins/bower_components/sweetalert/jquery.sweet-alert.custom.js')}}"></script>
  <!-- Custom Theme JavaScript -->
  <script src="{{asset('ample/custom.min.js')}}"></script>
  <!--Style Switcher -->
  <script src="{{asset('ample/plugins/bower_components/styleswitcher/jQuery.style.switcher.js')}}"></script>
  <!-- JavaScript Library Files -->
  <script src="{{ asset('serenity/js/jquery.min.js')}}"></script>
  <script src="{{ asset('serenity/js/jquery.easing.js')}}"></script>
  <script src="{{ asset('serenity/js/google-code-prettify/prettify.js')}}"></script>
  <script src="{{ asset('serenity/js/modernizr.js')}}"></script>
  <script src="{{ asset('serenity/js/bootstrap.js')}}"></script>
  <script src="{{ asset('serenity/js/jquery.elastislide.js')}}"></script>
  <script src="{{ asset('serenity/js/sequence/sequence.jquery-min.js')}}"></script>
  <script src="{{ asset('serenity/js/sequence/setting.js')}}"></script>
  <script src="{{ asset('serenity/js/jquery.prettyPhoto.js')}}"></script>
  <script src="{{ asset('serenity/js/application.js')}}"></script>
  <script src="{{ asset('serenity/js/jquery.flexslider.js')}}"></script>
  <script src="{{ asset('serenity/js/hover/jquery-hover-effect.js')}}"></script>
  <script src="{{ asset('serenity/js/hover/setting.js')}}"></script>

  <!-- Template Custom JavaScript File -->
  <script src="{{ asset('serenity/js/custom.js')}}"></script>


</body>
</html>
