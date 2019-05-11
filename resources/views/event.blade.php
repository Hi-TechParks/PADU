@extends('layouts.master')
@section('content')

    <!--== Event Area Start ==-->
    <section class="section pd-btm" id="event-page">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-xs-12">
            <h1 class="text-center"><span>Our All Event</span></h1>
          </div>
        </div>
        <div class="row">

                  <!-- ===  Text Shorten Code  ====  -->
                  <?php
                    // code for shortening the big content fetched from database
                     function EventTextShorten($text, $limit = 250){
                        $text = $text." ";
                        $text = substr($text, 0, $limit);
                        $text = substr($text, 0, strrpos($text, " "));
                        $text = $text;
                        return $text;
                    }
                  ?> 
                  <!-- ===  Text Shorten Code  ====  -->

          @foreach( $events as $event )
          <!--== Single Event ==-->
          <div class="col-lg-6 col-md-6 col-xs-12">
            <div class="event-page-single-box">
              <div class="event-page-single-box-left">
                <div class="event-page-single-box-image">
                  <img src="/uploads/images/event/{{ $event->IMAGE_PATH }}" class="img-fluid mx-auto d-block" alt="campus tour" />
                </div>
              </div>
              <div class="event-page-single-box-right">
                <div class="event-page-single-box-header">
                    <div class="single-notice-left">
                      <div class="single-notice-date-box">
                        <span>{{ date('d', strtotime($event->EVENT_DATE)) }}</span>
                        {{ date('M', strtotime($event->EVENT_DATE)) }}
                      </div>
                    </div>
                    <div class="single-notice-right">
                      <p><a href="/event/single/{{ $event->EVENT_ID }}">{{ $event->EVENT_TITLE }}</a></p>
                      <div class="meta-box">
                        <span><i class="far fa-clock"></i></span> 05:00 PM - 07:00PM
                      </div>
                    </div>
                </div>
                <div class="event-page-single-box-footer">
                  {!! EventTextShorten($event->EVENT_DESC) !!}
                  <a class="read_more" href="/event/single/{{ $event->EVENT_ID }}"> Read More</a>
                </div>
              </div>
            </div>
          </div>
          <!--== Single Event ==-->
          @endforeach

          <!--== Single Event ==-->
          <!-- <div class="col-lg-6 col-md-6 col-xs-12">
            <div class="event-page-single-box">
              <div class="event-page-single-box-left">
                <div class="event-page-single-box-image">
                  <img src="assets/img/events/2.jpg" class="img-fluid mx-auto d-block" alt="campus tour" />
                </div>
              </div>
              <div class="event-page-single-box-right">
                <div class="event-page-single-box-header">
                    <div class="single-notice-left">
                      <div class="single-notice-date-box">
                        <span>26</span>
                        Jan
                      </div>
                    </div>
                    <div class="single-notice-right">
                      <p>Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                      <div class="meta-box">
                        <span><i class="far fa-clock"></i></span> 05:00 PM - 07:00PM
                      </div>
                    </div>
                </div>
                <div class="event-page-single-box-footer">
                  Lorem Ipsum is simply dummy text of the printing and 
                  typesetting industry. Lorem Ipsum has been the industry's 
                  standard dummy text ever since the 1500s, when an 
                  unknown printer took a galley of type and scrambled it.
                </div>
              </div>
            </div>
          </div> -->
          <!--== Single Event ==-->

        </div>

        <!--== Pagination Area Start ==-->
        <div class="row">
          <div class="col-md-12 col-xs-12">
            <div class="mx-auto d-block d-flex">
                <nav aria-label="..." class="mx-auto d-block">
                  {{ $events->links() }}
                </nav>
              </div>
          </div>
        </div>
        <!--== Pagination Area End ==-->

      </div>
    </section>
    <!--== Event Area End ==-->

@endsection