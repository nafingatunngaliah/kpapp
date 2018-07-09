@extends('layouts.index')

@section('liatpost')
<section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span6">
            <div class="inner-heading">
              <h2>Post Details</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
            <ul class="portfolio-categ filter">
              <a href="{{url('post-tambah')}}" class="btn btn-large btn-theme btn-rounded" data-toggle="modal"><i class="icon-plus"></i>Add Post</a>
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
                    <img class="card-img-top" src="{{asset('image_post/'. $post->image_post)}}" alt="{{ $post->isi_post }}" width="100%" height="180px"><br>

                    <a href="{{ url('post-edit', array($post->id_post)) }}" class="btn btn-theme btn-medium e_pulse" style="display: inline-flex; left: 5%;  position: relative;margin: 2px auto;"><i class="icon-pencil"></i>Edit Post</a>
                    <a href="{{ url('post-delete', array($post->id_post)) }}" class="btn btn-theme btn-medium e_pulse floatright" style="display: inline-flex; right: 3%; position: relative; margin:  2px auto;"><i class="icon-trash"></i>Delete Post</a><!-- class="btn btn-theme btn-large e_pulse -->
                    <br><a href="{{ url('post-detail', array($post->id_post)) }}" class="btn btn-theme btn-medium e_pulse" style="display: block; margin: 2px auto;"><i class="icon-edit"></i>Detail Post</a>
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


