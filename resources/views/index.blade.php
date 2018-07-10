@extends('layouts.index')

@section ('slider')
<section id="featured">
      <!-- start slider -->
      <div id="slider" class="sl-slider-wrapper demo-2">
        <div class="sl-slider">
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-1">
              </div>
              <h2><strong>Premium</strong> template</h2>
              <blockquote>
                <p>
                  You have just dined, and however scrupulously the slaughterhouse is concealed in the graceful distance of miles, there is complicity.
                </p>
                <cite>Johny Doe</cite>
              </blockquote>
            </div>
          </div>
          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-2">
              </div>
              <h2><strong>Twitter</strong> bootstrap</h2>
              <blockquote>
                <p>
                  Until he extends the circle of his compassion to all living things, man will not himself find peace.
                </p>
                <cite>Ramond Schummiler</cite>
              </blockquote>
            </div>
          </div>
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-3">
              </div>
              <h2><strong>Responsive</strong> layout</h2>
              <blockquote>
                <p>
                  Thousands of people who say they 'love' animals sit down once or twice a day to enjoy the flesh of creatures who have been utterly deprived of everything that could make their lives worth living and who endured the awful suffering and the terror of the
                  abattoirs.
                </p>
                <cite>Andress Michel Aorta</cite>
              </blockquote>
            </div>
          </div>
          <div class="sl-slide" data-orientation="vertical" data-slice1-rotation="-5" data-slice2-rotation="25" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-4">
              </div>
              <h2><strong>Awesome</strong> features</h2>
              <blockquote>
                <p>
                  The human body has no more need for cows' milk than it does for dogs' milk, horses' milk, or giraffes' milk.
                </p>
                <cite>Smilee Bounvaller</cite>
              </blockquote>
            </div>
          </div>
          <div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-5" data-slice2-rotation="10" data-slice1-scale="2" data-slice2-scale="1">
            <div class="sl-slide-inner">
              <div class="bg-img bg-img-5">
              </div>
              <h2><strong>Premium</strong> support</h2>
              <blockquote>
                <p>
                  I think if you want to eat more meat you should kill it yourself and eat it raw so that you are not blinded by the hypocrisy of having it processed for you.
                </p>
                <cite>Clarke Edward Thompson</cite>
              </blockquote>
            </div>
          </div>
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