<?php $__env->startSection('content'); ?>
    <h1 class="display-6" style="color: #165896;">UPLOAD A DOCUMENT</h1>
    <hr>
    <div class="container-fliud justify-content-center">
        <div class="row">
          <form class="col-12" role="form" method="POST" action="<?php echo e(route('upload.file.post'), false); ?>"  enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
                <div class="form-group row">
                    <label for="faculty" class="col-md-4 col-form-label  " ><?php echo e(__('Faculty'), false); ?></label>

                    <div class="col-md-6">
                      <select class="custom-select <?php echo e($errors->has('faculty') ? ' is-invalid' : '', false); ?>" name="faculty" required>
                      <option selected>Select Faculty</option>
                        <?php $__currentLoopData = $faculties; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $faculty): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <option value="<?php echo e($faculty->id, false); ?>" > <?php echo e($faculty->name, false); ?></option>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="major" class="col-md-4 col-form-label" disabled><?php echo e(__('Major'), false); ?></label>

                    <div class="col-md-6">
                      <select class="custom-select <?php echo e($errors->has('major') ? ' is-invalid' : '', false); ?>" name="major">

                      </select>
                    </div>
                </div>



                <div class="form-group row">
                    <label for="course" class="col-md-4 col-form-label " disabled><?php echo e(__('Course'), false); ?></label>

                    <div class="col-md-6">
                      <select class="custom-select <?php echo e($errors->has('course') ? ' is-invalid' : '', false); ?>" name="course">
                      </select>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="instructor" class="col-md-4 col-form-label" disabled><?php echo e(__('Instructor'), false); ?></label>

                    <div class="col-md-6">
                      <select class="custom-select <?php echo e($errors->has('instructor_id') ? ' is-invalid' : '', false); ?>" name="instructor_id">

                     
                            <?php $__currentLoopData = $instructors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $instructor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($instructor->id, false); ?>"> <?php echo e($instructor->name, false); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                          </select>
                    </div>
                </div>


                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label" ><?php echo e(__('Document Name'), false); ?></label>

                    <div class="col-md-6">
                      <input id="name" type="text" class="form-control<?php echo e($errors->has('name') ? ' is-invalid' : '', false); ?>" name="name" value="<?php echo e(old('name'), false); ?>" autofocus placeholder="ex.(Assignment 1 Solution)">

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
                      <!-- <input id="semester" type="text" class="form-control" name="semester" value="<?php echo e(old('semester'), false); ?>" required autofocus> -->
                      <select id="semester" type="text" class="form-control<?php echo e($errors->has('semester') ? ' is-invalid' : '', false); ?>" name="semester" value="<?php echo e(old('semester'), false); ?>" autofocus>
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
                      <select id="year" type="text" class="form-control<?php echo e($errors->has('year') ? ' is-invalid' : '', false); ?>" name="year" autofocus>
                      <option value="2003/2004">2003/2004</option>
                                <option value="2004/2005">2004/2005</option>
                                <option value="2006/2007">2006/2007</option>
                                <option value="2008">2007/2008</option>
                                <option value="2008/2009">2008/2009</option>
                                <option value="2009/2010">2009/2010</option>
                                <option value="2010/2011">2010/2011</option>
                                <option value="2011/2012">2011/2012</option>
                                <option value="2012/2013">2012/2013</option>
                                <option value="2013/2014">2013/2014</option>
                                <option value="2014/2015">2014/2015</option>
                                <option value="2015/2016">2015/2016</option>
                                <option value="2016/2017">2016/2017</option>
                                <option value="2017/2018">2017/2018</option>
                                <option value="2018/2019">2018/2019</option>
                            </select>
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
                      <textarea class="form-control<?php echo e($errors->has('description') ? ' is-invalid' : '', false); ?>" name="description" value="<?php echo e(old('description'), false); ?>" autofocus id="description" rows="2"></textarea>
                      <?php if($errors->has('description')): ?>
                          <span class="invalid-feedback" role="alert">
                              <strong><?php echo e($errors->first('description'), false); ?></strong>
                          </span>
                      <?php endif; ?>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="instructor" class="col-md-4 col-form-label float-right" disabled><?php echo e(__('Category'), false); ?></label>

                    <div class="col-md-6">
                      <select class="custom-select" name="category_id">
                          <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($category->id, false); ?>"> <?php echo e($category->name, false); ?></option>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                          </select>
                    </div>
                </div>

                <div class="form-group row">
                  <label for="file" class="col-md-4 col-form-label"><?php echo e(__('Upload Document'), false); ?></label>
                  <div class="col-md-6">
                    <div class="custom-file mb-3">
                          <input type="file" class="custom-file-input" name="file" id="input_file" >
                          <label class="custom-file-label" for="input_file" id="input_file_label">Click to Choose File</label>
                      </div>
                  </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn btn-primary" >
                            <?php echo e(__('Upload'), false); ?>

                        </button>
                    </div>
                </div>
       </form>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\studybox\resources\views//users/files/upload_document.blade.php ENDPATH**/ ?>