<?php $__env->startSection('title'); ?>
Users Index
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<h1>All Users</h1>
 
  <hr>

<?php if( !$users->isEmpty() ): ?>
  <p>Woo.</p>
  <ul class="list-group">
    <?php foreach($users as $user): ?>
      <li class="list-group-item">
        <?php echo e($user->name); ?>

      </li>
    <?php endforeach; ?>
  </ul>
<?php else: ?>
  <h3>What a bummer . . . Your site doesn't have any users.</h3>
<?php endif; ?>
<ul>
</ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>