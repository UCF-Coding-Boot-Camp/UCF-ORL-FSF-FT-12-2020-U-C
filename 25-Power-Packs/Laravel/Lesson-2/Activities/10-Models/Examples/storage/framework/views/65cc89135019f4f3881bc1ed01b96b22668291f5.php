<?php $__env->startSection('title'); ?>
Create a User
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <h1>Let's Make Some Users.</h1>

    <hr>

  <form action="/users" method="post">
    <fieldset class="form-group">
      <label for="name" >Name</label>
      <input name="name" class="form-control" placeholder="Name" required>
    </fieldset>

    <fieldset class="form-group">
      <label for="email" >Email</label>
      <input name="email" class="form-control" placeholder="Email" required>
    </fieldset>

    <fieldset class="form-group">
      <label for="password" >Password</label>
      <input type="password" 
             name="password" 
             class="form-control" 
             placeholder="Password" 
             required>
    </fieldset>

    <button class="btn btn-primary">Submit</button>

    <?php echo e(csrf_field()); ?>

  </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>