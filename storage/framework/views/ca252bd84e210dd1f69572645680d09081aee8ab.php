<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale()), false); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="StudyBox">
    <meta name="author" content="Mohammed Seblini, Khalil Zayour, Mohammed Alghoush">
    <meta name="copyright" content="studybox.live">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png"  href="<?php echo e(asset('img/logowhite.png'), false); ?>">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token(), false); ?>">

    <title>StudyBox</title>

    <link href="<?php echo e(asset('css/app.css'), false); ?>" rel="stylesheet">
    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js'), false); ?>" defer></script>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css'), false); ?>" rel="stylesheet">

    <link href="<?php echo e(asset('assets/vendor/fonts/circular-std/style.css'), false); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('assets/libs/css/style.css'), false); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('assets/vendor/fonts/fontawesome/css/fontawesome-all.css'), false); ?>">


</head>
<body>
    <div class="dashboard-main-wrapper">

        <?php echo $__env->make('inc.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo $__env->make('inc.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content p-5">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="row">
                            <div class="col-md-10 col-xs-12 m-0 p-0">
                                <?php echo $__env->make('inc.messages', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                 
                                <?php echo $__env->make('inc.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                            <div class="col-md-1 col-xs-2 m-0 ml-1">
                                 <?php echo $__env->make('inc.addsbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo e(asset('assets/vendor/charts/sparkline/jquery.sparkline.js'), false); ?>"></script>
    <script src="<?php echo e(asset('assets/vendor/charts/sparkline/spark-js.js'), false); ?>"></script>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="<?php echo e(asset('js/studyBox.js'), false); ?>"></script>

</body>
</html>
<?php /**PATH C:\Users\ASUS\Desktop\studybox\resources\views/layouts/app.blade.php ENDPATH**/ ?>