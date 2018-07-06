@extends('layouts.index')
@section('liatpost')

    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
            <ul class="portfolio-categ filter">
              <a href="{{url('post-tambah')}}" class="btn btn-theme btn-large e_pulse" data-toggle="modal">Add Post</a>
            </ul>
            <div class="clearfix">
            </div>
            <div class="row">
              <section id="projects">
                <ul id="thumbs" class="portfolio">
                  <!-- Item Project and Filter Name -->
                @if($post->count())
                  @foreach($post as $post)
                  <li class="item-thumbs span3 design" data-id="id-0" data-type="web">
                    <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="{{ $post->judul_post }}" href="{{asset('image_post/'. $post->image_post)}}" >         
                      <span class="overlay-img"></span>
                      <span class="overlay-img-thumb font-icon-plus"></span>
                    </a>
                    <!-- Thumb Image and Description -->
                    <img class="card-img-top" src="{{asset('image_post/'. $post->image_post)}}" alt="{{ $post->isi_post }}" width="100%" height="180px">
                    <a href="{{ url('post-edit', array($post->id_post)) }}" class="btn btn-theme btn-large e_pulse" data-toggle="modal">Edit Post</a>
                    <a href="{{ url('post-detail', array($post->id_post)) }}" class="btn btn-theme btn-large e_pulse" data-toggle="modal" left="0px">Delail Post</a>
                    <a href="{{ url('post-delete', array($post->id_post)) }}" class="btn btn-theme btn-large e_pulse" data-toggle="modal" left="0px">Delete Post</a>
                    {{csrf_field()}}
                  </li>
                  <!-- End Item Project -->
                  @endforeach
            @endif
                </ul>
              </section>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection