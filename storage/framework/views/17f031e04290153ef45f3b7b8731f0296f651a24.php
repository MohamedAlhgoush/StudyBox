<?php $__env->startSection('landing'); ?>

    <!--================Tour section Start =================-->
<section class="section-margin">
    <div class="container">
        <h1 class="display-4 text-center">SELECT A UNIVERSITY</h1>
        <div class="row justify-content-center">
            <?php if(count($universities)>0): ?>
                <?php $__currentLoopData = $universities; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $university): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-3">
                        <a href="/university/<?php echo e($university->id, false); ?>">
                        <div class="tour-card">
                            <img class="card-img rounded-0" src="<?php echo e(asset('img/logo/' .$university->short_name. '.png'), false); ?>" alt="<?php echo e($university->name, false); ?>">
                            <div class="tour-card-overlay">
                                <div class="media">
                                    <div class="media-body">
                                        <h1 class="text-center text-primary"><?php echo e($university->short_name, false); ?></h1>
                                    </div>

                                </div>
                            </div>
                        </div>
                            <h6 class="text-center"><?php echo e($university->name, false); ?></h6>
                        </a>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    </div>
</section>
<!--================Tour section End =================-->

<!--================Service Area Start =================-->
<section class="section-margin">
    <div class="container">
        <div class="section-intro text-center pb-90px">
            <img class="section-intro-img" src="<?php echo e(asset('img/home/section-icon.png'), false); ?>" alt="">
            <h1>Explore Our Database</h1>
            <p class="blockquote">Search by Universities, Majors, Courses or Documents. </p>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="service-card text-center border-div">
                    <div class="pt-4">
                        <img class="img-fluid" src="<?php echo e(asset('img/home/boyreading.png'), false); ?>" alt="">
                    </div>
                    <div class="service-card-body">
                        <h2>BY UNIVERSITY...</h2>
                        <p class="blockquote">Choose Desired University and explore their Faculties</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="service-card text-center border-div">
                    <div class="pt-4">
                        <img class="img-fluid" src="<?php echo e(asset('img/home/kidsjumping.png'), false); ?>" alt="">
                    </div>
                    <div class="service-card-body">
                        <h2>BY COURSE...</h2>
                        <p class="blockquote">Select a courses, and choose desired files to download </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                <div class="service-card text-center border-div">
                    <div class="pt-4">
                        <img class="img-fluid" src="<?php echo e(asset('img/home/kidsstanding.png'), false); ?>" alt="">
                    </div>
                    <div class="service-card-body">
                        <h2>BY MAJOR...</h2>
                        <p class="blockquote">Find a Specific course through its major and faculty</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Service Area End =================-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app_landing', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Desktop\studybox\resources\views/welcome.blade.php ENDPATH**/ ?>