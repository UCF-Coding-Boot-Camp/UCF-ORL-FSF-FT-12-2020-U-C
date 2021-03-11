<?php $__env->startSection('title'); ?>
Details for <?php echo e($user->name); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
  <h1>
    Details for <?php echo e($user->name); ?> 
      <a href="/users/<?php echo e($user->id); ?>/edit" class="pull-right">
        Edit
      </a>
  </h1>

    <hr>

  <ul class="list-group">
    <li class="list-group-item">
      <b>Name</b>: <?php echo e($user->name); ?>

    </li>

    <li class="list-group-item">
      <b>Email</b>: <?php echo e($user->email); ?>

    </li>

  </ul>

  <hr>

  <?php if($user->snippets->isEmpty()): ?>
    <h3><?php echo e($user->name); ?> has no snippets.</h3>
  <?php else: ?>
    <ul class="form-group">
      <?php foreach($user->snippets as $snippet): ?>
      <li class="list-group-item">
        <span><b><?php echo e($snippet->title); ?></b></span>
        <pre><?php echo e($snippet->text); ?></pre>
          <form action="/users/<?php echo e($user->id); ?>/snippets/<?php echo e($snippet->id); ?>" 
                method="post">
            <?php echo e(csrf_field()); ?>


            <!-- For mockup; not yet functional. 
                 If you're interested in getting this to work, 
                 look into Laravel's Events. -->
            <?php echo e(method_field('DELETE')); ?>


            <button 
              type="submit"
              class="btn btn-danger" 
              formmethod="post" 
              >
              Delete
            </button>
          </form>
      </li>
      <?php endforeach; ?>
    </ul>
  <?php endif; ?>

  <hr>

  <form action="/users/<?php echo e($user->id); ?>/snippets/" method="post">

    <?php echo e(csrf_field()); ?>

    
    <fieldset class="field-group">
      <label for="title">Title</label>
      <input type="text"class="form-control" name="title" rows="5">
    <fieldset>

    <fieldset class="field-group">
      <label for="text">Text</label>
      <textarea class="form-control" name="text" rows="5"></textarea>
    <fieldset>

    <button type="submit" class="btn btn-primary">Submit</button>

  </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>