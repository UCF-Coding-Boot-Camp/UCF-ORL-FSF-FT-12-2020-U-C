<?php $__env->startSection('content'); ?>
<?php if(!$meals->isEmpty()): ?>
	<h4>All Meals</h4>

	<hr>

	<ul class="list-group">
	<?php foreach($meals as $meal): ?>
			<li class="list-group-item">
				<a href="/meals/<?php echo e($meal->id); ?>"><?php echo e($meal->name); ?></a>	
				<span class="pull-right">
					<?php echo e($meal->created_at->format('g:ia \o\n l, F jS')); ?>

				</span>
			</li>
	<?php endforeach; ?>
	</ul>
<?php else: ?>
	<p>Looks like you've never eaten anything. <a href="/meals/create">You should probably change that</a></p>.
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>