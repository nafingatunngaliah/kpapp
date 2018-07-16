@extends('layouts.index')

@section ('slider')
<section id="featured">
      <!-- start slider --><div class="marquee">
      		<p><strong>PT PLN APP Surabaya</strong>&nbsp;| JL. Ketintang Baru No 9 Surabaya 60231</p>
      		
      	</div>
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
      <!-- divider -->

        <div class="row">
          <div class="span12">
            <div class="solidline">
            </div>
          </div>
        </div>
        <!-- end divider -->
      

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

@section('other-slider')
<section id="featured">
      <!-- start slider -->
      <div id="da-slider" class="da-slider">
        <img src="{{asset ('flattern/img/slides/parallax/tower3.jpg')}}" style="background-repeat: 0% 0%;">
         @foreach($slide as $sl)
        <div class="da-slide">
          <h2>{{ $sl->judul_slide }}</h2>
          <p>{{ $sl->isi_slide }} </p>
          <a href="#" class="da-link">Read more</a>
          <div class="da-img">
            <img src="{{asset ('flattern/img/slides/parallax/4.png')}} " alt="image01" />
          </div>
        </div>
       @endforeach
        <!-- <div class="da-slide">
          <h2>yeyeyey</h2>
          <p>
           lalalala 
          </p>
          <a href="#" class="da-link">Read more</a>
          <div class="da-img">
            <img src="{{asset ('flattern/img/slides/parallax/4.png')}}" alt="image01" />
          </div>
        </div> -->
     
        <nav class="da-arrows">
          <span class="da-arrows-prev"></span>
          <span class="da-arrows-next"></span>
        </nav>
      </div>
      <!-- end slider -->
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
           <!-- divider -->

        <div class="row">
          <div class="span12">
             <embed src="{{asset ('ebook/Ketintang 09 edisi 4.pdf')}}#toolbar=1&navpanes=1&scrollbar=0" type="application/pdf" width="80%" height="700px" style="border-width: 1px; margin-left: 5%; margin-bottom: 5px;"/>
            
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
        <div class="row">
          <div class="solidline">
            <div class="span6" style="margin-top: 20px; border-radius: 10px">
              <div class="col-md-9">
                <div class="white-box">
                  <div id="calendar"></div>
                </div>
              </div>
            </div>
            <div class="span4" style="width: 400px; float: right; margin-top: 105px;">
              <div class="pricing-box-alt special">
                <div class="pricing-heading" style="padding: 5px 0 1px 0;">
                  <h3>Happy Birthday <strong>to ...</strong></h3>
                </div>
                <div class="pricing-terms" style="padding: 0px 0 0px;">
                  <h6></h6>
                </div>
                <div class="pricing-content">
                  <ul>
                    @foreach($ultah as $u)
                    <li style="padding: 8px 0 8px 0;"><i class="icon-ok"></i> {{ $u->nama }} </li>
                    @endforeach
                  </ul>
                </div>
                @Auth
                <div class="pricing-action" style="padding: 5px 0 5px 0;">
                  <a href="{{url('manage-ultah')}}" class="btn btn-medium btn-theme"><i class="icon-bolt"></i> Manage</a>
                </div>
                @else
                @endauth
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
   @endsection

   @section('kategori')
    <div class="widget">
      <h5 class="widgetheading">Categories</h5>
      @if($post->count())
      @foreach($kategori as $k)
        <ul class="link-list">
          <li><a href="#">{{ $k->kategori_post }}</a></li>
        </ul>
      @endforeach
      @endif 
    </div>

  @endsection



 