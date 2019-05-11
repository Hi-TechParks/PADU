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
            @foreach( $publications as $publication )
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">{{ $publication->PUBLICATION_TITLE }}</h5>
                <p class="card-text">Author: {{ $publication->AUTHORS }}</p>

                @if(!empty($publication->FILE_PATH))
                <a href="/uploads/images/publication/{{ $publication->FILE_PATH }}" class="btn btn-success" download>Download Publication</a>
                @endif
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Name Of Journal: {{ $publication->JOURNAL_NAME }}</li>
                <li class="list-group-item">Publication Date: {{ $publication->PUBLICATION_DATE }}</li>
                <li class="list-group-item">Volume: {{ $publication->VOLUME }}</li>
                <li class="list-group-item">
                  @if( $publication->ACTIVE_STATUS == '1' )
                    <p class="active_status">Active</p>
                  @else
                    <p class="inactive_status">Inactive</p>
                  @endif
                </li>
              </ul>
              <div class="card-body">
                <a href="/admin/publication/edit/{{ $publication->JOURNAL_PUBLICATION_ID }}" class="btn btn-primary">Edit</a>
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