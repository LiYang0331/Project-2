

<?php $__env->startSection('content'); ?>
<style>
    .profile-container {
        width: 80%;
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #e1e1e1;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
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

<div class="profile-container">
    <div class="profile-title">User Profile</div>
    <?php if($user): ?>
        <div class="profile-detail">Name: <strong><?php echo e($user->name); ?></strong></div>
        <div class="profile-detail">Email: <strong><?php echo e($user->email); ?></strong></div>
        <div class="profile-detail">Age: <strong><?php echo e(now()->diffInYears($user->birthdate)); ?></strong></div>
        <div class="profile-detail">Body Type: <strong><?php echo e($user->body_type); ?></strong></div>
        <!-- Add other fields... -->

        <a href="<?php echo e(route('profile.edit')); ?>">Edit Profile</a>
        
    <?php else: ?>
        <p>User not found.</p>
    <?php endif; ?>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GymGoerStaff\resources\views/userprofile.blade.php ENDPATH**/ ?>