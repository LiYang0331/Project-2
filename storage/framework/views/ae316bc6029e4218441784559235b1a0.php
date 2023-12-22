<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GB Fitness</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    
</head>

<body>
    <?php if(Session::has('success')): ?>
    <div class="alert alert-success" role="alert">
        <?php echo e(Session::get('success')); ?>

    </div>
    <?php endif; ?>

    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="/home">GB Fitness</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('generate-qrcode', ['userId' => auth()->user()->id])); ?>">QR Code</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/classinfo">Class Infomation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('personal.trainer')); ?>">Personal Trainer</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('user.timetable')); ?>">TimeTable</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="https://th.bing.com/th/id/OIP.asWMWjQ450NvTpFNgLVfUAHaJl?pid=ImgDet&rs=1">Inbodytest Record</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('userprofile')); ?>">Profile</a>
                </li>
            </ul>
            <div class="ml-auto">
        <?php if(auth()->guard()->check()): ?>
            <a class="btn custom-btn btn-logout" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> Log out
            </a>
            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                <?php echo csrf_field(); ?>
            </form>
        <?php else: ?>
            <a class="btn custom-btn btn-signin" href="<?php echo e(route('login')); ?>">
                <i class="fas fa-user"></i> Sign in
            </a>
            <?php endif; ?>
        </button>
    </div>
        </div>
    </nav>

    <div class="container-fluid">
        <?php echo $__env->yieldContent('content'); ?>
    </div>

    <footer class="container-fluid fixed-bottom">
        <p class="text-center">&copy; 2023 Gym Goer. All rights reserved.</p>
    </footer>

    <!-- Optional: Include jQuery and Bootstrap JS scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        var bootstrapButton = $.fn.button.noConflict();
        $.fn.bootstrapBtn = bootstrapButton;
    </script>
</body>
</html><?php /**PATH C:\xampp\htdocs\GymGoerStaff\resources\views/userhome.blade.php ENDPATH**/ ?>