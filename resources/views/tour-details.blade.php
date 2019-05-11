@extends('layouts.master')
@section('content')

    @foreach( $tours as $tour )
    <!--== Page Header Start ==-->
    <section class="section mt-50" id="page-header">

        <div class="embed-responsive embed-responsive-16by9">
          <iframe class="embed-responsive-item" style="padding: 0 10%; box-sizing: border-box;" src="https://www.youtube.com/embed/{{ $tour->VIDEO_FILE_PATH }}?rel=0" allowfullscreen></iframe>
        </div>

    </section>
    <!--== Page Header End ==-->


    <!--== Details Page Start ==-->
    <section class="section" id="details-page">
      <div class="container">
        <div class="row">
          
          <div class="col-md-12">
            <h1>{{ $tour->TOUR_TITLE }}</h1>
            <p>{!! $tour->CAMPUS_TOUR_CONTENT !!}</p>

          </div>

        </div>
      </div>
    </section>
    <!--== Details Page End ==-->
    @endforeach


@endsection