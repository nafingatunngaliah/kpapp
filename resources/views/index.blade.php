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
          @auth
          <i class="icon-edit icon-edit icon-32" href="#modalslide" data-toggle="modal" ></i>
          @else
          @endauth
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
                    <select class="form-control select2" style="width: 100%;" name="id_slide"  required="">
                    <option selected="selected">Nomor Slide</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                  </select>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputText">Judul</label>
                    <input type="text" class="form-control" id="name" placeholder="Judul Slide" name="judul_slide" />
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputText">Isi</label>
                    <input type="text" class="form-control" id="name" placeholder="Isi Slide" name="isi_slide" />
                  </div>
                   <div class="control-group">
                    <label class="control-label" for="inputText">Image</label> 
                    <input type="file" id="input-file-now" class="dropify" required="" name="image_slide" />
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
          <div class="span12">
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
          	<h4 class="heading">Some of recent <strong>works</strong></h4>
            <div class="row">
              <section id="projects">
                <ul id="thumbs" class="portfolio">
                  
                  @foreach($post as $post)
                  @if(isset($post))
                  <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="{{ $post->judul_post }}" href="{{asset('image_post/'. $post->image_post)}}">
                    <span class="overlay-img"></span>
                    <span class="overlay-img-thumb font-icon-plus"></span></a>
                    <img class="card-img-top" src="{{asset('image_post/'. $post->image_post)}}" alt="{{ $post->isi_post }}" width="100%" height="180px">
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
        </div>
    </section>




@endsection