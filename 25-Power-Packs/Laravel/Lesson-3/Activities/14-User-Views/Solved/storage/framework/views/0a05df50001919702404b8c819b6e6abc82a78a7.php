<?php $__env->startSection('title'); ?>
All Users
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <h1>All Users</h1>
    <hr>
  <ul class="list-group">
    <?php foreach($users as $user): ?>
    <li class="list-group-item">
      <a href="/users/<?php echo e($user->id); ?>">
        <?php echo e($user->name); ?>

      </a>
    </li>
    <?php endforeach; ?>
  </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>