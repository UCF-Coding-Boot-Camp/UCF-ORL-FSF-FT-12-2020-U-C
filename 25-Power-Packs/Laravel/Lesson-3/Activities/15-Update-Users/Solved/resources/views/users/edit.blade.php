@extends('layout')

@section('title')
Editing {{ $user->name }}
@stop

@section('content')
  <h1>Editing {{ $user->name }}</h1>

  <hr>

  <form action="/users/{{ $user->id }}" method="post">

    {{ csrf_field() }}
    {{ method_field('PATCH') }}

    <fieldset class="form-group">
      <label for="name" >Name</label>
      <input type="text"
             name="name"
             class="form-control"
             placeholder="Name">
    </fieldset> 

    <fieldset class="form-group">
      <label for="email" >Email</label>
      <input type="email"
             name="email"
             class="form-control"
             placeholder="Email">
    </fieldset> 

    <button type="submit" class="btn btn-primary">Edit</button>
  </form>
@stop
