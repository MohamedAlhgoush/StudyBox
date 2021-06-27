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
                    <?php if(App\University::find(Request::segment(2))): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="/university/<?php echo e(Request::segment(2), false); ?>"><i class="fas fa-university"
                                                                                                             aria-hidden="true"></i><?php echo e(App\University::find(Request::segment(2))->short_name, false); ?></a>
                                </li>
                            <?php endif; ?>

                            <?php if(Auth::guest() ): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="/university/<?php echo e(Request::segment(2), false); ?>/majors"><i class="fa fa-list"
                                                                                                         aria-hidden="true"></i>Majors</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/university/<?php echo e(Request::segment(2), false); ?>/courses"><i class="fa fa-book"
                                                                                                          aria-hidden="true"></i>Courses</a>
                            </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/university/<?php echo e(Request::segment(2), false); ?>/instructors"><i class="fa fa-user"
                                                                                                                  aria-hidden="true"></i>Instructors</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/contact"><i class="fa fa-address-book" aria-hidden="true"></i>Contact Us</a>
                                </li>
                            <?php endif; ?>


                    <?php if(Auth::check() ): ?>
                        <?php if(Auth::user()->role == 2 || Auth::user()->role == 1 ): ?>

                            <li class="nav-item">
                                <a class="nav-link" href="/university/<?php echo e(Request::segment(2), false); ?>/majors"><i class="fa fa-list"
                                                                                                         aria-hidden="true"></i>Majors</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/university/<?php echo e(Request::segment(2), false); ?>/courses"><i class="fa fa-book"
                                                                                                          aria-hidden="true"></i>Courses</a>
                            </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/university/<?php echo e(Request::segment(2), false); ?>/instructors"><i class="fa fa-user"
                                                                                                                  aria-hidden="true"></i>Instructors</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/contact"><i class="fa fa-address-book" aria-hidden="true"></i>Contact Us</a>
                                </li>
                            <?php else: ?>

                            <li class="nav-item">
                                <a class="nav-link" href="/university/<?php echo e(Request::segment(2), false); ?>/majors"><i class="fa fa-list"
                                                                                                         aria-hidden="true"></i>Majors</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/university/<?php echo e(Request::segment(2), false); ?>/instructors"><i class="fa fa-user"
                                                                                                              aria-hidden="true"></i>Instructors</a>
                            </li>

                        <?php endif; ?>

                    <?php endif; ?>


                    <?php if(Auth::check()): ?>

                        <li class="nav-divider">
                            Features
                        </li>
                        <?php if(Auth::user()->role == 3): ?>

                            <li class="nav-item">
                                <a class="nav-link" href="/university/<?php echo e(Request::segment(2), false); ?>/addfaculty"><i class="fa fa-plus" aria-hidden="true">
                                    </i>Add Faculty</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/university/<?php echo e(Request::segment(2), false); ?>/addmajor"><i class="fa fa-plus" aria-hidden="true">
                                    </i>Add Major</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/university/<?php echo e(Request::segment(2), false); ?>/add_course"><i class="fa fa-plus" aria-hidden="true">
                                    </i>Add Course</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/university/<?php echo e(Request::segment(2), false); ?>/user"><i class="fa fa-users" aria-hidden="true"></i>Users</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/university/<?php echo e(Request::segment(2), false); ?>/available_universities"><i class="fas fa-boxes" aria-hidden="true">
                                    </i>Universities</a>
                            </li>
                           
                            <li class="nav-item">
                                <a class="nav-link" href="/university/<?php echo e(Request::segment(2), false); ?>/available_faculties"><i class="fas fa-boxes" aria-hidden="true">
                                    </i>Faculties</a>
                            </li>
                         
                            <li class="nav-item">
                                <a class="nav-link" href="/university/<?php echo e(Request::segment(2), false); ?>/available_courses"><i class="fas fa-boxes" aria-hidden="true">
                                    </i>Available Courses</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="/university/<?php echo e(Request::segment(2), false); ?>/approve_instructor"><i class="fa fa-play-circle" aria-hidden="true">
                                    </i>Approve Instructors</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/university/<?php echo e(Request::segment(2), false); ?>/viewmessages"><i class="fa fa-comment" aria-hidden="true">
                                    </i>View messages</a>
                            </li>

                        <?php endif; ?>
                        <li class="nav-item">
                            <?php if(Auth::user()->role == 3): ?>
                                <a class="nav-link" href="/university/<?php echo e(Request::segment(2), false); ?>/my_uploads"><i class="fa fa-fire" aria-hidden="true">
                                    </i>All Uploads</a>
                            <?php endif; ?>
                            <?php if(Auth::user()->role == 2 || Auth::user()->role == 1 ): ?>
                                <a class="nav-link" href="/university/<?php echo e(Request::segment(2), false); ?>/my_uploads"><i class="fa fa-fire" aria-hidden="true">
                                    </i>My Uploads
                                    <?php if(Auth::user()->role==2): ?>
                                    <span class=" rounded-circle badge-success p-2 float-right">
                                    <?php echo e(App\Upload::where('instructor_id',Auth::user()->id)->count(), false); ?>  
                                     </span>
                                     <?php endif; ?>
                                     <?php if(Auth::user()->role!=2): ?>
                                    <span class=" rounded-circle badge-success p-2 float-right">
                                    <?php echo e(App\Upload::where('student_id',Auth::user()->id)->count(), false); ?>  
                                     </span>
                                     <?php endif; ?>
                                     </a>
                            <?php endif; ?>

                        </li>
                        <li class="nav-item">
                            <?php if(Auth::user()->role == 2 || Auth::user()->role == 1 ): ?>
                                <a class="nav-link" href="/university/<?php echo e(Request::segment(2), false); ?>/my_downloads"><i class="fa fa-arrow-down" aria-hidden="true">
                                    </i>My Downloads <span class=" rounded-circle badge-success p-2 float-right">
                                    <?php echo e(App\UserDownload::where('user_id',Auth::user()->id)->count(), false); ?>

                         </span> </a>
                            <?php endif; ?>
                        </li>

              <?php if(Auth::user()->role==2 && Auth::user()->status=='active' ): ?>
                            <li class="nav-divider">
                                Operations
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/university/<?php echo e(Request::segment(2), false); ?>/add_course"><i class="fa fa-plus" aria-hidden="true"></i>Add Course</a>
                            </li>



                    <?php endif; ?>
                    <?php endif; ?>

                </ul>
            </div>
        </nav>
    </div>
</div>
<!-- ============================================================== -->
<!-- end left sidebar -->
<!-- ============================================================== -->
<?php /**PATH C:\Users\ASUS\Desktop\studybox\resources\views/inc/sidebar.blade.php ENDPATH**/ ?>