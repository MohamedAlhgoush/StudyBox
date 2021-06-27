<?php $__env->startSection('landing'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 loginDesign">
            <div class="card">
                <div class="card-header"style="background-image: linear-gradient(to right, #1f3766, #254881, #295a9d, #2a6db9, #2681d7);">
                <h4 class="display-6" style="color:#fff;">LOGIN</h4>

              </div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('login'), false); ?>">
                        <?php echo csrf_field(); ?>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right"><?php echo e(__('E-Mail Address'), false); ?></label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control<?php echo e($errors->has('email') ? ' is-invalid' : '', false); ?>" name="email" value="<?php echo e(old('email'), false); ?>" required autofocus>

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
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" <?php echo e(old('remember') ? 'checked' : '', false); ?>>

                                    <label class="form-check-label" for="remember">
                                        <?php echo e(__('Remember Me'), false); ?>

                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary" style="  background-image: linear-gradient(to right, #1f3766, #254881, #295a9d, #2a6db9, #2681d7);">
                                    <?php echo e(__('Login'), false); ?>

                                </button>

                                <?php if(Route::has('password.request')): ?>
                                    <a class="btn btn-link" href="/register" style="color: #165896;">
                                        <?php echo e(__('Dont Have An Account? -> Register Now'), false); ?>

                                    </a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app_landing', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\studybox\resources\views/auth/login.blade.php ENDPATH**/ ?>