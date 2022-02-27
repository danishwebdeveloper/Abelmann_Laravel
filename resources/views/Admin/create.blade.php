@extends('layouts.app')

@section('content')



 <form method="POST" action="{{ route('applicants.store') }}" enctype="multipart/form-data">
    @csrf
    <fieldset>
      <div class="form-group">
        <label for="exampleSelect1" class="form-label mt-4">Salution</label>
        <select class="form-select {{ $errors->has('saluation') }}" name="saluation" id="saluation">
          <option value="Mr">Mr</option>
          <option value="Mrs">Mrs</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1" class="form-label mt-4">Firstname</label>
        <input type="text" class="form-control {{ $errors->has('firstname') ? ' is-invalid': '' }}" id="firstname" name="firstname" aria-describedby="emailHelp" placeholder="firstname">
        @if($errors->has('firstname'))
            <span class="invalid-feedback">
                <strong>{{ $errors->first('firstname') }}</strong>
            </span>
        @endif
    </div>

      <div class="form-group">
        <label for="exampleInputEmail1" class="form-label mt-4">Lastname</label>
        <input type="text" class="form-control {{ $errors->has('lastname') }}" id="Lastname" name="lastname" aria-describedby="emailHelp" placeholder="firstname">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1" class="form-label mt-4">Email address</label>
        <input type="email" class="form-control {{ $errors->has('email') }}" name="email" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1" class="form-label mt-4">Cellphone</label>
        <input type="text" class="form-control {{ $errors->has('cellphone') }}" id="cellphone" name="cellphone" aria-describedby="emailHelp" placeholder="firstname">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1" class="form-label mt-4">Documents</label>
        <input type="file" multiple class="form-control {{ $errors->has('document') }}" name="documents[]">
      </div>

      {{-- <fieldset class="form-group">
        <legend class="mt-4">Checkboxes</legend>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="record" value="firstCheck" >
          <label class="form-check-label" for="flexCheckDefault">
            Default checkbox
          </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="record" value="secondCheck" >
            <label class="form-check-label" for="flexCheckDefault">
              Default checkbox
            </label>
          </div>
      </fieldset> --}}

      <button type="submit" class="btn btn-primary">Submit</button>
    </fieldset>
  </form>

  @endsection
