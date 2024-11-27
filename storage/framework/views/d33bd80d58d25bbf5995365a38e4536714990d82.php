<?php $__env->startSection('title'); ?>
    Partner Update Meal
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
<br>
<br><br><br><br>

<!-- Start breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(route('partner#index')); ?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo e(route('partner#index')); ?>">Partner Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Update Menu</li>
        </ol>
    </nav>

<!-- END breadcrumb -->

<!-- Start content -->
<div class="container"style="background-image: url(../img/background.jpg); ">
    <div class="row">

        <div class="col col-sm-6" id="createm">
            <form action="<?php echo e(route('partner#updateMeal', $editMeal->id)); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-foating py-3">
                    <h3 class="text-center"> Update Menu</h3>
                </div>
                <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="name" name="meal_name" value="<?php echo e(old('meal_name', $editMeal->meal_name)); ?>">
                <label for="name">Meal Name</label>
                </div>

                <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="name" name="meal_type" value="<?php echo e(old('meal_type', $editMeal->meal_type)); ?>">
                <label for="name">Meal Type</label>
                </div>

                <div class="form-floating mb-3 text-center">
                    <?php if($editMeal->meal_image): ?>
                        <img src="<?php echo e(asset('uploads/meal/'. $editMeal->meal_image)); ?>" class="img-thumbnail" width="150px" height="150px" alt="category image ">
                        <br>
                    <?php endif; ?>
                </div>

                <div class="form-floating mb-3">
                    <input type="file" class="form-control" id="floatingInput" placeholder="name" name="meal_image" value="<?php echo e($editMeal->meal_image); ?>">
                    <label for="formFile">Meal Image</label>
                </div>

                <div class="form-floating mb-3">
                    <select name="partner" class="form-control">
                        <option value="">Choose Organization Name</option>
                        <?php $__currentLoopData = $partnerData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $partner): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($partner->id); ?>"><?php echo e($partner->partner_organization); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>


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

                <button type="submit" class="btn btn-outline-primary" style="float: right;">Update
                </button>

            </form>

      </div>
    </div>
  </div>

<!-- End content-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Users.Partner.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\mealsbootstrap\resources\views/Users/Partner/updateMeal.blade.php ENDPATH**/ ?>