

<?php $__env->startSection('content'); ?>
    <style>
        body {
            background: url(B.jpg);
            background-size: 100%;
        }

        h1 {
            color: white;
        }

        .middle-space {
            margin-left: 10px;
            /* Adjust the value as needed */
            margin-right: 10px;
            /* Adjust the value as needed */
            margin-bottom: 10px;
        }
    </style>

    <br>
    <div class="ABC">
        <div class="row" style="width:100%;">
            <div class="col-md-3"></div>
            <div class="col-md-4"
                style="background-color:white; padding:10px 50px; border-radius:30px;
                font-family:Georgia; width:800px;">
                <h1 style=" color:black;">
                    <center>Personal Trainer Identity Information
                    </center>
                </h1>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <br>

        <div class="row justify-content-center" style="width:100%;">
            <div class="col-md-1"></div>

            <?php $__currentLoopData = $personaltrainer; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $personaltrainerMember): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-5 middle-space" style="background: linear-gradient(to right, grey 5%, black 20%);">
                    <br>
                    <div class="card bg-dark text-light shadow">
                        <div class="card-body">
                            <h4 class="card-title"><?php echo e($personaltrainerMember->name); ?></h4>
                            <p class="card-text">Email: <?php echo e($personaltrainerMember->email); ?></p>
                            <p class="card-text">Certification: <?php echo e($personaltrainerMember->certification); ?></p>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-2">
                                    <a href="<?php echo e(route('editpersonaltrainer', $personaltrainerMember->id)); ?>"
                                        class="btn btn-warning float-right">Edit</a>
                                </div>
                                <div class="col-md-2">
                                    <form action="<?php echo e(route('deletepersonaltrainer', $personaltrainerMember->id)); ?>"
                                        method="POST">
                                        <?php echo csrf_field(); ?>
                                        <?php echo method_field('DELETE'); ?>
                                        <button type="submit" class="btn btn-danger float-right ml-2">Delete</button>
                                    </form>
                                </div>
                            </div>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>

    </div>

    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-5"></div>
            <div class="col-md-2">
                <a href="<?php echo e(route('addpersonaltrainerform')); ?>" class="btn btn-primary btn-block">Add Personal
                    Trainer</a>
            </div>
        </div>
    </div>
    <br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GymGoerStaff\GymGoerStaff\resources\views/personaltrainer.blade.php ENDPATH**/ ?>