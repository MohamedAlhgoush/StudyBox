<?php $__env->startSection('content'); ?>
    <h1 class="display-6" style="color: #165896;">INSTRUCTOR PROFILE</h1>
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
                        <h5 class="card-title">Instructer University :  <?php echo e($university->name, false); ?> </h5>
                        <h5 class="card-title">Instructer Faculty :  <?php echo e($faculty->name, false); ?> </h5>

                      <a  href="/university/<?php echo e(Request::segment(2), false); ?>/voteinstructor/<?php echo e($user->id, false); ?>/?type=like" class="btn btn-success btn-sm">
                          <i class="fa fa-thumbs-up"  aria-hidden="true"></i>
                            <span class="badge badge-light">
                               <?php echo e(count(App\InstructorVotes::where('instructor_id',$user->id)->where('like',1)->get()), false); ?>

                            </span>
                      </a>
                      <a  href="/university/<?php echo e(Request::segment(2), false); ?>/voteinstructor/<?php echo e($user->id, false); ?>/?type=unlike" class="btn btn-danger btn-sm">
                          <i class="fa fa-thumbs-down"  aria-hidden="true"></i>
                             <span class="badge badge-light">
                                <?php echo e(count(App\InstructorVotes::where('instructor_id',$user->id)->where('un_like',1)->get()), false); ?>

                             </span>
                      </a>
                    </div>
                    <div class="card-footer text-muted">
                    </div>
                </div>
            </div>

        </div>
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                <div class="card">
                    <h2 class="card-header">Instructer Uploads</h2>
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


        <div class="container p-3 sidebar-dark">
        <div class="chat-module-bottom ">
            <form class="chat-form" method="POST" action="/comment_instructor/post/<?php echo e($user->id, false); ?>">
                 <?php echo csrf_field(); ?>
                <textarea class="form-control" name="comment" id="comment" placeholder="Type a Comment" rows="1"></textarea>
                <div class="chat-form-buttons">
                    <button type="submit" class="btn btn-link">
                    <i class="fas fa-paper-plane p-2"></i>
                    </button>
                </div>
            </form>
        </div>
          <div style="margin-top:5px">
              <div class="chat-module-top">
                  <div class="chat-module-body  bg-light p-2">
                    <div class="header">
                      <h3 style="color:#000">Comments:</h3>
                    </div>
                    <?php $__currentLoopData = $comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="media chat-item bg-primary p-2">
                        <div class="media-body">
                            <div class="chat-item-title">
                                <span class="chat-item-author "><?php echo e($comment->user->name, false); ?></span>
                                <span><?php echo e($comment->created_at, false); ?></span>
                            </div>
                            <div class="chat-item-body">
                                <p><?php echo e($comment->message, false); ?></p>
                            </div>
                        </div>
                    </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
              </div>
          </div>
    </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\studybox\resources\views/users/instructor/instructor_profile.blade.php ENDPATH**/ ?>