@extends('layouts.index')

@section('content')
  <!-- Subhead
================================================== -->
  <section id="subintro">
    <div class="jumbotron subhead" id="overview">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="centered">
              <h3>Daftar Post</h3>
              <p>
                Ini adalah halaman admin, halaman ini memuat semua post yang masuk dari semua user 
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="breadcrumb">
    <div class="container">
      
    </div>
  </section>
  <section id="maincontent">
    <div class="container">    
      <div class="row">
        <div class="col-md-4">
          <div class="white-box">
            <a class="btn btn-large btn-color" alt="default" data-toggle="modal" data-target="#responsive-modal2"><i class="icon-rounded icon-plus"></i> Tambah Post </a>

            <div id="image-popups" class="row">
              <div class="col-sm-2">
                <a href="../plugins/images/big/img1.jpg" data-effect="mfp-zoom-in">
                 <img src="{{asset('serenity/img/PLN.jpg')}}" alt="default" data-toggle="modal" data-target="#responsive-modal1" class="model_img img-responsive" />
               </a>
              </div>                   
            </div>        
                                              
            <!-- /.POPUP EDIT POST -->
            <div id="responsive-modal1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h2 class="modal-title">EDIT POST</h2>
                    <h4 class="modal-title">JUDUL POST</h4>
                    <h6 class="modal-title">POST BY</h6> 
                  </div>
                  <div class="modal-body">
                    <form>
                      <div class="form-group">
                        <label for="recipient-name" class="control-label">Recipient:</label>
                        <input type="text" class="form-control" id="recipient-name"> 
                      </div>
                      <div class="form-group">
                        <label for="message-text" class="control-label">Message:</label>
                        <textarea class="form-control" id="message-text"></textarea>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger waves-effect waves-light">Save changes</button>
                  </div>
                </div>
              </div>
            </div> 

            <!-- /.POPUP ADD POST -->
            <div id="responsive-modal2" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="display: none;">
              <div class="modal-dialog modal-lg">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h2 class="modal-title">TAMBAH POST</h2> 
                  </div>
                  <div class="modal-body">
                    <div class="row">
                      <div class="col-sm-6 ol-md-6 col-xs-12">
                          <div class="white-box">
                              <h3 class="box-title">Image Upload</h3>
                              <input type="file" id="input-file-now" class="dropify" name="image_post" required=""> 
                          </div>
                      </div>
                      
                    </div>
                    <form role="form" action="{{url('post-tambah')}}" method="post" enctype="multipart/form-data">
                      {{ csrf_field() }}
                      <div class="form-group">
                        <label for="recipient-name" class="control-label">Judul Post</label>
                        <input type="text" class="form-control" id="judul_post" name="judul_post" required=""> 
                      </div>
                      <div class="form-group">
                        <label for="message-text" class="control-label">Isi Post</label>
                        <textarea class="form-control" id="isi_post" name="isi_post" required=""></textarea>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-danger waves-effect waves-light">Save changes</button>
                  </div>
                </div>
              </div>
            </div> 
            
              <!-- Button trigger modal -->
          </div>
        </div>
      </div>

      <div class="row">
        <div class="span12">
          <div class="pagination">
            <ul>
              <li><a href="#">Prev</a></li>
              <li><a href="#">1</a></li>
              <li class="active"><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#">4</a></li>
              <li><a href="#">Next</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  @endsection
