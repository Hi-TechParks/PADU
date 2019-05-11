@extends('layouts.master')
@section('content')

  	<!--== Journals Area Start ==-->
    <section class="section pd-btm" id="about-page">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-xs-12">
            <div class="about-page-details">
              <div class="row sub-page-title-box">
                <div class="col-md-6 col-xs-12">
                  <h2 class="sub-page-title">Publication</h2>
                </div>
                <div class="col-md-6 col-xs-12">
                  <form action="{{ url('/publication') }}" method="get" class="">
                    <div class="row">
                      <div class="col">
                        <input type="text" class="form-control" name="publication_title" placeholder="Publication">
                      </div>
                      <div class="col">
                        <button type="submit" class="btn">Search</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
                
              <div class="table-responsive">
              <table class="table table-bordered research-table">
                <thead>
                  <tr>
                    <th scope="col">Publication Title</th>
                    <th scope="col">Authors</th>
                    <th scope="col">Name Of Journal</th>
                    <th scope="col">Volume</th>
                    <th scope="col">Publish Date</th>
                  </tr>
                </thead>
                <tbody>

                  @foreach( $publications as $publication )
                  <tr>
                    <td>{{ $publication->PUBLICATION_TITLE }}
                      <br/>
                      @if(!empty($publication->FILE_PATH))
                      <a href="/uploads/images/publication/{{ $publication->FILE_PATH }}" class="research-download" download>Download</a>
                      @endif
                    </td>
                    <td>{{ $publication->AUTHORS }}</td>
                    <td>{{ $publication->JOURNAL_NAME }}</td>
                    <td>{{ $publication->VOLUME }}</td>
                    <td>{{ $publication->PUBLICATION_DATE }}</td>
                  </tr>
                  @endforeach

                  <!-- <tr>
                    <td>Inference for the Scale Parameter of the Class of Life-Time Distributions Using Transformed Chisquare Family
                      <br/><a href="#" class="research-download" download>Download</a>
                    </td>
                    <td>Prokas Chopra</td>
                    <td>Adit chopra Das Tipsa Mit</td>
                    <td>Dhaka University Journal of PADU</td>
                    <td>Vol. 40, No. 2, pp.125-142</td>
                  </tr> -->
                  
                </tbody>
              </table>
              </div>


              <div class="mx-auto d-block d-flex">
                <nav aria-label="..." class="mx-auto d-block">
                  {{ $publications->links() }}
                </nav>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>
    <!--== Journals Area End ==-->

@endsection