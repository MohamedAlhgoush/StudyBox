<?php $__env->startSection('content'); ?>

    <div class="container">
        <div class="col-md-12 col-sm-12 m-0">
            <h1 class="display-6" style="color: #165896;">SEARCH</h1>
            <hr>
        </div>
            <div class="container-fliud">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <form action="/university/<?php echo e(Request::segment(2), false); ?>/search" method="GET" role="search" id="search_form">
                                     <div class="filter-sidebar">
                                        <div class="input-group">
                                            <input type="text" class="form-control mr-2" name="search_query"
                                                   placeholder="Search..." value="<?php echo e(Request::get('search_query'), false); ?>">
                                            <button type="submit" class="btn btn-primary">
                                                <span class="fa fa-search"></span>
                                            </button>
                                        </div>
                                        <?php echo csrf_field(); ?>
                                            <div class="container-fliud col-sm-12">
                                                <div class="form-group">
                                                    <select class="btn btn-primary btn-sm m-1"  style="height:50px;"name="categories" id="search_category">
                                                        <option value="">Show All</option>
                                                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option <?php echo e(Request::get('categories') == $category->id ? 'selected' : '', false); ?> value="<?php echo e($category->id, false); ?>"><?php echo e($category->name, false); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                    <select class="btn btn-primary btn-sm m-1" name="courses"  style="height:50px;" id="search_course">
                                                        <option value="" selected>Select Courses</option>
                                                        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                                            <option <?php echo e(Request::get('courses') == $course->id ? 'selected' : '', false); ?> value="<?php echo e($course->id, false); ?>"><?php echo e($course->name, false); ?></option>

                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                    <select class="btn btn-primary btn-sm m-1" name="instructors"  style="height:50px;" id="search_instructor">
                                                        <option  value="" selected>Select Instructor</option>
                                                        <?php $__currentLoopData = $instructors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $instructor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option <?php echo e(Request::get('instructors') == $instructor->id ? 'selected' : '', false); ?> value="<?php echo e($instructor->id, false); ?>"><?php echo e($instructor->name, false); ?></option>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </select>
                                                    <select class="btn btn-primary btn-sm m-1" name="semester"  style="height:50px;" id="search_semester">
                                                        <option  value="" selected>Select Semester</option>
                                                        <option value="Fall">Fall</option>
                                                        <option value="Spring">Spring</option>
                                                        <option value="Summer">Summer</option>
                                                    </select>
                                                    <select class="btn btn-primary btn-sm m-1" name="year"  style="height:50px;"id="search_year">
                                                        <option  value="" selected>Year</option>
                                                        <option value="2003/2004">2003/2004</option>
                                                        <option value="2004/2005">2004/2005</option>
                                                        <option value="2006/2007">2006/2007</option>
                                                        <option value="2007/2008">2007/2008</option>
                                                        <option value="2008/2009">2008/2009</option>
                                                        <option value="2009/2010">2009/2010</option>
                                                        <option value="2010/2011">2010/2011</option>
                                                        <option value="2011/2012">2011/2012</option>
                                                        <option value="2012/2013">2012/2013</option>
                                                        <option value="2013/2014">2013/2014</option>
                                                        <option value="2014/2015">2014/2015</option>
                                                        <option value="2015/2016">2015/2016</option>
                                                        <option value="2016/2017">2016/2017</option>
                                                        <option value="2017/2018">2017/2018</option>
                                                        <option value="2018/2019">2018/2019</option>
                                                    </select>
                                                </div>


                                            </div>

                                     </div>
                        </form>
                    </div>
                </div>
            </div>
        <div class="col-md-12 col-sm-12 mt-5">

            <div class="col-md-12 col-sm-12 mt-4">
                <h1 class="display-6" style="color: #165896;">RESULTS</h1>
                <hr>
            </div>
            <div class="row">

                <?php $__currentLoopData = $upload_results; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $upload): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <!-- .card -->
                        <div class="card card-figure">
                            <small class="pb-2">Uploaded
                                at: <?php echo e(date('Y-M-d',strtotime($upload->created_at)), false); ?></small>
                            <!-- .card-figure -->
                            <figure class="figure">
                                <!-- .figure-img -->
                                <a href="/university/<?php echo e(Request::segment(2), false); ?>/file/<?php echo e($upload->id, false); ?>">
                                    <div class="figure-attachment"
                                         style="background-color:<?php echo e($upload->categories()->first()->color, false); ?>">
                                <span class="fa-stack fa-lg">
                                           <i class="fa fa-square fa-stack-2x text-primary"></i>
                                           <i class="fa fa-file-word fa-stack-1x fa-inverse"></i>
                                              </span>
                                    </div>
                                </a>
                                <!-- /.figure-img -->
                                <figcaption class="figure-caption">
                                    <ul class="list-inline d-flex text-muted mb-0">
                                        <li class="list-inline-item text-truncate mr-auto">
                                            <span><i class="fas fa-file-pdf"></i></span> <?php echo e($upload->name, false); ?> </li>
                                    </ul>
                                </figcaption>
                            </figure>
                            <!-- /.card-figure -->
                        </div>
                        <!-- /.card -->
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>

        </div>
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\studybox\resources\views/users/search.blade.php ENDPATH**/ ?>