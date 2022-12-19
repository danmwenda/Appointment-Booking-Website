
<?php $__env->startSection('content'); ?>
<div class="card" style = "margin-top: 20px; background: #DBE9E0;">
  <div class="card-header" style="text-align: center; text-decoration: none; text-transform: uppercase; color: #AC6025; font-size: 40px;">Client Details</div>
  <div class="card-body" style="font-size: 25px; margin-left: 20px;">
        <h5 class="card-title" style="font-size: 25px;">Name : <?php echo e($clients->name); ?></h5>
        <p class="card-text">Email Address : <?php echo e($clients->email); ?></p>
        <p class="card-text">Phone Number : <?php echo e($clients->phone); ?></p>
        <p class="card-text">Date: <?php echo e($clients->date); ?></p>
  </div>
  <a href="/client" style="font-size: 25px; margin-left: 20px;">Go Back</a>
      
    </hr>
  
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('clients.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel\htcs\resources\views/clients/show.blade.php ENDPATH**/ ?>