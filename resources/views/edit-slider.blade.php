@extends('layouts.index')
@section('slider-new')

    <!-- form add post -->
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
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
              <form class="form-horizontal" method="POST" action="{{ url('/home/slide-update', array($slide->id_slide)) }}" enctype="multipart/form-data">
                  @csrf
                  
                  <div class="control-group">
                    <label class="control-label" for="inputText">Judul</label>
                    <div class="controls">
                      <input type="text" class="form-control" id="name" placeholder="Judul Slide" name="judul_slide" value="{{ $slide->judul_slide }}"/>
                    </div>
                  </div>
                  <div class="control-group">
                    <label class="control-label" for="inputText">Isi</label>
                    <div class="controls">
                      <input type="textarea" class="form-control" id="name" placeholder="Isi Slide" name="isi_slide" value="{{ $slide->isi_slide }}"/>
                    </div>
                  </div>
                   <div class="control-group">
                    <label class="control-label" for="inputText">Image</label>
                    <div class="controls"> 
                      <input type="file" id="input-file-now" class="dropify" required="" name="image_slide" data-default-file="{{asset('image_slide/'. $slide->image_slide)}}"/>
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
      </div>
    </section>
   </div>
@endsection
