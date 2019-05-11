@extends('layouts.master')
@section('content')

  	<!--== Program Admission Area Start ==-->
    <section class="section" id="about-page">
      <div class="container">


        <!-- <div class="row">
          <div class="col-lg-12 col-md-12 col-xs-12">
              <nav class="navbar navbar-expand-lg program-navbar">
                  
                  <div class="dropdown">
                    <a class="btn btn-secondary dropdown-toggle program-dropdown" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Undergraduate Program
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                      <a class="dropdown-item" href="#">Under Graduation</a>
                      <a class="dropdown-item" href="#">Graduation</a>
                      <a class="dropdown-item" href="#">Post-Graduation</a>
                      <a class="dropdown-item" href="#">M.Phill</a>
                      <a class="dropdown-item" href="#">PHD</a>
                    </div>
                  </div>
                  
              </nav>
            <br/>
          </div>
        </div> -->

        <div class="row">
          <div class="col-lg-12 col-md-12 col-xs-12">
            <div class="about-page-details">

              @foreach( $admissions as $admission )
              <div class="btn btn-secondary program-dropdown">{{ $admission->CATEGORY_NAME }}</div>
              <br/>

              <h1>{{ $admission->ADMISSION_TITLE }}</h1>
              <br/>
              <p>
                {!! $admission->ADMISSION_DETAILS !!}
              </p>
              @endforeach

            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== Program Admission Area End ==-->


    <!--== Program FAQ Area Start ==-->
    <section class="section pd-btm" id="faqs">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-xs-12">
            <div class="faqs-area">
              <div class="accordion" id="accordionExample">

                <!--== Single FAQ Card ==-->
                <!-- <div class="card">
                  <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                      <a class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        What are the total seat numbers in public administration department ? <span><i class="fas fa-angle-down"></i></span>
                      </a>
                    </h2>
                  </div>

                  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="card-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div> -->
                <!--== Single FAQ Card ==-->

                @foreach( $faqs as $faq )
                <!--== Single FAQ Card ==-->
                <div class="card">
                  <div class="card-header" id="heading-{{ $faq->PROGRAM_ADMISSION_FAQ_ID }}">
                    <h2 class="mb-0">
                      <a class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse-{{ $faq->PROGRAM_ADMISSION_FAQ_ID }}" aria-expanded="false" aria-controls="collapse-{{ $faq->PROGRAM_ADMISSION_FAQ_ID }}">
                        {{ $faq->FAQ_Q }} <span><i class="fas fa-angle-down"></i></span>
                      </a>
                    </h2>
                  </div>
                  <div id="collapse-{{ $faq->PROGRAM_ADMISSION_FAQ_ID }}" class="collapse" aria-labelledby="heading-{{ $faq->PROGRAM_ADMISSION_FAQ_ID }}" data-parent="#accordionExample">
                    <div class="card-body">
                      {!! $faq->FAQ_A !!}
                    </div>
                  </div>
                </div>
                <!--== Single FAQ Card ==-->
                @endforeach

                <!--== Single FAQ Card ==-->
                <!-- <div class="card">
                  <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                      <a class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        What are the total seat numbers in public administration department ? <span><i class="fas fa-angle-down"></i></span>
                      </a>
                    </h2>
                  </div>
                  <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                      Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                    </div>
                  </div>
                </div> -->
                <!--== Single FAQ Card ==-->
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== Program FAQ Area End ==-->

@endsection