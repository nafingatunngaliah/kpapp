@extends('layouts.index')

@section ('slider')
<section id="featured">
  <div class="marquee">
 		<p><strong>PT PLN APP Surabaya</strong>&nbsp;| JL. Ketintang Baru No 9 Surabaya 60231</p>
  </div>

<!-- slider awal -->
  
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
            </div>
            <h2 style="color:#00a2b9 "><strong>{{ $s->judul_slide }}</strong></h2>
            <blockquote>
              <p>{{ $s->isi_slide }}</p>
            </blockquote>
          </div>
        </div>
      @endforeach
      
    </div>
    <nav id="nav-dots" class="nav-dots">
      <span class="nav-dot-current"></span>
      <span></span>
      <span></span>
      <span></span>
      <span></span>
    </nav>
  </div>
      
<!-- end slider awal -->
      
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
<div class="callaction">
  <div class="container">
    <div class="row">
      <div class="span12">
        <div class="big-cta">
          <h4 class="heading" style="text-align: center; margin-bottom: 10px; margin-top: 50px">Target dari <strong>APP Surabaya</strong></h4>
          <div class="progress progress-striped active" style="height: 6px; width: 70%; margin-left: 200px;">
            <div class="bar bar-info bar35"></div>
            <div class="bar bar-success bar30"></div>
            <div class="bar bar-warning bar20"></div>
            <div class="bar bar-danger bar15"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<section id="featured" style="width: 100%;">
  <!-- start slider -->
    <div id="da-slider" class="da-slider"> 
      <img src="{{asset('flattern/img/slides/parallax/bg4.png')}}" style="width: 100%; height: auto;">
      @foreach($target as $t)
        <div class="da-slide">
        @auth
          <a href="{{ url('/post-tambah') }}"> 
         <h2> <strong>{{ $t->judul_post }}</strong></h2></a>
          <p>{!! str_limit ($t->isi_post,100) !!} </p>
          <div class="da-img">
            <img src="{{asset('image_post/'. $t->image_post)}}" alt="{{ $t->image_post }}"> 
          </div>
        @else
          <h2><strong>{{ $t->judul_post }}</strong></h2>
          <p>{!! str_limit($t->isi_post,100) !!} </p>
          <div class="da-img">
            <img src="{{asset('image_post/'. $t->image_post)}}" alt="{{ $t->image_post }}">
          <!-- <a href="#" class="da-link">Read more</a> -->
          </div>
        @endauth
        </div>  
      @endforeach

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
<!-- Post -->
    <div class="row">
      <div class="span12">
        <div class="big-cta">
          <h4 class="heading" style="text-align: center; margin-bottom: 10px; margin-top: 50px">Terkini dari <strong>APP Surabaya</strong></h4>
          <div class="progress progress-striped active" style="height: 6px; width: 70%; margin-left: 200px;">
            <div class="bar bar-info bar35"></div>
            <div class="bar bar-success bar30"></div>
            <div class="bar bar-warning bar20"></div>
            <div class="bar bar-danger bar15"></div>
          </div>
        </div>
      </div>
      <article>
        <div class="span8" style="width: 50%;margin-left: 60px; margin-top: 50px">
        @auth
          <ul class="nav topnav" style="margin-bottom: 0px">
            <li class="dropdown"  style="margin-left: 750px;">
              <i class="icon-rounded icon-angle-down icon-32 "></i>
              <ul class="dropdown-menu">
                <li><a href="{{ url('post-edit', array($post3->id_post)) }}">Edit</a></li>
                <li><a href="{{ url('post-delete', array($post3->id_post)) }}">Delete</a></li>
              </ul>
            </li>
          </ul>
        @else
        @endauth
          <div class="post-image" style="margin-bottom: 0px">
            <img class="card-img-top" src="{{asset('image_post/'. $post3->image_post)}}" alt="{{ $post3->judul_post }}" style="max-width: 1000px; max-height: 400px ; margin-left: 0px">
            <ul class="meta-post" style="margin-top: 20px">
              <li><i class="icon-calendar"></i><a href="#"> {{ date('d/m/Y', strtotime($post3->created_at)) }}</a></li>
              <li><i class="icon-folder-open"></i><a href="#"> {{ $post3->kategori_post }}</a></li>
            </ul>

            <div class="post-heading" style="margin-top: 50px" >
              <p style="font-size: 20px;line-height: 1em; margin-bottom:5px"><a href="{{ url('post-detail', array($post3->id_post)) }}" ><strong>{{ $post3->judul_post }}</strong></a></p>
            </div>
          </div>
          <div >
            <p>
            {!! str_limit($post3->isi_post,500) !!}<a href="{{ url('post-detail', array($post3->id_post)) }}" class="pull-right">Selengkapnya <i class="icon-angle-right"></i></a>
            </p>
          </div>
          {{csrf_field()}}
        </div>

            <div class="span4" style="margin-top:30px; ">
              <aside class="right-sidebar" style=" width: 450px;">
                @foreach($post2 as $p2)
                <div class="widget">
                  <ul class="recent">
                    <li>
                      <img src="{{asset('image_post/'. $p2->image_post)}}" class="pull-left" alt="" style="max-width: 50%; height: auto; margin: 0px 10px 0px 0px"/>
                      <ul class="meta-post" style="margin-bottom: 0px; margin-right: 10px">
                        <li><i class="icon-calendar"></i><a href="#"> {{ date('d/m/Y', strtotime($p2->created_at)) }}</a></li>
                        <li><i class="icon-folder-open"></i><a href="#"> {{ $p2->kategori_post }}</a></li>
                      </ul>

                      <p style="line-height: 1em; margin-top: 20px; font-size: 14px; color:black"><a href="{{ url('post-detail', array($p2->id_post)) }}" ><strong>{{ $p2->judul_post }}</strong></a></p>
                      <p style="line-height: 0.7em">{!! str_limit($p2->isi_post,150) !!} <a href="{{ url('post-detail', array($p2->id_post)) }}" class="pull-right">Selengkapnya <i class="icon-angle-right"></i></a></p>
                    </li>
                  </ul>
                
              </div>
              @endforeach
            </aside>
          </div>
          <div class="cta floatright" style="margin-bottom: 50px">
          <a class="btn btn-large btn-theme btn-rounded" href="{{route ('viewpost')}}">Lihat Lainnya...  <i class="icon-chevron-right"></i></a>
        </div>
  </div>
