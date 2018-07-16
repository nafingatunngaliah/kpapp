@extends('layouts.index')

@section('liatpost')
    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span4">
            <div class="inner-heading">
              <h2>List Post</h2>
            </div>
          </div>
          <div class="span8">
            <ul class="breadcrumb">
              <li><a href="{{url('/')}}"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
              <li class="active"><a href="{{url('viewpost')}}">Post</a><i class="icon-angle-right"></i></li>
            </ul>
          </div>
        </div>
      </div>
    </section>
   <a href="{{url('post-tambah')}}"><i class="icon-plus icon-square icon-32 active"></i></a>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span8">
          @if($post->count())
            @foreach($post as $p)
            <article>
              <div class="row">
                <div class="span8">
                  <div class="post-image">
                    <div class="post-heading">
                      <h3><a href="{{ url('post-detail', array($p->id_post)) }}">{{ $p->judul_post }}</a></h3>
                    </div>
                    <img class="card-img-top" src="{{asset('image_post/'. $p->image_post)}}" alt="{{ $p->isi_post }}" width="100%" height="180px" style="width: 60%; height: auto; margin-left: 120px;">
                  </div>
                  <div>
                    <p>
                      {!! str_limit($p->isi_post,400) !!}
                    </p>
                  </div>

                  <div class="bottom-article">
                    @auth
                    <ul class="meta-post">
                      <li><i class="icon-calendar"></i><a href="#"> {{ $p->kategori_post }}</a></li>
                      <a href="{{ url('post-edit', array($p->id_post)) }}" class="btn btn-theme btn-medium e_pulse" style="display: inline-flex; left: 5%;  position: relative;margin: 2px auto;"><i class="icon-pencil"></i>Edit Post</a>
                      <a href="{{ url('post-delete', array($p->id_post)) }}" class="btn btn-theme btn-medium e_pulse floatright" style="display: inline-flex; right: -20%; position: relative; margin:  2px auto;"><i class="icon-trash"></i>Delete Post</a>
                    </ul>
                    @else
                    
                    @endauth
                    <a href="{{ url('post-detail', array($p->id_post)) }}" class="pull-right">Continue Reading <i class="icon-angle-right"></i></a>
                    {{csrf_field()}}
                  </div>
                </div>
              </div>
            </article>
            @endforeach
            @endif
            <div id="pagination">
              <span class="all">Page 1 of</span>
              {!! $post->render() !!}
            </div>
          </div>
          <div class="span4">
            <aside class="right-sidebar">
              <div class="widget">
                <form class="form-search">
                  <input placeholder="Type something" type="text" class="input-medium search-query">
                  <button type="submit" class="btn btn-square btn-theme">Search</button>
                </form>
              </div>
              <div class="widget">
                <h5 class="widgetheading">Categories</h5>
                @if($post->count())
                @foreach($kategori as $k)
                <ul class="cat">
                  <li><i class="icon-angle-right"></i><a href="#">{{ $k->kategori_post }}</a><span> ({{ $k->jumlah }})</span></li>
                </ul>
                @endforeach
                @endif
              </div>
              <div class="widget">
                <h5 class="widgetheading">Latest posts</h5>
                @if($post->count())
                @foreach($post2 as $p2)
                <ul class="recent">
                  <li>
                    <img src="{{asset('image_post/'. $p2->image_post)}}" class="pull-left" alt="" style="max-width: 30%; height: auto; margin: 0px 10px 0px 0px"/>
                    <h6 style="line-height: 0.7em"><a href="{{ url('post-detail', array($p->id_post)) }}" ><strong>{{ $p2->judul_post }}</strong></a></h6>
                    <p style="line-height: 0.7em">
                      {!! str_limit($p2->isi_post,100) !!}
                    </p>
                  </li>
                </ul>
                @endforeach
                @endif
              </div>
              <div class="widget">
                <h5 class="widgetheading">Popular tags</h5>
                <ul class="tags">
                  <li><a href="#">Web design</a></li>
                  <li><a href="#">Trends</a></li>
                  <li><a href="#">Technology</a></li>
                  <li><a href="#">Internet</a></li>
                  <li><a href="#">Tutorial</a></li>
                  <li><a href="#">Development</a></li>
                </ul>
              </div>
            </aside>
          </div>
          
        </div>
      </div>
    </section>
   
    
@endsection


