<?php $__env->startSection('title'); ?>
    Partner Update Meal
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
<style type="text/css">
    #partner{
      max-width: 500px;
        padding: 50px;
        height: auto;
        width: 100%;
        margin: 50px auto;
        background-color: rgba(136, 135, 135, 0.337);
        border: 1px solid rgba(0,0,0,0.1);
    }
</style>
<br><br><br><br><br><br>
<!-- Start breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(route('partner#index')); ?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo e(route('partner#index')); ?>">Partner Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Update Partner</li>
        </ol>
    </nav>

<!-- END breadcrumb -->

<!-- Start content -->

<div class="container">
    <div class="row">

    <div class="col col-sm-6" id="partner">
      <form action="<?php echo e(route('register')); ?>" method="POST">
          <?php echo csrf_field(); ?>
        <div class="form-foating py-3">
            <h3 class="text-center"> Update Partner</h3>
        </div>
        <div class="partner box">
          <div class="row mb-3">
             <label for="partner" class="col-sm-4 col-form-label">Partner Address</label>
               <div class="col-sm-8">
                  <input type="text" class="form-control" name="partner_address">
               </div>
          </div>
          <br>
          <div class="row mb-3">
              <label for="partner" class="col-sm-4 col-form-label">Partner Organization</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="partnership_organization">
                </div>
          </div>
          <br>
          <div class="row mb-3">
            <label for="partner" class="col-sm-4 col-form-label">Partnership timeline</label>
              <div class="col-sm-8">
                <input type="text" class="form-control" name="partnership_timeline" >
              </div>
          </div>
          <br>
        </div>
          <button type="submit" class="btn btn-outline-primary" style="float: right;">Update
          </button>
      </form>
    </div>
</div>
</div>
<!-- End content -->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Users.Partner.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\mealsbootstrap\resources\views/Users/Partner/updatePartner.blade.php ENDPATH**/ ?>