            <nav id="column_left">  
              <ul class="nav nav-list">
                  <li><h4><a href="{{ url('/dashboard') }}">Dashboard</a></h4></li> 
                  
                  <li class="{{ Request::path() == 'admin/message' ? 'active' : '' }} {{ Request::path() == 'admin/message/create' ? 'active' : '' }}">
                    <a class="accordion-heading" data-toggle="collapse" data-target="#message">
                        <span class="nav-header-primary">Message <span class="pull-right"><b class="caret"></b></span></span>
                    </a>
                    <ul class="nav nav-list collapse" id="message">
                      <li><a href="{{ url('/admin/message') }}">Message List</a></li>
                      <li><a href="{{ url('/admin/message/create') }}">Create Message</a></li>
                    </ul>
                  </li>


                  <li class="">
                    <a class="accordion-heading" data-toggle="collapse" data-target="#fac_staff">
                        <span class="nav-header-primary">Faculty And Staff <span class="pull-right"><b class="caret"></b></span></span>
                    </a>
                    <ul class="nav nav-list collapse" id="fac_staff">


                      <li class="{{ Request::path() == 'admin/member' ? 'active' : '' }} {{ Request::path() == 'admin/member/create' ? 'active' : '' }}">
                        <a class="accordion-heading" data-toggle="collapse" data-target="#member">
                            <span class="nav-header-primary">Member <span class="pull-right"><b class="caret"></b></span></span>
                        </a>
                        <ul class="nav nav-list collapse" id="member">
                          <li><a href="{{ url('/admin/member') }}">Member List</a></li>
                          <li><a href="{{ url('/admin/member/create') }}">Create Member</a></li>
                        </ul>
                      </li>

                      <li class="{{ Request::path() == 'admin/designation' ? 'active' : '' }} {{ Request::path() == 'admin/designation/create' ? 'active' : '' }}">
                        <a class="accordion-heading" data-toggle="collapse" data-target="#designation">
                            <span class="nav-header-primary">Designation <span class="pull-right"><b class="caret"></b></span></span>
                        </a>
                        <ul class="nav nav-list collapse" id="designation">
                          <li><a href="{{ url('/admin/designation') }}">Designation List</a></li>
                          <li><a href="{{ url('/admin/designation/create') }}">Create Designation</a></li>
                        </ul>
                      </li>

                    </ul>
                  </li>

                  
                  <li class="">
                    <a class="accordion-heading" data-toggle="collapse" data-target="#programs">
                        <span class="nav-header-primary">Programs <span class="pull-right"><b class="caret"></b></span></span>
                    </a>
                    <ul class="nav nav-list collapse" id="programs">
                      

                      <li class="{{ Request::path() == 'admin/admission' ? 'active' : '' }} {{ Request::path() == 'admin/admission/create' ? 'active' : '' }}">
                        <a class="accordion-heading" data-toggle="collapse" data-target="#admission">
                            <span class="nav-header-primary">Program Admission <span class="pull-right"><b class="caret"></b></span></span>
                        </a>
                        <ul class="nav nav-list collapse" id="admission">
                          <li><a href="{{ url('/admin/admission') }}">Admission List</a></li>
                          <li><a href="{{ url('/admin/admission/create') }}">Create Admission</a></li>
                        </ul>
                      </li>

                      <li class="{{ Request::path() == 'admin/program' ? 'active' : '' }} {{ Request::path() == 'admin/program/create' ? 'active' : '' }}">
                        <a class="accordion-heading" data-toggle="collapse" data-target="#program">
                            <span class="nav-header-primary">Program <span class="pull-right"><b class="caret"></b></span></span>
                        </a>
                        <ul class="nav nav-list collapse" id="program">
                          <li><a href="{{ url('/admin/program') }}">Program List</a></li>
                          <li><a href="{{ url('/admin/program/create') }}">Create Program</a></li>
                        </ul>
                      </li>

                      <li class="{{ Request::path() == 'admin/procate' ? 'active' : '' }} {{ Request::path() == 'admin/procate/create' ? 'active' : '' }}">
                        <a class="accordion-heading" data-toggle="collapse" data-target="#procate">
                            <span class="nav-header-primary">Program Category <span class="pull-right"><b class="caret"></b></span></span>
                        </a>
                        <ul class="nav nav-list collapse" id="procate">
                          <li><a href="{{ url('/admin/procate') }}">Category List</a></li>
                          <li><a href="{{ url('/admin/procate/create') }}">Create Category</a></li>
                        </ul>
                      </li>

                      <li class="{{ Request::path() == 'admin/faq' ? 'active' : '' }} {{ Request::path() == 'admin/faq/create' ? 'active' : '' }}">
                        <a class="accordion-heading" data-toggle="collapse" data-target="#faq">
                            <span class="nav-header-primary">Program FAQ <span class="pull-right"><b class="caret"></b></span></span>
                        </a>
                        <ul class="nav nav-list collapse" id="faq">
                          <li><a href="{{ url('/admin/faq') }}">FAQ List</a></li>
                          <li><a href="{{ url('/admin/faq/create') }}">Create FAQ</a></li>
                        </ul>
                      </li>

                    </ul>
                  </li>


                  <li class="">
                    <a class="accordion-heading" data-toggle="collapse" data-target="#alumni">
                        <span class="nav-header-primary">Alumni <span class="pull-right"><b class="caret"></b></span></span>
                    </a>
                    <ul class="nav nav-list collapse" id="alumni">
                      

                      <li class="{{ Request::path() == 'admin/alumni' ? 'active' : '' }} {{ Request::path() == 'admin/alumni/create' ? 'active' : '' }}">
                        <a class="accordion-heading" data-toggle="collapse" data-target="#registered">
                            <span class="nav-header-primary">Registered Alumni <span class="pull-right"><b class="caret"></b></span></span>
                        </a>
                        <ul class="nav nav-list collapse" id="registered">
                          <li><a href="{{ url('/admin/alumni') }}">Alumni List</a></li>
                          <li><a href="{{ url('/admin/alumni/create') }}">Create Alumni</a></li>
                        </ul>
                      </li>

                      <li class="{{ Request::path() == 'admin/jobcate' ? 'active' : '' }} {{ Request::path() == 'admin/jobcate/create' ? 'active' : '' }}">
                        <a class="accordion-heading" data-toggle="collapse" data-target="#jobcate">
                            <span class="nav-header-primary">Job Category <span class="pull-right"><b class="caret"></b></span></span>
                        </a>
                        <ul class="nav nav-list collapse" id="jobcate">
                          <li><a href="{{ url('/admin/jobcate') }}">Category List</a></li>
                          <li><a href="{{ url('/admin/jobcate/create') }}">Create Category</a></li>
                        </ul>
                      </li>

                      <li class="{{ Request::path() == 'admin/alumni/notice' ? 'active' : '' }} {{ Request::path() == 'admin/alumni/notice/create' ? 'active' : '' }}">
                        <a class="accordion-heading" data-toggle="collapse" data-target="#alumni_notice">
                            <span class="nav-header-primary">Alumni Notice <span class="pull-right"><b class="caret"></b></span></span>
                        </a>
                        <ul class="nav nav-list collapse" id="alumni_notice">
                          <li><a href="{{ url('/admin/alumni/notice') }}">Alumni Notice List</a></li>
                          <li><a href="{{ url('/admin/alumni/notice/create') }}">Create Alumni Notice</a></li>
                        </ul>
                      </li>

                      <li class="{{ Request::path() == 'admin/alumni/event' ? 'active' : '' }} {{ Request::path() == 'admin/alumni/event/create' ? 'active' : '' }}">
                        <a class="accordion-heading" data-toggle="collapse" data-target="#alumni_event">
                            <span class="nav-header-primary">Alumni Event <span class="pull-right"><b class="caret"></b></span></span>
                        </a>
                        <ul class="nav nav-list collapse" id="alumni_event">
                          <li><a href="{{ url('/admin/alumni/event') }}">Alumni Event List</a></li>
                          <li><a href="{{ url('/admin/alumni/event/create') }}">Create Alumni Event</a></li>
                        </ul>
                      </li>

                    </ul>
                  </li>

                  <li class="{{ Request::path() == 'admin/notice' ? 'active' : '' }} {{ Request::path() == 'admin/notice/create' ? 'active' : '' }}">
                    <a class="accordion-heading" data-toggle="collapse" data-target="#notice">
                        <span class="nav-header-primary">Notice <span class="pull-right"><b class="caret"></b></span></span>
                    </a>
                    <ul class="nav nav-list collapse" id="notice">
                      <li><a href="{{ url('/admin/notice') }}">Notice List</a></li>
                      <li><a href="{{ url('/admin/notice/create') }}">Create Notice</a></li>
                    </ul>
                  </li>

                  <li class="{{ Request::path() == 'admin/event' ? 'active' : '' }} {{ Request::path() == 'admin/event/create' ? 'active' : '' }}">
                    <a class="accordion-heading" data-toggle="collapse" data-target="#event">
                        <span class="nav-header-primary">Event <span class="pull-right"><b class="caret"></b></span></span>
                    </a>
                    <ul class="nav nav-list collapse" id="event">
                      <li><a href="{{ url('/admin/event') }}">Event List</a></li>
                      <li><a href="{{ url('/admin/event/create') }}">Create Event</a></li>
                    </ul>
                  </li>

                  <li class="{{ Request::path() == 'admin/gallery' ? 'active' : '' }} {{ Request::path() == 'admin/gallery/create' ? 'active' : '' }}">
                    <a class="accordion-heading" data-toggle="collapse" data-target="#gallery">
                        <span class="nav-header-primary">Gallery <span class="pull-right"><b class="caret"></b></span></span>
                    </a>
                    <ul class="nav nav-list collapse" id="gallery">
                      <li><a href="{{ url('/admin/gallery') }}">Gallery List</a></li>
                      <li><a href="{{ url('/admin/gallery/create') }}">Create Gallery</a></li>
                    </ul>
                  </li>

                  <li class="{{ Request::path() == 'admin/tour' ? 'active' : '' }} {{ Request::path() == 'admin/tour/create' ? 'active' : '' }}">
                    <a class="accordion-heading" data-toggle="collapse" data-target="#tour">
                        <span class="nav-header-primary">Tour <span class="pull-right"><b class="caret"></b></span></span>
                    </a>
                    <ul class="nav nav-list collapse" id="tour">
                      <li><a href="{{ url('/admin/tour') }}">Tour List</a></li>
                      <li><a href="{{ url('/admin/tour/create') }}">Create Tour</a></li>
                    </ul>
                  </li>

                  <li class="{{ Request::path() == 'admin/publication' ? 'active' : '' }} {{ Request::path() == 'admin/publication/create' ? 'active' : '' }}">
                    <a class="accordion-heading" data-toggle="collapse" data-target="#publication">
                        <span class="nav-header-primary">Publications <span class="pull-right"><b class="caret"></b></span></span>
                    </a>
                    <ul class="nav nav-list collapse" id="publication">
                      <li><a href="{{ url('/admin/publication') }}">Publication List</a></li>
                      <li><a href="{{ url('/admin/publication/create') }}">Create Publication</a></li>
                    </ul>
                  </li>

                  <li class="{{ Request::path() == 'admin/slide' ? 'active' : '' }} {{ Request::path() == 'admin/slide/create' ? 'active' : '' }}">
                    <a class="accordion-heading" data-toggle="collapse" data-target="#blogcate">
                        <span class="nav-header-primary">Slider <span class="pull-right"><b class="caret"></b></span></span>
                    </a>
                    <ul class="nav nav-list collapse" id="blogcate">
                      <li><a href="{{ url('/admin/slide') }}">Slide List</a></li>
                      <li><a href="{{ url('/admin/slide/create') }}">Create Slide</a></li>
                    </ul>
                  </li>

                  <li class="{{ Request::path() == 'admin/email' ? 'active' : '' }}">
                    <a href="{{ url('/admin/email') }}">Contact Mails</a>
                  </li>


                  <li class="{{ Request::path() == 'admin/address/edit' ? 'active' : '' }} {{ Request::path() == 'admin/about/edit' ? 'active' : '' }}">
                    <a class="accordion-heading" data-toggle="collapse" data-target="#settings">
                        <span class="nav-header-primary">Settings <span class="pull-right"><b class="caret"></b></span></span>
                    </a>
                    <ul class="nav nav-list collapse" id="settings">
                      

                      <li class="{{ Request::path() == 'admin/address/edit' ? 'active' : '' }}">
                        <a href="{{ url('/admin/address/edit') }}">Contact Details</a>
                      </li>

                      <li class="{{ Request::path() == 'admin/about/edit' ? 'active' : '' }}">
                        <a href="{{ url('/admin/about/edit') }}">About Details</a>
                      </li>

                    </ul>
                  </li>

              </ul>
            </nav>