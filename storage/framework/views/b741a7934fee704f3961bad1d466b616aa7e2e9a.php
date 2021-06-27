<?php $__env->startSection('content'); ?>
<h1 class="display-6" style="color: #165896;">APPROVE INSTRUCTORS</h1>
<hr>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
                        <tr>
                            <th>Instructor Name</th>
                            <th>Instructor Email</th>
                            <th>Instructor Status</th>
                            <th>Approve</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $instructors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $instructor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="table-row">
                                        <td><?php echo e($instructor->name, false); ?></td>
                                        <td><?php echo e($instructor->email, false); ?></td>
                                        <td>Not Active</td>
                                        <td><a  class="text-center "  onclick="return confirm('Are you sure you want to approve this instructor?')"  href="/university/<?php echo e(Request::segment(2), false); ?>/approve/<?php echo e($instructor->id, false); ?>"><i class="fa fa-check-square fa-2x" aria-hidden="true"></a></i></td>
                                      </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\studybox\resources\views/admin/approve_instructor.blade.php ENDPATH**/ ?>