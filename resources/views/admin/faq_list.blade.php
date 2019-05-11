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
                <li class="breadcrumb-item active" aria-current="page">List</li>
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
                <!--== Search Form Start ==-->
                <form action="{{ url('/admin/faq') }}" method="get" class="dashboard-search-form">
                  <div class="row">
                    <div class="col">
                      <input type="text" class="form-control" name="question" placeholder="Question">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" name="admission_title" placeholder="Admission Title">
                    </div>
                    <div class="col">
                      <button type="submit" class="btn btn-success">Search</button>
                    </div>
                  </div>
                </form>
                <!--== Search Form End ==-->
              </div>
            </div>

            <!--== Data table Start ==-->
            <div class="table-responsive">
              <table class="table table-hover table-bordered table-striped">
                <caption>List of Faqs</caption>
                <thead>
                  <tr>
                    <th scope="col">Question</th>
                    <th scope="col">FAQ No</th>
                    <th scope="col">Admission Title</th>
                    <th scope="col">Active Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach( $faqs as $faq )
                  <tr>
                    <td>{{ $faq->FAQ_Q }}</td>
                    <td>{{ $faq->FAQ_SL_NO }}</td>
                    <td>{{ $faq->ADMISSION_TITLE }}</td>
                    <td>
                      @if( $faq->ACTIVE_STATUS == '1' )
                        <a href="/admin/faq/status/{{ $faq->PROGRAM_ADMISSION_FAQ_ID }}" class="active_status">Active</a>
                      @else
                        <a href="/admin/faq/status/{{ $faq->PROGRAM_ADMISSION_FAQ_ID }}" class="inactive_status">Inactive</a>
                      @endif
                    </td>
                    <td>
                      <a href="/admin/faq/show/{{ $faq->PROGRAM_ADMISSION_FAQ_ID }}" class="btn btn-success">View</a>
                      <a href="/admin/faq/edit/{{ $faq->PROGRAM_ADMISSION_FAQ_ID }}" class="btn btn-primary">Edit</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

            {{ $faqs->links() }}
            <!--== Data table End ==-->

          </main>
          <!--== Dashboard Main End ==-->
        </div>
      </div>
    </section>
    <!--== Dashboard Area End ==-->


@endsection