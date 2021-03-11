@extends('layout')

@section('title')
Create a User
@stop

@section('content')
  <h1>Let's Make Some Users.</h1>

    <hr>

  <form action="/users" method="post">
    <fieldset class="form-group">
      <label for="name" >Name</label>
      <input name="name" class="form-control" placeholder="Name" required>
    </fieldset>

    <fieldset class="form-group">
      <label for="email" >Email</label>
      <input name="email" class="form-control" placeholder="Email" required>
    </fieldset>

    <fieldset class="form-group">
      <label for="password" >Password</label>
      <input type="password" 
             name="password" 
             class="form-control" 
             placeholder="Password" 
             required>
    </fieldset>

    <button class="btn btn-primary">Submit</button>

    {{ csrf_field() }}
  </form>

@stop
