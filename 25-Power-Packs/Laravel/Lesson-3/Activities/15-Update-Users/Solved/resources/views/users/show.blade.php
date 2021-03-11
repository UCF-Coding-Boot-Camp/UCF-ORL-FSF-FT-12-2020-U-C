@extends('layout')

@section('title')
Details for {{ $user->name }}
@stop

@section('content')
  <h1>
    Details for {{ $user->name }} 
    <span class="label label-primary pull-right">
      <a href="/users/{{ $user->id }}/edit">
        Edit
      </a>
    </span>
  </h1>

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
