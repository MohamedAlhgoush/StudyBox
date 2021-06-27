<?php $__env->startSection('content'); ?>

  <h1 class="display-6" style="color: #165896;">ADD MAJOR</h1>
    <hr>
    <div class="container">
        <div class="row justify-content-center">
            <form role="form" method="POST" action="/university/<?php echo e(Request::segment(2), false); ?>/add_Major/post">
              <?php echo csrf_field(); ?>
                <div class="form">

                    <!-- course name -->
                    <div class="col-md-10 mb-3">
                        
                        <input type="text" class="form-control" name="name" placeholder="Major Name">
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                    <!-- end course name -->
                    <!-- course code -->
                    <div class="col-md-10 mb-3">
                   
                        <select class="custom-select" name="faculty" required>
                        <option > Faculty</option>
                          <?php $__currentLoopData = $faculties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faculty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($faculty->id, false); ?>"> <?php echo e($faculty->name, false); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                     
                        
                        <div class="valid-tooltip">
                            Looks good!
                        </div>
                    </div>
                   

                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary" >
                            <?php echo e(__('Add Major'), false); ?>

                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\studybox\resources\views/admin/addMajor.blade.php ENDPATH**/ ?>