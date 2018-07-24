@extends('layouts.index')
@section('manage-galeri')
<div id="wrapper">
  <section id="inner-headline">
    <div class="container">
      <div class="row">
        <div class="span6">
          <div class="inner-heading">
            <h2>Galeri<strong> APP Surabaya</strong></h2>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@auth
<a href="#myAlbum" data-toggle="modal"><i class="icon-plus icon-square icon-32 active"></i></a>

<!-- Sign in Modal -->
            <div id="myAlbum" class="modal styled hide fade" tabindex="-1" role="dialog" aria-labelledby="mySigninModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 id="mySigninModalLabel">{{ __('Create ALbum') }} </h4>
              </div>
              <div class="modal-body">

                <form class="form-horizontal" method="POST" action="{{ route('album-tambah') }}">
                  @csrf
                  <div class="control-group">
                    <label class="control-label" for="inputText">Nama Album</label>
                    <div class="controls">

                      <input type="text" id="album" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="nama_album" value="{{ old('nama_album') }}" required="">

                    </div>
                  </div>
                  <div class="control-group">
                    <div class="controls">

                      <button type="submit" class="btn">{{ __('Simpan') }}</button>

                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- end signin modal -->
@endauth


<section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
            <ul class="portfolio-categ filter">
              <li class="all active"><a href="#" class="btn btn-theme">All</a></li>
              @foreach($album1 as $a)
              <li class="{{ $a->nama_album}}"><a href="#" title="" class="btn">{{ $a->nama_album}}</a></li>
              @auth
              <li><a href="{{ url('galeri-tambah', array($a->id_album)) }}"><span class="icon-plus"></span></a></li>
              @endauth
              @endforeach
            </ul>
            <div class="clearfix">
            </div>
            
            
            <div class="row">
              <section id="projects">
                
                <ul id="thumbs" class="portfolio">
                  <!-- Item Project and Filter Name -->
                  @foreach($galeri as $g)
                  @if($loop->count)
                  <li class="item-thumbs span3 design" data-id="id-0" data-type="{{ $g->nama_album}}">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="{{asset('image_galeri/'. $g->image_galeri)}}" alt="{{ $g->nama }}">
                      <span class="overlay-img"></span>
                      <span class="overlay-img-thumb font-icon-plus"></span>
                      </a>
                    <!-- Thumb Image and Description -->
                    <img src="{{asset('image_galeri/'. $g->image_galeri)}}" alt="{{ $g->nama }}" style="max-width: 100%;    margin-left: 0px;"> 
                  </li>

                  @endif
                  @endforeach
                  @if(is_null($a))
                  <li class="item-thumbs span3 design" data-id="id-0" data-type="{{ $g->nama_album}}">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="{{ url('galeri-tambah', array($g->id_album)) }}">
                      <span class="overlay-img"></span>
                      <span class="overlay-img-thumb font-icon-plus"></span>
                    </a>
                    <!-- Thumb Image and Description -->
                    <img src="{{asset('flattern/img/add.png')}}" alt="Tambahkan foto di album ini" style="max-width: 100%;    margin-left: 0px;">
                  </li>
                  @endif 
                  <!-- End Item Project -->

                  
                </ul> 
                            
              </section>
            </div>
            
            
          </div>
        </div>

      </div>
    </section>


@endsection