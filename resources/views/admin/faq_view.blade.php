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
            @foreach( $faqs as $faq )
            <div class="card">
              <!-- <img src="/uploads/images/profile/" class="card-img-top" alt="Event"> -->
              <div class="card-body">
                <h5 class="card-title">{{ $faq->FAQ_Q }}</h5>
                <p class="card-text">{!! $faq->FAQ_A !!}</p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">FAQ No: {{ $faq->FAQ_SL_NO }}</li>
                <li class="list-group-item">Admission Title: {{ $faq->   ADMISSION_TITLE }}</li>
                <li class="list-group-item">
                  @if( $faq->ACTIVE_STATUS == '1' )
                    <p class="active_status">Active</p>
                  @else
                    <p class="inactive_status">Inactive</p>
                  @endif
                </li>
              </ul>
              <div class="card-body">
                <a href="/admin/faq/edit/{{ $faq->PROGRAM_ADMISSION_FAQ_ID }}" class="btn btn-primary">Edit</a>
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