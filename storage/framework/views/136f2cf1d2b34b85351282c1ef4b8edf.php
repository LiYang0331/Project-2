

<?php $__env->startSection('content'); ?>
    <style>
        body {
            background: url('<?php echo e(asset('C.jpg')); ?>');
            background-size: 100%;
        }

        h1 {
            color: black;
        }

        .middle-space {
            margin-left: 10px;
            /* Adjust the value as needed /
            margin-right: 10px;
            / Adjust the value as needed */
            margin-bottom: 10px;
        }
    </style>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4;"
                style="background-color:white; padding:10px 50px; border-radius:30px;
                font-family:Georgia;">
                <h1>Class Information</h1>
            </div>

        </div>
    </div>
    <br>
    <br>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-1"></div>
            <?php $__currentLoopData = $class; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ClassName): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-5 middle-space" style="background: linear-gradient(to right, grey 5%, black 20%);">
                    <br>
                    <div class="card bg-dark text-light shadow">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo e($ClassName->class_name); ?></h4>
                            <p class="card-text">Class Code: <?php echo e($ClassName->class_code); ?></p>
                            <p class="card-text">Class Category: <?php echo e($ClassName->class_description); ?></p>
                            
                        </div>
                    </div><br>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<br>
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout2', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GymGoerStaff\GymGoerStaff\resources\views//class2.blade.php ENDPATH**/ ?>