<?php $__env->startSection('title'); ?>
Editing <?php echo e($user->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <h1>Editing <?php echo e($user->name); ?></h1>

  <hr>

  <form action="/users/<?php echo e($user->id); ?>" method="post">

    <?php echo e(csrf_field()); ?>

    <?php echo e(method_field('PATCH')); ?>


    <fieldset class="form-group">
      <label for="name" >Name</label>
      <input type="text"
             name="name"
             class="form-control"
             placeholder="Name">
    </fieldset> 

    <fieldset class="form-group">
      <label for="email" >Email</label>
      <input type="email"
             name="email"
             class="form-control"
             placeholder="Email">
    </fieldset> 

    <button type="submit" class="btn btn-primary">Edit</button>
  </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>