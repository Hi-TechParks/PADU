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
                <li class="breadcrumb-item"><a href="#">Gallery</a></li>
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

            @foreach ($images as $image)
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-10">
                    
                    @include('admin.inc.message')
                    
                  </div>
                  <div class="col-md-2">
                    <a href="/admin/gallery/edit/{{ $image->IMAGE_ID }}" class="btn btn-primary">Refresh</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <!--== Data Form Start ==-->
                <form action="/admin/gallery/update/{{ $image->IMAGE_ID }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Image Title</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="image_title" value="{{ $image->IMAGE_TITLE }}" placeholder="Image Title">

                      @if ($errors->has('image_title'))
                          <span class="error_msg">
                            {{ $errors->first('image_title') }}
                          </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Image Details</label>
                    <div class="col-sm-8">
                      <textarea class="form-control" name="content" placeholder="Image Content" rows="15">{{ $image->IMAGE_DESC }}</textarea>

                      @if ($errors->has('content'))
                          <span class="error_msg">
                            {{ $errors->first('content') }}
                          </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Gallery Image</label>
                    <div class="col-sm-8">
                      <input type="file" class="form-control" name="gallery_image" placeholder="Gallery Image">

                      @if ($errors->has('gallery_image'))
                          <span class="error_msg">
                            {{ $errors->first('gallery_image') }}
                          </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Show on Home</label>
                    <div class="col-sm-8">
                      <select class="form-control" name="show_home">
                        <option value="0">Select</option>
                        <option value="1" @if( $image->HOME_PAGE_SHOW_FLAG == '1') selected @endif>Yes</option>
                        <option value="0" @if( $image->HOME_PAGE_SHOW_FLAG == '0') selected @endif>No</option>
                      </select>

                      @if ($errors->has('show_home'))
                          <span class="error_msg">
                            {{ $errors->first('show_home') }}
                          </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Serial No</label>
                    <div class="col-sm-8">
                      <input type="number" class="form-control" name="serial_no" value="{{ $image->SL_NO }}" placeholder="Serial No">

                      @if ($errors->has('serial_no'))
                          <span class="error_msg">
                            {{ $errors->first('serial_no') }}
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