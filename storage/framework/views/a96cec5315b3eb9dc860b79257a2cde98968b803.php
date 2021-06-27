<?php $__env->startSection('content'); ?>
    <h1 class="display-6" style="color: #165896;">ADMIN PROFILE</h1>
    <hr>
    <div class="row">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                    <h2 style="color:#fff">Profile Information
                      <?php if(Auth::check()): ?>
                      <?php if(Auth::user()->id==$user->id): ?>
                      <a href="/university/<?php echo e(Request::segment(2), false); ?>/view_editprofile/<?php echo e($user->id, false); ?>"  class="btn btn-primary btn-sm m-1">Edit Profile</a></h2>
                      <?php endif; ?>
                      <?php endif; ?>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Name : <?php echo e($user->name, false); ?></h5>
                        <h5 class="card-title">Email : <?php echo e($user->email, false); ?></h5>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                <div class="card">
                    <h2 class="card-header">Admin Uploads</h2>
                    <div class="card-body">
                        <div class="list-group">
                          <?php $__currentLoopData = $uploads; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $upload): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <ul class="list-inline d-flex text-muted mt-0">
                              <li class="list-inline-item text-truncate mr-auto card-header" style="width:990px;">
                                <a href="/university/<?php echo e(Request::segment(2), false); ?>/file/<?php echo e($upload->id, false); ?>" style="color:#fff">
                                 <?php echo e($upload->name, false); ?> : <?php echo e($upload->description, false); ?>

                               </a>
                               <?php if(Auth::check()): ?>
                               <?php if(Auth::user()->id==$user->id): ?>
                              <li class="list-inline-item card-header ">
                                  <a href="/university/<?php echo e(Request::segment(2), false); ?>/delete/<?php echo e($upload->id, false); ?>" style="color:#fff">
                                      <i class="fa fa-trash" aria-hidden="true"></i>
                                  </a>
                                  <a href="/university/<?php echo e(Request::segment(2), false); ?>/view_edit/<?php echo e($upload->id, false); ?>">
                                    <i class=" fas fa-pencil-alt" aria-hidden="true"></i>
                                  </a>
                              </li>
                              <?php endif; ?>
                              <?php endif; ?>
                          </ul>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\studybox\resources\views/admin/admin_profile.blade.php ENDPATH**/ ?>