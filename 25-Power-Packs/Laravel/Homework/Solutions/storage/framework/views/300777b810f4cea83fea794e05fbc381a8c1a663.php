<?php $__env->startSection('content'); ?>
<h2>Add Another Meal</h2>

<hr>

<form action="/users/<?php echo e($user->id); ?>/meals" method="POST">
	
	<?php echo e(csrf_field()); ?>


	<div class="form-group row">
		<label for="name" class="col-sm-1 form-control-label">Name</label>
		<div class="col-sm-10">
			<input name="name" 
					type="text" 
					class="form-control" 
					placeholder="Meal Name"
					required
					>
		</div>
		<div class="col-sm-1">
			<button type="submit" value="submit" class="btn btn-primary">
				Submit
			</button>
		</div>
	</div>

</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>