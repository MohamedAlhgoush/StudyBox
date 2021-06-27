<?php $__env->startSection('content'); ?>


<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-5 ">
<div class="section-block">
    <h1 class="display-6" style="color: #165896;">INSTRUCTORS</h1>
    <hr>
    <p>Here the Instructors are listed according to faculties...</p>
</div>
<div class="pills-vertical ">
    <div class="row ">
        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
              <?php $__currentLoopData = $faculties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faculty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <a class="nav-link" id="v-pills-<?php echo e($faculty->id, false); ?>-tab" data-toggle="pill" href="#v-pills-<?php echo e($faculty->id, false); ?>" role="tab" aria-controls="v-pills-<?php echo e($faculty->id, false); ?>" aria-selected="true"><?php echo e($faculty->name, false); ?></a>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
      </div>
        <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12">
            <div class="tab-content" id="v-pills-tabContent">

              <?php $__currentLoopData = $faculties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faculty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <div class="tab-pane fade show <?php echo e($faculty->id==1 ? ' active' : '', false); ?>  " id="v-pills-<?php echo e($faculty->id, false); ?>" role="tabpanel" aria-labelledby="v-pills-<?php echo e($faculty->id, false); ?>-tab">
                 <div class="row">

                 <?php $__currentLoopData = $faculty->users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                 <?php if($user->status=='active'): ?>
                 <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 ">
                                            <div class="card inscard">
                                                <div class="card-body">
                                                    <h3 class="card-title text-light"><?php echo e($user->name, false); ?></h3>
                                                    <a href="/university/<?php echo e(Request::segment(2), false); ?>/instructor/<?php echo e($user->id, false); ?>"
                                                       class="btn btn-sm btn-primary">View instructor</a>
                                                </div>
                                            </div>
                                        </div>
                    <?php endif; ?>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
            </div>
          </div>
        </div>
      </div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\studybox\resources\views/users/instructor/all_instructors.blade.php ENDPATH**/ ?>