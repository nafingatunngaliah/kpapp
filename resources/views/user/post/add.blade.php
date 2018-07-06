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
                  <label class="control-label" for="inputText"> Photo's Post </label>
                  <input type="file" id="input-file-now" class="dropify" name="image_post"/> 
                </div>
                <div class="span12 margintop10 form-group">
                  <label class="control-label" for="inputText">  Title</label>
                  <input type="text" class="form-control" id="name" placeholder="Judul Post" data-rule="minlen:4" data-msg="Please enter title" required="" name="judul_post"/>
                  <div class="validation"></div>
                </div>
                <div class="span12 margintop10 form-group">
                  <label class="control-label" for="inputText">  Post Description </label>
                  <textarea class="form-control" rows="12" data-rule="required" data-msg="Please write something for us" placeholder="Isi Post" required="" name="isi_post"></textarea>
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
  <!-- javascript
    ================================================== -->

  
 

  
  <!-- js upload file -->
  <!-- <script src="{{asset('ample/plugins/bower_components/dropify/dist/js/dropify.min.js')}}"></script>
    <script>
        $(document).ready(function () {
            
            $('.dropify').dropify();
            
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez'
                    , replace: 'Glissez-déposez un fichier ou cliquez pour remplacer'
                    , remove: 'Supprimer'
                    , error: 'Désolé, le fichier trop volumineux'
                }
            });
            
            var drEvent = $('#input-file-events').dropify();
            drEvent.on('dropify.beforeClear', function (event, element) {
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });
            drEvent.on('dropify.afterClear', function (event, element) {
                alert('File deleted');
            });
            drEvent.on('dropify.errors', function (event, element) {
                console.log('Has Errors');
            });
            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function (e) {
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                }
                else {
                    drDestroy.init();
                }
            })
        });
    </script> -->

@endsection
