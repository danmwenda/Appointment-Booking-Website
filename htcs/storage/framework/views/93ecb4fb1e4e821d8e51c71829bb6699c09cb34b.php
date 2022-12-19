
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('flash_message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="card" style = "height: 50vw; width:70vw; padding: 10px; margin-top: 20px;">
                    <div class="card-header">
                        <h2  style="text-align: center; text-decoration: none; text-transform: uppercase; color: #AC6025; font-size: 40px;">Appointments</h2>
                    </div>
                    <div class="card-body">
                        <a href="<?php echo e(url('/client/create')); ?>" class="btn btn-success btn-sm" title="Add New Appointment">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <a href="/show" style="text-decoration: none; text-transform: uppercase; color: #04AA6D; font-weight: bold; font-size: 20px; margin-left: 700px;">Logout</a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Email Address</th>
                                        <th>Phone Number</th>
                                        <th>Date</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $__currentLoopData = $clients; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($item->name); ?></td>
                                        <td><?php echo e($item->email); ?></td>
                                        <td><?php echo e($item->phone); ?></td>
                                        <td><?php echo e($item->date); ?></td>
                                        <td>
                                            <a href="<?php echo e(url('/client/' . $item->id)); ?>" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="<?php echo e(url('/client/' . $item->id . '/edit')); ?>" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="<?php echo e(url('client/' .$item->id)); ?>" accept-charset="UTF-8" style="display:inline">
                                            <?php echo e(method_field('DELETE')); ?>

                                                <?php echo e(csrf_field()); ?>

                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('clients.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\Laravel\htcs\resources\views/clients/index.blade.php ENDPATH**/ ?>