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
                <li class="breadcrumb-item"><a href="#">Publication</a></li>
                <li class="breadcrumb-item active" aria-current="page">Create</li>
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

            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-10">
                    
                    @include('admin.inc.message')
                    
                  </div>
                  <div class="col-md-2">
                    <a href="{{ URL('/admin/publication/create')}}" class="btn btn-primary">Refresh</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="card">
              <div class="card-body">
                <!--== Data Form Start ==-->
                <form action="{{url('/admin/publication/store')}}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Publication Title</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="publication_title" placeholder="Publication Title">

                      @if ($errors->has('publication_title'))
                          <span class="error_msg">
                            {{ $errors->first('publication_title') }}
                          </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Author</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="author" placeholder="Author">

                      @if ($errors->has('author'))
                          <span class="error_msg">
                            {{ $errors->first('author') }}
                          </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Name Of Journal</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="journal_name" placeholder="Name Of Journal">

                      @if ($errors->has('journal_name'))
                          <span class="error_msg">
                            {{ $errors->first('journal_name') }}
                          </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Publication Date</label>
                    <div class="col-sm-8">
                      <input type="date" class="form-control" name="publication_date" placeholder="Publication Date">

                      @if ($errors->has('publication_date'))
                          <span class="error_msg">
                            {{ $errors->first('publication_date') }}
                          </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Publication File</label>
                    <div class="col-sm-8">
                      <input type="file" class="form-control" name="publication_file" placeholder="Publication File">

                      @if ($errors->has('publication_file'))
                          <span class="error_msg">
                            {{ $errors->first('publication_file') }}
                          </span>
                      @endif
                    </div>
                  </div>

                  <div class="form-group row">
                    <label class="col-sm-4 col-form-label">Volume</label>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="volume" placeholder="Volume">

                      @if ($errors->has('volume'))
                          <span class="error_msg">
                            {{ $errors->first('volume') }}
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

          </main>
          <!--== Dashboard Main End ==-->
        </div>
      </div>
    </section>
    <!--== Dashboard Area End ==-->


@endsection