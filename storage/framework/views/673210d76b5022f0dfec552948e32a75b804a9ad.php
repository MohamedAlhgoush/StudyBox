<?php $__env->startSection('content'); ?>
<h1 class="display-6" style="color: #165896;">Messages</h1>
<hr>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
                        <tr>
                            <th> Name</th>
                            <th> Email</th>
                            <th> subject</th>
                            <th>message</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr class="table-row">
                                        <td><?php echo e($message->name, false); ?></td>
                                        <td><?php echo e($message->email, false); ?></td>
                                        <td><?php echo e($message->subjet, false); ?></td>
                                        <td><?php echo e($message->message, false); ?></td>
                                        <td><a  class="text-center "  onclick="return confirm('Are you sure you want to remove this message?')"  href="/university/<?php echo e(Request::segment(2), false); ?>/read/<?php echo e($message->id, false); ?>"><i class="fa fa-times fa-2x" aria-hidden="true"></a></i></td>
                                      </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\studybox\resources\views/admin/viewmessages.blade.php ENDPATH**/ ?>