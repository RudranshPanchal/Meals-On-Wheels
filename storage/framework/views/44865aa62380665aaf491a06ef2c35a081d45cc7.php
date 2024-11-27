<?php $__env->startSection('title'); ?>
    Volunteer Dashboard
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
<style type="text/css">
    #volunteer{
            max-width: 600px;
            padding: 20px;
            margin: 50px auto;
            background-color: #fff;
            border: 1px solid rgba(0,0,0,0.1);
    }
</style>
<br>
<br>
<br>
<br>
<br>

<!-- Start breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="<?php echo e(route('volunteer#index')); ?>">Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo e(route('volunteer#index')); ?>">Volunteer Dashboard</a></li>
        <li class="breadcrumb-item active" aria-current="page">Volunteer Details Page</li>
        </ol>
    </nav>

<!-- END breadcrumb -->

<!-- Start content -->
<div class="container">
 
  <div class="card  mb-4" style="background-color: rgba(0, 0, 0, 0.347)">
      <div class="card-body">
      <div class="table-responsive">
          <div class="mb-4">
              
             
              

              
              

              
              <?php if(Session::has('OrderDeleted')): ?>
                  <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
                      <?php echo e(Session::get('orderDeleted')); ?>

                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
              <?php endif; ?>
              
          </div>
          <table class="table table-bordered" >

              <thead>
                  <tr>
                    <th  style="color: aliceblue">No.</th>
                    <th  style="color: aliceblue">User Id</th>
                    <th  style="color: aliceblue">Partner Id</th>
                    <th  style="color: aliceblue">Member Id</th>
                    <th  style="color: aliceblue">Meal Id</th>
                    <th  style="color: aliceblue">Delivery Address</th>
                    <th  style="color: aliceblue">Action</th>
                  </tr>
              </thead>

              <tbody>
                  <?php $__currentLoopData = $memberOrder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <tr>
                          <td  style="color: aliceblue"><?php echo e($item->id); ?></td>
                          <td  style="color: aliceblue"><?php echo e($item->user_id); ?></td>
                          <td  style="color: aliceblue"><?php echo e($item->partner_id); ?></td>
                          <td  style="color: aliceblue"><?php echo e($item->member_id); ?></td>
                          <td  style="color: aliceblue"><?php echo e($item->meal_id); ?></td>
                          <td  style="color: aliceblue"><?php echo e($item->delivery_address); ?></td>
                          <td>If Order is Placed then click placed button to confirm
                          <a href="<?php echo e(route('volunteer#deleteOrder', $item->id)); ?>">
                          <button type="button" class="btn btn-outline-danger" id="delete">
                              Placed</button>
                          </a>
                          </td>
                          
                      </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
          </table>
          <section id="google-map">
            <div id="map-canvas" class="wow animated fadeInUp"></div>
          </section>
        
          
      </div>
      </div>
  </div>
</div>
<!-- End content -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('Users.Volunteer.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\wamp64\www\mealsbootstrap\resources\views/Users/Volunteer/volunteerDetails.blade.php ENDPATH**/ ?>