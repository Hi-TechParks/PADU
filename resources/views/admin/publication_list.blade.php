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
                <form action="{{ url('/admin/publication') }}" method="get" class="dashboard-search-form">
                  <div class="row">
                    <div class="col">
                      <input type="text" class="form-control" name="publication_title" placeholder="Publication Title">
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
                <caption>List of Publications</caption>
                <thead>
                  <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Author</th>
                    <th scope="col">Name Of Journal</th>
                    <th scope="col">Publication Date</th>
                    <th scope="col">Volume</th>
                    <th scope="col">Active Status</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach( $publications as $publication )
                  <tr>
                    <td>{{ $publication->PUBLICATION_TITLE }}</td>
                    <td>{{ $publication->AUTHORS }}</td>
                    <td>{{ $publication->JOURNAL_NAME }}</td>
                    <td>{{ $publication->PUBLICATION_DATE }}</td>
                    <td>{{ $publication->VOLUME }}</td>
                    <td>
                      @if( $publication->ACTIVE_STATUS == '1' )
                        <a href="/admin/publication/status/{{ $publication->JOURNAL_PUBLICATION_ID }}" class="active_status">Active</a>
                      @else
                        <a href="/admin/publication/status/{{ $publication->JOURNAL_PUBLICATION_ID }}" class="inactive_status">Inactive</a>
                      @endif
                    </td>
                    <td>
                      <a href="/admin/publication/show/{{ $publication->JOURNAL_PUBLICATION_ID }}" class="btn btn-success">View</a>
                      <a href="/admin/publication/edit/{{ $publication->JOURNAL_PUBLICATION_ID }}" class="btn btn-primary">Edit</a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>

            {{ $publications->links() }}
            <!--== Data table End ==-->

          </main>
          <!--== Dashboard Main End ==-->
        </div>
      </div>
    </section>
    <!--== Dashboard Area End ==-->


@endsection