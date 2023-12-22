
<style>
    body {
        background: url('<?php echo e(asset('B.jpg')); ?>');
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
<?php $__env->startSection('content'); ?>
    <br>
    <div class="ABC">
        <div class="row" style="width:100%;">
            <div class="col-md-3"></div>
            <div class="col-md-4"
                style="background-color:white; padding:10px 50px; border-radius:30px;
                font-family:Georgia; width:800px;">
                <h1 style=" color:black;">
                    <center>Add Personal Trainer
                    </center>
                </h1>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-3"></div>
            <div class="col-md-6" style="background-color:grey;">
                <div class="card">
                    <div class="card-body">
                        <form action="<?php echo e(route('storepersonaltrainer')); ?>" method="POST">
                            <?php echo csrf_field(); ?>

                            <div class="form-group row">
                                <br>
                                <label for="name" class="col-sm-3 col-form-label text-right">Name:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="email" class="col-sm-3 col-form-label text-right">Email:</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="certification" class="col-sm-3 col-form-label text-right">Certification:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="certification" name="certification" required>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-3"></div>
                                <div class="col-sm-9 offset-sm-3">
                                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <?php if(session('success')): ?>
            <div class="alert alert-success mt-3">
                <?php echo e(session('success')); ?>

            </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GymGoerStaff\GymGoerStaff\resources\views/addpersonaltrainerform.blade.php ENDPATH**/ ?>