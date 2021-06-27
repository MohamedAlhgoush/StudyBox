<?php $__env->startSection('content'); ?>
  <h1 class="display-6" style="color: #165896;">EDIT PROFILE</h1>

    <hr>
    <div class="container-fliud justify-content-center">
        <div class="row">
          <form class="col-12" role="form" method="POST" action="/profile_edit/<?php echo e($user->id, false); ?>"  enctype="multipart/form-data">
              <?php echo csrf_field(); ?>

                <div class="form-group row">
                    <label for="semester" class="col-md-4 col-form-label"><?php echo e(__('Name'), false); ?></label>
                    <div class="col-md-3">
                      <input id="name" type="text" placeholder="Name" name="name" value="<?php echo e($user->name, false); ?>" required class="form-control">
                      <?php if($errors->has('Name')): ?>
                          <span class="invalid-feedback" role="alert">
                              <strong><?php echo e($errors->first('Name'), false); ?></strong>
                          </span>
                      <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="year" class="col-md-4 col-form-label"><?php echo e(__('Email'), false); ?></label>
                    <div class="col-md-3">
                      <input id="email" type="text" placeholder="Email" name="email" value="<?php echo e($user->email, false); ?>" required autofocus class="form-control">
                      <?php if($errors->has('Email')): ?>
                          <span class="invalid-feedback" role="alert">
                              <strong><?php echo e($errors->first('Email'), false); ?></strong>
                          </span>
                      <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary" >
                            <?php echo e(__('Edit'), false); ?>

                        </button>
                    </div>
                </div>
       </form>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\studybox\resources\views//users/edit/edit_profile.blade.php ENDPATH**/ ?>