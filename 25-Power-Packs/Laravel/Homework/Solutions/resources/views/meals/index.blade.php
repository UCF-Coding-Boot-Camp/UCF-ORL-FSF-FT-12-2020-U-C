@extends('layouts.app')

@section('content')
@if (!$meals->isEmpty())
	<h4>All Meals</h4>

	<hr>

	<ul class="list-group">
	@foreach ($meals as $meal)
			<li class="list-group-item">
				<a href="/meals/{{ $meal->id }}">{{ $meal->name }}</a>	
				<span class="pull-right">
					{{ $meal->created_at->format('g:ia \o\n l, F jS') }}
				</span>
			</li>
	@endforeach
	</ul>
@else
	<p>Looks like you've never eaten anything. <a href="/meals/create">You should probably change that</a></p>.
@endif
@stop