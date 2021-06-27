<?php $__env->startSection('content'); ?>

    <!-- <h1 style="color: #165896;">MAJORS</h1> -->
    <h1 class="display-6" style="color: #165896;">MAJORS</h1>
    <hr>
    <div class="row">
        <?php $__currentLoopData = $university->faculties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faculty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header text-light"><?php echo e($faculty->name, false); ?></h5>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th scope="col">Major</th>
                            <th scope="col" class="text-center">Number of courses</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $faculty->majors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $major): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <tr class="table-row" onclick="window.location='major/<?php echo e($major->id, false); ?>';">
                              <td ><?php echo e($major->name, false); ?></td>
                              <td class="text-center"><?php echo e($major->courses->count(), false); ?> </td>
                              <td>
                              <?php if(Auth::check()): ?>
                              <?php if(Auth::user()->role == 3): ?>
                              <a  onclick="return confirm('Are you sure you want to delete this major?')"  href="/university/<?php echo e(Request::segment(2), false); ?>/deletemajor/<?php echo e($major->id, false); ?>">
                                <i class="fa fa-trash" aria-hidden="true"></i>
                            </a>
                            <?php endif; ?>
                            <?php endif; ?>
                            </td>
                          </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\studybox\resources\views/users/majors/all_majors.blade.php ENDPATH**/ ?>