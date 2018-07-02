<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Serenity - Modern bootstrap website template</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- styles -->
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
  <link rel="shortcut icon" href="{{ asset('serenity/ico/favicon.ico')}}">
  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('serenity/ico/apple-touch-icon-144-precomposed.png')}}">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('serenity/ico/apple-touch-icon-114-precomposed.png')}}">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('serenity/ico/apple-touch-icon-72-precomposed.png')}}">
  <link rel="apple-touch-icon-precomposed" href="{{ asset('serenity/ico/apple-touch-icon-57-precomposed.png')}}">

  <!-- =======================================================
    Theme Name: Serenity
    Theme URL: https://bootstrapmade.com/serenity-bootstrap-corporate-template/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <header>
    <!-- Navbar
    ================================================== -->
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <!-- logo -->
          <a class="brand logo" href="index.html"><img src="assets/img/logo.png" alt=""></a>
          <!-- end logo -->
          <!-- top menu -->
          <div class="navigation">
            <nav>
              <ul class="nav topnav">
                <li class="dropdown active">
                  <a href="index.html">Home</a>
                </li>
                <li class="dropdown">
                  <a href="#">Features</a>
                  <ul class="dropdown-menu">
                    <li><a href="overview.html">Overview</a></li>
                    <li><a href="scaffolding.html">Scaffolding</a></li>
                    <li><a href="base-css.html">Base CSS</a></li>
                    <li><a href="components.html">Components</a></li>
                    <li><a href="javascript.html">Javascripts</a></li>
                    <li><a href="icons.html">More icons</a></li>
                    <li class="dropdown"><a href="#">3rd level</a>
                      <ul class="dropdown-menu sub-menu">
                        <li><a href="#">Example menu</a></li>
                        <li><a href="#">Example menu</a></li>
                        <li><a href="#">Example menu</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#">Pages</a>
                  <ul class="dropdown-menu">
                    <li><a href="about.html">About us</a></li>
                    <li><a href="pricingtable.html">Pricing table</a></li>
                    <li><a href="fullwidth.html">Fullwidth</a></li>
                    <li><a href="404.html">404</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#">Portfolio</a>
                  <ul class="dropdown-menu">
                    <li><a href="portfolio-2cols.html">Portfolio 2 columns</a></li>
                    <li><a href="portfolio-3cols.html">Portfolio 3 columns</a></li>
                    <li><a href="portfolio-4cols.html">Portfolio 4 columns</a></li>
                    <li><a href="portfolio-detail.html">Portfolio detail</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#">Blog</a>
                  <ul class="dropdown-menu">
                    <li><a href="blog_left_sidebar.html">Blog left sidebar</a></li>
                    <li><a href="blog_right_sidebar.html">Blog right sidebar</a></li>
                    <li><a href="post_left_sidebar.html">Post left sidebar</a></li>
                    <li><a href="post_right_sidebar.html">Post right sidebar</a></li>
                  </ul>
                </li>
                <li>
                  <a href="contact.html">Contact</a>
                </li>
              </ul>
            </nav>
          </div>
          <!-- end menu -->
        </div>
      </div>
    </div>
  </header>
  
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
              <img src="assets/img/logo-dark.png" alt="">
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
              <!--
                All the links in the footer should remain intact.
                You can delete the links only if you purchased the pro version.
                Licensing information: https://bootstrapmade.com/license/
                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Serenity
              -->
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

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
