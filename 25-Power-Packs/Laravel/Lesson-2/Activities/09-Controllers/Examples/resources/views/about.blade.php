@extends('layout')

@section('title')
About Me
@stop

@section('content')
  <h1>A Little About Me</h1>

    <hr>

  <p>
    My name is {{ $first_name }} {{ $last_name}}, and you can contact me at
    <a href="mailto:{{ $email }}">{{ $email }}</a>.
  </p>
@stop
