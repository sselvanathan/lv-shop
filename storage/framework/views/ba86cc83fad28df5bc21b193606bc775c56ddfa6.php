<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title> Shoppex</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('assets/favicon.ico')); ?>"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="<?php echo e(asset('css/styles.css')); ?>" rel="stylesheet"/>
</head>
<body>
<!-- Navigation-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(route('home')); ?>">Your Shop</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php echo e(route('home')); ?>">
                        Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('about')); ?>">About</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('services')); ?>">Services</a></li>
                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('contact')); ?>">Contact</a></li>

                <?php if(auth()->guard()->guest()): ?>
                <li class="nav-item"><a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a></li>
                <?php endif; ?>

                <?php if(auth()->guard()->check()): ?>
                    <li class="nav-item"><a class="nav-link" href="<?php echo e(route('categories.index')); ?>">Categories</a></li>
                    <li class="nav-item"><a class="nav-link" href="#" onclick="document.getElementById('logout-form').submit()">Log out</a></li>
                    <form action="<?php echo e(route('logout')); ?>" method="POST" id="logout-form"></form><?php echo csrf_field(); ?>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
<!-- Page Content-->
<div class="container">
    <div class="row">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
</div>
<!-- Footer-->
<footer class="py-5 bg-dark">
    <div class="container"><p class="m-0 text-center text-white">Copyright &copy;  Shoppex 2021</p></div>
</footer>
<!-- Bootstrap core JS-->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="<?php echo e(asset('js/scripts.js')); ?>"></script>
</body>
</html>
<?php /**PATH /home/vagrant/code/resources/views/app.blade.php ENDPATH**/ ?>