@extends('layout')

@section('title')
Details for {{ $user->name }}
@stop

@section('content')
  <h1>
    Details for {{ $user->name }} 
      <a href="/users/{{ $user->id }}/edit" class="pull-right">
        Edit
      </a>
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

  <hr>

  @if ($user->snippets->isEmpty())
    <h3>{{ $user->name }} has no snippets.</h3>
  @else
    <ul class="form-group">
      @foreach ($user->snippets as $snippet)
      <li class="list-group-item">
        <span><b>{{ $snippet->title }}</b></span>
        <pre>{{ $snippet->text }}</pre>
          <form action="/users/{{ $user->id}}/snippets/{{ $snippet->id }}" 
                method="post">
            {{ csrf_field() }}

            <!-- For mockup; not yet functional. 
                 If you're interested in getting this to work, 
                 look into Laravel's Events. -->
            {{ method_field('DELETE') }}

            <button 
              type="submit"
              class="btn btn-danger" 
              formmethod="post" 
              >
              Delete
            </button>
          </form>
      </li>
      @endforeach
    </ul>
  @endif

  <hr>

  <form action="/users/{{ $user->id }}/snippets/" method="post">

    {{ csrf_field() }}
    
    <fieldset class="field-group">
      <label for="title">Title</label>
      <input type="text"class="form-control" name="title" rows="5">
    <fieldset>

    <fieldset class="field-group">
      <label for="text">Text</label>
      <textarea class="form-control" name="text" rows="5"></textarea>
    <fieldset>

    <button type="submit" class="btn btn-primary">Submit</button>

  </form>
@stop
