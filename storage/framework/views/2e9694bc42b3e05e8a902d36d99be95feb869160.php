<?php $__env->startSection('title'); ?>
    Volunteer Dashboard
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
<br><br><br><br><br><br>
<!-- Start breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(route('volunteer#index')); ?>">Home</a></li>
        <li class="breadcrumb-item active" aria-current="page">Volunteer Dashboard</li>
        </ol>
    </nav>

<!-- END breadcrumb -->

<div class="container">
    <div class="card mt-4 mb-4">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-bordered table-striped" >

            <thead>
              <tr>
                <th>No.</th>
                <th>User Id</th>
                <th>Partner Id</th>
                <th>Member Id</th>
                <th>Meal Id</th>
                <th>Delivery Address</th>
                <th>Action</th>
              </tr>
            </thead>

            <tbody>
                <?php $__currentLoopData = $order; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->id); ?></td>
                        <td><?php echo e($item->user_id); ?></td>
                        <td><?php echo e($item->partner_id); ?></td>
                        <td><?php echo e($item->member_id); ?></td>
                        <td><?php echo e($item->meal_id); ?></td>
                        <td><?php echo e($item->delivery_address); ?></td>
                        <td>
                            <a href="<?php echo e(route('volunteer#volunteerDetails', $item->id)); ?>">
                                <button type="button" class="btn btn-outline-primary" > Track Order</button>
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

<?php echo $__env->make('Users.Volunteer.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\module11\DEA\mealsbootstrap\mealsbootstrap\resources\views/Users/Volunteer/volunteerIndex.blade.php ENDPATH**/ ?>