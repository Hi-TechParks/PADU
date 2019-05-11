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
                <form action="{{ url('/admin/alumni') }}" method="get" class="dashboard-search-form">
                  <div class="row">
                    <div class="col">
                      <input type="text" class="form-control" name="alumni_name" placeholder="Alumni Name">
                    </div>
                    <div class="col">
                      <input type="text" class="form-control" name="job_category" placeholder="Profession">
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
                <caption>List of Alumnis</caption>
                <thead>
                  <tr>
                    <th scope="col">Alumni Name</th>
                    <th scope="col">Batch</th>
                    <th scope="col">Date Of Birth</th>
                    <th scope="col">Job Type</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Active Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach( $alumnis as $alumni )
                  <tr>
                    <td>{{ $alumni->MEMBER_NAME }}</td>
                    <td>{{ $alumni->BATCH_NO }}</td>
                    <td>{{ $alumni->DOB }}</td>
                    <td>{{ $alumni->CATEGORY_NAME }}</td>
                    <td>{{ $alumni->DESIGNATION }}</td>
                    <td>
                      @if( $alumni->ACTIVE_STATUS == '1' )
                        <a href="/admin/alumni/status/{{ $alumni->ALUMNI_REGISTRATION_ID }}" class="active_status">Active</a>
                      @else
                        <a href="/admin/alumni/status/{{ $alumni->ALUMNI_REGISTRATION_ID }}" class="inactive_status">Inactive</a>
                      @endif
                    </td>
                    <td>
                      <a href="/admin/alumni/show/{{ $alumni->ALUMNI_REGISTRATION_ID }}" class="btn btn-success">View</a>
                      <a href="/admin/alumni/edit/{{ $alumni->ALUMNI_REGISTRATION_ID }}" class="btn btn-primary">Edit</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

            {{ $alumnis->links() }}
            <!--== Data table End ==-->

          </main>
          <!--== Dashboard Main End ==-->
        </div>
      </div>
    </section>
    <!--== Dashboard Area End ==-->


@endsection