
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('flash_message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="card" style = "height: 50vw; width:70vw; padding: 10px; margin-top: 10px; background: #DBE9E0;">
  <div class="card-header" style="text-align: center; text-decoration: none; text-transform: uppercase; color: #AC6025; font-size: 40px;">Edit Client Details</div>
  <div class="card-body" style="font-size: 25px; margin-left: 20px;">
      
      <form action="<?php echo e(url('client/' .$clients->id)); ?>" method="post">
        <?php echo csrf_field(); ?>

        <?php echo method_field("PATCH"); ?>
        <input type="hidden" name="id" id="id" value="<?php echo e($clients->id); ?>" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="<?php echo e($clients->name); ?>" class="form-control"></br>
        <label>Email Address</label></br>
        <input type="text" name="email" id="email" value="<?php echo e($clients->email); ?>" class="form-control"></br>
        <label>Phone Number</label></br>
        <input type="number" name="phone" id="phone" value="<?php echo e($clients->phone); ?>" class="form-control"></br>
        <label>Date</label></br>
        <input type="date" name="date" id="date" value="<?php echo e($clients->phone); ?>" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
        </br>
        <a href="/client" style="font-size: 20px; margin-left: 0px;">Go Back</a>
    </form>
  
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('clients.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel\htcs\resources\views/clients/edit.blade.php ENDPATH**/ ?>