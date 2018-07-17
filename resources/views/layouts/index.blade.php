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
  <link rel="stylesheet" href="{{ asset('flattern/css/cslider.css')}}" > 
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
  <!-- editor -->
  <link href="{{ asset('codesnippet/lib/highlight/styles/default.css') }}" rel="stylesheet">
  <!-- Calendar CSS -->
  <link href="{{asset('ample/plugins/bower_components/calendar/dist/fullcalendar.css')}}" rel="stylesheet" />

  <!-- Color picker plugins css -->
  
  <!-- Date picker plugins css -->
  <link href="{{asset('ample/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />

  <!-- data tables -->
  <link href="{{asset('ample/plugins/bower_components/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="https://cdn.datatables.net/buttons/1.2.2/css/buttons.dataTables.min.css" rel="stylesheet" type="text/css" />

</head>

<body>
    <div id="wrapper">
    <!-- toggle top area -->
    <div class="hidden-top">
      <div class="hidden-top-inner container">
        <div class="row">
          <div class="span12">
            <ul>
              <li><strong>PT PLN (Persero) - Area Pelaksana Pemeliharaan Surabaya</strong></li><br>
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
                <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                  @csrf
                  <div class="control-group">
                    <label class="control-label" for="inputEmail">Username</label>
                    <div class="controls">
                      <input placeholder="Username" id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>
                        @if ($errors->has('name'))
                          <span class="invalid-feedback">
                            <strong>{{ $errors->first('name') }}</strong>
                          </span>
                        @endif
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputEmail">Email</label>
                    <div class="controls">
                      <input placeholder="Email" id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                        @if ($errors->has('email'))
                          <span class="invalid-feedback">
                            <strong>{{ $errors->first('email') }}</strong>
                          </span>
                        @endif
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSignupPassword">Password</label>
                    <div class="controls">
                      <input placeholder="Password" id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                        @if ($errors->has('password'))
                          <span class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                          </span>
                        @endif
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputSignupPassword2">Confirm Password</label>
                    <div class="controls">
                      <input placeholder="Password" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
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
              <a href="{{url('/')}}"><img src="{{ asset('flattern/img/pln.png') }}" alt="" class="logo" /></a>
              
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
    @yield('other-slider')
    @yield('content')
    @yield('liatpost')
    @yield('addpost') 
    @yield('editpost')
    @yield('slider-new')
    @yield('manage-ultah')


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
            @yield('kategori')
            
          </div>
          <div class="span6">
            <div class="widget">
              <h5 class="widgetheading">Our Location</h5>
              <div id="map"></div>
            </div>
          </div>
          <!-- <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Flickr photostream</h5>
              <div class="flickr_badge">
                <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
              </div>
              <div class="clear">
              </div>
            </div>
          </div> -->
          <div class="span3">
            <div class="widget">
              <h5 class="widgetheading">Get in touch with us</h5>
              <address>
                <strong>PT PLN (Persero) - Area Pelaksana Pemeliharaan Surabaya</strong><br>
                 JL. Ketintang Baru No 9 Surabaya 60231<br>
                 
              </address>
              <p>
                <i class="icon-phone"></i> (031) 8285505 , 8285506 <br>
                <i class="icon-envelope-alt"></i> http://www.pln.co.id
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
                  <span>&copy; PT PLN -JBTB- APP Surabaya. 2018 - All right reserved.</span>
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
  <script src="{{ asset('flattern/js/jquery.cslider.js')}}"></script>  
  <script src="{{ asset('flattern/js/animate.js')}}"></script>
  <!-- Calendar JavaScript -->
    <script src="{{asset('ample/plugins/bower_components/calendar/jquery-ui.min.js')}}"></script>
    <script src="{{asset('ample/plugins/bower_components/moment/moment.js')}}"></script>
    <script src="{{asset('ample/plugins/bower_components/calendar/dist/fullcalendar.min.js')}}"></script>
    <script src="{{asset('ample/plugins/bower_components/calendar/dist/jquery.fullcalendar.js')}}"></script>
    <script src="{{asset('ample/plugins/bower_components/calendar/dist/cal-init.js')}}"></script>  
  
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

    <!-- google maps api -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAbVhGRFIuk0EHdi7WE08ZhTLN_va-Wq84&callback=myMap"></script>
    <script src="../plugins/bower_components/gmaps/gmaps.min.js"></script>
    <script src="../plugins/bower_components/gmaps/jquery.gmaps.js"></script>

   <!--  CKEditor -->
    <script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
    <script>
    CKEDITOR.replace( 'summary-ckeditor' );
    </script>
    <script src="{{ asset('codesnippet/lib/highlight/highlight.pack.js') }}"></script>
    <script>hljs.initHighlightingOnLoad();</script>

    
    <!-- date picker -->
    <!-- Clock Plugin JavaScript -->
    <script src="{{asset('ample/plugins/bower_components/clockpicker/dist/jquery-clockpicker.min.js')}}"></script>
    <!-- Color Picker Plugin JavaScript -->
    <script src="{{asset('ample/plugins/bower_components/jquery-asColorPicker-master/libs/jquery-asColor.js')}}"></script>
    <script src="{{asset('ample/plugins/bower_components/jquery-asColorPicker-master/libs/jquery-asGradient.js')}}"></script>
    <script src="{{asset('ample/plugins/bower_components/jquery-asColorPicker-master/dist/jquery-asColorPicker.min.js')}}"></script>
    <!-- Date Picker Plugin JavaScript -->
    <script src="{{asset('ample/plugins/bower_components/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <!-- Date range Plugin JavaScript -->
    <script src="{{asset('ample/plugins/bower_components/timepicker/bootstrap-timepicker.min.js')}}"></script>
    <script src="{{asset('ample/plugins/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="{{asset('ample/js/custom.min.js')}}"></script>
    <script src="{{asset('ample/plugins/bower_components/datatables/jquery.dataTables.min.js')}}"></script>
    <!-- end - This is for export functionality only -->
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
            $(document).ready(function () {
                var table = $('#example').DataTable({
                    "columnDefs": [
                        {
                            "visible": false
                            , "targets": 2
                        }
          ]
                    , "order": [[2, 'asc']]
                    , "displayLength": 25
                    , "drawCallback": function (settings) {
                        var api = this.api();
                        var rows = api.rows({
                            page: 'current'
                        }).nodes();
                        var last = null;
                        api.column(2, {
                            page: 'current'
                        }).data().each(function (group, i) {
                            if (last !== group) {
                                $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                                last = group;
                            }
                        });
                    }
                });
                // Order by the grouping
                $('#example tbody').on('click', 'tr.group', function () {
                    var currentOrder = table.order()[0];
                    if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                        table.order([2, 'desc']).draw();
                    }
                    else {
                        table.order([2, 'asc']).draw();
                    }
                });
            });
        });
        $('#example23').DataTable({
            dom: 'Bfrtip'
            , buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
        });
    </script>
    <script>
        // Clock pickers
        $('#single-input').clockpicker({
            placement: 'bottom'
            , align: 'left'
            , autoclose: true
            , 'default': 'now'
        });
        $('.clockpicker').clockpicker({
            donetext: 'Done'
        , }).find('input').change(function () {
            console.log(this.value);
        });
        $('#check-minutes').click(function (e) {
            // Have to stop propagation here
            e.stopPropagation();
            input.clockpicker('show').clockpicker('toggleView', 'minutes');
        });
        if (/mobile/i.test(navigator.userAgent)) {
            $('input').prop('readOnly', true);
        }
        // Colorpicker
        $(".colorpicker").asColorPicker();
        $(".complex-colorpicker").asColorPicker({
            mode: 'complex'
        });
        $(".gradient-colorpicker").asColorPicker({
            mode: 'gradient'
        });
        // Date Picker
        jQuery('.mydatepicker, #datepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true
            , todayHighlight: true
        });
        jQuery('#date-range').datepicker({
            toggleActive: true
        });
        jQuery('#datepicker-inline').datepicker({
            todayHighlight: true
        });
        // Daterange picker
        $('.input-daterange-datepicker').daterangepicker({
            buttonClasses: ['btn', 'btn-sm']
            , applyClass: 'btn-danger'
            , cancelClass: 'btn-inverse'
        });
        $('.input-daterange-timepicker').daterangepicker({
            timePicker: true
            , format: 'MM/DD/YYYY h:mm A'
            , timePickerIncrement: 30
            , timePicker12Hour: true
            , timePickerSeconds: false
            , buttonClasses: ['btn', 'btn-sm']
            , applyClass: 'btn-danger'
            , cancelClass: 'btn-inverse'
        });
        $('.input-limit-datepicker').daterangepicker({
            format: 'MM/DD/YYYY'
            , minDate: '06/01/2015'
            , maxDate: '06/30/2015'
            , buttonClasses: ['btn', 'btn-sm']
            , applyClass: 'btn-danger'
            , cancelClass: 'btn-inverse'
            , dateLimit: {
                days: 6
            }
        });
    </script>

</body>
</html>
