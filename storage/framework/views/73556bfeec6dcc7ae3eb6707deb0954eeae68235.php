<?php $__env->startSection('title'); ?>
    Partner Create Meal
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
<style type="text/css">
    #createm{
        max-width: 500px;
        padding: 50px;
        height: auto;
        width: 100%;
        margin: 50px auto;
        background-color: rgba(136, 135, 135, 0.337);
        border: 1px solid rgba(0,0,0,0.1);
    }
</style>
<br><br><br><br><br><b><b></b></b>
<!-- Start breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(route('partner#index')); ?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo e(route('partner#index')); ?>">Partner Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Create menu</li>
        </ol>
    </nav>

<!-- END breadcrumb -->

<!-- Start content -->
<div class="container">
    <div class="row">
      <div class="col col-sm-6" id="createm">
          <form action="<?php echo e(route('partner#createMeal')); ?>" method="POST" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
            <div class="form-foating py-3">
                <h3 class="text-center" ><b> Create Menu </b></h3>
            </div>
            <div class="form-floating mb-3">
                <label for="name">Meal Name</label>
              <input type="text" class="form-control" id="floatingInput" placeholder="name" name="meal_name">
             

                
                <?php if($errors->has('meal_name')): ?>
                    <p class="text-danger">
                        <?php echo e($errors->first('meal_name')); ?>

                    </p>
                <?php endif; ?>
                

            </div>

            <div class="form-floating mb-3">
                <label for="name">Meal Type</label>
              <input type="text" class="form-control" id="floatingInput" placeholder="name" name="meal_type">
          

              
                <?php if($errors->has('meal_type')): ?>
                    <p class="text-danger">
                        <?php echo e($errors->first('meal_type')); ?>

                    </p>
                <?php endif; ?>
                

            </div>

            <div class="form-floating mb-3">
                <label for="formFile">Meal Image</label>
              <input type="file" class="form-control" id="floatingInput" placeholder="name" name="meal_image">
      

                
                <?php if($errors->has('meal_image')): ?>
                    <p class="text-danger">
                        <?php echo e($errors->first('meal_image')); ?>

                    </p>
                <?php endif; ?>
                
            </div>
<br>



            <div class="form-floating mb-3">
                <select name="partner" class="form-control">
                    <option value="">Choose Organization Name</option>
                    <?php $__currentLoopData = $partnerData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($partner->id); ?>"><?php echo e($partner->partner_organization); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <br>

            <div class="form-floating mb-3">
                <select name="user" class="form-control">
                    <option value="">Choose Address</option>
                    <?php $__currentLoopData = $userData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($user->id); ?>">
                            <?php if($user->role == 'partner'): ?>
                                <?php echo e($user->address); ?>

                            <?php endif; ?>
                        </option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <br>

            <button type="submit" class="btn btn-blue" style="float: right;">Create
            </button>
            <button type="reset" class="btn btn-red" style="float: right;margin-right: 20px;">Clear</button>

        </form>

      </div>
    </div>
  </div>

<!-- End content-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Users.Partner.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\module11\DEA\mealsbootstrap\mealsbootstrap\resources\views/Users/Partner/addMeal.blade.php ENDPATH**/ ?>