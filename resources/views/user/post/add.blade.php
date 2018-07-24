@extends('layouts.index')
@section('addpost')

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
            <!-- <h4>Write your story and share on<strong> post</strong></h4> -->
              <div class="cta floatleft">
                <a class="btn btn-medium btn-theme btn-rounded" href="{{route ('viewpost')}}"><i class="icon-undo"></i> View Post </a>
              </div>
            <form method="post" role="form" class="contactForm" action="{{url('post-tambah')}}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>

              <div class="row">
                <div class="span12 margintop10 form-group">
                  <label class="control-label" for="inputText"> Foto Post </label>
                  <input type="file" id="input-file-now" class="dropify" name="image_post"/> 
                </div>
                <div class="span12 margintop10 form-group">
                  <label class="control-label" for="inputText">  Kategori Post</label>
                  <!-- <input type="text" class="form-control" id="name" placeholder="Kategori Post" data-rule="minlen:4" data-msg="Please enter title" required="" name="kategori_post"/> -->
                  <select class="form-control select2" style="width: 100%;" name="kategori_post" required="">
                    <option selected="selected">Pilih Kategori</option>
                    <option value="Kegiatan">Kegiatan</option>
                    <option value="Inspirasi">Inspirasi</option>
                    <option value="Awareness">Awareness</option>
                    <option value="Pekerjaan">Pekerjaan</option>
                    <option value="Kabar Kelistrikan">Kabar Kelistrikan</option>
                    <option value="Bonus">Bonus</option>
                    <option value="Target">Target</option>
                  </select>
                  <div class="validation"></div>
                </div>
                <div class="span12 margintop10 form-group">
                  <label class="control-label" for="inputText">  Judul Post</label>
                  <input type="text" class="form-control" id="name" placeholder="Judul Post" data-rule="minlen:4" data-msg="Please enter title" required="" name="judul_post"/>
                  <div class="validation"></div>
                </div>
                <div class="span12 margintop10 form-group">
                  <label class="control-label" for="inputText">  Isi Post</label>
                  <textarea class="form-control" id="summary-ckeditor" name="isi_post"></textarea>
                  <!-- <textarea class="form-control" id="ckeditor"></textarea> -->
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
