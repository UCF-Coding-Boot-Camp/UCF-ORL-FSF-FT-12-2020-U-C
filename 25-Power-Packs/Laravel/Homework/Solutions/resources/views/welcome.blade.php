@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="card">
          <div class="card-body">
            <div class="card-title">
              Welcome, Stranger!
            </div>
              <a href="/login">Login</a> or <a href="/register">register</a> to get started.
          </div>
        </div>
      </div>
  </div>
</div>
@endsection
