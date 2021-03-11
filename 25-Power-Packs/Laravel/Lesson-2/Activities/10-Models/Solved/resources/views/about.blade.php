@extends('layout')

@section('title')
About Me
@stop

@section('content')
  <h1>A Little About Me</h1>

    <hr>

  <div>
    <h3>Our names are:</h3>
    <ul class="list-group">
      @foreach ($full_names as $full_name)
        <li class="list-group-item">{{ $full_name }}</li>
      @endforeach
    </ul>

    <hr>


    <h3>Our emails are:</h3>
    <ul class="list-group">
      @foreach ($emails as $email)
        <li class="list-group-item">
          <a href="mailto:{{ $email }}">{{ $email }}</a>
        </li>
      @endforeach
    </ul>
  </div>
@stop
