
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
        /* Adjust the value as needed */
        margin-right: 10px;
        /* Adjust the value as needed */
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
                    <center>Edit Class Details
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
                        <form action="<?php echo e(route('updateclass', $classDetail->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('PUT'); ?>

                            <div class="form-group" align="left">
                            <br>
                                <label for="class_name">Class Name:</label>
                                <input type="text" id="class_name" class="form-control" name="class_name"
                                    value="<?php echo e($classDetail->class_name); ?>" required>
                            </div>

                            <div class="form-group" align="left">
                                <label for="class_code">Class Code:</label>
                                <input type="text" id="class_code" class="form-control" name="class_code"
                                    value="<?php echo e($classDetail->class_code); ?>" required>
                            </div>

                            <div class="form-group" align="left">
                                <label for="class_description">Class Description:</label>
                                <textarea id="class_description" class="form-control" name="class_description" required><?php echo e($classDetail->class_description); ?></textarea>
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GymGoerStaff\GymGoerStaff\resources\views/editclassform.blade.php ENDPATH**/ ?>