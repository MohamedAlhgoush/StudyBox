<div class="dashboard-header">
    <nav class="navbar navbar-expand-lg bg-white fixed-top">

        <a class="navbar-brand" href="/"><img src="{{ asset('img/logowhite.png') }}" style="width:50px"/><span style="color:#165896"> STUDYBOX </span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse " id="navbarSupportedContent">

            <ul class="navbar-nav ml-auto navbar-right-top">
                @if(Auth::check() && \Route::current()->getName() != '')
                    <li class="nav-item ml-2 mr-2">
                        <div class="">
                            <a href="/university/{{Request::segment(2)}}/upload_document" class="btn btn-primary btn-sm"
                               style="margin-top:14px;margin-right:10px;">Upload document</a>
                        </div>
                    </li>
                @endif

                @if(!Auth::check() && Request::segment(1) == 'university')
                  <li class="nav-item ml-2 mr-2">
                      <div class="">
                          <span class="float-left mr-3 mt-3 text-danger">This action requires you to Login first!</span>
                          <a href="/login" class="btn btn-primary btn-sm"
                             style="margin-top:14px;margin-right:10px;">Upload document</a>

                      </div>
                  </li>
                @endif

                <li class="nav-item mt-2 ml-2 mr-2">


                  <form action="/university/{{Request::segment(2)}}/search" method="GET" role="search">
                        @csrf
                        <div class="input-group pr-2 mt-1">
                            <input type="text" class="form-control mr-2" name="search_query"
                                placeholder="Search For a Document..." value="{{Request::get('search_query')}}">
                                <button type="submit" class="btn btn-primary btn-sm ">
                                    <span class="fa fa-search">&nbsp;</span>
                                </button>
                        </div>
                    </form>
                </li>

                @if(Auth::check())

                    <li class="nav-item dropdown nav-user">
                        <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle fa-lg"></i></a>
                        <div class="dropdown-menu dropdown-menu-right nav-user-dropdown"
                             aria-labelledby="navbarDropdownMenuLink2">
                            <div class="nav-user-info">
                                <h5 class="mb-0 text-white nav-user-name">Welcome {{Auth::user()->name}}</h5>
                                <span class="status"></span><span class="ml-2">Available</span>
                                @if(Auth::user()->role==2)
                                <h5 class="ml-2  " style="color:red">Number of Uploads:{{App\Upload::where('instructor_id',Auth::user()->id)->count()}}</h5>    
                                @endif                             
                                @if(Auth::user()->role!=2)
                                <h5 class="ml-2 ">Number of Uploads:{{App\Upload::where('student_id',Auth::user()->id)->count()}}</h5>    
                                @endif  
                                <h5 class="ml-2  " style="color:red">Number of Downloads:{{App\UserDownload::where('user_id',Auth::user()->id)->count()}}</h5>     
                                
                            </div>
                            @if(Auth::user()->role==2)
                            <a class="dropdown-item" href="/university/{{Request::segment(2)}}/instructor/{{Auth::user()->id}}"><i class="fas fa-user mr-2"></i>Account</a>
                            @endif
                            @if(Auth::user()->role==1)
                            <a class="dropdown-item" href="/university/{{Request::segment(2)}}/student/{{Auth::user()->id}}"><i class="fas fa-user mr-2"></i>Account</a>
                            @endif

                            <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-power-off mr-2"></i>Logout</a>
                               <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }} </form>
                        </div>
                    </li>

                @else
                <li class="nav-item ml-2 mr-2">
                    <div class="">
                        <a href="/login" class="btn btn-primary btn-sm"
                           style="margin-top:14px;margin-right:10px; margin-left:10px;">Login</a>
                    </div>
                </li>
                <li class="nav-item ml-2 mr-2">
                    <div class="">
                        <a href="/register" class="btn btn-primary btn-sm"
                           style="margin-top:14px;margin-right:10px;">Register</a>
                    </div>
                </li>

                @endif




            </ul>
        </div>
    </nav>
</div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="{{asset('assets/vendor/charts/sparkline/jquery.sparkline.js')}}"></script>
    <script src="{{asset('assets/vendor/charts/sparkline/spark-js.js')}}"></script>
    <script type="text/javascript" src="libs/jquery.slimscroll.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="{{ asset('js/studyBox.js') }}"></script>
