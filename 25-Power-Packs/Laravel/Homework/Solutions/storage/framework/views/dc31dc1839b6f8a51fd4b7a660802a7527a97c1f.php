<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="card">
            <?php if(!is_null($user)): ?>
                <div class="card-title">Welcome, <?php echo e($user->name); ?>!</div>

                <div class="card-body">
                    <?php if(!$meals->isEmpty()): ?>

                        <p>Here's what you've eaten today.</p>

                        <br>

                        <ul class="list-group">
                        <?php foreach($meals as $meal): ?>
                            <li class="list-group-item">
                                <a href="/meals/<?php echo e($meal->id); ?>"><?php echo e($meal->name); ?></a>
                                <span class="pull-right">
                                    <?php echo e($meal->created_at->format('g:i A')); ?>

                                </span>
                            </li>
                        <?php endforeach; ?>
                        </ul>

                        <br>

                        <p>Why not <a href="/meals/create">keep track of your next meal</a>, too?</p>
                    <?php else: ?>
                        <p>Looks like you haven't eaten anything today. <a href="/meals/create">You should change that.</a>
                    <?php endif; ?>
                </div>
            <?php else: ?>
                <div class="card-body">
                  <div class="card-title">
                    Welcome, Stranger!
                  </div>
                  <a href="/login">Login</a> or <a href="/register">register</a> to get started!
                </div>
            <?php endif; ?>


            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
