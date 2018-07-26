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
          <div class="span8" style="margin-left: 0px">
            <article>
              <div class="row" action="{{url('post-detail',array($post->id_post))}}">
                <div class="span8" style="width:770px">
                  @auth
                  <ul class="nav topnav" style="margin-bottom: 0px">
                    <li class="dropdown"  style="margin-left: 750px;">
                      <i class="icon-rounded icon-angle-down icon-32 "></i>
                      <ul class="dropdown-menu">
                          <li><a href="{{ url('post-edit', array($post->id_post)) }}">Edit</a></li>
                          <li><a href="{{ url('post-delete', array($post->id_post)) }}">Delete</a></li>
                      </ul>
                    </li>
                  </ul>
                  @endauth
                  <div class="post-image">
                    <div class="post-heading">
                      <h3><a href="#">{{ $post->judul_post }}</a></h3>
                    </div>
                    <img src="{{asset('image_post/'. $post->image_post)}}" alt="" style="max-width: 70%; height: auto; margin-left: 120px;"/>
                  </div>
                  <p>
                    {!! $post->isi_post !!}
                  </p>
                  <div class="bottom-article">
                    <ul class="meta-post">
                      <li><i class="icon-calendar"></i><a href="#"> {{ date('d/m/Y', strtotime($post->created_at)) }}</a></li>
                      <li><i class="icon-user"></i><a href="#"> {{ $post->users->name }}</a></li>
                      <li><i class="icon-folder-open"></i><a href="#"> {{ $post->kategori_post }}</a></li>
                    </ul>
                    <a href="{{ url('post-detail', array($post->id_post)) }}" class="pull-right">Continue Reading <i class="icon-angle-right"></i></a>
                  </div>
                </div>
              </div>
            </article>
          @if($komen->count())
            @foreach($komen as $komen)
            <div class="comment-area">
              <div class="media">
                <a href="#" class="thumbnail pull-left" style="margin-left: 0px"><img src="{{asset('flattern/img/avatar.png')}}" alt="" style="margin:10px"/></a>
                <div class="media-body">
                  <div class="media-content">
                    <h6><span>{{ $komen->created_at }}</span> {{ $post->users->name }}</h6>
                    <p>
                      {{ $komen->komentar }}
                    </p>
                    <!-- <a href="#" class="align-right">Reply comment</a> -->
                  </div>
                </div>
              </div>

            @endforeach
          @endif
          @Auth
              <h4>Leave your comment</h4>
              <form method="post" role="form" class="contactForm" action="{{url('post-detail/'.$post->id_post)}}" enctype="multipart/form-data"> 
                {{ csrf_field() }}
                <div class="row">
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
          @else

          @endauth
            </div>
          </div>

          <div class="span4">
            <aside class="right-sidebar">
              <div class="widget">
                <!-- <form class="form-search">
                  <input placeholder="Type something" type="text" class="input-medium search-query">
                  <button type="submit" class="btn btn-square btn-theme">Search</button>
                </form> -->
              </div>
              <div class="widget">
                <h5 class="widgetheading">Categories</h5>
                @foreach($kategori as $k)
                <ul class="cat">
                  <li><i class="icon-angle-right"></i><a href="#">{{ $k->kategori_post }}</a><span> ({{ $k->jumlah }})</span></li>
                </ul>
                @endforeach
              </div>
              <div class="widget">
                <h5 class="widgetheading">Latest posts</h5>

                @foreach($post2 as $p2)
                <ul class="recent">
                  <li>
                    <img src="{{asset('image_post/'. $p2->image_post)}}" class="pull-left" alt="" style="max-width: 30%; height: auto; margin: 0px 10px 0px 0px"/>
                    <h6 style="line-height: 0.7em"><a href="{{ url('post-detail', array($p2->id_post)) }}" ><strong>{{ $p2->judul_post }}</strong></a></h6>
                    <p style="line-height: 0.7em">
                      {!! str_limit($p2->isi_post,100) !!}
                    </p>
                  </li>
                </ul>
                @endforeach
              </div>
              <div class="widget">
                <h5 class="widgetheading"></h5>
                <ul class="tags"></ul>
              </div>
            </aside>
          </div>

        </div>
      </div>
    </section>
@endsection