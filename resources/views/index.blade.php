@extends('layouts.index')

@section ('slider')
<section id="featured">
      <!-- start slider -->
      <div id="slider" class="sl-slider-wrapper demo-2">
        <div class="sl-slider">
          @foreach($slide as $s)
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-1">
                @auth
                <a href="{{ url('/home/slide-edit', array($s->id_slide)) }}">
                  <img class="card-img-top" src="{{asset('image_slide/'. $s->image_slide)}}" alt="{{ $s->image_slide }}" width="100%" height="180px">
                </a>
                @else
                <img class="card-img-top" src="{{asset('image_slide/'. $s->image_slide)}}" alt="{{ $s->image_slide }}" width="100%" height="180px">
                @endauth
                
                  <!-- <a href="{{ url('slide-update', array($s->id_slide)) }}"><i class="icon-edit icon-edit icon-32" data-target="#modalslide" data-toggle="modal"></i></a> -->
                
              </div>
              <h2><strong>{{ $s->judul_slide }}</strong></h2>
              <blockquote>
                <p>
                  {{ $s->isi_slide }}
                </p>
              </blockquote>
            </div>
          </div>
          @endforeach
          @foreach($slide as $s)
          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-2">
                <img class="card-img-top" src="{{asset('image_slide/'. $s->image_slide)}}" alt="{{ $s->image_slide }}" width="100%" height="180px">
                
              </div>
              <h2><strong>{{ $s->judul_slide }}</strong></h2>
              <blockquote>
                <p>
                  {{ $s->isi_slide }}
                </p>
              </blockquote>
            </div>
          </div>
          @endforeach
          @foreach($slide as $s)
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-3">
                <img class="card-img-top" src="{{asset('image_slide/'. $s->image_slide)}}" alt="{{ $s->image_slide }}" width="100%" height="180px">
                
              </div>
              <h2><strong>{{ $s->judul_slide }}</strong></h2>
              <blockquote>
                <p>
                  {{ $s->isi_slide }}
                </p>
              </blockquote>
            </div>
          </div>
          @endforeach
          @foreach($slide as $s)
          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-4">
                <img class="card-img-top" src="{{asset('image_slide/'. $s->image_slide)}}" alt="{{ $s->image_slide }}" width="100%" height="180px">
              </div>
              <h2><strong>{{ $s->judul_slide }}</strong></h2>
              <blockquote>
                <p>
                  {{ $s->isi_slide }}
                </p>
              </blockquote>
            </div>
          </div>
          @endforeach
          @foreach($slide as $s)
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-5">
                <img class="card-img-top" src="{{asset('image_slide/'. $s->image_slide)}}" alt="{{ $s->image_slide }}" width="100%" height="180px">
              </div>
              <h2><strong>{{ $s->judul_slide }}</strong></h2>
              <blockquote>
                <p>
                  {{ $s->isi_slide }}
                </p>
              </blockquote>
            </div>
          </div>
          @endforeach
        </div>
        <!-- /sl-slider -->
        <nav id="nav-dots" class="nav-dots">
          <span class="nav-dot-current"></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </nav>
      </div>
      <!-- /slider-wrapper -->
      <!-- end slider -->
      <!-- Sign in Modal -->
            <div id="modalslide" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySigninModalLabel">{{ __('Login') }} to your <strong>account</strong></h4>
              </div>
              <div class="modal-body">

                <form class="form-horizontal" method="POST" action="{{ route('login') }}" enctype="multipart/form-data">
                  @csrf
                  <div class="control-group">
                    <label class="control-label" for="inputText">Nomor Slide</label>
                    <div class="controls">
                      <select class="form-control select2" style="width: 100%;" name="id_slide"  required="">
                        <option selected="selected">Nomor Slide</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                      </select>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputText">Judul</label>
                    <div class="controls">
                      <input type="text" class="form-control" id="name" placeholder="Judul Slide" name="judul_slide" />
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputText">Isi</label>
                    <div class="controls">
                      <input type="text" class="form-control" id="name" placeholder="Isi Slide" name="isi_slide" />
                    </div>
                  </div>
                   <div class="control-group">
                    <label class="control-label" for="inputText">Image</label>
                    <div class="controls"> 
                      <input type="file" id="input-file-now" class="dropify" required="" name="image_slide" />
                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">

                      <button type="submit" class="btn">{{ __('Submit') }}</button>

                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- end signin modal -->
    </section>
