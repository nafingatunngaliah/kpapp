@extends('layouts.index')
@section('error')
<section id="wrapper" class="error-page" style="height: 400px; margin-top: 80px;">
  <div class="error-box">
    <div class="error-body text-center">
      <h1 class="text-warning" style=" color: #009FDF;"><strong>503</strong></h1>
      <h3 class="text-uppercase">Silakan Login Dahulu</h3>
      <p></p>
      <p><i class="icon-circled icon-hand-up icon-64" href="#mySignin" data-toggle="modal"></i></p>
  </div>
</section>
@endsection