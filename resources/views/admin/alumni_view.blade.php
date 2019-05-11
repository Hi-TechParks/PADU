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
                <li class="breadcrumb-item"><a href="#">Alumni</a></li>
                <li class="breadcrumb-item active" aria-current="page">View</li>
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

            <!--== Data View Card Start ==-->
            @foreach( $alumnis as $alumni )
            <div class="card">
              <img src="/uploads/images/alumni/{{ $alumni->PROFILE_IMAGE_PATH }}" class="card-img-top" alt="Event">
              <div class="card-body">
                <h5 class="card-title">{{ $alumni->MEMBER_NAME }}</h5>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Batch: {{ $alumni->BATCH_NO }}</li>
                <li class="list-group-item">Date Of Birth: {{ $alumni->DOB }}</li>
                <li class="list-group-item">Job Type: {{ $alumni->CATEGORY_NAME }}</li>
                <li class="list-group-item">Designation: {{ $alumni->DESIGNATION }}</li>
                <li class="list-group-item">Email Address: {{ $alumni->MAIL_ID }}</li>
                <li class="list-group-item">Contact Phone: {{ $alumni->CONTACT_PHONE }}</li>
                <li class="list-group-item">
                  @if( $alumni->ACTIVE_STATUS == '1' )
                    <p class="active_status">Active</p>
                  @else
                    <p class="inactive_status">Inactive</p>
                  @endif
                </li>
              </ul>
              <div class="card-body">
                <a href="/admin/alumni/edit/{{ $alumni->ALUMNI_REGISTRATION_ID }}" class="btn btn-primary">Edit</a>
              </div>
            </div>
            @endforeach
            <!--== Data View Card End ==-->

          </main>
          <!--== Dashboard Main End ==-->
        </div>
      </div>
    </section>
    <!--== Dashboard Area End ==-->


@endsection