<!--End Post -->

<!-- Galeri -->
    <div class="row" style="margin-bottom: 5px; margin-top: 50px">
      <div class="span12" style="margin-left: 30px;">
        <div class="callaction">
          <div class="container">
            <div class="row">
              <div class="span12">
                <div class="big-cta">
                  <h4 class="heading" style="text-align: center; margin-bottom: 10px;">Galeri <strong>APP Surabaya</strong></h4>
                  <div class="progress progress-striped active" style="height: 6px; width: 70%; margin-left: 200px;">
                    <div class="bar bar-info bar35"></div>
                    <div class="bar bar-success bar30"></div>
                    <div class="bar bar-warning bar20"></div>
                    <div class="bar bar-danger bar15"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
            
        <div class="row">
          <section id="projects">
            <ul id="thumbs" class="portfolio" >
            @foreach($galeri as $g)
              @if(isset($g))
                <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                  <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="{{ $g->nama_album }}" href="{{asset('image_galeri/'. $g->image_galeri)}}">
                  <span class="overlay-img"></span>
                  <span class="overlay-img-thumb font-icon-plus"></span></a>
                  <img class="card-img-top" src="{{asset('image_galeri/'. $g->image_galeri)}}" alt="" width="100%" height="180px" style="max-width: 100%; height: auto; margin-left: 0px;">
                   {{csrf_field()}}
                </li>
              @endif
            @endforeach
            </ul>
          </section>
        </div>
        <div class="cta floatright" style="margin-bottom: 50px">
          <a class="btn btn-large btn-theme btn-rounded" href="{{route ('manage-galeri')}}">Lihat Lainnya...  <i class="icon-chevron-right"></i></a>
        </div>
      </div>
    </div>
