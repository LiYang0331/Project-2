

<?php $__env->startSection('content'); ?>
<!DOCTYPE html>
<html lang="en">

<style>
    /* Body remains untouched, so no style rule for body. */
    
    .card {
        background-color: black;
    }

    .card-title, .card-text {
        color: yellow;
    }

    /* Ensuring that your main title is also yellow */
    h1.main-title {
        color: yellow;
    }
</style>
<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Welcome to the GB Fitness</h1>

     <!-- First Row: Column 1 & 2 -->
<div class="row mb-4">
    <!-- Personal Trainer Column -->
    <div class="col-md-6 mb-3">
        <a href="/personaltrainer" class="text-decoration-none text-dark">
            <div class="card h-100">
                <div class="row no-gutters">
                    <!-- Image on the left -->
                    <div class="col-md-4">
                        <img src="path/to/your/image/personal_trainer.jpg" class="card-img" alt="Personal Trainer Image">
                    </div>
                    <!-- Text on the right -->
                    <div class="col-md-8">
                        <div class="card-body">
                            <h4 class="card-title">Personal Trainer</h4>
                            <p class="card-text">A personal trainer provides guidance, expertise, motivation, and personalized plans, ensuring safe and effective workouts tailored to your goals.</p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- Class Column -->
    <div class="col-md-6 mb-3">
        <a href="/classes/create" class="text-decoration-none text-dark">
            <div class="card h-100">
                <div class="row no-gutters">
                    <!-- Image on the left -->
                    <div class="col-md-4">
                        <img src="path/to/your/image/class.jpg" class="card-img" alt="Class Image">
                    </div>
                    <!-- Text on the right -->
                    <div class="col-md-8">
                        <div class="card-body">
                            <h4 class="card-title">Class</h4>
                            <p class="card-text">Joining a gym class offers structured workouts, motivation from group dynamics, and instruction from trained professionals, enhancing your exercise experience and results.</p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>

<!-- Second Row: Column 3 & 4 -->
<div class="row">
    <!-- Time Table Column -->
    <div class="col-md-6 mb-3">
        <a href="/timetable" class="text-decoration-none text-dark">
            <div class="card h-100">
                <div class="row no-gutters">
                    <!-- Image on the left -->
                    <div class="col-md-4">
                        <img src="path/to/your/image/timetable.jpg" class="card-img" alt="Timetable Image">
                    </div>
                    <!-- Text on the right -->
                    <div class="col-md-8">
                        <div class="card-body">
                            <h4 class="card-title">Time Table</h4>
                            <p class="card-text">A gym timetable helps you plan your workouts around available classes and peak hours, ensuring a consistent routine and efficient use of your time.</p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>

    <!-- Account Column -->
    <div class="col-md-6">
        <a href="/account" class="text-decoration-none text-dark">
            <div class="card h-100">
                <div class="row no-gutters">
                    <!-- Image on the left -->
                    <div class="col-md-4">
                        <img src="path/to/your/image/account.jpg" class="card-img" alt="Account Image">
                    </div>
                    <!-- Text on the right -->
                    <div class="col-md-8">
                        <div class="card-body">
                            <h4 class="card-title">Account</h4>
                            <p class="card-text">View your personal data.</p>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>




    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\GymGoerStaff\resources\views/home.blade.php ENDPATH**/ ?>