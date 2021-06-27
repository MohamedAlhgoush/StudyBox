<?php $__env->startSection('content'); ?>

        <div class="col-12">
             
                  <h1 class="display-6" style="color: #165896;">MY DOWNLOADS</h1>
                  <hr>
            
        </div>

     <div class="row">

     <?php $__currentLoopData = $downloads->sortBy('date'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $download): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12">
                        <!-- .card -->
                        <div class="card card-figure">
                        <?php echo e($download->categories()->first()->name, false); ?>

                        <div class="card-header"><span><i class="fas fa-file-pdf"></i> <?php echo e($download->name, false); ?> </span> </div>
                            <!-- .card-figure -->
                            <figure class="figure">
                                <!-- .figure-img -->
                                <a href="/university/<?php echo e(Request::segment(2), false); ?>/file/<?php echo e($download->id, false); ?>">
                                    <div class="figure-attachment"
                                         style="background-color:<?php echo e($download->categories()->first()->color, false); ?>">
                                <span class="fa-stack fa-lg">
                                           <i class="fa fa-square fa-stack-2x text-primary"></i>
                                           <i class="fa fa-file-word fa-stack-1x fa-inverse"></i>
                                              </span>
                                    </div>
                                </a>
                                <!-- /.figure-img -->
                                <figcaption class="figure-caption">
                                  
                                    <ul class="list-inline d-flex text-muted mb-0">
                                        <li class="list-inline-item text-truncate mr-auto">
                                           <small class="pb-2">Uploaded
                                at: <?php echo e(date('Y-M-d',strtotime($download->created_at)), false); ?></small></li>
                                        <li class="list-inline-item">
                                        <a href="<?php echo e(route('single.file.download',[$download->id]), false); ?>">
                                                            <i class="fa fa-download" aria-hidden="true"></i>
                                                        </a>
                                        </li>
                                    </ul>
                                </figcaption>
                            </figure>
                            <!-- /.card-figure -->
                        </div>
                        <!-- /.card -->
                    </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
           
        
        </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\studybox\resources\views/users/shared/my_downloads.blade.php ENDPATH**/ ?>