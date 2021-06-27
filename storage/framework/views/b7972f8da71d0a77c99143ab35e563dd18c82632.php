<?php $__env->startSection('landing'); ?>

<h3 class="page-title display-4 mt-5 gradient text-white text-center">
  ADD UNIVERSITY
</h3>
<hr>
<?php echo $__env->make('inc.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container">
    <div class="row justify-content-center">
        <form role="form" method="POST" action="/create_university/post">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : '', false); ?>" name="name" placeholder="University name" >
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="short_name">Short Name</label>
                    <input type="text" class="form-control<?php echo e($errors->has('short_name') ? ' is-invalid' : '', false); ?>" name="short_name" placeholder="Enter Short Name here.." >
                </div>
                <div class="form-group col-md-6">
                    <label>Campus</label>
                    <input type="text" class="form-control" placeholder="Campus Location">
                </div>
            </div>
            <div class="form-group">
                <label for="descritption">Description</label>
                <textarea class="form-control<?php echo e($errors->has('descritption') ? ' is-invalid' : '', false); ?>" name="descritption" value="<?php echo e(old('descritption'), false); ?>"  autofocus id="descritption" rows="3"></textarea>

            </div>

            <button type="submit" class="btn btn-primary">Add University</button>
        </form>

    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app_landing', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\studybox\resources\views/admin/create_university.blade.php ENDPATH**/ ?>