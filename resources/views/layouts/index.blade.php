<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>PLN APP SURABAYA - Area Pelaksana Pemeliharaan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <!-- styles -->
<link href="https://fonts.googleapis.com/css?family=Noto+Serif:400,400italic,700|Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- flattern -->
  <link rel="stylesheet" href="{{ asset('flattern/css/bootstrap.css')}}" >  
  <link rel="stylesheet" href="{{ asset('flattern/css/bootstrap-responsive.css')}}" >  
  <link rel="stylesheet" href="{{ asset('flattern/css/fancybox/jquery.fancybox.css')}}" >  
  <link rel="stylesheet" href="{{ asset('flattern/css/jcarousel.css')}}" >  
  <link rel="stylesheet" href="{{ asset('flattern/css/flexslider.css')}}" >  
  <link rel="stylesheet" href="{{ asset('flattern/css/slitslider.css')}}" >  
  <link rel="stylesheet" href="{{ asset('flattern/css/style.css')}}" >  
  <!-- Theme skin -->
  <link id="t-colors" rel="stylesheet" href="{{ asset('flattern/skins/default.css')}}" >  
  <link id="bodybg" rel="stylesheet" href="{{ asset('flattern/bodybg/bg1.css')}}" >  
  
  <!-- fav and touch icons -->  
  <link rel="shortcut icon" href="{{asset('flattern/img/PLN.jpg')}}">  
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('flattern/ico/apple-touch-icon-144-precomposed.png')}}">  
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('flattern/ico/apple-touch-icon-144-precomposed.png')}}">  
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('flattern/ico/apple-touch-icon-72-precomposed.png')}}">  
  <link rel="apple-touch-icon-precomposed" href="{{ asset('flattern/ico/apple-touch-icon-57-precomposed.png')}}">  
 
 <!-- ample upload file -->
  <link rel="stylesheet" href="{{asset('ample/plugins/bower_components/dropify/dist/css/dropify.min.css')}}">

  <!-- end flattern -->
  <link href="{{ asset('codesnippet/lib/highlight/styles/default.css') }}" rel="stylesheet">



</head>

<body>
    <div id="wrapper">
    <!-- toggle top area -->
    <div class="hidden-top">
      <div class="hidden-top-inner container">
        <div class="row">
          <div class="span12">
            <ul>
              <li><strong>PT PLN (Persero) - TJBTB - Area Pelaksana Pemeliharaan Surabaya</strong></li><br>
              <li>JL. Ketintang Baru No 9 Surabaya 60231</li>
              <li>Call us <i class="icon-phone"></i> (031) 8285505 , 8285506</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- end toggle top area -->
    <!-- start header -->
    <header>
      <div class="container">
        <!-- hidden top area toggle link -->
        <div id="header-hidden-link">
          <a href="#" class="toggle-link" title="Click me you'll get a surprise" data-target=".hidden-top"><i></i>Open</a>
        </div>
        <!-- end toggle link -->
        <div class="row nomargin">
          <div class="span12">
            <div class="headnav">
@guest
              <ul>

                <li><a href="#mySignup" data-toggle="modal"><i class="icon-group"></i> Sign up</a></li>
                <li><a href="#mySignin" data-toggle="modal">Sign in</a></li>

              </ul>

