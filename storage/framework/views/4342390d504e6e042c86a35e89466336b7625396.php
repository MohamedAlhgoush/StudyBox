<?php $__env->startSection('content'); ?>
  <h1 class="display-6" style="color: #165896;">EDIT DOCUMENT</h1>

    <hr>
    <div class="container-fliud justify-content-center">
        <div class="row">
          <form class="col-12" role="form" method="POST" action="/edit_document/<?php echo e($upload->id, false); ?>"  enctype="multipart/form-data">
              <?php echo csrf_field(); ?>

                <div class="form-group row">
                    <label for="faculty" class="col-md-4 col-form-label  " ><?php echo e(__('Faculty'), false); ?></label>
                    <div class="col-md-6">
                      <select class="custom-select" name="faculty">
                        <option selected>Edit Course By Selecting Faculty</option>
                          <?php $__currentLoopData = $faculties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faculty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($faculty->id, false); ?>"> <?php echo e($faculty->name, false); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="major" class="col-md-4 col-form-label" disabled><?php echo e(__('Major'), false); ?></label>
                    <div class="col-md-6">
                      <select class="custom-select" name="major">
                        <option selected value="<?php echo e($current_major->id, false); ?>"><?php echo e($current_major->name, false); ?></option>
                      </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="course" class="col-md-4 col-form-label" disabled><?php echo e(__('Course'), false); ?></label>
                    <div class="col-md-6">
                      <select class="custom-select" name="course">
                        <option selected value="<?php echo e($current_course->id, false); ?>"><?php echo e($current_course->name, false); ?></option>
                      </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="instructor" class="col-md-4 col-form-label" disabled><?php echo e(__('Instructor'), false); ?></label>
                    <div class="col-md-6">
                        <select  class="custom-select" name="instructor_id">
                              <?php $__currentLoopData = $instructors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $instructor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($instructor->id, false); ?>"> <?php echo e($instructor->name, false); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label"><?php echo e(__('Document Name'), false); ?></label>
                    <div class="col-md-6">
                      <input id="name" placeholder="Name" type="text" name="name" value="<?php echo e($upload->name, false); ?>" required class="form-control">
                      <?php if($errors->has('name')): ?>
                          <span class="invalid-feedback" role="alert">
                              <strong><?php echo e($errors->first('name'), false); ?></strong>
                          </span>
                      <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="semester" class="col-md-4 col-form-label"><?php echo e(__('Semester'), false); ?></label>
                    <div class="col-md-3">
                      <select id="semester" type="text" class="form-control<?php echo e($errors->has('semester') ? ' is-invalid' : '', false); ?>" name="semester" value="<?php echo e(old('semester'), false); ?>" required autofocus>
                                <option  value="" selected>Select Semester</option>
                                <option value="Fall">Fall</option>
                                <option value="Spring">Spring</option>
                                <option value="Summer">Summer</option>
                            </select>
                      <?php if($errors->has('semester')): ?>
                          <span class="invalid-feedback" role="alert">
                              <strong><?php echo e($errors->first('semester'), false); ?></strong>
                          </span>
                      <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="year" class="col-md-4 col-form-label"><?php echo e(__('Year'), false); ?></label>
                    <div class="col-md-3">
                      <input id="year" type="date" placeholder="Year" name="year" value="<?php echo e($upload->year, false); ?>" required autofocus class="form-control">
                      <?php if($errors->has('year')): ?>
                          <span class="invalid-feedback" role="alert">
                              <strong><?php echo e($errors->first('year'), false); ?></strong>
                          </span>
                      <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="description" class="col-md-4 col-form-label"><?php echo e(__('Document Description'), false); ?></label>
                    <div class="col-md-6">
                      <textarea name="description" value="Description" required autofocus id="description" rows="3" class="form-control"><?php echo e($upload->description, false); ?></textarea>
                      <?php if($errors->has('description')): ?>
                          <span class="invalid-feedback" role="alert">
                              <strong><?php echo e($errors->first('description'), false); ?></strong>
                          </span>
                      <?php endif; ?>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="instructor" class="col-md-4 col-form-label" disabled><?php echo e(__('Category'), false); ?></label>
                    <div class="col-md-6">
                      <select class="custom-select" name="category_id">
                          <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option <?php echo e($upload->categories()->first()->id == $category->id ? 'selected' : '', false); ?> value="<?php echo e($category->id, false); ?>"> <?php echo e($category->name, false); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
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

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\studybox\resources\views//users/edit/edit_upload.blade.php ENDPATH**/ ?>