@endsection
@section('content')
     <section id="content">
      <div class="container">
        
        <!-- divider -->
        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->
        <!-- Portfolio Projects -->
        <div class="row">
          <div class="span12" style="margin-left: 30px;">
          	<div class="callaction">
              <div class="container">
                <div class="row">
                  <div class="span12">
                    <div class="big-cta">
                      <div class="cta-text">
                        <h3>We've created more than <span class="highlight"><strong>5000 websites</strong></span></h3>
                      </div>
                      <div class="cta floatright">
                        <a class="btn btn-large btn-theme btn-rounded" href="{{route ('viewpost')}}"><i class="icon-book"></i> View Post </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          	
            <div class="row">
              <section id="projects">
                <ul id="thumbs" class="portfolio">
                  
                  @foreach($post as $post)
                  @if(isset($post))
                  <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="{{ $post->judul_post }}" href="{{asset('image_post/'. $post->image_post)}}">
                    <span class="overlay-img"></span>
                    <span class="overlay-img-thumb font-icon-plus"></span></a>
                    <img class="card-img-top" src="{{asset('image_post/'. $post->image_post)}}" alt="" width="100%" height="180px" style="max-width: 100%; height: auto; margin-left: 0px;">
                   {{csrf_field()}}
                  </li>
                  @endif
                  @endforeach

                </ul>
              </section>
            </div>
          </div>
        </div>
        <!-- End Portfolio Projects -->
        <!-- divider -->

        <div class="row">
          <div class="span12">
            <div class="solidline">

            </div>
          </div>
        </div>
        <!-- end divider -->

        <div class="row">
          <div class="span12">
            <div class="row">
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-briefcase icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>Corporate business</h6>
                    <p>
                      Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                    </p>
                    <a href="#">Learn more</a>
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-desktop icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>Responsive theme</h6>
                    <p>
                      Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                    </p>
                    <a href="#">Learn more</a>
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-beaker icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>Coded carefully</h6>
                    <p>
                      Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                    </p>
                    <a href="#">Learn more</a>
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-coffee icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>Sit and enjoy</h6>
                    <p>
                      Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                    </p>
                    <a href="#">Learn more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="span12">
            <div class="solidline">

            </div>
          </div>
        </div>
<!-- Kalender -->
        <div class="row" style="margin-left: 200px; margin-right: : 200px;">
          <div class="span8" >
              <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Calendar Page</h4> </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- row -->
                <div class="row">
                    <div class="col-md-9">
                        <div class="white-box">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <!-- BEGIN MODAL -->
                <div class="modal fade none-border" id="my-event">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                <h4 class="modal-title"><strong>Add Event</strong></h4>
                            </div>
                            <div class="modal-body"></div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-white waves-effect" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-success save-event waves-effect waves-light">Create event</button>
                                <button type="button" class="btn btn-danger delete-event waves-effect waves-light" data-dismiss="modal">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
          </div>
        </div>
<!-- end--kalender -->
        <div class="row">
          <div class="span12">
            <div class="solidline">

            </div>
          </div>
        </div>

        <div class="row">
          <div class="span12">
            <div class="row">
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-briefcase icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>Corporate business</h6>
                    <p>
                      Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                    </p>
                    <a href="#">Learn more</a>
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-desktop icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>Responsive theme</h6>
                    <p>
                      Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                    </p>
                    <a href="#">Learn more</a>
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-beaker icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>Coded carefully</h6>
                    <p>
                      Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                    </p>
                    <a href="#">Learn more</a>
                  </div>
                </div>
              </div>
              <div class="span3">
                <div class="box aligncenter">
                  <div class="aligncenter icon">
                    <i class="icon-coffee icon-circled icon-64 active"></i>
                  </div>
                  <div class="text">
                    <h6>Sit and enjoy</h6>
                    <p>
                      Lorem ipsum dolor sit amet, has ei ipsum scaevola deseruisse am sea facilisis.
                    </p>
                    <a href="#">Learn more</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

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
              <h5 class="widgetheading">Categories</h5>
              @if($post->count())
              @foreach($post2 as $p)
              <ul class="link-list">
                <li><a href="#">{{ $p->kategori_post }}</a></li>
              </ul>
              @endforeach
              @endif 
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




@endsection