@endguest
            </div>
            <!-- Signup Modal -->
            <div id="mySignup" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySignupModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySignupModalLabel">Create an <strong>account</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="inputEmail">Email</label>
                    <div class="controls">
                      <input type="text" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSignupPassword">Password</label>
                    <div class="controls">
                      <input type="password" id="inputSignupPassword" placeholder="Password">
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSignupPassword2">Confirm Password</label>
                    <div class="controls">
                      <input type="password" id="inputSignupPassword2" placeholder="Password">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Sign up</button>
                    </div>
                    <p class="aligncenter margintop20">
                      Already have an account? <a href="#mySignin" data-dismiss="modal" aria-hidden="true" data-toggle="modal">Sign in</a>
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end signup modal -->
            <!-- Sign in Modal -->
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

                      <input type="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
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

                      <input type="password" id="password"  class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif


                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">

                      <button type="submit" class="btn">{{ __('Login') }}</button>

                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- end signin modal -->
            <!-- Reset Modal -->
            <div id="myReset" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="myResetModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="myResetModalLabel">Reset your <strong>password</strong></h4>
              </div>
              <div class="modal-body">
                <form class="form-horizontal">
                  <div class="control-group">
                    <label class="control-label" for="inputResetEmail">Email</label>
                    <div class="controls">
                      <input type="text" id="inputResetEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">
                      <button type="submit" class="btn">Reset password</button>
                    </div>
                    <p class="aligncenter margintop20">
                      We will send instructions on how to reset your password to your inbox
                    </p>
                  </div>
                </form>
              </div>
            </div>
            <!-- end reset modal -->
          </div>
        </div>
        <div class="row">
          <div class="span4">
            <div class="logo">
              <a href="index.html"><img src="{{ asset('flattern/img/pln.png') }}" alt="" class="logo" /></a>
              
              <h1>Area Pelaksana Pemeliharaan</h1>
            </div>
          </div>
          <div class="span8">
            <div class="navbar navbar-static-top">
              <div class="navigation">
                <nav>
                  <ul class="nav topnav">
                    <li class="dropdown active">
                      @guest
                      <a href="{{route('index')}}">HOME <i class="icon-angle-down"></i></a>
                      @else
                      <a href="{{route('home')}}">HOME <i class="icon-angle-down"></i></a>
                      @endguest
                      <ul class="dropdown-menu">
                        <li><a href="10.91.60.10">APP BALI</a></li>
                        <li><a href="10.91.30.20">APP MALANG</a></li>
                        <li><a href="10.91.50.10">APP MADIUN</a></li>
                        <li><a href="10.91.40.20">APP PROBOLINGGO</a></li>
                      </ul>
                    </li>
                    <li class="dropdown">
                      <a href="#">APLIKASI <i class="icon-angle-down"></i></a>
                      <ul class="dropdown-menu">
                        
                        <li class="dropdown"><a href="#">ENJINIRING <i class="icon-angle-right"></i></a>
                          <ul class="dropdown-menu sub-menu-level1">
                            <li><a href="10.6.100.121">CBM</a></li>
                            <li><a href="10.6.1.155/srintami-v3-tjbtb">SRINTAMI</a></li>
                            <li><a href="10.6.212.21/~jalurapp_tjbtb">JALUR</a></li>
                            <li><a href="10.91.1.20/working_permit">WP-ONLINE</a></li>
                          </ul>
                        </li>
                        <li class="dropdown"><a href="#">SDM <i class="icon-angle-right"></i></a>
                          <ul class="dropdown-menu sub-menu-level1">
                            <li><a href="amor.pln.co.id">AMOR</a></li>
                            <li><a href="10.1.8.107/utjbtb">AMS</a></li>
                            <li><a href="erpappw1.pusat.corp.pln.co.id/irj/portal">ESS</a></li>
                            <li><a href="budaya.pln.co.id">KOMANDO</a></li>
                            <li><a href="10.1.18.41/~simkpnas">SIMKPNAS</a></li>
                          </ul>
                        </li>

                      </ul>
                    </li>
@guest
                     <li>
                      <a href="#mySignin" data-toggle="modal"><i class="icon-user"></i>{{ __('Login') }}</a>
                    </li>
