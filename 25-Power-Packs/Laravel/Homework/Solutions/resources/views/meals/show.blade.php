@extends('layouts.app')

@section('extra-style')
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
@stop

@section('content')
	<div class="meal-info">
		<h2 class="meal-name">{{ $meal->name }}&nbsp;</h2>

		<span class="meal-time">
			{{ $meal->created_at->format('l, F jS, Y') }}
		</span>

		<br>

		<span class="meal-data label label-pill label-primary">
			{{ $meal->calories() }} kCal
		</span>

		<span class="meal-data label label-pill label-default">
			{{ $meal->protein() }}g Protein
		</span>

		<span class="meal-data label label-pill label-default">
			{{ $meal->carbohydrates() }}g Carbohydrates
		</span>

		<span class="meal-data label label-pill label-default">
			{{ $meal->fat() }}g Fat
		</span>
	</div>

	<hr>

	<h3>Foods</h3>
	@if (!$meal->foods->isEmpty())
		<ul class="list-group">
			@foreach($meal->foods as $food)
				<li class="list-group-item">
					{{ $food->name }}
					
					<span class="food-pcf pull-right">
						{{ $food->protein}}:{{ $food->carbohydrates }}:{{ $food->fat }}
					</span>
					
				</li>
			@endforeach
		</ul>
	@else
		<p>No Foods associated with this meal. Add some below.</p>
	@endif

	<hr>

	<form action="/meals/{{ $meal->id }}/foods" method="post">

		{{ csrf_field() }}

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

@stop