<!--End Galeri -->


<!-- Kalender -->
    <div class="row">
      <div class="solidline">
        <div class="span12">
          <div class="big-cta">
            <h4 class="heading" style="text-align: center; margin-bottom: 10px; margin-top: 50px">Agenda <strong>APP Surabaya</strong></h4>
            <div class="progress progress-striped active" style="height: 6px; width: 70%; margin-left: 200px;">
              <div class="bar bar-info bar35"></div>
              <div class="bar bar-success bar30"></div>
              <div class="bar bar-warning bar20"></div>
              <div class="bar bar-danger bar15"></div>
            </div>
          </div>
        </div>
        <div class="span3" style="margin-top: 20px; border-radius: 10px; margin-left: 130px">
          <div class="col-md-9">
            <div class="white-box">
              <iframe src="https://calendar.google.com/calendar/embed?src=loladata.sby%40gmail.com&ctz=Asia%2FJakarta" style="border: 0;" width="1000" height="450" frameborder="0" scrolling="no"></iframe>
            </div>
          </div>
        </div>
        
      </div>

    </div>
    <div class="span4" style="width: 800px; float: left; margin-left: 190px">
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
                <li style="padding: 8px 0 8px 0;"><i class="icon-ok"></i> {{ $u->nama }} <strong> {{ $u->age }}</strong>tahun</li>
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
<!-- end--kalender -->

<!-- Ebook -->
      <!-- <div class="span12">
        <div class="big-cta">
          <h4 class="heading" style="text-align: center; margin-bottom: 10px; margin-top: 50px">Majalah <strong>APP Surabaya</strong></h4>
          <div class="progress progress-striped active" style="height: 6px; width: 70%; margin-left: 200px;">
            <div class="bar bar-info bar35"></div>
            <div class="bar bar-success bar30"></div>
            <div class="bar bar-warning bar20"></div>
            <div class="bar bar-danger bar15"></div>
          </div>
        </div>
      </div> -->
     <!--  @foreach($buletin as $b)
      <div class="span10">
        <embed src="{{asset ('file-majalah/Ketintang 09 edisi 2.pdf')}}#toolbar=1&navpanes=1&scrollbar=0" type="application/pdf" width="114%" height="400px" style="border-width: 1px; margin-left: 5%; margin-bottom: 5px;"/> 
      </div>
      @endforeach -->
      <div class="row">
       
          <div class="span12">
            <div class="big-cta">
           <h4 class="heading" style="text-align: center; margin-bottom: 10px; margin-top: 50px">Majalah <strong>APP Surabaya</strong></h4>
            <div class="progress progress-striped active" style="height: 6px; width: 70%; margin-left: 200px;">
            <div class="bar bar-info bar35"></div>
            <div class="bar bar-success bar30"></div>
            <div class="bar bar-warning bar20"></div>
            <div class="bar bar-danger bar15"></div>
          </div>
            
            <ul id="mycarousel" class="jcarousel-skin-tango recent-jcarousel clients">
              @foreach($buletin as $bul)
              <li> 
                
                <a href="{{url('buletin-view',array($bul->file_buletin))}} ">
          <img src="{{asset ('file-majalah/'. $bul->cover_buletin)}}" class="client-logo" alt="{{ $bul->judul_buletin }}" />
          </a>
              </li>
               @endforeach
            </ul>

             </div>
          </div>
         
        </div>
    </div>
<!-- end - ebook -->
</section>
@endsection

@section('kategori')
<div class="widget">
  <h5 class="widgetheading">Kategori Post</h5>
  @if($post->count())
    @foreach($kategori as $k)
      <ul class="link-list">
        <li><a href="{{ url('lihat-post', array($k->kategori_post)) }}"><b>{{ $k->kategori_post }}</b></a></li>
      </ul>
    @endforeach
  @endif 
</div>
@endsection



 