<?php $__env->startSection('title'); ?>
Member Dashboard
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>

<br><br>
<br><br>
<br><br>
<br><br>
<!-- Start breadcrumb -->
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo e(route('member#index')); ?>">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Member Dashboard</li>
    </ol>
</nav>

<!-- Start content -->
<div class="container" style="background-color: rgba(0, 0, 0, 0.542)">
  <div class="card mt-4 mb-4">
     <h1 style="color: aliceblue"> Thank You for placing Order </h1>
     <h2 style="color: aliceblue">Your Order will be placed soon</h2>
     <h2 style="color: aliceblue">Track Your Order</h2>
     <br>
     <section id="google-map">
        <div id="map-canvas" class="wow animated fadeInUp"></div>
    </section>

  
</div>

<!-- End content -->


<?php $__env->stopSection(); ?>

              
<?php echo $__env->make('Users.Member.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\module11\DEA\mealsbootstrap\mealsbootstrap\resources\views/Users/Member/ThankYou.blade.php ENDPATH**/ ?>