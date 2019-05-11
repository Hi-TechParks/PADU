@extends('layouts.master')
@section('content')

  	<!--== History Area Start ==-->
    <section class="section pd-btm" id="about-page">
      <div class="container">
        @foreach( $abouts as $about )
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
            <div class="about-page-image">
              <img src="/uploads/images/{{ $about->IMAGE_FILE_PATH }}" class="img-fluid mx-auto d-block" alt="about">
            </div>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <div class="about-page-details">
              <h1>Public Administration,<span> Dhaka university</span></h1>
              <br/>
              {!! $about->ABOUT_US_CONTENT !!}
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </section>
    <!--== History Area End ==-->

@endsection