@extends('layouts.index')
@section('editbuletin')
<!-- form edit buletin -->
    <div id="wrapper">
      <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span6">
            <div class="inner-heading">
              <h2>Form Majalah <strong> APP Surabaya</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="span12">
          	<h3>Halaman  <strong>Edit Majalah</strong></h3>
            <!-- <h4>Write your story and share on<strong> post</strong></h4> -->
             <!--  <div class="cta floatleft">
                <a class="btn btn-medium btn-theme btn-rounded" href="{{route ('viewpost')}}"><i class="icon-undo"></i> View Post </a>
              </div> -->
            <form method="post" role="form" class="contactForm" action="{{url('buletin-update',array($buletin->id_buletin))}}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>

              <div class="row">
                <div class="span12 margintop10 form-group">
                  <label class="control-label" for="inputText"> File Majalah (.pdf) </label>
                  <input type="file" id="input-file-now" class="dropify" required="" name="file_buletin" data-default-file="{{storage_path ('public/file-majalah/'. $buletin->file_buletin)}}"/> 
                </div>
                <div class="span12 margintop10 form-group">
                  <label class="control-label" for="inputText">  Judul Buletin</label>
                  <input type="text" class="form-control" id="name" placeholder="Judul Buletin" data-rule="minlen:4" data-msg="Please enter title" required="" name="judul_buletin" value="{{ $buletin->judul_buletin }}"/>
                  <div class="validation"></div>
                </div>
                <div class="span12 margintop10 form-group">
                  <label class="control-label" for="inputText"> Gambar Cover Majalah </label>
                  <input type="file" id="input-file-now" class="dropify" required="" name="cover_buletin" data-default-file="{{storage_path ('public/file-majalah/'. $buletin->cover_buletin)}}"/> 
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