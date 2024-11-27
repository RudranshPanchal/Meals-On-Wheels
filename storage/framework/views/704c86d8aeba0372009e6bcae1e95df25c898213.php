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

<!-- END breadcrumb -->

<div class="container" style="background-color: rgba(0, 0, 0, 0.362)">
<div class="card mt-4 mb-4">
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered table-striped" >

        <thead>
          <tr>
            <th  style="color: aliceblue">partner_id</th>
            <th  style="color: aliceblue">user_id</th>
            <th  style="color: aliceblue">meal_name</th>
            <th  style="color: aliceblue">meal_type</th>
            <th  style="color: aliceblue">meal_image</th>
            <th  style="color: aliceblue">Action</th>
          </tr>
        </thead>

        <tbody>
            <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td  style="color: rgb(0, 0, 0)"><?php echo e($item->partner_id); ?></td>
                    <td  style="color: rgb(0, 0, 0)"><?php echo e($item->user_id); ?></td>
                    <td  style="color: rgb(0, 0, 0)"><?php echo e($item->meal_name); ?></td>
                    <td  style="color: rgb(0, 0, 0)"><?php echo e($item->meal_type); ?></td>
                    <td  style="color: rgb(0, 0, 0)">  <img src="<?php echo e(asset('uploads/meal/' . $item->meal_image)); ?>" class="img-thumbnail" width="150px" height="150px"  alt="Images"></td>
                    <td  style="color: rgb(0, 0, 0)">
                        <a href="<?php echo e(route('member#memberDetails', $item->id)); ?>">
                            <button type="button" class="btn btn-outline-primary" >Details</button>
                        </a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
      </table>
    </div>
  </div>
</div>
</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('Users.Member.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\mealsbootstrap\resources\views/Users/Member/memberIndex.blade.php ENDPATH**/ ?>