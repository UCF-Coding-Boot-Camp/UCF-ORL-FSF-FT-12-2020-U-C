<?php $__env->startSection('extra-style'); ?>
.meal-name {
	display: inline;
}

.meal-time {
	margin-left: 2px;
}

.meal-calories {
	position: relative;
	top: 50%;
	transform: translateY(-50%);
}

.meal-data {
	margin: 0 0.1em 0 0.1em;
}
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
	<div class="meal-info">
		<h2 class="meal-name"><?php echo e($meal->name); ?>&nbsp;</h2>

		<span class="meal-time">
			<?php echo e($meal->created_at->format('l, F jS, Y')); ?>

		</span>

		<br>

		<span class="meal-data label label-pill label-primary">
			<?php echo e($meal->calories()); ?> kCal
		</span>

		<span class="meal-data label label-pill label-default">
			<?php echo e($meal->protein()); ?>g Protein
		</span>

		<span class="meal-data label label-pill label-default">
			<?php echo e($meal->carbohydrates()); ?>g Carbohydrates
		</span>

		<span class="meal-data label label-pill label-default">
			<?php echo e($meal->fat()); ?>g Fat
		</span>
	</div>

	<hr>

	<h3>Foods</h3>
	<?php if(!$meal->foods->isEmpty()): ?>
		<ul class="list-group">
			<?php foreach($meal->foods as $food): ?>
				<li class="list-group-item">
					<?php echo e($food->name); ?>

					
					<span class="food-pcf pull-right">
						<?php echo e($food->protein); ?>:<?php echo e($food->carbohydrates); ?>:<?php echo e($food->fat); ?>

					</span>
					
				</li>
			<?php endforeach; ?>
		</ul>
	<?php else: ?>
		<p>No Foods associated with this meal. Add some below.</p>
	<?php endif; ?>

	<hr>

	<form action="/meals/<?php echo e($meal->id); ?>/foods" method="post">

		<?php echo e(csrf_field()); ?>


		<div class="form-group row">
			<label for="name" class="col-sm-2 form-control-label">Food Name</label>
			<div class="col-sm-10">
				<input class="form-control" 
						type="text" 
						name="name" 
						placeholder="Food Name"
						required
						>
			</div>
		</div>

		<div class="form-group row">
			<label for="protein" class="col-sm-2 form-control-label">Protein</label>
			<div class="col-sm-10">
				<input class="form-control" 
						type="number" 
						name="protein" 
						placeholder="Protein/g"
						required
						>
			</div>
		</div>

		<div class="form-group row">
			<label for="carbohydrates" class="col-sm-2 form-control-label">Carbohydrates</label>
			<div class="col-sm-10">
				<input class="form-control" 
						type="number" 
						name="carbohydrates" 
						placeholder="Carbohydrates/g"
						required
						>
			</div>
		</div>

		<div class="form-group row">
			<label for="fat" class="col-sm-2 form-control-label">Fat</label>
			<div class="col-sm-10">
				<input class="form-control" 
						type="number" 
						name="fat" 
						placeholder="Fat/g"
						required
						>
			</div>
		</div>

		<div class="form-group row">
			<div class="col-sm-offset-2 col-sm-10">
				<button class="btn btn-primary" value="submit" type="submit">Submit</button>
			</div>
		</div>

	</form>

</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>