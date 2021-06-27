<?php if(count($errors) > 0): ?>
    <div class="form-group">
        <div class="alert alert-danger" role="alert">
            <h6>OOPPSS! Look what happened! </h6>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li> <?php echo e($error, false); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

<?php endif; ?>

<?php if(session('success')): ?>
    <div class="alert alert-success" role="alert">
        <?php echo e(session('success'), false); ?>

    </div>
<?php endif; ?>

<?php if(session('error')): ?>
    <div class="alert alert-warning" role="alert">
        OOPPSS! <?php echo e(session('error'), false); ?>

    </div>
<?php endif; ?>
<?php /**PATH C:\Users\ASUS\Desktop\studybox\resources\views/inc/messages.blade.php ENDPATH**/ ?>