@extends('layouts.master')
@section('content')

  	<!--== Program Gallery Area Start ==-->
    <section class="section" id="program-gallery">
      <div class="container">

        <div class="row">

          @foreach( $programs as $program )
          <!--== Single Program ==-->
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="single-program-gallery">
              <img src="assets/img/program/3.jpg" class="img-fluid mx-auto d-block" alt="Single Program" />
              <div class="program-gallery-overley">
                <a href="/admission/{{ $program->PROGRAM_ID }}">{{ $program->PROGRAM_NAME }}</a>
              </div>
            </div>
          </div>
          <!--== Single Program ==-->
          @endforeach

          <!--== Single Program ==-->
          <!-- <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="single-program-gallery">
              <img src="assets/img/program/3.jpg" class="img-fluid mx-auto d-block" alt="Single Program" />
              <div class="program-gallery-overley">
                <a href="#">Graduation</a>
              </div>
            </div>
          </div> -->
          <!--== Single Program ==-->

        </div>
      </div>
    </section>
    <!--== Program Gallery Area End ==-->

@endsection