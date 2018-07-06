@extends('layouts.index')

@section('content2')
<section class="callaction">
      <div class="container">
        <div class="row">
          <div class="span12">
            <div class="big-cta">
              <div class="cta-text">
                <h3>We've created more than <span class="highlight"><strong>5000 websites</strong></span></h3>
              </div>
              <div class="cta floatright">
                <a class="btn btn-large btn-theme btn-rounded" href="{{route ('viewpost')}}"><i class="icon-book"></i> View Post </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  @endsection
  <!-- @extends('index') -->