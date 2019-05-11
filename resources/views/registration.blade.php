@extends('layouts.master')
@section('content')

  	<!--== Program Gallery Area Start ==-->
    <section class="section" id="program-gallery">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 offset-md-3 col-md-8 offset-md-2 col-sm-12">

            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    
                    <h2 class="sub-page-title">Alumni Registration</h2>
                    
                    @include('admin.inc.message')
                    
                  </div>
                </div>
              </div>
            </div>
          

            <div class="card">
              <div class="card-body">
                <!--== Data Form Start ==-->
                <form action="{{url('/alumni/registration/store')}}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Alumni Name</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="alumni_name" placeholder="Alumni Name">

                      @if ($errors->has('alumni_name'))
                          <span class="error_msg">
                            {{ $errors->first('alumni_name') }}
                          </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Batch No</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="batch_no" placeholder="Batch No">

                      @if ($errors->has('batch_no'))
                          <span class="error_msg">
                            {{ $errors->first('batch_no') }}
                          </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Date Of Birth</label>
                    <div class="col-sm-8">
                      <input type="date" class="form-control" name="birth_date" placeholder="Date Of Birth">

                      @if ($errors->has('birth_date'))
                          <span class="error_msg">
                            {{ $errors->first('birth_date') }}
                          </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Profile Image</label>
                    <div class="col-sm-8">
                      <input type="file" class="form-control" name="alumni_image" placeholder="Profile Image">

                      @if ($errors->has('alumni_image'))
                          <span class="error_msg">
                            {{ $errors->first('alumni_image') }}
                          </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Job Category</label>
                    <div class="col-sm-8">
                      <select class="form-control" name="job_category">
                        <option value="">Select Category</option>
                        @foreach( $job_cates as $job_cate )
                        <option value="{{ $job_cate->JOB_CATEGORY_ID }}">{{ $job_cate->CATEGORY_NAME }}</option>
                        @endforeach
                      </select>

                      @if ($errors->has('job_category'))
                          <span class="error_msg">
                            {{ $errors->first('job_category') }}
                          </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Designation</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="designation" placeholder="Designation">

                      @if ($errors->has('designation'))
                          <span class="error_msg">
                            {{ $errors->first('designation') }}
                          </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Email Address</label>
                    <div class="col-sm-8">
                      <input type="email" class="form-control" name="email" placeholder="Email">

                      @if ($errors->has('email'))
                          <span class="error_msg">
                            {{ $errors->first('email') }}
                          </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Contact Phone</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="phone" placeholder="Phone Number">

                      @if ($errors->has('phone'))
                          <span class="error_msg">
                            {{ $errors->first('phone') }}
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

          </div>
        </div>
      </div>
    </section>
    <!--== Program Gallery Area End ==-->

@endsection