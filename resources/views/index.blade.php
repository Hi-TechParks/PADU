@extends('layouts.master')
@section('content')

    <!--== Slider Area Start ==-->
  	<section id="slider">
  		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  		  <ol class="carousel-indicators">
  		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
  		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  		  </ol>
  		  <div class="carousel-inner">

          @foreach( $slides as $slide )
          <div class="carousel-item">
            <img src="/uploads/images/slide/{{ $slide->IMAGE_PATH }}" class="d-block w-100" alt="...">
            <div class="carousel-caption d-none d-md-block">
              <div class="carouser-caption-box">
                <h5>{{ $slide->IMAGE_TITLE }}</h5>
                {!! $slide->IMAGE_DESC !!}
                <!-- <a href="#" class="btn">Read More</a> -->
              </div>
            </div>
          </div>
          @endforeach

  		    <!-- <div class="carousel-item active">
  		      <img src="assets/img/slider/slider_image.jpg" class="d-block w-100" alt="...">
  		      <div class="carousel-caption d-none d-md-block">
  			    <div class="carouser-caption-box">
  			    	<h5>Department of Public Administration</h5>
  				    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1</p>
  				    <a href="#" class="btn">Read More</a>
  			    </div>
  			  </div>
  		    </div>-->
  		  </div>
  		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
  		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
  		    <span class="sr-only">Previous</span>
  		  </a>
  		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
  		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
  		    <span class="sr-only">Next</span>
  		  </a>
  		</div>
  	</section>
    <!--== Slider Area End ==-->


    <!--== Person Box Area Start ==-->
  	<section class="section" id="person-box">
  	  <div class="container">
  	  	<div class="row">

          <!-- ===  Text Shorten Code  ====  -->
          <?php
            // code for shortening the big content fetched from database
             function MsgTextShorten($text, $limit = 300){
                $text = $text." ";
                $text = substr($text, 0, $limit);
                $text = substr($text, 0, strrpos($text, " "));
                $text = $text;
                return $text;
            }
          ?> 
          <!-- ===  Text Shorten Code  ====  -->

          @foreach( $c_messages as $c_message )
          <!--== Single Person Box ==-->
  	  	  <div class="col-lg-5 col-md-6 col-sm-12">
    		    <div class="card">
    		      <div class="card-body">
    		        <div class="person-box-header">
    		          <div class="person-box-image">
    		          	<img src="/uploads/images/profile/{{ $c_message->PROFILE_IMAGE_PATH }}" class="img-fluid mx-auto d-block">
    		          </div>
    		          <div class="person-box-info">
    		          	<div class="card-icon"><i class="fas fa-quote-right"></i></div>
    		          	<h5 class="card-title">{{ $c_message->name }}</h5>
    		        	<p class="card-text">{{ $c_message->DESIGNATION_NAME }}</p>
    		          </div>
    		        </div>
    		        <div class="person-box-footer">
                  {!! MsgTextShorten($c_message->MESSAGE_CONTENT) !!}
                  @if(strlen($c_message->MESSAGE_CONTENT) > 300)
                    <a class="read_more" href="/message/{{ $c_message->MESSAGE_ID }}"> Read More</a>
                  @endif
    		        </div>
    		      </div>
    		    </div>
    		  </div>
          <!--== Single Person Box ==-->
          @endforeach


          @foreach( $h_messages as $h_message )
          <!--== Single Person Box ==-->
          <div class="col-lg-5 col-md-6 col-sm-12">
            <div class="card">
              <div class="card-body">
                <div class="person-box-header">
                  <div class="person-box-image">
                    <img src="/uploads/images/profile/{{ $h_message->PROFILE_IMAGE_PATH }}" class="img-fluid mx-auto d-block">
                  </div>
                  <div class="person-box-info">
                    <div class="card-icon"><i class="fas fa-quote-right"></i></div>
                    <h5 class="card-title">{{ $h_message->name }}</h5>
                  <p class="card-text">{{ $h_message->DESIGNATION_NAME }}</p>
                  </div>
                </div>
                <div class="person-box-footer">
                  {!! MsgTextShorten($h_message->MESSAGE_CONTENT) !!}
                  @if(strlen($h_message->MESSAGE_CONTENT) > 300)
                    <a class="read_more" href="/message/{{ $h_message->MESSAGE_ID }}"> Read More</a>
                  @endif
                </div>
              </div>
            </div>
          </div>
          <!--== Single Person Box ==-->
          @endforeach

          <!--== Single Person Box ==-->
    		  <!-- <div class="col-lg-4 col-md-6 col-sm-12">
    		    <div class="card">
    		      <div class="card-body">
    		        <div class="person-box-header">
    		          <div class="person-box-image">
    		          	<img src="assets/img/vis01.jpg" class="img-fluid mx-auto d-block">
    		          </div>
    		          <div class="person-box-info">
    		          	<div class="card-icon"><i class="fas fa-quote-right"></i></div>
    		          	<h5 class="card-title">Md. Atiar Rahman</h5>
    		        	<p class="card-text">Head of the Department</p>
    		          </div>
    		        </div>
    		        <div class="person-box-footer">
    		        	Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum  took a galley of type and scrambled it to make a type specimen book to continue <a href="#"> Read More</a>
    		        </div>
    		      </div>
    		    </div>
    		  </div> -->
          <!--== Single Person Box ==-->

  	  	</div>
  	  </div>
  		
  	</section>
    <!--== Person Box Area End ==-->


    <!--== Counter Box Area Start ==-->
  	<div class="section-overlay">
  	<section class="section" id="counter">
  	  
  	  <div class="container">
  	  	<div class="row">
          <!--== Single Counter Box ==-->
  	  	  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
  	  	  	<div class="counter-box">
  	  	  		<div class="counter-icon">
  	  	  			<div class=""><i class="fas fa-chalkboard-teacher"></i></div>
  	  	  		</div>
  	  	  		<div class="counter-text">
  	  	  			46 +
  	  	  			<span>Faculty</span>
  	  	  		</div>
  	  	  	</div>
  	  	  </div>
          <!--== Single Counter Box ==-->

          <!--== Single Counter Box ==-->
  	  	  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
  	  	  	<div class="counter-box">
  	  	  		<div class="counter-icon">
  	  	  			<div class=""><i class="fas fa-user-edit"></i></div>
  	  	  		</div>
  	  	  		<div class="counter-text">
  	  	  			8879 +
  	  	  			<span>Students</span>
  	  	  		</div>
  	  	  	</div>
  	  	  </div>
          <!--== Single Counter Box ==-->

          <!--== Single Counter Box ==-->
  	  	  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
  	  	  	<div class="counter-box">
  	  	  		<div class="counter-icon">
  	  	  			<div class=""><i class="fas fa-user-graduate"></i></div>
  	  	  		</div>
  	  	  		<div class="counter-text">
  	  	  			2500 +
  	  	  			<span>Alumni</span>
  	  	  		</div>
  	  	  	</div>
  	  	  </div>
          <!--== Single Counter Box ==-->

          <!--== Single Counter Box ==-->
  	  	  <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
  	  	  	<div class="counter-box">
  	  	  		<div class="counter-icon">
  	  	  			<div class=""><i class="fas fa-trophy"></i></div>
  	  	  		</div>
  	  	  		<div class="counter-text">
  	  	  			20 +
  	  	  			<span>Years Exp.</span>
  	  	  		</div>
  	  	  	</div>
  	  	  </div>
          <!--== Single Counter Box ==-->
  	  	</div>
  	  </div>

  	</section>
  	</div>
    <!--== Counter Box Area End ==-->


    <!--== Program Gallery Area Start ==-->
  	<section class="section" id="program-gallery">
  	  <div class="container">

        <!--== Section Title Area ==-->
  	  	<div class="row">
  	  		<div class="col-md-12">
  	  			<div class="section-title-area">
  	  				<div class="section-title-icon"><i class="fas fa-graduation-cap"></i></div>
  	  				<h2 class="section-title">Academic Program</h2>
  	  			</div>
  	  		</div>
  	  	</div>
        <!--== Section Title Area ==-->

  	  	<div class="row">
          <!--== Single Program ==-->
  	  	  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
  	  	  	<div class="single-program-gallery">
  	  	  		<img src="assets/img/program/2.jpg" class="img-fluid mx-auto d-block" alt="Single Program" />
  	  	  		<div class="program-gallery-overley">
  	  	  			<a href="/admission">Admission</a>
  	  	  		</div>
  	  	  	</div>
  	  	  </div>
          <!--== Single Program ==-->

          <!--== Single Program ==-->
  	  	  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
  	  	  	<div class="single-program-gallery">
  	  	  		<img src="assets/img/program/3.jpg" class="img-fluid mx-auto d-block" alt="Single Program" />
  	  	  		<div class="program-gallery-overley">
  	  	  			<a href="/underGraduation">Undergraduate</a>
  	  	  		</div>
  	  	  	</div>

            <div class="single-program-gallery">
              <img src="assets/img/program/3.jpg" class="img-fluid mx-auto d-block" alt="Single Program" />
              <div class="program-gallery-overley">
                <a href="/postGraduation">Post-Graduation</a>
              </div>
            </div>
  	  	  </div>
          <!--== Single Program ==-->

          <!--== Single Program ==-->
  	  	  <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
  	  	  	<div class="single-program-gallery">
  	  	  		<img src="assets/img/program/3.jpg" class="img-fluid mx-auto d-block" alt="Single Program" />
  	  	  		<div class="program-gallery-overley">
  	  	  			<a href="/graduation">Graduation</a>
  	  	  		</div>
  	  	  	</div>

            <div class="single-program-gallery">
              <img src="assets/img/program/3.jpg" class="img-fluid mx-auto d-block" alt="Single Program" />
              <div class="program-gallery-overley">
                <a href="/mPhill">M.Phill</a>
              </div>
            </div>
  	  	  </div>
          <!--== Single Program ==-->

          <!--== Single Program ==-->
          <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
            <div class="single-program-gallery">
              <img src="assets/img/program/1.jpg" class="img-fluid mx-auto d-block" alt="Single Program" />
              <div class="program-gallery-overley">
                <a href="/phd">PhD</a>
              </div>
            </div>
          </div>
          <!--== Single Program ==-->
  	  	</div>
  	  </div>
  	</section>
    <!--== Program Gallery Area End ==-->


    <!--== Campus Area Start ==-->
  	<section class="section" id="campus-tour">
  	  <div class="container">
  	  	<div class="row">

          @foreach( $tours as $tour )
  	  	  <div class="col-lg-6 col-md-6 col-sm-12">
  	  	  	<div class="campus-tour">
  	  	  		<div class="campus-tour-image">
  	  	  			<!-- <img src="assets/img/campus/1.jpg" class="img-fluid mx-auto d-block" alt="campus tour" />
  	  	  			<div class="campus-tour-image-overley">
  	  	  				<div class="campus-tour-image-button">
  	  	  					
  	  	  				</div>
  	  	  			</div> -->

                <div class="embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/{{ $tour->VIDEO_FILE_PATH }}?rel=0" allowfullscreen></iframe>
                </div>
  	  	  		</div>
  	  	  	</div>
  	  	  </div>

          <!-- ===  Text Shorten Code  ====  -->
          <?php
            // code for shortening the big content fetched from database
             function TourTextShorten($text, $limit = 300){
                $text = $text." ";
                $text = substr($text, 0, $limit);
                $text = substr($text, 0, strrpos($text, " "));
                $text = $text;
                return $text;
            }
          ?> 
          <!-- ===  Text Shorten Code  ====  -->

  	  	  <div class="col-lg-6 col-md-6 col-sm-12">
  	  	  	<div class="campus-tour">
  	  	  		<div class="campus-tour-details">
  	  	  			<h2>{{ $tour->TOUR_TITLE }}</h2>
                <p>
                  {!! TourTextShorten($tour->CAMPUS_TOUR_CONTENT) !!}
                </p>
                <a href="/tour/{{ $tour->CAMPUS_TOUR_ID }}">Know More</a>
  	  	  		</div>
  	  	  	</div>
  	  	  </div>
          @endforeach

  	  	</div>
  	  </div>
  	</section>
    <!--== Campus Area End ==-->


    <!--== Events & Notice Area Start ==-->
  	<section class="section" id="event-notice">
  	  <div class="container">

        <!--== Section Title Area ==-->
  	  	<div class="row">
  	  		<div class="col-md-12">
  	  			<div class="section-title-area">
  	  				<div class="section-title-icon"><i class="fas fa-calendar-alt"></i></div>
  	  				<h2 class="section-title">Events & Notice</h2>
  	  			</div>
  	  		</div>
  	  	</div>
        <!--== Section Title Area ==-->

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
  	  				  	<div class="col-lg-6 col-md-6 col-sm-12">


                  <!-- ===  Text Shorten Code  ====  -->
                  <?php
                    // code for shortening the big content fetched from database
                     function EventTextShorten($text, $limit = 150){
                        $text = $text." ";
                        $text = substr($text, 0, $limit);
                        $text = substr($text, 0, strrpos($text, " "));
                        $text = $text;
                        return $text;
                    }
                  ?> 
                  <!-- ===  Text Shorten Code  ====  -->

                    @foreach( $large_events as $large_event )
                    <!--== Single Event Box ==-->
  	  				  		<div class="single-event-box">
  	  				  			<div class="single-event-image">
  	  				  				<img src="/uploads/images/event/{{ $large_event->IMAGE_PATH }}" class="img-fluid mx-auto d-block" alt="">
  	  				  				<div class="single-event-date-box">
                          {{ date('d', strtotime($large_event->EVENT_DATE)) }}
	  	  				  				<span>{{ date('F', strtotime($large_event->EVENT_DATE)) }}</span>
	  	  				  			</div>
  	  				  			</div>
  	  				  			<div class="single-event-details">
  	  				  				<h3><a href="/event/single/{{ $large_event->EVENT_ID }}">{{ $large_event->EVENT_TITLE }}</a></h3>
  	  				  				<div class="event-meta">

                          @if(!empty($large_event->EVENT_TIME))
  	  				  					<div class="single-meta"><span><i class="far fa-clock"></i></span> {{ date('h:i A', strtotime($large_event->EVENT_TIME)) }}</div>
                          @endif

                          @if(!empty($large_event->EVENT_LOCATION))
  	  				  					<div class="single-meta"><span><i class="fas fa-map-marker"></i></span> {{ $large_event->EVENT_LOCATION }}</div>
                          @endif

  	  				  				</div>
  	  				  				<p>
                          {!! EventTextShorten($large_event->EVENT_DESC) !!}
                          @if(strlen($large_event->EVENT_DESC) > 150)
                            <a class="read_more" href="/event/single/{{ $large_event->EVENT_ID }}"> Read More</a>
                          @endif
                        </p>
  	  				  			</div>
  	  				  		</div>
                    <!--== Single Event Box ==-->
                    @endforeach

                    <!--== Single Event Box ==-->
                    <!-- <div class="single-event-box">
                      <div class="single-event-image">
                        <img src="assets/img/events/1.jpg" class="img-fluid mx-auto d-block" alt="">
                        <div class="single-event-date-box">
                          26
                          <span>October</span>
                        </div>
                      </div>
                      <div class="single-event-details">
                        <h3><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industr</a></h3>
                        <div class="event-meta">
                          <div class="single-meta"><span><i class="far fa-clock"></i></span> 9.00am - 3pm</div>
                          <div class="single-meta"><span><i class="fas fa-map-marker"></i></span> Hall Room</div>
                        </div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry <a href="#"> read more</a></p>
                      </div>
                    </div> -->
                    <!--== Single Event Box ==-->
  	  				  	</div>

  	  				  	<div class="col-lg-6 col-md-6 col-sm-12">

                    @foreach( $small_events as $small_event )
                    <!--== Single Event Box ==-->
  	  				  		<div class="single-event-box">
  	  				  			<div class="single-short-event-image">
  	  				  				<img src="/uploads/images/event/{{ $small_event->IMAGE_PATH }}" class="img-fluid mx-auto d-block" alt="">
  	  				  				<div class="single-short-event-date-box">
	  	  				  				{{ date('d', strtotime($small_event->EVENT_DATE)) }}
                          <span>{{ date('F', strtotime($small_event->EVENT_DATE)) }}</span>
	  	  				  			</div>
	  	  				  			<div class="single-short-event-details">
	  	  				  				<h3><a href="/event/single/{{ $small_event->EVENT_ID }}">{{ $small_event->EVENT_TITLE }}</a></h3>
	  	  				  			</div>
  	  				  			</div>
       							</div>
                    <!--== Single Event Box ==-->
                    @endforeach

                    <!--== Single Event Box ==-->
       							<!-- <div class="single-event-box">
  	  				  			<div class="single-short-event-image">
  	  				  				<img src="assets/img/events/1.jpg" class="img-fluid mx-auto d-block" alt="">
  	  				  				<div class="single-short-event-date-box">
	  	  				  				26
	  	  				  				<span>October</span>
	  	  				  			</div>
	  	  				  			<div class="single-short-event-details">
	  	  				  				<h3><a href="#">Lorem Ipsum is simply dummy text of the printing and typesetting industr</a></h3>
	  	  				  			</div>
  	  				  			</div>
  	  				  		</div> -->
                    <!--== Single Event Box ==-->
  	  				  	</div>
  	  				  </div>

  	  				  <!-- <div class="row">
  	  				  	<div class="col-md-12">
  	  				  		<div class="event-notice-date-picker">
  	  				  			<input type="text" id="datepicker" width="276" />
  	  				  		</div>
  	  				  	</div>
  	  				  </div> -->
                <a href="{{ url('/event') }}" class="view-all">View All <i class="fas fa-arrow-circle-right"></i></a>
                
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
                    <a href="/notice/single/{{ $notice->NOTICE_ID }}">View More</a>
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

                <a href="{{ url('/notice') }}" class="view-all">View All <i class="fas fa-arrow-circle-right"></i></a>

  	  				</div>
  	  				<div class="event-notice-box-footer">
  	  					
  	  				</div>
  	  			</div>
  	  		</div>

  	  	</div>
  	  </div>
  	</section>
    <!--== Events & Notice Area End ==-->


    <!--== Gallery Area Start ==-->
  	<section class="section" id="photo-gallery">
  	  <div class="container">

        <!--== Section Title Area ==-->
  	  	<div class="row">
  	  		<div class="col-md-12">
  	  			<div class="section-title-area">
  	  				<div class="section-title-icon"><i class="fas fa-camera"></i></div>
  	  				<h2 class="section-title">Pictures and Gallery</h2>
  	  			</div>
  	  		</div>
  	  	</div>
        <!--== Section Title Area ==-->

    		<div class="row">

          @foreach( $images as $image )
          <!--== Single Gallery ==-->
    			<div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
    				<div class="single-photo-gallery">
    					<img src="/uploads/images/gallery/{{ $image->IMAGE_FILE_PATH }}" class="img-fluid mx-auto d-block" alt="Photo">
    					<a data-fancybox="gallery" href="/uploads/images/gallery/{{ $image->IMAGE_FILE_PATH }}">
  	  					<div class="photo-gallery-overlay">
  	  						<div class="photo-gallery-icon">
  	  							<i class="fas fa-search-plus"></i>
  	  						</div>
  	  					</div>
    					</a>
    				</div>
    			</div>
          <!--== Single Gallery ==-->
          @endforeach

          <!--== Single Gallery ==-->
    			<!-- <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
    				<div class="single-photo-gallery">
    					<img src="assets/img/gallery/2222.jpg" class="img-fluid mx-auto d-block" alt="Photo">
    					<a data-fancybox="gallery" href="assets/img/gallery/2222.jpg">
  	  					<div class="photo-gallery-overlay">
  	  						<div class="photo-gallery-icon">
  	  							<i class="fas fa-search-plus"></i>
  	  						</div>
  	  					</div>
    					</a>
    				</div>
    			</div> -->
          <!--== Single Gallery ==-->
    		</div>
  	  </div>
  	</section>
    <!--== Gallery Area End ==-->

@endsection