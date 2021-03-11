@extends('layout')

@section('title')
All Users
@stop

@section('content')
  <h1>All Users</h1>
    <hr>
  <ul class="list-group">
    @foreach ($users as $user)
    <li class="list-group-item">
      <a href="/users/{{ $user->id }}">
        {{ $user->name }}
      </a>
    </li>
    @endforeach
  </ul>
@stop
