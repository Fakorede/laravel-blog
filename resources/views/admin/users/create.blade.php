@extends('layouts.app')

@section('content')

  @if(count($errors) > 0)

    <ul class="list-group">
    
      @foreach($errors->all() as $error)

        <li class="list-group-item text-danger">
          {{ $error }}
        </li>

      @endforeach
    
    </ul>

  @endif

  <div class="panel panel-default">
    <div class="panel-heading">
      Create a new user
    </div>

    <div class="panel-body">
      <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">

        {{ csrf_field() }}

        <div class="form-group">
          <label for="name">User</label>
          <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group">
          <label for="title">Email</label>
          <input type="email" name="email" class="form-control">
        </div>


        <div class="form-group">
          <div class="text-center">
            <button type="submit" class="btn btn-success">
              Add User
            </button>
          </div>
        </div>

      </form>
    </div>

  </div>

@stop
