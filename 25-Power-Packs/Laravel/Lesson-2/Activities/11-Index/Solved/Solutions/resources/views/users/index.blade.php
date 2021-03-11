@extends('layout')

@section('title')
All User
@stop

@section('content')
@unless (is_empty($users))
  <ul class="list-group">
    @foreach ($users as user)
      <li class="list-group-item">{{ $user->name }}</li>
    @endforeach
  </ul>
@endif

@stop
