<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale()), false); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="StudyBox">
    <meta name="author" content="Mohammed Seblini, Khalil Zayour, Mohammed Alghoush">
    <meta name="copyright" content="studybox.live">
    <link rel="icon" type="image/png"  href="<?php echo e(asset('img/logowhite.png'), false); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>StudyBox</title>

    <link href="<?php echo e(asset('css/app.css'), false); ?>" rel="stylesheet">
    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js'), false); ?>" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css'), false); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('vendors/bootstrap/bootstrap.min.css'), false); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vendors/fontawesome/css/all.min.css'), false); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vendors/themify-icons/themify-icons.css'), false); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vendors/linericon/style.css'), false); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vendors/owl-carousel/owl.theme.default.min.css'), false); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vendors/owl-carousel/owl.carousel.min.css'), false); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vendors/flat-icon/font/flaticon.css'), false); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('vendors/nice-select/nice-select.css'), false); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/landing/style.css'), false); ?>">


</head>
<body>
<div class="dashboard-main-wrapper">

<?php echo $__env->make('inc_landing.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<!-- ============================================================== -->
    <!-- wrapper  -->
    <!-- ============================================================== -->
    <div class="dashboard-wrapper">
        <div class="container-fluid dashboard-content p-5">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                    <div class="row">
                        <div class="col-md-12 col-xs-12 m-0 p-0">
                            <?php echo $__env->yieldContent('landing'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php echo $__env->make('inc_landing.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?php echo e(asset('js/studyBox.js'), false); ?>"></script>



</body>
</html>
<?php /**PATH C:\xampp\htdocs\studybox\resources\views/layouts/app_landing.blade.php ENDPATH**/ ?>