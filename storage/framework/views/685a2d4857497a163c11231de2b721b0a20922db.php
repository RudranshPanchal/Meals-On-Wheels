<!DOCTYPE html>
<html>
<head>
    <title>Payment gateway using Paytm</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container" width="500px">
    <div class="panel panel-primary" style="margin-top:110px;">
        <div class="panel-heading"><h3 class="text-center">Thanks for donating the amount</h3></div>
        <div class="panel-body">
            <form action="<?php echo e(route('make.payment')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>


                <?php if($message = Session::get('message')): ?>
                        <p><?php echo $message; ?></p>
                    <?php Session::forget('success'); ?>
                <?php endif; ?>

                <div class="row">
                    <div class="col-md-12">
                        <strong>Name:</strong>
                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                    </div>
                    <div class="col-md-12">
                        <strong>Mobile No:</strong>
                        <input type="text" name="mobile" class="form-control" maxlength="10" placeholder="Mobile No." required>
                    </div>
                    <div class="col-md-12">
                        <strong>Email:</strong>
                        <input type="email" class="form-control" placeholder="Email" name="email" required>
                    </div>
                    <div class="col-md-12" >
                        <br/>
                        <div class="btn btn-info">
                        <strong>Amount:</strong>
                        <input type="Int" class="form-control" placeholder="Amount" name="Amount" required>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <br/>
                        <button type="submit" class="btn btn-success">Paytm</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html><?php /**PATH C:\xampp\htdocs\mealsbootstrap\resources\views/paytm.blade.php ENDPATH**/ ?>