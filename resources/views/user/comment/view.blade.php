@extends('layouts.index')
@section('liatpost')

    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>Detail Post</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span8">
            <article>
              <div class="row" action="{{url('post-detail',array($post->id_post))}}">
                <div class="span8">
                  <div class="post-image">
                    <div class="post-heading">
                      <h3><a href="#">{{ $post->judul_post }}</a></h3>
                    </div>
                    <img src="{{asset('image_post/'. $post->image_post)}}" alt="" />
                  </div>
                  <p>
                    {{ $post->isi_post }}
                  </p>
                  <div class="bottom-article">
                    <ul class="meta-post">
                      <li><i class="icon-user"></i><a href="#"> {{ $post->users->name }}</a></li>
                      <li><i class="icon-tags"></i><a href="#">{{ $post->created_at }}</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </article>
          @if($komen->count())
            @foreach($komen as $komen)
            <div class="comment-area">
              <div class="media">
                <a href="#" class="thumbnail pull-left"><img src="{{asset('flattern/img/avatar.png')}}" alt="" /></a>
                <div class="media-body">
                  <div class="media-content">
                    <h6><span>{{ $komen->created_at }}</span> {{ $komen->komentator }}</h6>
                    <p>
                      {{ $komen->komentar }}
                    </p>
                    <!-- <a href="#" class="align-right">Reply comment</a> -->
                  </div>
                </div>
              </div>
            @endforeach
          @endif
              <h4>Leave your comment</h4>
              <form method="post" role="form" class="contactForm" action="{{url('post-detail/'.$post->id_post)}}" enctype="multipart/form-data"> 
                {{ csrf_field() }}
                <div class="row">
                  <div class="span4">
                    <input type="text" placeholder="* Enter your full name" required="" name="komentator"/>
                  </div>
                  <div class="span8 margintop10">
                    <p>
                      <textarea rows="12" class="input-block-level" placeholder="*Your comment here" required="" name="komentar"></textarea>
                    </p>
                    <p>
                      <button class="btn btn-theme margintop10" type="submit">Submit comment</button>
                    </p>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection