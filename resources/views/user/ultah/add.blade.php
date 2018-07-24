@extends('layouts.index')
@section('manage-ultah')

  <div id="wrapper">
      <section id="inner-headline">
      <div class="container">
        <div class="row">
          <div class="span6">
            <div class="inner-heading">
              <h2>Tambahkan <strong> Data Pegawai</h2>
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
                <a class="btn btn-medium btn-theme btn-rounded" href="{{url ('manage-ultah')}}"><i class="icon-undo"></i> Back </a>
              </div>
            <form method="post" role="form" class="contactForm" action="{{url('ultah-tambah')}}" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>

              <div class="row">
                <div class="span12 margintop10 form-group">
                  	<label class="control-label" for="inputText">  Nama</label>
                  	<input type="text" class="form-control" id="name" placeholder="Nama" data-rule="minlen:4" data-msg="Please enter title" required="" name="nama"/>
                  	<div class="validation"></div>
                </div>
                <div class="span12 margintop10 form-group">
                    <label class="control-label" for="inputText">  Deskripsi<small> *boleh dikosongkan</small></label>
                    <input type="text" class="form-control" id="name" placeholder="Deskripsi" data-rule="minlen:4" data-msg="Please enter title"  name="deskripsi"/>
                </div>
                <div class="span12 margintop10 form-group">
                  	<label class="control-label" for="inputText">  Tanggal</label>
                  	<div class="input-group">
                        <i class="icon-calender"></i></span>
                        <input type="text" class="form-control" id="datepicker-autoclose" placeholder="mm/dd/yyyy" name="tgl_bd"> <span class="input-group-addon">
                         
                    </div>
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