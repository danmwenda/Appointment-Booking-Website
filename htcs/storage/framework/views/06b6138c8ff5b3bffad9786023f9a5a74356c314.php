
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('flash_message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="card" style = "height: 50vw; width:70vw; padding: 10px; margin-top: 20px; background: #DBE9E0;">
  <div class="card-header" style="text-align: center; text-decoration: none; text-transform: uppercase; color: #AC6025; font-size: 40px;">Add APPOINTMENT</div>
  <div class="card-body" style="font-size: 25px; margin-left: 20px;">
      
      <form action="<?php echo e(url('client')); ?>" method="post">
        <?php echo csrf_field(); ?>

        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Email Address</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
        <label>Phone Number</label></br>
        <input type="number" name="phone" id="phone" class="form-control"></br>
        <label>Date</label></br>
        <input type="date" name="date" id="date" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
        <a href="/client" style="font-size: 20px; margin-left: 0px;">Go Back</a>
    </form>
  
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('clients.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel\htcs\resources\views/clients/create.blade.php ENDPATH**/ ?>