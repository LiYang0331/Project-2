

<?php $__env->startSection('content'); ?>
    <style>
        body {
            background-color: grey;
        }

        .profile-container {
            width: 80%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #e1e1e1;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        .profile-title {
            font-size: 1.5em;
            margin-bottom: 20px;
            color: #333;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }

        .profile-detail {
            font-size: 1.2em;
            margin: 5px 0;
            color: #555;
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
                <h1 style=" color:black;">Edit Profile</h1>
            </div>
        </div>
    </div>
    <br>

    <div class="profile-container">
        <div class="profile-title">Edit Profile</div>
        <form id="userForm" method="post" action="<?php echo e(route('updateprofile', ['id' => $user->id])); ?>">
            <?php echo csrf_field(); ?>
            <?php echo method_field('put'); ?>

            <label for="name" style="color:black;">Name:</label>
            <input type="text" name="name" style="color:black;" value="<?php echo e($user->name); ?>" required>
            <br>
            <label for="email" style="color:black;">Email:</label>
            <input type="email" name="email" style="color:black;" value="<?php echo e($user->email); ?>" required>
            <br>
            <label for="birth_date" style="color:black;">Birth Date:</label>
            <input type="date" name="birth_date" style="color: black;"
                value="<?php echo e(optional($user->birth_date)->format('Y-m-d')); ?>" required>

            <!-- Add other fields as needed -->
            <br>
            <br>

            <button type="submit" style="color:black;">Update User</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GymGoerStaff\GymGoerStaff\resources\views/editprofile.blade.php ENDPATH**/ ?>