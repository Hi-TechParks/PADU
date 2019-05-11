@extends('layouts.master')
@section('content')


    <!--== Dashboard Area Start ==-->
    <section class="section mt-50" id="deshboard">
      <div class="container">
        <!--== Dashboard Breadcrumb Start ==-->
        <div class="row">
          <div class="col-md-12">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="#">FAQ</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit</li>
              </ol>
            </nav>
          </div>
        </div>
        <!--== Dashboard Breadcrumb End ==-->

        <div class="row">
          <!--== Dashboard Sidebar Start ==-->
          <aside class="col-md-3">
            @include('admin.inc.sidebar')
          </aside>
          <!--== Dashboard Sidebar End ==-->

          <!--== Dashboard Main Start ==-->
          <main class="col-md-9">

            @foreach ($faqs as $faq)
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-10">
                    
                    @include('admin.inc.message')
                    
                  </div>
                  <div class="col-md-2">
                    <a href="/admin/faq/edit/{{ $faq->PROGRAM_ADMISSION_FAQ_ID }}" class="btn btn-primary">Refresh</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <!--== Data Form Start ==-->
                <form action="/admin/faq/update/{{ $faq->PROGRAM_ADMISSION_FAQ_ID }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Admission Title</label>
                    <div class="col-sm-8">
                      <select class="form-control" name="admission_title">
                        @foreach( $admissions as $admission )
                        <option value="{{ $admission->PROGRAM_ADMISSION_ID }}" @if( $admission->PROGRAM_ADMISSION_ID == $faq->PROGRAM_ADMISSION_ID ) selected @endif>
                          {{ $admission->ADMISSION_TITLE }}
                        </option>
                        @endforeach
                      </select>

                      @if ($errors->has('admission_title'))
                          <span class="error_msg">
                            {{ $errors->first('admission_title') }}
                          </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Serial No</label>
                    <div class="col-sm-8">
                      <input type="number" class="form-control" name="serial_no" value="{{ $faq->FAQ_SL_NO }}" placeholder="Serial No">

                      @if ($errors->has('serial_no'))
                          <span class="error_msg">
                            {{ $errors->first('serial_no') }}
                          </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Question</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="question" value="{{ $faq->FAQ_Q }}" placeholder="Question">

                      @if ($errors->has('question'))
                          <span class="error_msg">
                            {{ $errors->first('question') }}
                          </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Answer Details</label>
                    <div class="col-sm-8">
                      <textarea class="form-control" name="content" placeholder="Answer Content" rows="15">{{ $faq->FAQ_A }}</textarea>

                      @if ($errors->has('content'))
                          <span class="error_msg">
                            {{ $errors->first('content') }}
                          </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group row">
                    <div class="col-sm-10">
                      <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                  </div>
                </form>
                <!--== Data Form End ==-->
              </div>
            </div>
            @endforeach

          </main>
          <!--== Dashboard Main End ==-->
        </div>
      </div>
    </section>
    <!--== Dashboard Area End ==-->


@endsection