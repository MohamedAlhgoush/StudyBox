<?php $__env->startSection('landing'); ?>

    <!--================Hero Banner SM Area Start =================-->
    <section class="hero-banner-sm magic-ball magic-ball-banner" >
        <div class="container">
            <div class="hero-banner-sm-content float-right">
                <h1 style="color: #165896;">OUR VISION</h1>
                <p class="blockquote">To help Students access previous documents easily, through our user friendly design in the most
                    convenient way possible </p>
            </div>
            <div class="hero-banner-sm-content float-left">
                <h1 style="color: #165896;">ABOUT US</h1>
                <p class="blockquote">A team of dedicated youngsters trying to provide solutions to problems once faced in the past,through
                    software, to fellow students who might find themselves facing the problems too</p>
            </div>
        </div>
    </section>
    <!--================Hero Banner SM Area End =================-->
    <!--================Service Area Start =================-->
    <section class="section-margin" id="team">
        <div class="container">
            <div class="section-intro text-center">
                <img class="section-intro-img text-center" style="width:250px; height:250px" src="<?php echo e(asset('img/team.jpg'), false); ?>" alt="">
                <h1>OUR TEAM</h1>
                <h6>WHO WE ARE, WHAT WE DO</h6>
            </div>

            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="service-card text-center border-div">
                        <div class="pt-4">
                            <img class="img-fluid" src="<?php echo e(asset('img/home/service3.png'), false); ?>" alt="">
                        </div>
                        <div class="service-card-body">
                            <h3>MOHAMMED SEBLINI</h3>
                            <p>Software Developer</p>
                            <p>mhdseblini2@gmail.com</p>
                            <p>+961 76 170 926</p>
                        </div>
                        <div class="bg-dark col-lg-12 col-sm-12 footer-social text-center text-lg-right">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="service-card text-center border-div">
                        <div class="pt-4">
                            <img class="img-fluid" src="<?php echo e(asset('img/home/service3.png'), false); ?>" alt="">
                        </div>
                        <div class="service-card-body">
                            <h3>KHALIL ZAYOUR</h3>
                            <p>Software Developer</p>
                            <p>khalil.zayour@gmail.com</p>
                            <p>+961 76 031 257</p>
                        </div>
                        <div class="bg-dark col-lg-12 col-sm-12 footer-social text-center text-lg-right">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
                    <div class="service-card text-center border-div">
                        <div class="pt-4">
                            <img class="img-fluid" src="<?php echo e(asset('img/home/service3.png'), false); ?>" alt="">
                        </div>
                        <div class="service-card-body">
                            <h3>MOHAMED ALGHOUSH</h3>
                            <p>Software Developer</p>
                            <p>mohamed_alghoush@hotmail.com</p>
                            <p>+961 76 856 831</p>
                        </div>
                        <div class="bg-dark col-lg-12 col-sm-12 footer-social text-center text-lg-right">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Service Area End =================-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app_landing', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\studybox\resources\views/vision.blade.php ENDPATH**/ ?>