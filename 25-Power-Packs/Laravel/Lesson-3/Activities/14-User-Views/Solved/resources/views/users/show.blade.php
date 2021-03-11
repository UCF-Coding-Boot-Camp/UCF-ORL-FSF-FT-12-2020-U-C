@extends('layout')

@section('title')
Details for {{ $user->name }}
@stop

@section('content')
  <h1>Details for {{ $user->name }}</h1>

    <hr>

  <ul class="list-group">
    <li class="list-group-item">
      <b>Name</b>: {{ $user->name }}
    </li>

    <li class="list-group-item">
      <b>Email</b>: {{ $user->email }}
    </li>

  </ul>
@stop
