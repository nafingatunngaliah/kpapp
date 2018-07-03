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
            <a class="btn btn-large btn-color" href="{{route ('addpost')}}"><i class="icon-rounded icon-plus"></i> Tambah Post </a>

            <div id="image-popups" class="row">
              <div class="col-sm-2">
                <a href="../plugins/images/big/img1.jpg" data-effect="mfp-zoom-in">
                 <img src="{{asset('serenity/img/PLN.jpg')}}" alt="default" data-toggle="modal" data-target="#responsive-modal" class="model_img img-responsive" />
               </a>
              </div>                   
            </div>        
                                              
            <!-- /.modal -->
            <div id="responsive-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h3 class="modal-title">JUDUL POST</h3>
                    <h5 class="modal-title">POST BY</h5> 
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
