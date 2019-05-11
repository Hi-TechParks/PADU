@extends('layouts.master')
@section('content')

    <!--== Single Page Header Start ==-->
    <!-- <section class="page-header">
      <div class="container">
        <div class="row">
          <div class="page-header-area">
            <div class="page-header-title">Our Alumni</div>
          </div>
        </div>
      </div>
    </section> -->
    <!--== Single Page Header End ==-->


    <!--== Reunion Area Start ==-->
    <section class="registration-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-xs-12">
            <div class="registration-area">
              <h3></h3>
              <a href="{{ url('/alumni/registration/create') }}">Registration Now</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== Reunion Area End ==-->


    <!--== Event Notice Area Start ==-->
    <section class="section" id="event-notice">
      <div class="container">
        <div class="row">

          <div class="col-lg-8 col-md-12 col-sm-12">
            <div class="event-notice-box">
              <div class="event-notice-box-header">
                <div class="event-notice-box-header-title">
                  Events
                </div>
              </div>
              <div class="event-notice-box-body">
                <div class="row">
                  @foreach( $events as $event )
                  <div class="col-lg-6 col-md-6 col-sm-12">
                    <!--== Single Event Box ==-->
                    <div class="single-event-box">
                      <div class="single-short-event-image">
                        <img src="/uploads/images/event/{{ $event->IMAGE_PATH }}" class="img-fluid mx-auto d-block" alt="">
                        <div class="single-short-event-date-box">
                          {{ date('d', strtotime($event->EVENT_DATE)) }}
                          <span>{{ date('F', strtotime($event->EVENT_DATE)) }}</span>
                        </div>
                        <div class="single-short-event-details">
                          <h3><a href="/alumni/event/single/{{ $event->ALUMNI_EVENT_ID }}">{{ $event->EVENT_TITLE }}</a></h3>
                        </div>
                      </div>
                    </div>
                    <!--== Single Event Box ==-->
                  </div>
                  @endforeach
                </div>

                <!-- <div class="row">
                  <div class="col-md-12">
                    <div class="event-notice-date-picker">
                      <input type="text" id="datepicker" width="276" />
                    </div>
                  </div>
                </div> -->

                <a href="{{ url('/alumni/event') }}" class="view-all">View All <i class="fas fa-arrow-circle-right"></i></a>

              </div>
              <div class="event-notice-box-footer">
                
              </div>
            </div>
          </div>


          <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="event-notice-box">
              <div class="event-notice-box-header">
                <div class="event-notice-box-header-title">
                  Notice
                </div>
              </div>
              <div class="event-notice-box-body">
                @foreach( $notices as $notice )
                <!--== Single Notice Box ==-->
                <div class="single-notice-box">
                  <div class="single-notice-left">
                    <div class="single-notice-date-box">
                      <span>{{ date('d', strtotime($notice->PUBLISH_START_DATE)) }}</span>
                      {{ date('F', strtotime($notice->PUBLISH_START_DATE)) }}
                    </div>
                  </div>
                  <div class="single-notice-right">
                    <p>{{ $notice->NOTICE_TITLE }}</p>
                    <a href="/alumni/notice/single/{{ $notice->ALUMNI_NOTICE_ID }}">View More</a>
                  </div>
                </div>
                <!--== Single Notice Box ==-->
                @endforeach

                <!--== Single Notice Box ==-->
                <!-- <div class="single-notice-box">
                  <div class="single-notice-left">
                    <div class="single-notice-date-box">
                      <span>26</span>
                      Jan
                    </div>
                  </div>
                  <div class="single-notice-right">
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                    <button data-toggle="modal" data-target="#20181200009">View More</button>
                  </div>
                </div> -->
                <!--== Single Notice Box ==-->

                <a href="{{ url('/alumni/notice') }}" class="view-all">View All <i class="fas fa-arrow-circle-right"></i></a>

              </div>
              <div class="event-notice-box-footer">
                
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!--== Event Notice Area End ==-->


  	<!--== Alumni Area Start ==-->
    <section class="section pd-btm" id="alumni-page">
      <div class="container">
        <!--== Page Title Area ==-->
        <div class="row sub-page-title-box">
          <div class="col-md-4 col-xs-12">
            <h2 class="sub-page-title">Our <span>Alumni</span></h2>
          </div>
          <div class="col-md-8 col-xs-12">
            <form action="{{ url('/alumni') }}" method="get" class="">
              <div class="row">
                <div class="col">
                  <input type="text" class="form-control" name="alumni_name" placeholder="Alumni Name">
                </div>
                <div class="col">
                  <input type="text" class="form-control" name="job_category" placeholder="Profession">
                </div>
                <div class="col">
                  <button type="submit" class="btn">Search</button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!--== Page Title Area ==-->
        <div class="row">

          @foreach( $alumnis as $alumni )
          <!--== Single Alumni ==-->
          <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 alumni-box">
            <div class="single-alumni-box">
              <div class="single-alumni-image">
                <img src="/uploads/images/alumni/{{ $alumni->PROFILE_IMAGE_PATH }}">
              </div>
              <ul class="single-alumni-details">
                <li><span><i class="fas fa-user"></i></span>{{ $alumni->MEMBER_NAME }}</li>
                <li><span><i class="fas fa-swatchbook"></i></span>Batch: {{ $alumni->BATCH_NO }}</li>
                <li><span><i class="fas fa-industry"></i></span>{{ $alumni->CATEGORY_NAME }}</li>
                <li><span><i class="fas fa-pen-nib"></i></span>{{ $alumni->DESIGNATION }}</li>
                <li><span><i class="fas fa-envelope"></i></span>{{ $alumni->MAIL_ID }}</li>
                <li><span><i class="fas fa-phone"></i></span>{{ $alumni->CONTACT_PHONE }}</li>
              </ul>
            </div>
          </div>
          <!--== Single Alumni ==-->
          @endforeach

          <!--== Single Alumni ==-->
          <!-- <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-xs-12 alumni-box">
            <div class="single-alumni-box">
              <div class="single-alumni-image">
                <img src="assets/img/students/student1.jpg">
              </div>
              <ul class="single-alumni-details">
                <li><span><i class="fas fa-user"></i></span>MD. Diptto Islail</li>
                <li><span><i class="fas fa-swatchbook"></i></span>10th Batch</li>
                <li><span><i class="fas fa-industry"></i></span>Asst. Engg, BCC.</li>
                <li><span><i class="fas fa-envelope"></i></span>dipto@gmail.com</li>
                <li><span><i class="fas fa-phone"></i></span>01712345678</li>
              </ul>
            </div>
          </div> -->
          <!--== Single Alumni ==-->
        </div>

        <!--== Pagination Area Start ==-->
        <div class="row">
          <div class="col-lg-12 col-md-12 col-xs-12">
              <div class="mx-auto d-block d-flex">
                <nav aria-label="..." class="mx-auto d-block">
                  {{ $alumnis->links() }}
                </nav>
              </div>
          </div>
        </div>
        <!--== Pagination Area End ==-->

      </div>
    </section>
    <!--== Alumni Area End ==-->

@endsection