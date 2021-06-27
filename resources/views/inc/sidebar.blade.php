<!-- ============================================================== -->
<!-- left sidebar -->
<!-- ============================================================== -->

<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    @if(App\University::find(Request::segment(2)))
                                <li class="nav-item">
                                    <a class="nav-link" href="/university/{{Request::segment(2)}}"><i class="fas fa-university"
                                                                                                             aria-hidden="true"></i>{{App\University::find(Request::segment(2))->short_name}}</a>
                                </li>
                            @endif

                            @if(Auth::guest() )
                            <li class="nav-item">
                                <a class="nav-link" href="/university/{{Request::segment(2)}}/majors"><i class="fa fa-list"
                                                                                                         aria-hidden="true"></i>Majors</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/university/{{Request::segment(2)}}/courses"><i class="fa fa-book"
                                                                                                          aria-hidden="true"></i>Courses</a>
                            </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/university/{{Request::segment(2)}}/instructors"><i class="fa fa-user"
                                                                                                                  aria-hidden="true"></i>Instructors</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/contact"><i class="fa fa-address-book" aria-hidden="true"></i>Contact Us</a>
                                </li>
                            @endif


                    @if(Auth::check() )
                        @if(Auth::user()->role == 2 || Auth::user()->role == 1 )

                            <li class="nav-item">
                                <a class="nav-link" href="/university/{{Request::segment(2)}}/majors"><i class="fa fa-list"
                                                                                                         aria-hidden="true"></i>Majors</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/university/{{Request::segment(2)}}/courses"><i class="fa fa-book"
                                                                                                          aria-hidden="true"></i>Courses</a>
                            </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/university/{{Request::segment(2)}}/instructors"><i class="fa fa-user"
                                                                                                                  aria-hidden="true"></i>Instructors</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/contact"><i class="fa fa-address-book" aria-hidden="true"></i>Contact Us</a>
                                </li>
                            @else

                            <li class="nav-item">
                                <a class="nav-link" href="/university/{{Request::segment(2)}}/majors"><i class="fa fa-list"
                                                                                                         aria-hidden="true"></i>Majors</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/university/{{Request::segment(2)}}/instructors"><i class="fa fa-user"
                                                                                                              aria-hidden="true"></i>Instructors</a>
                            </li>

                        @endif

                    @endif


                    @if(Auth::check())

                        <li class="nav-divider">
                            Features
                        </li>
                        @if(Auth::user()->role == 3)

                            <li class="nav-item">
                                <a class="nav-link" href="/university/{{Request::segment(2)}}/addfaculty"><i class="fa fa-plus" aria-hidden="true">
                                    </i>Add Faculty</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/university/{{Request::segment(2)}}/addmajor"><i class="fa fa-plus" aria-hidden="true">
                                    </i>Add Major</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/university/{{Request::segment(2)}}/add_course"><i class="fa fa-plus" aria-hidden="true">
                                    </i>Add Course</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/university/{{Request::segment(2)}}/user"><i class="fa fa-users" aria-hidden="true"></i>Users</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/university/{{Request::segment(2)}}/available_universities"><i class="fas fa-boxes" aria-hidden="true">
                                    </i>Universities</a>
                            </li>
                           
                            <li class="nav-item">
                                <a class="nav-link" href="/university/{{Request::segment(2)}}/available_faculties"><i class="fas fa-boxes" aria-hidden="true">
                                    </i>Faculties</a>
                            </li>
                         
                            <li class="nav-item">
                                <a class="nav-link" href="/university/{{Request::segment(2)}}/available_courses"><i class="fas fa-boxes" aria-hidden="true">
                                    </i>Available Courses</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/university/{{Request::segment(2)}}/approve_instructor"><i class="fa fa-play-circle" aria-hidden="true">
                                    </i>Approve Instructors</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/university/{{Request::segment(2)}}/viewmessages"><i class="fa fa-comment" aria-hidden="true">
                                    </i>View messages</a>
                            </li>

                        @endif
                        <li class="nav-item">
                            @if(Auth::user()->role == 3)
                                <a class="nav-link" href="/university/{{Request::segment(2)}}/my_uploads"><i class="fa fa-fire" aria-hidden="true">
                                    </i>All Uploads</a>
                            @endif
                            @if(Auth::user()->role == 2 || Auth::user()->role == 1 )
                                <a class="nav-link" href="/university/{{Request::segment(2)}}/my_uploads"><i class="fa fa-fire" aria-hidden="true">
                                    </i>My Uploads
                                    @if(Auth::user()->role==2)
                                    <span class=" rounded-circle badge-success p-2 float-right">
                                    {{App\Upload::where('instructor_id',Auth::user()->id)->count()}}  
                                     </span>
                                     @endif
                                     @if(Auth::user()->role!=2)
                                    <span class=" rounded-circle badge-success p-2 float-right">
                                    {{App\Upload::where('student_id',Auth::user()->id)->count()}}  
                                     </span>
                                     @endif
                                     </a>
                            @endif

                        </li>
                        <li class="nav-item">
                            @if(Auth::user()->role == 2 || Auth::user()->role == 1 )
                                <a class="nav-link" href="/university/{{Request::segment(2)}}/my_downloads"><i class="fa fa-arrow-down" aria-hidden="true">
                                    </i>My Downloads <span class=" rounded-circle badge-success p-2 float-right">
                                    {{App\UserDownload::where('user_id',Auth::user()->id)->count()}}
                         </span> </a>
                            @endif
                        </li>

              @if(Auth::user()->role==2 && Auth::user()->status=='active' )
                            <li class="nav-divider">
                                Operations
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/university/{{Request::segment(2)}}/add_course"><i class="fa fa-plus" aria-hidden="true"></i>Add Course</a>
                            </li>



                    @endif
                    @endif

                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- ============================================================== -->
<!-- end left sidebar -->
<!-- ============================================================== -->
