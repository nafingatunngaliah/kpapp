@extends('layouts.index')
@section('addgaleri')

    <!-- form add galeri -->
    <div id="wrapper">
      <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span6">
            <div class="inner-heading">
              <h2>Masukkan Foto<strong> Galeri</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
            <!-- <h4>Write your story and share on<strong> post</strong></h4> -->
              <div class="cta floatleft">
                <a class="btn btn-medium btn-theme btn-rounded" href="{{url ('galeri')}}"><i class="icon-undo"></i> Kembali </a>
              </div>
            <form method="post" role="form" class="contactForm" action="{{url('galeri-tambah/'.$album->id_album)}}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>

              <div class="row">
                <div class="span12 margintop10 form-group">
                  <label class="control-label" for="inputText"> Foto </label>
                  <input type="file" id="input-file-now" class="dropify" name="image_galeri"/> 
                </div>
                
                <div class="span12 margintop10 form-group">
                  <label class="control-label" for="inputText">  Nama Foto</label>
                  <input type="text" class="form-control" id="name" placeholder="Nama Foto" data-rule="minlen:4" data-msg="Please enter title" name="nama"/>
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
   </div>
@endsection
