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
      Edit your Profile
    </div>

    <div class="panel-body">
      <form action="{{ route('user.profile.update') }}" method="post" enctype="multipart/form-data">

        {{ csrf_field() }}

        <div class="form-group">
          <label for="name">Username</label>
        <input type="text" name="name" value="{{ $user->name }}" class="form-control">
        </div>

        <div class="form-group">
          <label for="title">Email</label>
          <input type="email" name="email" value="{{ $user->email }}" class="form-control">
        </div>

        <div class="form-group">
          <label for="password">New Password</label>
          <input type="password" name="password" class="form-control">
        </div>

        <div class="form-group">
          <label for="avatar">Upload New Avatar</label>
          <input type="file" name="avatar" class="form-control">
        </div>

        <div class="form-group">
          <label for="facebook">Facebook profile</label>
          <input type="text" name="facebook" value="{{ $user->profile->facebook }}" class="form-control">
        </div>

        <div class="form-group">
          <label for="twitter">Twitter profile</label>
          <input type="text" name="twitter" value="{{ $user->profile->twitter }}" class="form-control">
        </div>

        <div class="form-group">
          <label for="linkedin">LinkedIn profile</label>
          <input type="text" name="linkedin" value="{{ $user->profile->linkedin }}" class="form-control">
        </div>

        <div class="form-group">
          <label for="github">GitHub profile</label>
          <input type="text" name="github" value="{{ $user->profile->github }}" class="form-control">
        </div>

        <div class="form-group">
          <label for="medium">Medium profile</label>
          <input type="text" name="medium" value="{{ $user->profile->medium }}" class="form-control">
        </div>

        <div class="form-group">
          <label for="about">About</label>
          <textarea name="about" id="about" cols="6" rows="6" class="form-control"> {{ $user->profile->about }} </textarea>
        </div>
        
        
        <div class="form-group">
          <div class="text-center">
            <button type="submit" class="btn btn-success">
              Update Profile
            </button>
          </div>
        </div>

      </form>
    </div>

  </div>

@stop
