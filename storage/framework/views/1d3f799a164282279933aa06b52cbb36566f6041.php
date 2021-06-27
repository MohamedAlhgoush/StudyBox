<?php $__env->startSection('landing'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 loginDesign">
            <div class="card">
              <div class="card-header"style="background-image: linear-gradient(to right, #1f3766, #254881, #295a9d, #2a6db9, #2681d7);">
              <h4 class="display-6" style="color:#fff;">REGISTER</h4>
            </div>
                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('register'), false); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Name'), false); ?></label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : '', false); ?>" name="name" value="<?php echo e(old('name'), false); ?>" required autofocus>

                                <?php if($errors->has('name')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('name'), false); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail Address'), false); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : '', false); ?>" name="email" value="<?php echo e(old('email'), false); ?>" required>

                                <?php if($errors->has('email')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('email'), false); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Password'), false); ?></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control<?php echo e($errors->has('password') ? ' is-invalid' : '', false); ?>" name="password" required>

                                <?php if($errors->has('password')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('password'), false); ?></strong>
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right"><?php echo e(__('Confirm Password'), false); ?></label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="role" class="col-md-4 col-form-label text-md-right" ><?php echo e(__('Role'), false); ?></label>

                            <div class="col-md-6">
                                  <select class="custom-select" id='show_university_dropdown' name="role">
                                  <option value="1" selected>Student</option>
                                  <option value="2">Instructor</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group row" id='university' style='display:none;'>
                            <label for="role" class="col-md-4 col-form-label text-md-right" ><?php echo e(__('university'), false); ?></label>

                            <div class="col-md-6">
                                  <select class="custom-select"  id='show_faculty_dropdown' name='university'>
                                  <option  selected>Select University</option>
                                  <?php $__currentLoopData = App\University::all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $university): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($university->id, false); ?>" ><?php echo e($university->name, false); ?></option>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                </select>
                            </div>
                        </div>


                        <div class="form-group row" id='faculty' style='display:none;'>
                            <label for="role" class="col-md-4 col-form-label text-md-right" disabled><?php echo e(__('faculty'), false); ?></label>

                            <div class="col-md-6">
                            <select class="custom-select" name="faculty">
                                </select>
                            </div>
                        </div>


                        <input type="hidden" name="_token" value="<?php echo e(csrf_token(), false); ?>">

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="  background-image: linear-gradient(to right, #1f3766, #254881, #295a9d, #2a6db9, #2681d7);" >

                                    <?php echo e(__('Register'), false); ?>

                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app_landing', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\studybox\resources\views/auth/register.blade.php ENDPATH**/ ?>