<?php $__env->startSection('title'); ?>
    Member Create Order
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
        <li class="breadcrumb-item"><a href="<?php echo e(route('member#index')); ?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo e(route('member#index')); ?>">Member Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Create menu</li>
        </ol>
    </nav>

<!-- END breadcrumb -->

<!-- Start content -->
<div class="container">
    <div class="row">
      <div class="col col-sm-6" id="createm">
          <form action="<?php echo e(route('member#createOrder')); ?>" method="POST" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
            <div class="form-foating py-3">
                <h3 class="text-center" ><b> Create Order </b></h3>
            </div>
            <div class="form-floating mb-3">
                <label for="name">Delivery Address</label>
              <input type="text" class="form-control" id="floatingInput" placeholder="name" name="delivery_address">
             

                
                <?php if($errors->has('delivery_address')): ?>
                    <p class="text-danger">
                        <?php echo e($errors->first('delivery_address')); ?>

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
            <div class="form-floating mb-3">
                <select name="member" class="form-control">
                    <option value="">Member Name</option>
                    <?php $__currentLoopData = $memberData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $members): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($members->id); ?>"><?php echo e($members->member_name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            <br>
            <div class="form-floating mb-3">
                <select name="meal" class="form-control">
                    <option value="">Meal name</option>
                    <?php $__currentLoopData = $mealData; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $meals): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($meals->id); ?>"><?php echo e($meals->partner_organization); ?></option>
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

<?php echo $__env->make('Users.Partner.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\mealsbootstrap\resources\views/Users/Member/addOrder.blade.php ENDPATH**/ ?>