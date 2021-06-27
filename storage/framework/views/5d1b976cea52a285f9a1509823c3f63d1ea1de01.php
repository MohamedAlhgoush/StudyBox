<?php $__env->startSection('content'); ?>

<h1 class="display-6" style="color: #165896;">DOCUMENT INFO</h1>
<hr>
<div class="card ">
    <div class="card-header">
        <?php echo e($upload->categories()->first()->name, false); ?>

    </div>
    <div class="card-body">
        <div class="row">
            <div class="card card-figure col-md-4 col-sm-12">
                <!-- .card-figure -->
                <figure class="figure">
                    <!-- .figure-img -->
                    <div class="figure-attachment"
                    style="background-color:<?php echo e($upload->categories()->first()->color, false); ?>">
                    <span class="fa-stack fa-lg">
                       <i class="fa fa-square fa-stack-2x text-primary"></i>
                       <i class="fa fa-file-word fa-stack-1x fa-inverse"></i>
                   </span>
               </div>
               <!-- /.figure-img -->

           </figure>

           <!-- /.card-figure -->
           <div class="float-right pt-2">

              <!-- /.card-figure -->
              <?php if(Auth::check()): ?>
              <div class="float-right pt-2">
                <a href="/university/<?php echo e(Request::segment(2), false); ?>/vote/<?php echo e($upload->id, false); ?>/?type=helpfull" class="btn btn-success btn-lg ">Helpful
                    <span class="badge badge-light">
                        <?php echo e(count(App\UserVote::where('upload_id',$upload->id)->where('helpfull',1)->get()), false); ?>

                    </span>
                </a>
                <a href="/university/<?php echo e(Request::segment(2), false); ?>/vote/<?php echo e($upload->id, false); ?>/?type=un_helpfull" class="btn btn-danger btn-lg ">unHelpful
                    <span class="badge badge-light">
                        <?php echo e(count(App\UserVote::where('upload_id',$upload->id)->where('un_helpfull',1)->get()), false); ?>

                    </span>
                </a>
            </div>

            <?php else: ?>
            <div class="float-right pt-2 justify-content-center">
                <a href="/login" class="btn btn-success btn-lg">Helpful
                    <span class="badge badge-light">   <?php echo e(count(App\UserVote::where('upload_id',$upload->id)->where('helpfull',1)->get()), false); ?></span></a>
                    <a href="/login" class="btn btn-danger btn-lg">unHelpful
                        <span class="badge badge-light"> <?php echo e(count(App\UserVote::where('upload_id',$upload->id)->where('un_helpfull',1)->get()), false); ?></span></a>
                    </div>
                   <h6 class="float-right mr-3 text-danger">This action requires you to Login first!</h6>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-8 col-sm-12">
                <h3>
                    Document name:
                    <small class="text-muted"> <?php echo e($upload->name, false); ?></small>
                </h3>
                <h3>
                    Instructor:
                    <small class="text-muted"> <?php echo e($upload->instructor->name, false); ?></small>
                </h3>
                <h3>
                    Semester:
                    <small class="text-muted"> <?php echo e($upload->semester, false); ?></small>
                </h3>
                <h3>
                    Year:
                    <small class="text-muted"> <?php echo e($upload->year, false); ?></small>
                </h3>
                <h3>
                    Description:
                    <small class="text-muted"> <?php echo e($upload->description, false); ?></small>
                </h3>
            </div>
        </div>
    </div>

    <?php if(Auth::check()): ?>
    <div class="card-footer text-muted">
        <div class="btn-group btn-group-lg float-right" role="group" aria-label="...">
            <!-- Add study box.live url and the name of the file through out asset()-->
            <?php if($upload->files()->first()->extension =='pdf'): ?>
              <a href="/university/<?php echo e(Request::segment(2), false); ?>/view/<?php echo e($upload->id, false); ?>" class="btn btn-info btn-lg " target="_blank">View</a>
              <?php else: ?>
                <a href="https://view.officeapps.live.com/op/view.aspx?src=<?php echo e(asset('/uploads'), false); ?>/<?php echo e($upload->files()->first()->name, false); ?>" class="btn btn-info btn-lg " target="_blank">View</a>
            <?php endif; ?>

            <a href="<?php echo e(route('single.file.download',[$upload->id]), false); ?>"
                class="btn btn-primary btn-lg">Download</a>
            </div>
        </div>
        <?php else: ?>
        <div class="card-footer text-muted">
            <div class="btn-group btn-group-lg float-right" role="group" aria-label="...">
                <a href="/login" class="btn btn-info btn-lg">View</a>
                <a href="/login" class="btn btn-primary btn-lg">Download</a>
            </div>

            <h5 class="float-right mr-3 text-danger">This action requires you to Login first!</h5>
        </div>

        <?php endif; ?>
    </div>

    <div class="container p-3 sidebar-dark">
        <div class="chat-module-bottom ">
          <?php if(Auth::check()): ?>
          <form class="chat-form" method="POST"action="/add_comment/post/<?php echo e($upload->id, false); ?>">
             <?php echo csrf_field(); ?>
             <textarea class="form-control" name="comment" id="comment" placeholder="Type a Comment" rows="2"></textarea>
             <div class="chat-form-buttons">
                <button type="submit" class="btn btn-link">
                    <i class="fas fa-paper-plane p-2"></i>
                </button>
            </div>
        </form>
        <?php endif; ?>
    </div>
    <div style="margin-top:5px">
      <div class="chat-module-top">
          <div class="chat-module-body bg-light p-2">
            <div class="header">
              <h3>Comments:</h3>
                <?php if(Auth::guest()): ?>
                    <span class="text-danger">This action requires you to Login first!</span>
                <?php endif; ?>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\studybox\resources\views/users/files/single_file.blade.php ENDPATH**/ ?>