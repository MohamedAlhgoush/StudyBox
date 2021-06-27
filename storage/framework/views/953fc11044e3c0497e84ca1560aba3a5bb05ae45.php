<?php $__env->startSection('content'); ?>


    <div class="container-fliud">
        <div class="row">
            <div class="col-xl-8 col-lg-10 col-md-12 col-sm-12">
                <h1 class="display-6" style="color: #165896;"><?php echo e($major->name, false); ?></h1>

            </div>
            <!-- <div class="col-xl-4 col-lg-2 col-md-12 col-sm-12">
              <?php if(Auth::user()): ?>
              <?php if(Auth::user()->role == 2): ?>
              <a href="/university/<?php echo e(Request::segment(2), false); ?>/add_course" class="btn btn-primary btn-sm"
                               style="margin-top:14px;margin-right:10px;">Add Course</a>
              <?php endif; ?>
              <?php endif; ?>
            </div> -->
        </div>
    </div>
    <hr>
    <div class="row">
        <?php $__currentLoopData = $major->courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title"><?php echo e($course->name, false); ?>

                       <span class="badge badge-success">
                           <?php echo e(count($course->uploads), false); ?> Documents
                         </span>

                     </h3>
                    <p class="card-text"><?php echo e(mb_substr($course->description, 0, 100), false); ?>...</p>
                    <a href="<?php echo e($major->id, false); ?>/course/<?php echo e($course->id, false); ?>" class="btn btn-primary">Go To course</a>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\studybox\resources\views/users/majors/single_major.blade.php ENDPATH**/ ?>