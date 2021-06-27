<?php $__env->startSection('content'); ?>

  <h1 class="display-6" style="color: #165896;">ADD FACULTY</h1>
    <hr>
    <div class="container">
        <div class="row justify-content-center">
            <form role="form" method="POST" action="/university/<?php echo e(Request::segment(2), false); ?>/add_Faculty/post">
              <?php echo csrf_field(); ?>
                <div class="form">

                    <!-- course name -->
                    <div class="col-md-10 mb-3">
                        
                        <input type="text" class="form-control" name="name" placeholder="Faculty Name">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <!-- end course name -->
                    <!-- course code -->
                    <div class="col-md-10 mb-3">
                    <h2>This faculty will be added to <?php echo e($university->name, false); ?>  </h2>

                    </div>
                   

                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary" >
                            <?php echo e(__('Add Faculty'), false); ?>

                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\studybox\resources\views/admin/addfaculty.blade.php ENDPATH**/ ?>