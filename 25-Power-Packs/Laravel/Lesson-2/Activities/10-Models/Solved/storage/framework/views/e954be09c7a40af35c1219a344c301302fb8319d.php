<?php $__env->startSection('title'); ?>
About Me
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <h1>A Little About Me</h1>

    <hr>

  <div>
    <h3>Our names are:</h3>
    <ul class="list-group">
      <?php foreach($full_names as $full_name): ?>
        <li class="list-group-item"><?php echo e($full_name); ?></li>
      <?php endforeach; ?>
    </ul>

    <hr>


    <h3>Our emails are:</h3>
    <ul class="list-group">
      <?php foreach($emails as $email): ?>
        <li class="list-group-item">
          <a href="mailto:<?php echo e($email); ?>"><?php echo e($email); ?></a>
        </li>
      <?php endforeach; ?>
    </ul>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>