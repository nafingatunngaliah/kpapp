@extends('layouts.index')
@section('editpost')
  <div id="wrapper">
    <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span6">
            <div class="inner-heading">
              <h2>Write your story on<strong> post</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- form add post -->
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
            <h3>Wanna editing your <strong> post?</strong></h3>
              <div class="cta floatleft">
                <a class="btn btn-medium btn-theme btn-rounded" href="{{route ('viewpost')}}"><i class="icon-undo"></i> View Post<br> </a>
              </div>
            <form method="post" action="{{url('post-update',array($post->id_post))}}" role="form" class="contactForm" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>

              <div class="row">
                <div class="span12 margintop10 form-group">
                  <label class="control-label" for="inputText"><br>Photo's Post</label>
                  <input type="file" id="input-file-now" class="dropify" required="" name="image_post" data-default-file="{{asset('image_post/'. $post->image_post)}}" /> 
                </div>
                <div class="span12 margintop10 form-group">
                  <label class="control-label" for="inputText">  Title</label>
                  <input type="text" class="form-control" id="name" placeholder="Judul Post" data-rule="minlen:4" data-msg="Please enter title" required="" name="judul_post" value="{{ $post->judul_post }}"/>
                  <div class="validation"></div>
                </div>
                <div class="span12 margintop10 form-group">
                  <label class="control-label" for="inputText">  Post Description</label>
                  <textarea id="mymce" name="isi_post" value="{{ $post->isi_post }}">{{ $post->isi_post }}</textarea>
                  <div class="validation"></div>
                </div>
                <p class="text-center">
                    <button class="btn btn-large btn-theme margintop10" type="submit">Submit</button>
                    
                  </p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- end form add post -->
  </div>
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-32 active"></i></a>
  <!-- javascript
    ================================================== -->
  
  
@endsection