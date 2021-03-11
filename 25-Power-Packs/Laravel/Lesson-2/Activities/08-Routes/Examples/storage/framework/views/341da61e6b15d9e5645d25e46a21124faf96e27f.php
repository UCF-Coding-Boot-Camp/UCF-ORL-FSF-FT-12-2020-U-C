<?php $__env->startSection('title'); ?>
Laravel
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="title">
    <div class="title"><?php echo e($site_title); ?></div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>