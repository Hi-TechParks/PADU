@extends('layouts.master')
@section('content')

  	<!--== Chairman Area Start ==-->
    <section class="section pd-btm" id="about-page">
      <div class="container">

        @foreach( $profiles as $profile )
        <div class="row">
          <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <div class="about-page-image">
              <img src="/uploads/images/profile/{{ $profile->PROFILE_IMAGE_PATH }}" class="img-fluid mx-auto d-block" alt="about">
              <p class="about-page-name">{{ $profile->name }}</p>
              <p class="about-page-degination">{{ $profile->DESIGNATION_NAME }}</p>
              <ul class="single-academic-details">
                <li><span><i class="fas fa-graduation-cap"></i></span>{{ $profile->QUALIFICATION }}</li>
                <li><span><i class="fas fa-phone"></i></span>{{ $profile->CONTACT_PHONE }}</li>
                <li><span><i class="fas fa-envelope"></i></span>{{ $profile->email }}</li>
                <li><span><i class="far fa-calendar-alt"></i></span>{{ $profile->DOB }}</li>
                <li><span><i class="fas fa-user"></i></span>
                  @if($profile->GENDER == '1')
                    Male
                  @elseif($profile->GENDER == '2')
                    Female
                  @endif
                </li>
              </ul>
            </div>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 offset-lg-1">
            <div class="about-page-details">
              <h1><span>Profile Details</span></h1>
              <br/>
              {!! $profile->PROFILE !!}
            </div>
          </div>
        </div>
        @endforeach

      </div>
    </section>
    <!--== Chairman Area End ==-->

@endsection