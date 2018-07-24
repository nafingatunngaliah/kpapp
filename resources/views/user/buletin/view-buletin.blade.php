@extends('layouts.index')

@section ('bacafull')
<div class="container">
	<div class="row">
    @auth   
        <div class="cta floatright" style="margin-left:10px">
            <a class="btn btn-medium btn-theme btn-rounded" href="{{route ('buletin-tambah')}}"><i class="icon-plus"></i> Tambah Majalah </a>
        </div>
        <div class="cta floatright">
            <a class="btn btn-medium btn-theme btn-rounded" href="{{route ('buletin-tambah')}}"><i class="icon-trash"></i> Delete Majalah </a>
        </div>
      @endauth
		<div class="span12">
        	<div class="big-cta">
        		<h4 class="heading" style="text-align: center; margin-bottom: 10px; margin-top: 50px">Majalah <strong>APP Surabaya</strong></h4>
          <div class="progress progress-striped active" style="height: 6px; width: 70%; margin-left: 200px;">
            <div class="bar bar-info bar35"></div>
            <div class="bar bar-success bar30"></div>
            <div class="bar bar-warning bar20"></div>
            <div class="bar bar-danger bar15"></div>
          </div>
          @foreach($buletin2 as $b)
      <div class="span10">
        <embed src="{{asset ('file-majalah/' .$b->file_buletin)}}#toolbar=1&navpanes=1&scrollbar=1" type="application/pdf" width="114%" height="600px" style="border-width: 1px; margin-left: 5%; margin-bottom: 5px;"/> 
      </div>
     
      @endforeach 

        	</div> 
        
        </div>
        
	</div>
</div>
@endsection