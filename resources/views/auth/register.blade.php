@extends('layouts.app')

@section('content')
<h1>Register Page</h1>

 <form method="POST" action="{{ route('register') }}">
    @csrf
    <fieldset>
      <legend>Legend</legend>
      <div class="form-group">
        <label for="exampleInputEmail1" class="form-label mt-4">Name</label>
        <input type="text" class="form-control {{ $errors->has('name') }}" value="{{ old('name') }}" id="firstname"
        name="firstname" aria-describedby="emailHelp" placeholder="firstname">
        @if($errors->has('firstname'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
        <input type="email" class="form-control {{ $errors->has('email') }}" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        @if($errors->has('email'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1" class="form-label mt-4">Password</label>
        <input type="password" name="password" class="form-control {{ $errors->has('password') }}" id="exampleInputPassword1" placeholder="Password">
        @if($errors->has('password'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif
    </div>

      <div class="form-group">
        <label for="exampleInputPassword1" class="form-label mt-4">Retype Password</label>
        <input type="password" name="password_confirmation" class="form-control" placeholder="Retype Password"/>
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </fieldset>
  </form>

  @endsection
