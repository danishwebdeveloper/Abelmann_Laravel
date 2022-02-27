@extends('layouts.app')
@section('title', 'Applicant Page')

@section('content')

@can('see-button', $applicants)
<input type="button" id="applicantBtn" name="applicantBtn" value="Applicant"/>
@endcan

{{-- @if(Auth::user()->user_role == "role")
    // Show Button <button>...</button>
@endif --}}

<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">Saluation</th>
        <th scope="col">First Name</th>
        <th scope="col">Last Name</th>
        <th scope="col">Email Address</th>
        <th scope="col">Mobile</th>
        <th scope="col">Location</th>
        <th scope="col">Documents</th>
      </tr>
    </thead>
    @foreach ($applicants as $applicant)
    <tbody>
      <tr class="table-active">
        <th scope="row">{{ $applicant->saluation }}</th>
        <td>{{ $applicant->firstname }}</td>
        <td>{{ $applicant->lastname }}</td>
        <td>{{ $applicant->email }}</td>
        <td>{{ $applicant->mobile }}</td>
        <td>{{ $applicant->location->name }}</td>
        <td>{{ $applicant->documents }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection
