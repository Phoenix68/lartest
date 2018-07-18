<?php $__env->startSection('content'); ?>

    <h1><?php echo e($title); ?></h1>
    <p>Hi, This is a service page.</p>
    <ul class="list-group">
        <?php if(count($services)>0): ?>
            <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="list-group-item"><?php echo e($sa); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>

    </ul>
    <p><?php echo e($services[1]); ?></p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>