@else
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
              <!-- end navigation -->
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- end header -->
    @yield('slider')
    @yield('content')
    @yield('liatpost')
    @yield('addpost') 
    @yield('editpost')
    <section id="bottom">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="aligncenter">
              <div id="twitter-wrapper">
                <div id="twitter">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
 
    <footer>
      <div class="container">
        <div class="row">
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Browse pages</h5>
              <ul class="link-list">
                <li><a href="#">About our company</a></li>
                <li><a href="#">Our services</a></li>
                <li><a href="#">Meet our team</a></li>
                <li><a href="#">Explore our portfolio</a></li>
                <li><a href="#">Get in touch with us</a></li>
              </ul>
            </div>
          </div>
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Important stuff</h5>
              <ul class="link-list">
                <li><a href="#">Press release</a></li>
                <li><a href="#">Terms and conditions</a></li>
                <li><a href="#">Privacy policy</a></li>
                <li><a href="#">Career center</a></li>
                <li><a href="#">Flattern forum</a></li>
              </ul>
            </div>
          </div>
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Flickr photostream</h5>
              <div class="flickr_badge">
                <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
              </div>
              <div class="clear">
              </div>
            </div>
          </div>
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Get in touch with us</h5>
              <address>
                <strong>Flattern studio, Pte Ltd</strong><br>
                 Springville center X264, Park Ave S.01<br>
                 Semarang 16425 Indonesia
              </address>
              <p>
                <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
                <i class="icon-envelope-alt"></i> email@domainname.com
              </p>
            </div>
          </div>
        </div>
      </div>
      <div id="sub-footer">
        <div class="container">
          <div class="row">
            <div class="span6">
              <div class="copyright">
                <p>
                  <span>&copy; Flattern - All right reserved.</span>
                </p>
                <div class="credits">
                  <!--
                    All the links in the footer should remain intact.
                    You can delete the links only if you purchased the pro version.
                    Licensing information: https://bootstrapmade.com/license/
                    Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Flattern
                  -->
                  Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                </div>
              </div>
            </div>
            <div class="span6">
              <ul class="social-network">
                <li><a href="#" data-placement="bottom" title="Facebook"><i class="icon-facebook icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Twitter"><i class="icon-twitter icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Linkedin"><i class="icon-linkedin icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Pinterest"><i class="icon-pinterest icon-square"></i></a></li>
                <li><a href="#" data-placement="bottom" title="Google plus"><i class="icon-google-plus icon-square"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
  <script src="{{ asset('flattern/js/jquery.js')}}"></script>  
  <script src="{{ asset('flattern/js/jquery.easing.1.3.js')}}"></script>  
  <script src="{{ asset('flattern/js/bootstrap.js')}}"></script>  
  <script src="{{ asset('flattern/js/jcarousel/jquery.jcarousel.min.js')}}"></script>  
  <script src="{{ asset('flattern/js/jquery.fancybox.pack.js')}}"></script>  
  <script src="{{ asset('flattern/js/jquery.fancybox-media.js')}}"></script>  
  <script src="{{ asset('flattern/js/google-code-prettify/prettify.js')}}"></script>  
  <script src="{{ asset('flattern/js/portfolio/jquery.quicksand.js')}}"></script>  
  <script src="{{ asset('flattern/js/portfolio/setting.js')}}"></script>  
  <script src="{{ asset('flattern/js/jquery.flexslider.js')}}"></script>  
  <script src="{{ asset('flattern/js/jquery.nivo.slider.js')}}"></script>  
  <script src="{{ asset('flattern/js/modernizr.custom.js')}}"></script>  
  <script src="{{ asset('flattern/js/jquery.ba-cond.min.js')}}"></script>  
  <script src="{{ asset('flattern/js/jquery.slitslider.js')}}"></script>  
  <script src="{{ asset('flattern/js/animate.js')}}"></script>  
  
    <!-- Template Custom JavaScript File -->  
  <script src="{{ asset('flattern/js/custom.js')}}"></script>
<!-- js upload file -->
  <script src="{{asset('ample/plugins/bower_components/dropify/dist/js/dropify.min.js')}}"></script>
  <script src="{{asset('ample/plugins/bower_components/tinymce/tinymce.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            // Basic
            $('.dropify').dropify();
            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez'
                    , replace: 'Glissez-déposez un fichier ou cliquez pour remplacer'
                    , remove: 'Supprimer'
                    , error: 'Désolé, le fichier trop volumineux'
                }
            });
            // Used events
            var drEvent = $('#input-file-events').dropify();
            drEvent.on('dropify.beforeClear', function (event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });
            drEvent.on('dropify.afterClear', function (event, element) {
                alert('File deleted');
            });
            drEvent.on('dropify.errors', function (event, element) {
                console.log('Has Errors');
            });
            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function (e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                }
                else {
                    drDestroy.init();
                }
            })
        });
    </script>

    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>
    CKEDITOR.replace( 'summary-ckeditor' );
    </script>
    <script src="{{ asset('codesnippet/lib/highlight/highlight.pack.js') }}"></script>
    <script>hljs.initHighlightingOnLoad();</script>

</body>
</html>
