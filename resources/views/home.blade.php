@extends('layouts.console')
@section('content')
<div class="container">
  <div class="row">
    <div class="col">
      <h2>
        Welcome to your dashboard
      </h2>
    </div>
  </div>
  <h3>
    {{ Auth::user()->name }}
  </h3>
  <a href="/update/create" class="btn btn-success">Create a new update</button>
  <h4>
    {{ Auth::user()->email }}
  </h4>
</div>
@endsection