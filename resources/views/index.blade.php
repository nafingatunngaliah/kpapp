@extends('layouts.index')

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
          <div class="span12">@yield('content2')
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
                  
                
                  <li class="item-thumbs span3 design" data-id="id-1" data-type="icon">
                   <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Office" href="{{asset('flatter/img/works/full/image-02-full.jpg')}}">
                    <span class="overlay-img"></span>
                    <span class="overlay-img-thumb font-icon-plus"></span>
                    </a>
                  <img src="{{ asset ('flatter/img/works/thumbs/image-02.jpg') }}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li> 
                  <li class="item-thumbs span3 photography" data-id="id-2" data-type="illustrator">
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Mountains" href="{{ asset ('flatter/img/works/full/image-03-full.jpg')}}">
                    <span class="overlay-img"></span>
                    <span class="overlay-img-thumb font-icon-plus"></span>
                    </a>
                    <img src="{{ asset('img/works/thumbs/image-03.jpg')}}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li> 
                  <li class="item-thumbs span3 photography" data-id="id-2" data-type="illustrator">
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Mountains" href="{{asset ('img/works/full/image-04-full.jpg')}}">
                    <span class="overlay-img"></span>
                    <span class="overlay-img-thumb font-icon-plus"></span>
                    </a>
                    <img src="{{ asset('img/works/thumbs/image-04.jpg')}}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
                  <li class="item-thumbs span3 photography" data-id="id-4" data-type="web">
                    <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="The Sea" href="{{ asset('img/works/full/image-05-full.jpg')}}">
                    <span class="overlay-img"></span>
                    <span class="overlay-img-thumb font-icon-plus"></span>
                    </a>
                    <img src="{{ asset ('img/works/thumbs/image-05.jpg')}}" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                  </li>
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