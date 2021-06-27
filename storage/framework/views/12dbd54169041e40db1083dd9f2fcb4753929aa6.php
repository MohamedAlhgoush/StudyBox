<!--================ Header Menu Area start =================-->
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg" style="background-image: linear-gradient(to bottom, #1f3766, #1f3e70, #1d457b, #1a4c85, #145490)">
            <div class="container box_1620">

                <a class="navbar-brand text-white" href="/"><img src="<?php echo e(asset('img/logowhite.png'), false); ?>" />
                    STUDYBOX</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav justify-content-right ml-5 pl-5">
                        <li class="nav-item"><a class="nav-link" href="/"><i
                                        class="fas fa-home fa-lg"></i>&nbsp;HOME</a></li>
                        <li class="nav-item"><a class="nav-link" href="/vision"><i class="fas fa-eye fa-lg"></i>&nbsp;OUR
                                VISION</a></li>
                        <li class="nav-item"><a class="nav-link" href="/contact"><i
                                        class="fas fa-file-signature fa-lg"></i>&nbsp;CONTACT</a></li>

                        <?php if(!Auth::check()): ?>
                            <li class="nav-item submenu dropdown float-right">
                                <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true"
                                   aria-expanded="false"><i class="fas fa-user-circle fa-lg"></i>&nbsp;PROFILE</a>
                                <ul class="dropdown-menu">

                                    <li class="nav-item"><a class="nav-link" href="/login"><i
                                                    class="fas fa-sign-in-alt fa-lg"></i>&nbsp;LOGIN</a></li>
                                    <li class="nav-item"><a class="nav-link" href="/register"><i
                                                    class="fas fa-user-plus fa-lg"></i>&nbsp;REGISTER</a></li>

                                </ul>
                            </li>

                        <?php endif; ?>

                    </ul>

                    <?php if(Auth::check()): ?>
                        <?php if(Auth::user()->role == 3): ?>
                            <a class="btn btn-primary ml-5" href="/addUniversity"><i class="fa fa-plus" aria-hidden="true">
                                </i>  Add University</a>
                        <?php endif; ?>
                            <a class="btn btn-danger ml-4" href="<?php echo e(route('logout'), false); ?>"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fas fa-power-off mr-2"></i>  Logout</a>
                            <form id="logout-form" action="<?php echo e(route('logout'), false); ?>" method="POST" style="display: none;">
                                <?php echo e(csrf_field(), false); ?>

                            </form>

                    <?php endif; ?>


                </div>
            </div>
        </nav>
    </div>
</header>
<!--================Header Menu Area =================-->


<?php /**PATH C:\xampp\htdocs\studybox\resources\views/inc_landing/navbar.blade.php ENDPATH**/ ?>