<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Core Structure</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="colorlib.com">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title>Core Structure</title>
        <link href="<?php echo e(asset('/public/css/app.css')); ?>" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo e(asset('public/fonts/material-design-iconic-font/css/material-design-iconic-font.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('public/css/style.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('public/css/custom_style.css')); ?>">
    </head>
    <body>
     <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Branding Image -->
                    <a class="navbar-brand" href="<?php echo e(url('/')); ?>">
                        Core Structure                        
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li><a href="<?php echo e(route('login')); ?>">Login</a></li>
                            <li><a href="<?php echo e(route('register')); ?>">Register</a></li>
                        <?php else: ?>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li> <a href="<?php echo e(route('myaccount')); ?>">My Account</a></li>
                                    <li>
                                        <a href="<?php echo e(route('logout')); ?>"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                            <?php echo e(csrf_field()); ?>

                                        </form>
                                    </li>
                                </ul>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="wrapper">
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('layouts.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        </div>

        </div>
        <script src="<?php echo e(asset('public/js/app.js')); ?>"></script>
        <script src="<?php echo e(asset('public/js/jquery-3.3.1.min.js')); ?>"></script>
        <script src="<?php echo e(asset('public/js/jquery.steps.js')); ?>"></script>
        <script src="<?php echo e(asset('public/js/main.js')); ?>"></script>

</body>
</html>